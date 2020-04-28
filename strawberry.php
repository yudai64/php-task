<?php
  require_once("fruit.php");

  class Strawberry extends Fruit {

    function Strawberry()
    {
      $this->name = "イチゴ";
      $this->price = mt_rand(400, 500);
    }
  }
?>