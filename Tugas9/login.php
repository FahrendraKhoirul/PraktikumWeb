<html>
  <?php
include 'config.php';
error_reporting(0);
session_start();
if (isset($_SESSION['email'])) {
  header("Location: guestbook.php");
}

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['email'] = $row['email'];
    header("Location: formjadwal.php");
  } else {
    echo "<script>alert('Email or password invalid. Please try again!')</script>";
  }
}
?>

  <head>
    <title>College App</title>
    <link rel="stylesheet" href="styles.css">
  </head>

  <body>
    <div class="login">
      <h1 class="title">Welcome to College App</h1>
      <div class="container">
        <form action="" method="POST">
          <input class="textinput" type="email" name="email" placeholder="Email" required>
          <input class="textinput" type="password" name="password" placeholder="Password" required>
          <input class="submitbutton" type="submit" name="submit" value="Login">
        </form>
      </div>
    </div>
  </body>

</html>
