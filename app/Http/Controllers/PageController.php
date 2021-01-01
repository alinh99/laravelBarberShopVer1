<?php

namespace App\Http\Controllers;

use App\AdminProduct;
use App\Icon;
use App\product;
use App\Cart;
use Illuminate\Http\Request;
use App\Slide;
use Session;
class PageController extends Controller
{
    //
    public function getIndex(){
        $slides =   Slide::where('id','<',6)->get();
        $slide_second = Slide::where('id', '>', 5)->get();
        $icons = Icon::all();
        $products = product::where('id','>',0)->paginate(3);
        // dd($products);
        $new_products = AdminProduct::all();
        if (session()->has('cart')) {
            $oldCart = new Cart(session()->get('cart'));
        }else{
            $oldCart = null;
        }
        return view('page.trangchu',compact('slides', 'slide_second', 'icons','products','new_products', 'oldCart'));
    }

    public function getLienHe(){
        return view('page.lienhe');
    }

    public function getIndexAdmin(){
        $new_products = product::all();
        return view('Admin.admin')->with(['products'=>$new_products]);
    }

    public function postAdminDelete($id){
        $products = product::find($id);
        $products->delete();
        return $this->getIndexAdmin();
    }

    public function getAdminAdd(){
        return view('Admin.formAdd');
    }


    public function postAdminAdd(Request $request){
        $product = new product() ;
        if($request->hasFile('image')){
            $file=$request->file('image');
            $fileName=$file->getClientOriginalName('image');
            $file->move('assets/img/',$fileName);
        }
        $file_name = null;
        if($request->file('image')!=null){
            $file_name=$request->file('image')->getClientOriginalName();
        }
        $product->title = $request->title;
        $product->image = $file_name;
        $product->price = $request->price;
        $product->save();
        return $this->getIndexAdmin();
    }


    public function getAdminEdit($id){
        $product = product::find($id);
        return view('Admin.formEdit')->with(['product'=>$product]);
    }

    public function postAdminEdit(Request $request){
        $id = $request->id;
        $product = product::find($id);
        if($request->hasFile('image')){
            $file = $request -> file('image');
            $fileName = $file -> getClientOriginalName('image');
            $file->move('assets/img/',$fileName);
        }
        if($request->file('image')!=null){
            $product->image=$fileName;
        }
        $product->title = $request->title;
        $product->price = $request->price;
        $product->save();
        return $this->getIndexAdmin();
    }

    public function getAddToCart(Request $req, $id){
        $product = product::find($id);
        $oldCart = Session('cart')?session()->get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product,$id);
        $req->session()->put('cart', $cart);
        return redirect()->back();
    }

    // public function getAddToCart(product $product){
    //     if(session()->has('cart')){
    //         $oldCart = new Cart(session()->get('cart'));
    //     }else{
    //         $oldCart = new Cart();
    //     }
    //     $oldCart->add($product);
    //     // dd($oldCart);
    //     session()->put('cart',$oldCart);
    //     return redirect()->route('trang-chu')->with('success','Product was added');
    // }
}
