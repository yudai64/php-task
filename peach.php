<?php
  require_once("fruit.php");

  class Peach extends Fruit {

    function Peach()
    {
      $this->name = "桃";
      $this->price = mt_rand(200, 300);
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