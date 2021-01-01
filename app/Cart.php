<?php
namespace App;
class Cart
{
	// public $items = null;
	// public $totalQty = 0;
	// public $totalPrice = 0;

	// public function __construct($oldCart){
	// 	if($oldCart){
	// 		$this->items = $oldCart->items;
	// 		$this->totalQty = $oldCart->totalQty;
	// 		$this->totalPrice = $oldCart->totalPrice;
	// 	}
    // }

    public $items = null;
	public $totalQty = 0;
	public $totalPrice = 0;

	public function __construct($oldCart){
		if($oldCart){
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
		}
	}

	//Them phan tu vao gio hang
	public function add($item, $id, $qty=1){
		if($item->promotion_price == 0){
			$giohang = ['qty'=>0, 'priceS' => $item->price, 'item' => $item];
			if($this->items){
				if(array_key_exists($id, $this->items)){
					$giohang = $this->items[$id];
				}
			}
			$giohang['qty'] = $giohang['qty'] + $qty;
			$giohang['priceS'] = $item->price * $giohang['qty'];
			$this->items[$id] = $giohang;
			$this->totalQty = $this->totalQty + $qty;
			$this->totalPrice += $item->price*$giohang['qty'];
		}
		else{
			$giohang = ['qty'=>0, 'priceS' => $item->price, 'item' => $item];
			if($this->items){
				if(array_key_exists($id, $this->items)){
					$giohang = $this->items[$id];
				}
			}
			$giohang['qty'] = $giohang['qty'] + $qty;
			$giohang['priceS'] = $item->price * $giohang['qty'];
			$this->items[$id] = $giohang;
			$this->totalQty = $this->totalQty + $qty;
			$this->totalPrice += $item->price*$giohang['qty'];
		}

    }

    // public function add($product){
	// 	$item = [
	// 		'title' => $product->title,
	// 		'qty' => 0,
	// 		'price' => $product->price,
	// 		'image' => $product->image,
	// 	];

	// 	if(!array_key_exists($product->id, $this->items)){
	// 		$this->items[$product->id] = $item;
	// 		$this->totalQty += 1;
	// 		$this->totalPrice += $product->price;
	// 	}else{
	// 		$this->totalQty += 1;
	// 		$this->totalPrice += $product->price;
	// 	}
	// 	$this->items[$product->id]['qty'] += 1;
	// }

    //xóa 1
	// public function reduceByOne($id){

	// 	$this->items[$id]['qty']--;
	// 	$this->items[$id]['price'] -= $this->items[$id]['item']['price'];
	// 	$this->totalQty--;
	// 	$this->totalPrice -= $this->items[$id]['item']['price'];
	// 	if($this->items[$id]['qty']<=0){
	// 		unset($this->items[$id]);
	// 	}
    // }

	//xóa nhiều
	// public function removeItem($id){
	// 	$this->totalQty -= $this->items[$id]['qty'];
	// 	$this->totalPrice -= $this->items[$id]['price'];
	// 	unset($this->items[$id]);
	// }
}
