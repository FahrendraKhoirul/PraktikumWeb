<html>
  <?php

session_start();

if (!isset($_SESSION['email'])) {
  header("Location: login.php");
}

if (isset($_POST['add'])) {
  include 'config.php';
  include "styles.css";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $comment = $_POST['comment'];

  $query = "INSERT INTO guestbook(name, email, comment) VALUES ( '$name', '$email', '$comment')";
  mysqli_query($conn, $query);
}

function showGuest()
{
  include 'config.php';
  $sql = "SELECT * FROM guestbook";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) {
    while ($guestbook = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>" . $guestbook['name'] . "</td>";
      echo "<td>" . $guestbook['email'] . "</td>";
      echo "<td>" . $guestbook['comment'] . "</td>";
      echo "</tr>";
    }
  }
}
?>

  <head>
    <title>Guestbook</title>
    <link rel="stylesheet" href="styles.css">
  </head>

  <body style="background-color: #F0F5FF; margin: 32px;">
    <h1 class="title" style="color: #5D8EFC; font-weight: 800; font-size: xx-large;">GUESTBOOK APP</h1>
    <h2 style="color: #5D8EFC; font-weight: 700; font-size: x-large; margin-bottom: 12px;   margin: 24px auto;
  text-align: center;">Please Sign Our Guestbook</h2>
    <div class="container2 title">
      <form action="" method="POST">
        <input class="textinput" type="text" name="name" placeholder="Name" required>
        <input class="textinput" type="email" name="email" placeholder="Email" required>
        <input class="textinput" type="text" name="comment" placeholder="Comment">
        <input class="submitbutton" type="submit" name="add" value="Submit">
      </form>
    </div>
    <br>
    <br>
    <table>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Comment</th>
      </tr>
      <?php
    showGuest();
    ?>
    </table>
  </body>

</html>
