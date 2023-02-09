<?php
$a = $_POST['username'];
$b = $_POST['password'];
$c = $_POST['jenis_kelamin'];
$d1 = $_POST['hobi'];
// $d2 = $_POST['hobi2'];
// $d3 = $_POST['hobi3'];
$e = $_POST['jurusan'];
?>

<html>
  <head>
    <meta charset="UTF-8">
    <title>Tugas 3 No 1_Fahrendra</title>
  </head>

  <body>
    <table  border="1|0">>

      <tr>
        <thead>
          <th>Username</th>
          <th>Password</th>
          <th>Jenis Kelamin</th>
          <th>Hobi</th>
          <th>Jurusan</th>
        </thead>
      </tr>
      <tr>
        <tbody>
          <th>
            <?php echo $a ?>
          </th>
          <th>
            <?php echo $b ?>
          </th>
          <th>
            <?php echo $c ?>
          </th>
          <th>
            <?php echo $d1[0] $d1[1] ?>
          </th>
          <th>
            <?php echo $e ?>
          </th>
        </tbody>
      </tr>
    </table>
  </body>

</html>
