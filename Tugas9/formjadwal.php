<html>
<?php

session_start();

if (!isset($_SESSION['email'])) {
  header("Location: login.php");
}





if (isset($_POST['add'])) {
  include 'config.php';
  $id_matkul = $_POST['id_matkul'];
  $day = $_POST['day'];
  $time = $_POST['time'];
  $room = $_POST['room'];

  $query = "INSERT INTO akademik(id_matkul, hari, jam, ruang) VALUES ( '$id_matkul', '$day', '$time', '$room')";
  mysqli_query($conn, $query);
}



function showSchedule()
{
  include 'config.php';
  $sql = "SELECT akademik.id_jadwal, matkul.nama_matkul, akademik.hari, akademik.jam, akademik.ruang FROM akademik JOIN matkul ON akademik.id_matkul = matkul.id_matkul";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) {
    while ($schedule = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>" . $schedule['id_jadwal'] . "</td>";
      echo "<td>" . $schedule['nama_matkul'] . "</td>";
      echo "<td>" . $schedule['hari'] . "</td>";
      echo "<td>" . $schedule['jam'] . "</td>";
      echo "<td>" . $schedule['ruang'] . "</td>";
      echo "</tr>";
    }
  }
}

function showMatkulOption()
{
  include 'config.php';
  $matkul_sql = mysqli_query($conn, "SELECT * FROM matkul");
  while ($matkul_option = mysqli_fetch_array($matkul_sql)) {
    echo "<option value=" . $matkul_option['id_matkul'] . ">" . $matkul_option['nama_matkul'] . "</option>";
  }
}
?>

<head>
  <title>College App</title>
  <link rel="stylesheet" href="stylebaru.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body style="background-color: #F0F5FF; margin: 32px;">
  <h1 class="title" style="color: #5D8EFC; font-weight: 800; font-size: xx-large;">COLLEGE APP</h1>
  <h2 style="color: #5D8EFC; font-weight: 700; font-size: x-large; margin-bottom: 12px;   margin: 24px auto;
    text-align: center;">Input Course Schedule</h2>

  <form class="container2 title2" action="" method="POST">
    <p class="form-title">Day</p>
    <select name="day">
      <option value="Senin">Senin</option>
      <option value="Selasa">Selasa</option>
      <option value="Rabu">Rabu</option>
      <option value="Kamis">Kamis</option>
      <option value="Jumat">Jumat</option>
    </select>
    <p class="form-title">Time</p>
    <input class="textinput" type="text" name="time" required>
    <p class="form-title">Room</p>
    <input class="textinput" type="text" name="room" required>
    <p class="form-title">Course</p>
    <select name="id_matkul">
      <option disabled selected> Choose Subject</option>
      <?php
      showMatkulOption();
      ?>
    </select>
    <input class="submitbutton" type="submit" name="add" value="Submit">
  </form>



  <br>
  <br>
  <table>
    <tr>
      <th>ID Schedule</th>
      <th>Subject</th>
      <th>Day</th>
      <th>Time</th>
      <th>Room</th>
    </tr>
    <?php
    showSchedule();
    ?>
  </table>
</body>

</html>
