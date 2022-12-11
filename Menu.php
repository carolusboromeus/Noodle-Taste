<?php
  include "./cms/connection.php";
?>

<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="./Image/Noodle taste logo.png">
<title>Noodle Taste</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="Index.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
    .background {
      width: 100%;
      font-family: Bellezea;
    }

    .accordion {
        background-color: #eee;
        color: #444;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
        margin-top: 97px;
    }

    .active, .accordion:hover {
        background-color: #ccc; 
    }

    .panel {
        padding: 0 18px;
        display: none;
        background-color: white;
        overflow: hidden;
    }

    .nav-bar-menu {
      border-bottom: 5px solid #5f764f; 
      width: 100%;
      background-color: #545454;
      height: auto;
      margin-top: 0px;
    }
  
    #nav-menu {
      text-align: center;
      letter-spacing: 2px;
      font-size: 30px;
      color: white;
      padding-top: 30px;
    }
  
    #link-semua-menu {
      text-align: center;
      font-size: 17px;
      letter-spacing: 2px;
      margin-top: 30px;
      margin-bottom: 30px;
    }
  
    .noodle-link {
      color: white;
      text-decoration: none;
    }
  
    .noodle-link:hover {
      color: lightgrey;
      text-decoration: none;
    }
  
    .nav-bar-food {
      list-style-type:none; 
      margin-left:auto;
      margin-right:auto;
      margin-top:35px;
      display: block;
      width: 50%;
    }
  
    .nav-bar-des { 
      margin-top: 15px;
      font-size: 20px;
      text-align: center;
      letter-spacing: 2px;
      color: white;
    }

    @font-face {
        font-family: Chaparral Pro Light;
        src: url(./Font/Chaparral\ Pro\ Light.otf);
    }

    .nav-komen {
        text-align: justify;
        color: white;
        font-family:"Chaparral Pro Light";
        font-size: medium;
        letter-spacing: 1px;
    }

    .harga {
        font-weight: bold;
    }

    .order {
        color: lightgray;
        text-decoration: none;
        font-weight: bold;
        font-size: 20px;
    }

    .order:hover {
        color: wheat;
        text-decoration: underline;
        font-weight: bold;
    }

</style>
</head>
<body class="background">
    <div class="container-fluid topbar fixed-top">
          <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href="./Index.php"><img src="./Image/Noodle taste v3.png" class="img-fluid" style="width:200px"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="./Index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./About.php">About us</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="./Menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./How To Order.php">How to order</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./Contact.php">Contact us</a>
                    </li>
                  </ul>
              </div>
          </nav>
    </div>

    <button class="accordion" data-toggle="collapse"  data-target="#collapseOne" style="font-weight: bold; font-size:large">Menu</button>
    <div class="nav-bar-menu container-fluid collapse show" id="collapseOne">
      <h2 id="nav-menu">Pilihan Menu Noodle Taste</h2>
          <div class="row">
              <div class="col-sm-4 nav-noodle" id="PanFried">
                <img src="./Image/Noodle/PanFried Noodle.jpg" width="200px" height="200px" class="nav-img nav-bar-food">
                <p class="nav-bar-des">Pan Fried Noodle</p>
                <p class="nav-komen">Pan Fried Noodles sangat cepat dan sempurna untuk hari kerja yang sibuk! Mereka ditutup dengan saus gurih dan 
                    disiram dengan sayuran segar dan cerah. Bonus: Hidangan ini dibuat dalam satu panci.</p>
			    <p class="nav-komen harga">HARGA Rp.21.000</p>
			    <a class="order" href="#">Order Here</a>
              </div>
              <div class="col-sm-4 nav-noodle" id="Pho">
                <img src="./Image/Noodle/Pho Noodle.png" width="200px" height="200px" class="nav-img nav-bar-food">
                <p class="nav-bar-des">Pho Noodle</p>
                <p class="nav-komen">Pho rasanya seperti kaldu sapi atau ayam dengan mi, irisan daging, dan daun kemangi yang harum. Ada nada cerah dari jeruk nipis dan akar jahe segar.</p>
				<p class="nav-komen harga">HARGA Rp.25.000</p>
				<a class="order" href="#">Order Here</a>
              </div>
              <div class="col-sm-4  nav-noodle" id="BlackBean">
                <img src="./Image/Noodle/Black Bean Noodle.jpg" width="200px" height="200px" class="nav-img nav-bar-food">
                <p class="nav-bar-des">Black Bean Noodle</p>
                <p class="nav-komen">Ini adalah hidangan mie populer yang disajikan dengan saus kacang hitam, 
				    yang terdiri dari chunjang (pasta kedelai hitam asin), daging babi potong dadu 
					atau jenis daging lainnya) dan sayuran.</p>
				<p class="nav-komen harga">HARGA Rp.36.000</p>
				<a class="order" href="#">Order Here</a>
              </div>
          </div>
          <div class="row">
            <div class="col-sm-4  nav-noodle" id="RadNaThai">
                <img src="./Image/Noodle/Rad Na Thai Noodle.jpg" width="200px" height="200px" class="nav-img nav-bar-food">
                <p class="nav-bar-des">Rad Na Noodle</p>
                <p class="nav-komen">Hidangan mie Thailand-Cina. Nama hidangan diucapkan dalam bahasa sehari-hari Thailand. 
                Itu dibuat dengan bihun goreng, daging seperti ayam, sapi, babi, atau makanan laut atau tahu, bawang putih, jamur jerami, dan gai lan.</p>
                <p class="nav-komen harga">HARGA Rp.16.000</p>
                <a class="order" href="#">Order Here</a>  
            </div>
            <div class="col-sm-4  nav-noodle" id="SoftRamen">
                <img src="./Image/Noodle/SoftRamen Noodle.jpg" width="200px" height="200px" class="nav-img nav-bar-food">
                <p class="nav-bar-des">Soft Ramen Noodle</p>
                <p class="nav-komen">Ada empat jenis utama ramen Jepang, ditentukan oleh tare, atau rasa dasar: shio (ramen berbasis garam), shoyu (ramen berbahan dasar kecap),
                    miso (ramen rasa pasta kedelai), dan tonkotsu (kaldu tulang babi ramen).</p>
                <p class="nav-komen harga">HARGA Rp.42.000</p>
                <a class="order" href="#">Order Here</a>
            </div>
            <div class="col-sm-4  nav-noodle" id="Beef">
                <img src="./Image/Noodle/Beef Noodle.jpg" width="200px" height="200px" class="nav-img nav-bar-food">
                <p class="nav-bar-des">Beef Noodle</p>
                <p class="nav-komen">Mie kuah yang mirip dengan masakan Cina, dengan hiasan daging sapi, babi, ayam dan atasnya dengan 
				    daun bawang, Sawi dan Seledri.</p>
			    <p class="nav-komen harga">HARGA Rp.28.000</p>
                <a class="order" href="#">Order Here</a>  
            </div>
          </div>
          <div class="row" style="padding-bottom: 50px;">
            <div class="col-sm-4  nav-noodle">
                <img src="./Image/Noodle/Wonton Noodle.jpg" width="200px" height="200px" class="nav-img nav-bar-food">
                <p class="nav-bar-des">Wonton Noodles</p>
                <p class="nav-komen">Kuah mie wanton terkenal dengan kuah kuahnya yang gurih. Kaldu biasanya dimasak dengan kaldu sayuran atau kaldu iga babi. 
                    Mie wanton biasanya disajikan dengan Char Siew, atau irisan daging babi panggang dengan saus manis, sayuran, daun bawang dan nakal, atau pangsit.</p>
                <p class="nav-komen harga">HARGA Rp.23.000</p>
                <a class="order" href="#">Order Here</a>  
            </div>
            <div class="col-sm-4  nav-noodle">
                <img src="./Image/Noodle/Thai Noodle.jpg" width="200px" height="200px" class="nav-img nav-bar-food">
                <p class="nav-bar-des">Thai Noodle</p>
                <p class="nav-komen">Hidangan mie Thailand-Cina. Nama hidangan diucapkan dalam bahasa sehari-hari Thailand. 
                    Itu dibuat dengan bihun goreng, daging seperti ayam, sapi, babi, atau makanan laut atau tahu, bawang putih, jamur jerami, dan gai lan.</p>
				<p class="nav-komen harga">HARGA Rp.16.000</p>
			    <a class="order" href="#">Order Here</a>
            </div>
            <div class="col-sm-4  nav-noodle">
                <img src="./Image/Noodle/Chilli Garlic Noodles.jpg" width="200px" height="200px" class="nav-img nav-bar-food">
                <p class="nav-bar-des">Chilli Garlic Noodles</p>
                <p class="nav-komen">Mie ini pedas dan lezat dan akan membuat Anda mendambakan semakin banyak. 
                    Ia mendapatkan rasanya yang lezat dari bawang putih, cabe merah kering, bawang, cabe hijau, saus, dan sayuran.</p>
			    <p class="nav-komen harga">HARGA Rp.24.000</p>
                <a class="order" href="#">Order Here</a>  
            </div>
          </div>
    </div>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;
        
        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
              panel.style.display = "none";
            } else {
              panel.style.display = "block";
            }
          });
        }
    </script>
  
    <div class="container-fluid" id="bottom-bar">
      <div class="row">
        <div class="col-sm-3">
          <a href="./Index.php"><img src="./Image/Noodle taste.png" id="footer-logo"></a>
        </div>
    
        <div class="col-sm-3">
          <ul class="footer-bar">
              <li class="footer-li footer-title">
                  <a>Main Menu</a>
              </li>
              <li class="footer-li">
                  <a href="./Index.php" class="footer-link">Home</a>
              </li>
              <li class="footer-li">
                  <a href="./About.php" class="footer-link ">About us</a>
              </li>
              <li class="footer-li">
                  <a href="./Menu.php" class="footer-link">Menu</a>
              </li>
              <li class="footer-li">
                  <a href="./How To Order.php" class="footer-link">How to order</a>
              </li>
              <li class="footer-li">
                  <a href="./Contact.php" class="footer-link">Contact Us</a>
              </li>
          </ul>
        </div>
    
        <div class="col-sm-3">
              <h3 class="footer-title footer-kontak">Kontak</h3>
              <p class="footer-p">Jl.Sunter Agung I No.06 Sunter</p>
              <p class="footer-p">Jakarta Utara - Indonesia</p>
              <p class="footer-p">Telp :  021 – 780 8080</p>
              <p class="footer-p">Email : order_noodletaste@noodletaste.co.id</p>
        </div>
    
        <div class="col-sm-3">
          <ul class="footer-icon-bar">
              <li class="footer-icon-li"><a href="#"><img src="./Icon/Facebook Icon v1.png" class="footer-icon-link"></a></li>
              <li class="footer-icon-li"><a href="#"><img src="./Icon/Instagram Icon v1.png" class="footer-icon-link"></a></li>
              <li class="footer-icon-li"><a href="#"><img src="./Icon/Whatsapp Icon v1.png" class="footer-icon-link"></a></li>
              <li class="footer-icon-li"><a href="#top"><img src="./Icon/Arrow Up Icon v1.png" class="footer-icon-link"></a></li>
          </ul>
        </div>
      </div>
    </div>
</body>
</html>