<?php
  // require_once("peach.php");
  // require_once("strawberry.php");
  require_once("market.php");

  $market = new Market;
  $peaches = $market->arrivePeach(15);
  $strawberries = $market->arriveStrawberry(15);
  
  $fruits = array($peaches, $strawberries);
  foreach($fruits as $fruit)
  {
    $market->returnMaxPrice($fruit);
    $market->returnMinPrice($fruit);
    $market->returnAveragePrice($fruit, 15);
  }
?>