<html>
  <?php
include 'config.php';
error_reporting(0);
session_start();
if (isset($_SESSION['email'])) {
  if ($_SESSION['level'] === 'admin') {
    header("Location: homeadmin.php");
  } else if ($_SESSION['level'] === 'user') {
    header("Location: inputpenjualan.php");
  }
}

if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM akun WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['email'] = $row['email'];
    $_SESSION['level'] = $row['level'];
    if ($_SESSION['level'] === 'admin') {
      echo "<script>alert('Welcome Admin')</script>";
      echo "Welcome Admin";
      header("Location: homeadmin.php");
    } else if ($_SESSION['level'] === 'user') {
      header("Location: inputpenjualan.php");
      echo "<script>alert('Welcome User')</script>";
    }
  } else {
    echo "<script>alert('Email or password invalid. Please try again!')</script>";
  }
}

?>

  <head>
    <title>Login Form</title>
    <link rel="stylesheet" href="styles.css">
  </head>

  <body>
    <div class="login-page">
      <div class="form">
        <form method="POST">
          <p>LOGIN</p>
          <input type="text" placeholder="email" name="email">
          <input type="password" placeholder="password" name="password">
          <button name="login">Login</button>
          <p style="font-size: 12px;">Dont have an account? <a style="color: #76b852; text-decoration: none;" href="register.php">Create account</a></p>
        </form>
      </div>
    </div>
  </body>

</html>
