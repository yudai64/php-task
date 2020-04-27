<?php
  class Fruit {
    protected $name;
    protected $max_price;
    protected $min_price;
    protected $price;

    function calculateMaxPrice($amount)
    {
      $total = $this->max_price * $amount;
      echo $this->name . "を" . $amount . "個買ったときの最高の値段は" . $total . "円です。</br>";
    }

    function calculateMinPrice($amount)
    {
      $total = $this->min_price * $amount;
      echo $this->name . "を" . $amount . "個買ったときの最安の値段は" . $total . "円です。</br>";
    }

    function calculateAveragePrice($amount)
    {
      $total = ($this->max_price + $this->min_price) / 2 * $amount;
      echo $this->name . "を" . $amount . "個買ったときの平均の値段は" . $total . "円です。</br>";
    }
  }
?>