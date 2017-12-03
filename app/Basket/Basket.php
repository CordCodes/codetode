<?php
  namespace Cart\Basket;

  use Cart\Models\Product;
  use Cart\Support\Storage\Contracts\StorageInterface;
  use Cart\Basket\Exceptions\QuantityExceededException;

  class Basket{
    protected $storage;
    protected $products;

    public function __construct(StorageInterface $storage,Product $product){
      $this->storage = $storage;
      $this->product = $product;
    }
    public function add(Product $product,$quantity){
      if($this->has($product)){
        $quantity = $this->get($product)['quantity']+$quantity;
      }

      $this->update($product,$quantity);
    }
    public function update(Product $product,$quantity){
      if (!$this->product->find($product->id)->hasStock($quantity)){
        throw new QuantityExceededException;
      }

      if ($quantity===0){
        $this->remove($product);
        return;
      }
      $this->storage->set($product->id,[
        'product_id' => (Int) $product->id,
        'quantity' => (Int) $quantity
      ]);
    }
    public function remove(Product $product){
      $this->storage->remove($product->id);
    }
    public function has(Product $product){
      return $this->storage->exists($product->id);
    }
    public function get(Product $product){
      return $this->storage->get($product->id);
    }
    public function clear(){
      $this->storage->clear();
    }
    public function all(){
  		$ids = [];
  		$items = [];
  		foreach ($this->storage->all() as $product) {
  			$ids[] = $product['product_id'];
  		}
  		$products = $this->product->find($ids);
  		foreach ($products as $product) {
  			$product->quantity = $this->get($product)['quantity'];
  			$items[] = $product;
  		}
  		return $items;
  	}
    public function productCount(){
      return count($this->storage);
    }
    public function subTotal(){
      $total = 0;

      foreach ($this->all() as $item) {
        if ($item->outOfStock()){
          continue;
        }
        $total = $total + $item->price * $item->quantity;
      }
      return $total;
    }
    public function refresh(){
      foreach($this->all() as $item){
        if ($item->quantity>$item->stock){
          $this->update($item,$item->stock);
        } elseif ($item->hasStock(1)&&$item->quantity===0) {
          $this->update($item,1);
        }
      }
    }
  }

?>
