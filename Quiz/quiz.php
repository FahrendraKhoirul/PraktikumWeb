<html>
  <?php

session_start();


if (isset($_POST['add'])) {
  include 'config.php';
  $angka = $_POST['angka'];
  $status = ($angka % 2 === 0) ? "Genap" : "Ganjil";
  $output =  ($angka % 2 === 0) ? $angka / 2 : $angka;
  $query = "INSERT INTO quizgenapganjil(angka, status, output) VALUES ('$angka', '$status', '$output')";
  mysqli_query($conn, $query);
}

function showData()
{
  include 'config.php';
  $sql = "SELECT angka, status, output FROM  quizgenapganjil";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) {
    while ($data = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>" . $data['angka'] . "</td>";
      echo "<td>" . $data['status'] . "</td>";
      echo "<td>" . $data['output'] . "</td>";
      echo "</tr>";
    }
  }
}


?>

  <head>
    <title>Quiz Genap Ganjil</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  </head>

  <body style="background-color: #F0F5FF; margin: 32px;">
    <h1 class="title" style="color: #5D8EFC; font-weight: 800; font-size: xx-large;">Quiz Genap Ganjil</h1>
    <h2 style="color: #5D8EFC; font-weight: 700; font-size: x-large; margin-bottom: 12px;   margin: 24px auto;
    text-align: center;">Input Angka</h2>

    <form class="container2 title2" action="" method="POST">
      <input class="textinput" type="text" name="angka" required>
      <input class="submitbutton" type="submit" name="add" value="Submit">
    </form>


    <br>
    <br>
    <table>
      <tr>
        <th>Angka</th>
        <th>Status</th>
        <th>Output</th>
      </tr>
      <?php
    showData();
    ?>
    </table>
  </body>

</html>
