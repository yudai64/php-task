<?php
  require_once("strawberry.php");
  require_once("peach.php");
  
  class Market {

    function arrivePeach($amount)
    {
      echo "桃を" . $amount . "個入荷しました。</br>";
      $peaches = array();
      for($i = 1; $i <=$amount; $i++)
      {
        $peach = new Peach;
        $price = $peach->returnPrice();
        echo $i . "個目". $price . "円</br>";
        $peaches[] = $peach;
      }
      echo "</br>";
      return $peaches;
    }

    function arriveStrawberry($amount)
    {
      echo "イチゴを" . $amount . "個入荷しました。</br>";
      $strawberries = array();
      for($i = 1; $i <=$amount; $i++)
      {
        $strawberry = new Strawberry;
        $price = $strawberry->returnPrice();
        echo $i . "個目" . $price . "円</br>";
        $strawberries[] = $strawberry;
      }
      echo "</br>";
      return $strawberries;
    }

    function returnMaxPrice($fruits)
    {
      $price = array();
      foreach($fruits as $fruit)
      {
        $price[] = $fruit->returnPrice();
      }
       echo $fruits[0]->returnName(). "の最高値は" . max($price) . "円です。</br>";
    }


    function returnMinPrice($fruits)
    {
      $price = array();
      foreach($fruits as $fruit)
      {
        $price[] = $fruit->returnPrice();
      }
       echo $fruits[0]->returnName(). "の最安値は" . min($price) . "円です。</br>";
    }


    function returnAveragePrice($fruits, $amount)
    {
      $price = 0;
      foreach($fruits as $fruit)
      {
        $price += $fruit->returnPrice();
      }
      $average_price = round($price / $amount);
       echo $fruits[0]->returnName(). "の平均値は" . $average_price . "円です。</br>";
    }
  }
?>