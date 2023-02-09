<html>
  <?php

if (isset($_GET['logout'])) {
  logout();
}
function logout()
{
  session_start();
  session_destroy();
  header("Location: login.php");
  echo "You are log out";
}

function showData()
{
  include 'config.php';
  $sql = "SELECT * FROM  barang";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) {
    while ($data = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>" . $data['id_barang'] . "</td>";
      echo "<td>" . $data['nama'] . "</td>";
      echo "<td>" . $data['kuantitas'] . "</td>";
      echo "<td>" . $data['harga'] . "</td>";
      echo "</tr>";
    }
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
          <p style="font-size: 24px;">Tabel Barang</p>
          <a class="logout" name="logout" href="homeadmin.php?logout=true">LOGOUT</a>
        </div>

        <span><a class="anchor" href="inputbarang.php">[Input Barang]</a></span>
        <span><a class="anchor" href="inputpembelian.php">[Input Pembelian]</a></span>
        <table>
          <tr>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Kuantitas</th>
            <th>Harga Barang</th>
          </tr>
          <?php
        showData();
        ?>
        </table>

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

  .anchor {
    color: #76b852;
    text-decoration: none;
  }

  .anchor:hover {
    font-weight: bold;
  }

  table {
    width: 100%;
    overflow: hidden;
    margin: 24px auto;
    text-align: center;
  }

  th {
    background-color: #76b852;
    color: white;
    padding-top: 1em;
    padding-bottom: 1em;
  }

  tr {
    background-color: white;
    padding-top: 1em;
    padding-bottom: 1em;
  }

  td {
    background-color: white;
    padding-top: 1em;
    padding-bottom: 1em;
    text-align: left;
  }

  </style>

</html>
