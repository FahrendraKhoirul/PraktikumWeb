<html>

  <head>
    <title>Biodata</title>
  </head>

  <body>
    <h1> BIODATA</h1>
    <form name="form_input" action="Tugas_BiodataOutput.php" method="POST">
      <table>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="nama"> </td>
        </tr>
        <tr>
          <td>NIM</td>
          <td><input type="text" name="nim"> </td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td><input type="radio" name="jenis_kelamin" value="L">Laki-laki
            <input type="radio" name="jenis_kelamin" value="P">Perempuan
          </td>
        </tr>

        </tr>
        <tr>
          <td>Deskripsi Diri</td>
          <td><textarea name="deskripsi" cols="45" rows="15">Tuliskan deskripsi singkat tentang anda</textarea></td>
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
  </body>

</html>
