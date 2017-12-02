<?php
  namespace Cart\Basket;

  use Cart\Models\Product;
  use Cart\Support\Storage\Contracts\StorageInterface;

  class Basket{
    protected $storage;

    function __construct(StorageInterface $storage,Product $product){
      $this->storage = $storage;
      $this->product = $product;
    }
  }

?>
