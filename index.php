<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Document</title>
    <link rel="stylesheet" href="page.css">
    <script defer src="page.js"></script>
</head>

<body>
    <div class="navbar">
        <div class="logo">
            <h1 id="nama">RaulGG.Store</h1>
        </div>
        <div class="navlink">
            <a href="#home">Home</a>
            <a href="#news">News</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
        </div>
    </div>
    <div class="container">
        <div class="square">
            <img src="pubg.png" alt="">
            <div class="text">
                <h2 id="tentang game">PUBG Mbile Termurah [Q3 2024]</h2>
            </div>
            <div class="tentang">
                <h3 id="penjelasan">PUBG: Battlegrounds (sebelumnya dikenal sebagai PlayerUnknown's Battlegrounds) adalah sebuah permainan battle royale, di mana 100 orang sekaligus dapat bermain secara daring. Pemenang dari permainan ini adalah individu atau tim yang dapat bertahan hingga akhir. Pemain bisa bermain sendirian (solo), tim dengan dua orang (duo), dan tim dengan empat orang (squad). Pemain bisa mengundang teman di daftar teman (friend list) untuk bergabung ke dalam permainan sebagai sebuah tim.</h3>
            </div>
        </div>
    </div>  
    <div class="sidebar">
        <a href="#account">Account</a>
        <a href="#logout">Logout</a>
        <a href="#dashboard">Dashboard</a>
        <a href="#settings">Settings</a>
    </div>
    <div class="box_right">
        <div class="header_box">
            <div class="tombol">
                <button id="teken">Konfirmasi</button>
            </div>
        </div>
        <div class="isi">
            <h4 id="wajib">Silahkan Isi Data!</h4>
        </div>
        <form action="/">
            <div class="flex">
                <div>
                    <div class="input-control">
                        <label for="uid">UID Game*</label>
                        <input type="text">
                    </div>
                    <div class="input-mail">
                        <label for="email">Email*</label>
                        <input type="text">
                    </div>
                </div>
                <div>
                    <div class="input-hp">
                        <label for="hp">Nomor HP*</label>
                        <input type="text">
                    </div>
                    <div class="input-anda">
                        <label for="anda">Nama*</label>
                        <input type="text">
                    </div>
                </div>
            </div>
            <table class="table">
                <thead>
                  <tr>
                    <th>Pelanggan</th>
                    <th>Kategori Game</th>
                    <th>Tanggal Masuk</th>
                    <th>UID Game</th>
                    <th>Status</th>
                    <th>No Hp</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Raul</td>
                    <td>ML</td>
                    <td>03-24-24</td>
                    <td>83674901</td>
                    <td class="flex"><div class="green"></div> <select name="pilihan" id="">
                        <option value="Selesai">Selesai</option>
                        <option value="Progress">Progress</option></select></td>
                    <td>083-345-123-432</td>
                  </tr>
                  <tr>
                    <td>Vian</td>
                    <td>Pubg</td>
                    <td>03-14-22</td>
                    <td>87380208</td>
                    <td class="flex"><div class="yellow"></div><select name="pilihan" id="">
                        <option value="Progress">Progress</option>
                        <option value="Selesai">Selesai</option></select></td>
                    <td>085-123-653-864</td>
                  </tr>
                  </tr>
                  <tr>
                    <td>Faiq</td>
                    <td>HSR</td>
                    <td>01-24-21</td>
                    <td>86529304</td>
                    <td class="flex"><div class="green"></div> <select name="pilihan" id="">
                        <option value="Selesai">Selesai</option>
                        <option value="Progress">Progress</option></select></td>
                    <td>083-346-675-123</td>
                  </tr>
                  </tr>
                  <tr>
                    <td>Faris</td>
                    <td>ML</td>
                    <td>02-24-22</td>
                    <td>8934672720</td>
                    <td class="flex"><div class="red"></div> <select name="pilihan" id="">
                        <option value="Progress">Progress</option>
                        <option value="Selesai">Selesai</option></select>
                    <td>087-453-654-323</td>
                    </td>
                    <tr>
                        <td>Kenol</td>
                        <td>ML</td>
                        <td>02-24-22</td>
                        <td>80934939</td>
                        <td class="flex"><div class="red"></div> <select name="pilihan" id="">
                            <option value="Progress">Progress</option>
                            <option value="Selesai">Selesai</option></select>
                        <td>087-453-654-323</td>
                        </td>
                  </tr>
                </td>
                  </tr>
                </tbody>
              </table>
        </div>   
        </form>
    </div>


</body>

</html>