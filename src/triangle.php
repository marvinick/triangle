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



  //echo "$sides[0], $sides[1], $sides[2]<br>";

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



?>
