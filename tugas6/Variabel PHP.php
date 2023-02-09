<html>

<head>
  <title>Variabel PHP</title>
</head>

<body>
  <?php
  $nilai_1 = 10;
  $nilai_2 = 3;
  $nilai_3 = 2 * $nilai_1 + 8 * $nilai_2;
  echo "nilai - ", $nilai_3;
  echo "<br>";
  $jumlah = $nilai_1 + $nilai_2;
  echo "hasil dari $nilai_1 + $nilai_2 adalah : $jumlah";
  echo "<br><br>";
  echo "\"Nama : Fahrendra Khoirul Ihtada \" <br>";
  echo "NIM : 200605110124 <br>";

  $nama[] = "Fahrendra";
  $nama[] = "Khoirul";
  $nama[] = "Ihtada";
  echo $nama[1], $nama[2], $nama[0];
  echo "<br>";
  $jum_array = count($nama);
  echo "Jumlah elemen array = " . $jum_array;
  ?>
</body>

</html>
