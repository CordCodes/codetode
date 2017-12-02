<?php
  namespace Cart\Models;

  use Illuminate\Database\Eloquent\Model;

  class Product extends Model{
    public function hasLowStock(){
      if ($this->outOfStock()){
        return false;
      }

      return (bool)($this->stock<=7);
    }
    public function outOfStock(){
      return $this->stock === 0;
    }
    ###########################
    public function inStock(){
      return (bool)($this->outOfStock()===false);
    }
    public function hasStock($quantity){
      return (bool)($quantity>=1);
    }
  }

?>
