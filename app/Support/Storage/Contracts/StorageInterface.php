<?php
  namespace Cart\Support\Storage\Contracts;

  interface StorageInterface{
    public function all();
    public function clear($index);
    public function exists($index);
    public function get($index);
    public function set($index,$value);
    public function unset($index);
  }

?>
