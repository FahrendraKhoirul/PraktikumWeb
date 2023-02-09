<html>

  <head>
    <title>Biodata Output</title>
  </head>

  <body>
    <h1> BIODATA OUTPUT</h1>
    <?php
  if (isset($POST['form_input'])); {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $deskripsi = $_POST['deskripsi'];
    $jurusan = $_POST['jurusan'];

    echo "Nama : $nama" . "<br>";
    echo "NIM : $nim" . "<br>";
    echo "Jenis Kelamin : $jenis_kelamin" . "<br>";
    echo "Deskripsi : $deskripsi" . "<br>";
    echo "Jurusan : $jurusan" . "<br>";
  }
  ?>
  </body>

</html>
