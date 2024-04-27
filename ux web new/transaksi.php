<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="transaksi.css">
    <?php
require 'conection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data yang dikirim dari form
    $pelanggan = $_POST['pelanggan'];
    $kategori_game = $_POST['kategori_game'];
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $status4 = $_POST['status4'];
    $no_hp = $_POST['no_hp'];
    $jumlah_item = $_POST['jumlah_item'];
    $email = $_POST['email'];
    // Jika ada
    // Tangkap data lainnya sesuai kebutuhan

    // Buat query untuk menyimpan data ke database
    $query = "INSERT INTO transaksi (pelanggan, kategori_game, tanggal_masuk, status4, no_hp, jumlah_item, email) 
              VALUES ('$pelanggan', '$kategori_game', '$tanggal_masuk', '$status4', '$no_hp, '$jumlah_item', '$email')";

    // Jalankan query
    if ($con->query($query) === TRUE) {
        echo "Data berhasil disimpan";
    } else {
        echo "Error: " . $query . "<br>" . $con->error;
    }

    // Tutup koneksi database
    $con->close();
}
?>

</head>
<body>
  <div class="container">
      <form class="row">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" class="form-control4" id="inputEmail4">
        </div>
        <div class="col-md-12">
            <label for="inputPelanggan" class="form-label">Pelanggan</label>
            <input type="text" class="form-control1" id="inputPelanggan">
          </div>
        <div class="col-13">
          <label for="inputID" class="form-label">ID</label>
          <input type="text" class="form-control2" id="inputID" placeholder="80600000 ex.">
        </div>
        <div class="col-md-7">
            <label for="inputGame" class="form-label">Choose Game</label>
            <select id="inputGame" class="form-select">
              <option selected>Choose...</option>
                <option value="1">PUBG</option>
                <option value="2">Mobile Legend</option>
                <option value="3">AOV</option>
                <option value="4">Free Fire</option>
                <option value="5">COD Mobile</option>
                <option value="6">COC Gem</option>
                <option value="7">Honor of Kings</option>
                <option value="8">Genshin Impact</option>
                <option value="9">Honkai Starrail</option>
                <option value="10">Honkai Impact 3rd</option>
            </select>
          </div>
        <div class="col-md-4">
            <label for="inputItem" class="form-label">Jumlah Item</label>
            <select id="inputItem" class="form-select">
              <option value="">Choose...</option>
              <option value="1">40 Diamond</option>
              <option value="2">120 Diamond</option>
              <option value="3">500 Diamond</option>
              <option value="4">2100 Diamond</option>
            </select>
        </div>
        <div class="col-md-2">
          <label for="inputNohp" class="form-label">NO.Handphone</label>
          <input type="text" class="form-control3" id="inputNohp">
        </div>
        <div class="dating">
          <label for="party">Choose your preferred party date:</label><br>
          <input type="date" id="party" name="party" min="2024-01-01" max="2030-12-31" required />
          <span class="validity"></span>
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check jika data anda benar!
            </label>
          </div>
        </div>
        <div class="col-12">
            <form class="" action="profile.php" method="GET">
                <!-- Ubah action menjadi profile.php dan tambahkan method GET -->
                <!-- Ubah tag a menjadi button dengan type submit -->
                <button class="button" type="submit" name="proses" value="submit">Submit</button>
            </form>
        </div>
      </form>
      </div>
    </div>
  </div>
</body>
</html>