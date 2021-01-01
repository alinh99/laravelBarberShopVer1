<?php

namespace App\Providers;
use App\Cart;
use Illuminate\Support\ServiceProvider;
use Session;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('header',function($view){
            if(Session('cart')){
                 $oldCart = session()->get('cart');
                 $cart = new Cart($oldCart);
                 $view->with(['cart'=>session()->get('cart'),'product_cart'=>$cart->items,'totalPrice'=> $cart->totalPrice,'totalQty'=> $cart->totalQty]);
              }
          });
        }
    }
