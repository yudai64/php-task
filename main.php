<?php
  require_once("peach.php");
  require_once("strawberry.php");

  $strawberry = new Strawberry;
  $peach = new Peach;
  $fruits = array($strawberry, $peach);

  foreach($fruits as $fruit)
  {
    $fruit->calculateMaxPrice(15);
    $fruit->calculateMinPrice(15);
    $fruit->calculateAveragePrice(15);
  }
?>