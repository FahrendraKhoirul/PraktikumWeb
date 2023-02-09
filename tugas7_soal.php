<!DOCTYPE html>
<html>

  <head>
    <title>Tugas 5</title>
  </head>
  <style>
  .kalkulator {
    width: max-content;
    margin: 20px;
    padding: 20PX;
    border-radius: 5PX;
    background-color: cadetblue;
  }

  .bil {
    width: 350;
    border: none;
    margin: 5px;
    padding: 5px;
  }

  .opr {
    width: 350;
    border: none;
    margin: 5px;
    padding: 10px;
  }

  .tombol {
    background-color: chartreuse;
    border: none;
    margin-left: auto;
    margin-right: 0px;
    padding: 10px;
  }

  .form {
    margin: 20px;
    padding: 20PX;
  }

  </style>

  <body>
    <?php
  if (isset($_POST['hitung'])) {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operasi = $_POST['operasi'];
    switch ($operasi) {
      case 'tambah':
        $hasil = $angka1 + $angka2;
        break;
      case 'kurang':
        $hasil = $angka1 - $angka2;
        break;
      case 'kali':
        $hasil = $angka1 * $angka2;
        break;
      case 'bagi':
        $hasil = $angka1 / $angka2;
        break;
    }
  }

  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $jenis_kelamin = $_POST['operasi'] == 'P' ? "Laki-laki" : "Perempuan";
    $jurusan = $_POST['jurusan'];
  }
  ?>

    <div class="kalkulator">
      <h2>Kalkulator</h2>
      <form method="POST" name="soal1">
        <input type="number" name="angka1" placeholder="Masukkan angka pertama" class="bil">
        <br>
        <input type="number" name="angka2" placeholder="Masukkan angka kedua" class="bil">
        <br>
        <select name="operasi" class="opr">
          <option value="tambah">+</option>
          <option value="kurang">-</option>
          <option value="kali">x</option>
          <option value="bagi">/</option>
        </select>
        <input type="submit" name="hitung" value="Hitung" class="tombol">
      </form>
      <?php if (isset($_POST['hitung'])) { ?>
      <input type="text" value="<?php echo $hasil; ?>" class="bil">
      <?php } else { ?>
      <input type="text" value="0" class="bil">
      <?php } ?>
    </div>


    <div class="form">
      <h2>Form Input Data</h2>
      <form name="form_input" method="POST">
        <table>
          <tr>
            <td>Username</td>
            <td><input type="text" name="username"></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="password" name="password"> </td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td><input type="radio" name="jenis_kelamin" value="L">Laki-laki
              <input type="radio" name="jenis_kelamin" value="P">Perempuan
            </td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input type="email" name="email"></input></td>
          </tr>
          <tr>
            <td>Jurusan</td>
            <td><select name="jurusan" id="jurusan">
                <option value="teknik_infomratika">Teknik Informatika</option>
                <option value="teknik_arsitektur">Teknik Arsitektur</option>
                <option value="matematika">Matematika</option>
                <option value="biologi">Biologi</option>
              </select>
            </td>
        </table>
        <input type="submit" name="submit">
        <input type="reset" name="reset">
      </form>
    </div>
    <?php if (isset($_POST['submit'])) { ?>
    <?php if ($username != null || $password != null || $jenis_kelamin != null || $jurusan != null) { ?>
    <table border="1|0">>
      <tr>
        <thead>
          <th>Username</th>
          <th>Password</th>
          <th>Jenis Kelamin</th>
          <th>Jurusan</th>
        </thead>
      </tr>
      <tr>
        <tbody>
          <th>
            <?php echo $username ?>
          </th>
          <th>
            <?php echo $password ?>
          </th>
          <th>
            <?php echo $jenis_kelamin ?>
          </th>
          <th>
            <?php echo $jurusan ?>
          </th>
        </tbody>
      </tr>
    </table>
    <?php } else { ?>
    <p>Maaf jawaban anda salah, silahkan isi ulang.</p>
    <?php }
  } ?>
  </body>

</html>
