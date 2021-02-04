<?php
    echo "Hello World";
    function printer($fname) {
      echo $fname . "<br>";
    }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Testing basic php</title>
  </head>
  <body>
    <br>
    <?php
        $marks = 70;
        $name = "Nila Wahdati";
        if($marks<60) {
          echo "Second Division <br>";
        }
        else {
          echo "First Division<br>";
        }
        echo "Her name is: ";
        printer($name);
     ?>
     Here is another text..
  </body>
</html>
