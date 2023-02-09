<html>

  <head>
    <title>Latihan PHP_Output</title>
  </head>

  <body>
    <h1>Output Luas Persegi</h1> <br><br>
    <?php
  if (isset($POST['input'])); {
    echo "Hasil $_POST[number1] x $_POST[number2]" . "<br>";
    $nilai =  $_POST['number1'] * $_POST['number2'];
    echo $nilai;
  }
  ?>
  </body>

</html>
