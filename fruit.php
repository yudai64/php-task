<?php
  class Fruit {
    protected $name;
    protected $max_price;
    protected $min_price;
    protected $price;

    function returnName()
    {
      return $this->name;
    }
    function returnPrice()
    {
      return $this->price;
    }
  }
?>