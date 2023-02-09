`
<!DOCTYPE html>
<html>

  <head>
    <title>Fect Array</title>
  </head>

  <body>
    <table border="1">
      <tr>
        <thead>
          <td>No.</td>
          <td>Nama Mata Kuliah</td>
        </thead>
      </tr>
      <tbody>
        <?php
      $no = 1;
      include "tugas8_latihan.php";
      $a = "SELECT * FROM matkul";
      $b = $koneksi->query($a);
      while ($c = $b->fetch_row()) { ?>
        <tr>
          <th><?php echo $no++; ?></th>
          <th><?php echo $c[1]; ?></th>
        </tr>
        <?php }
      ?>
      </tbody>
    </table>
  </body>

</html>
