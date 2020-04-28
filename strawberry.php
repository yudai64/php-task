<?php
  require_once("fruit.php");

  class Strawberry extends Fruit {

    function Strawberry()
    {
      $this->name = "イチゴ";
      $this->price = mt_rand(400, 500);
    }

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