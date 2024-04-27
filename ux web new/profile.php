<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>
<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbname = "pweb pr menggila";

$con = mysqli_connect($serverName, $userName, $password, $dbname);

if (!$con) {
    die("Connection failed: ". mysqli_connect_error());
}

$sql = "SELECT * FROM transaksi";
$result = mysqli_query($con, $sql);
?>
    <div class="topbar">
        <div class="navlink">
            <a href="index.php">Home</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
            <a href="#news">News</a>
        </div>
        <div class="logo">
            <h1 id="name">RaulGG.Store</h1>
        </div>
        <div class="gambar1">
            <img src="circle.png" alt="">
        </div>
    </div>
    <div class="profileimg">
        <a href="index.php"> <img src="man.png" alt=""></a>
    </div>
    <div class="box">
        <div class="borderleft">
            <h6 id="order">Order Masuk©</h6>
        </div>
    </div>
    <div class="box2">
        <div class="borderright">
            <h5 id="done">Order Done©</h5>
        </div>
    </div>
    <div class="colom">
        <div class="border">
            <h1 id="omset">Pemasukan Bulan ini</h1>
        </div>
    </div>
    <div class="kotak">
        <div class="square">
            <h2 id="bayar">Transaksi</h2>
            <div>
    <div class="btn-content">
            <button class="btn-tambah" id="btn-tambah" onclick="window.location.assign('transaksi.php')">Tambah</button>
            <button class="btn-edit" type="submit" name="submit" value="edit">Edit</button>
            <button class="btn-hapus" type="submit" name="submit" value="hapus">Hapus</button>
            </div>
        </div>
    </div>
        <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Pelanggan</th>
                <th>Kategori Game</th>
                <th>Tanggal Masuk</th>
                <th>Status4</th>
                <th>No Hp</th>
                <th>Jumlah Item</th>
                <th>Email</th>
                <?php
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>". $row["id"]. "</td>";
                                echo "<td>". $row["pelanggan"]. "</td>";
                                echo "<td>". $row["kategori_game"]. "</td>";
                                echo "<td>". $row["tanggal_masuk"]. "</td>";
                                echo "<td>". $row["status4"]. "</td>";
                                echo "<td>". $row["no_hp"]. "</td>";
                                echo "<td>". $row["jumlah_item"]. "</td>";
                                echo "<td>". $row["email"]. "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "0 results";
                        }
                       ?>
              </tr>
            </thead>    
        </table>
    </div>
    </div>
</body>
</html>