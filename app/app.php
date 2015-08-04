<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/triangle.php";

    $app = new Silex\Application();

    $app->get("/", function() {
      return "
      <!DOCTYPE html>
      <html>

      <head>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
        <title>Enter triangle sides</title>
      </head>

      <body>
        <div class='container'>
          <h1>Triangle Sides</h1>
          <p>Enter the three sides of a triangle to find what type of triangle you have.</p>
          <form action='/result'>
            <div class='form-group'>
              <label for='side1'>Enter side one:</label>
              <input id='side1' name='side1' class='form-control' type='number'>
            </div>
            <div class='form-group'>
              <label for='side2'>Enter side two:</label>
              <input id='side2' name='side2' class='form-control' type='number'>
            </div>
            <div class='form-group'>
              <label for='side3'>Enter side three:</label>
              <input id='side3' name='side3' class='form-control' type='number'>
            </div>
            <button type='submit' class='btn-success'>Submit</button>
          </form>
        </div>
      </body>
      </html>
    ";
    });

    $app->get("/result", function() {

      $side1 = $_GET["side1"];
      $side2 = $_GET["side2"];
      $side3 = $_GET["side3"];
      $sides = array($side1, $side2, $side3);

      sort($sides, SORT_NUMERIC);


      $whatToPrint = "";
        if ($sides[0] + $sides[1] < $sides[2]) {
          $whatToPrint =  "Not a valid triangle";
        }
        else {
          $whatToPrint =  "<p>You have a(n) " . triangle($side1, $side2, $side3) . " triangle. </p>";
        }

        return "
          <!DOCTYPE html>
          <html>
            <body>
              <div class='container'>
                $whatToPrint
                </div>
            </body>
          </html>
        ";





    });

    return $app;
?>
