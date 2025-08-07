<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link 
        href="https://fonts.googleapis.com/css2?family=Arapey:ital@0;1&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" 
        rel="stylesheet">
    <link rel="stylesheet" href="lokasi.css">
    <title> Lokasi-lokasi Kedai Wahab</title>
</head>
<body>
    <nav id="nav">
        <img src="./img/logokedai/kedaiwahab_logo2.jpg" alt="" width= "100" height="100" class="navImg">
        <div class="navDrpDwn">
            <img src="./img/symbols/dropdown_menu_icon.png" alt="" width="35" height="35" class="navDrpDwnIcon">
            <div class="navDrpDwn-Content">
                <a href="index.html">Laman Utama</a>
                <a href="produk.html">Produk Kami</a>
            </div>
        </div>
    </nav>
    <div class="lokasi" id="lokasi">
        <h1 class="lokasiTitle">Lokasi-lokasi Kita</h1>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "kedaiwahab";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT namaLokasi, alamatKedai, namaImejKedai, imejKedai FROM lokasi_kedai";
        $result = $conn->query($sql);

        if (!$result) {
            die("Query failed: " . $conn->error);
        }
        $serialNumber = 1;

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='lokasiItem'>";
                echo "<div class='lokasiItemItem'>";
                echo "<img src='data:image/jpeg;base64," . base64_encode($row["imejKedai"]) . "' alt='' class='lokasiImg'>";
                echo "</div>";
                echo "<div class='lokasiItemItem'>";
                echo "<h2 class='lokasiItemItemContent'>Nama lokasi: ".$row["namaLokasi"]."</h2>";
                echo "<p class='lokasiItemItemContent'>Alamat: ".$row["alamatKedai"]."</p>";
                echo "</div>";
                echo "</div>";
            }
        }
    ?>
    </div>
</body>
<footer>
        <div class="footerLeft">
            <img src="./img/logokedai/kedaiwahab_logo2.jpg" alt="" width= "100" height="100" class="footerLogo">
        </div>
        <div class="footerCenter">
            <div class="footerMenu">
                <h1 class="fMenuTitle">Pautan-pautan:</h1>
                <ul class="fList">
                    <li class="fListItem"><a href="index.html">Tentang Kami</a></li>
                    <li class="fListItem"><a href="produk.html">Produk Kami</a></li>
                    <li class="fListItem"><a href="#lokasi">Lokasi Kami</a></li>
                </ul>
            </div>
        </div>
        <div class="footerRight">
            <div class="footerRightMenu">
                <h1 class="fMenuTitle">Follow Us</h1>
                <div class="fIcons">
                    <a href="https://instagram.com/kedaiwahab/">
                        <img src="./img/mediasosial/instagram.png" alt="" class="fIcon">
                    </a>
                    <a href="https://www.facebook.com/pages/Kedai%20Wahab%20Seberang%20Jaya/400560070395796/#">
                        <img src="./img/mediasosial/facebook.png" alt="" class="fIcon">
                    </a>
                    <a href="https://www.tiktok.com/@kedaiwahabsunway">
                        <img src="./img/mediasosial/tiktok.png" alt="" class="fIcon">
                    </a>
                </div>
            </div>
            <div class="footerRightMenu">
                <span class="copyright">@Kedai Wahab . 2025</span>
            </div>
        </div>
    </footer>
</html>