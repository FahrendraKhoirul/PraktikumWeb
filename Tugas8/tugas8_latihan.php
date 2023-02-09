<html>

  <head>
    <title>Tugas 8 - Demo koneksi database MySQL</title>
  </head>

  <body>
    <h1>Demo Koneksi database MySql</h1>
    <?php
  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "db_akademik";
  $koneksi = mysqli_connect($host, $username, $password, $database);
  if ($koneksi) {
    echo "OK";
  } else {
    echo "Server not connected";
  }
  ?>
  </body>

</html>
