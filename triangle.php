<?php

class Triangle {

  public $side1;
  public $side2;
  public $side3;

  function __construct($side1, $side2, $side3) {

    $this->side1 = $side1;
    $this->side2 = $side2;
    $this->side3 = $side3;
  }
}

$side1 = $_GET["side1"];
$side2 = $_GET["side2"];
$side3 = $_GET["side3"];
$sides = array($side1, $side2, $side3);
// $max_side = max($sides);
// $key_of_max_side = array_search($max_side, $sides);
//
//
// echo "index of the biggest side is $key_of_max_side";

sort($sides, SORT_NUMERIC);

echo "$sides[0], $sides[1], $sides[2]<br>";

function triangle($side1, $side2, $side3) {
  if (($side1 == $side2) && ($side2 == $side3)) {
    return "equilateral";
  }
  elseif (($side1 == $side2) || ($side1 == $side3) || ($side2 == $side3)) {
    return "isosceles";
  }
  else {
    return "scalene";
  }
}

if ($sides[0] + $sides[1] < $sides[2]) {
  echo "Not a valid triangle";
}
else {
  echo "<p>You have a(n) " . triangle($side1, $side2, $side3) . " triangle. </p>";
}

?>
