<?php
  // require_once("peach.php");
  // require_once("strawberry.php");
  require_once("market.php");

  $market = new Market;
  $strawberries = $market->arriveStrawberry(15);
  $peaches = $market->arrivePeach(15);
  
  $fruits = array($strawberries, $peaches);
  foreach($fruits as $fruit)
  {
    $market->returnMaxPrice($fruit);
    $market->returnMinPrice($fruit);
    $market->returnAveragePrice($fruit, 15);
  }
?>