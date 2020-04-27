<?php
  require_once("fruit.php");

  class Peach extends Fruit {

    function Peach()
    {
      $this->name = "桃";
      $this->max_price = 300;
      $this->min_price = 200;
      $this->price = mt_rand($this->min_price, $this->max_price);
    }
  }
?>