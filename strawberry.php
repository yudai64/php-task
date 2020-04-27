<?php
  require_once("fruit.php");

  class Strawberry extends Fruit {

    function Strawberry()
    {
      $this->name = "イチゴ";
      $this->max_price = 500;
      $this->min_price = 400;
      $this->price = mt_rand($this->min_price, $this->max_price);
    }
  }
?>