<?php
  abstract class Fruit {
    protected $name;
    protected $price;

    abstract function returnName();
    abstract function returnPrice();
  }
?>