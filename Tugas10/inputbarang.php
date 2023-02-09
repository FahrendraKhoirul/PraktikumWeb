<html>
  <?php
include 'config.php';
error_reporting(0);
session_start();

if (isset($_POST['submit'])) {
  include 'config.php';
  $name = $_POST['namabarang'];
  $qty = (int)$_POST['kuantitas'];
  $price = $_POST['hargabarang'];

  $sql = "INSERT INTO barang(nama, kuantitas, harga) VALUES ('$name', $qty, '$price')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    echo "Input data Succesfully";
  } else {
    echo "Input data invalid. Please try again!";
  }
}
?>

  <head>
    <title>Admin Page</title>
    <link rel="stylesheet" href="styles.css">
  </head>

  <body>
    <div class="card">
      <div class="dashboard">
        <div class="space-between">
          <p style="font-size: 24px;">Input Barang</p>
          <a class="logout" name="logout" href="homeadmin.php">BACK</a>
        </div>
        <form class="form-dashboard" method="POST">
          <p>Nama Barang</p>
          <input type="text" name="namabarang">
          <p>Kuantitas</p>
          <input type="number" name="kuantitas">
          <p>Harga Barang</p>
          <input type="number" name="hargabarang">
          <input style="background-color:#76b852; color: #FFFFFF;" type="submit" name="submit" value="Submit">
        </form>

      </div>
    </div>
  </body>

  <style>
  .dashboard {
    background: #FFFFFF;
    max-width: 700px;
    margin: 0 auto 100px;
    padding: 45px;
    text-align: left;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  }

  .dashboard .space-between {
    display: flex;
    justify-content: space-between;
  }

  .logout {
    margin: auto 0;
    color: red;
    text-decoration: none;
  }

  .logout:hover {
    font-weight: bold;
  }

  .form-dashboard input {
    outline: 0;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
    background: #f2f2f2;
  }

  </style>

</html>
