<html>
  <?php
include 'config.php';
error_reporting(0);
session_start();

if (isset($_POST['createaccount'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $level = $_POST['level'];

  $sql = "INSERT INTO akun(username, password, email, level) VALUES ('$username', '$password', '$email', '$level')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    echo "<script>alert('Register Succesfully')</script>";
    sleep(2);
    header("Location: login.php");
  } else {
    echo "<script>alert('Register invalid. Please try again!')</script>";
  }
}
?>

  <head>
    <title>Register Form</title>
    <link rel="stylesheet" href="styles.css">
  </head>

  <body>
    <div class="login-page">
      <div class="form">
        <form method="POST">
          <p>REGISTER</p>
          <input type="text" placeholder="Username" name="username">
          <input type="text" placeholder="Email" name="email">
          <input type="password" placeholder="Password" name="password">
          <select class="form-select" name="level">
            <option selected disabled>Choose Level</option>
            <option value="admin">Admin</option>
            <option value="user">User</option>
          </select>
          <button name="createaccount">Create Account</button>
          <p style="font-size: 12px;">Already have an account? <a style="color: #76b852; text-decoration: none;" href="login.php">Login</a></p>
        </form>
      </div>
    </div>
  </body>

</html>
