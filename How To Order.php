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
        background-image: url("./Image/Slideshow.gif");
        min-height: auto; 
        background-repeat: no-repeat;
        background-position:right;
        background-position-y: -450px;
        background-size:cover;
        width: 100%;
        font-family: Bellezea;
    }
    
    #judul {
        color: #545454;
        font-size: 37px;
        text-align: center;
        background-color: white;
        border: 3px solid #5f764f;
        border-bottom: 13px double #5f764f;
        letter-spacing: 10px;
        width: 50%;
        margin-left: auto;
        margin-right: auto;
        font-weight: bold;
    }
    
    /* Style the search field */
    form.example input[type=text] {
        padding: 20px;
        font-size: 17px;
        border: 2.5px solid #5f764f;
        background-color: white;
        height: 60px;
    }
    
    .input-group {
        margin-top: 15px;
        margin-left: auto;
        margin-right: auto;
    }
      
    /* Style the submit button */
    form.example button {
        padding: 9px;
        background: #5f764f;
        color: white;
        cursor: pointer;  
        margin-left: auto;
        margin-right: auto;
        border: 2.5px solid #5f764f;
        font-size: 15px;
        height: 60px;
    }
      
    form.example button:hover {
        background: #7d9b67;
        color: white;
    }
    
    .nav-p {
        margin-left: auto;
        margin-right: auto;
        letter-spacing: 2px;
        margin-top: 50px;
        color: #545454;
        font-size: 20px;
        font-weight: bold;
        padding-top: 50px;
    }
    
    .nav-judul {
        margin-left: auto;
        margin-right: auto;
        letter-spacing: 2px;
        margin-top: 30px;
        font-size: 35px;
        color: #545454;
        font-weight: bold;
    }
    
    .info {
        margin-right: auto;
        margin-left: auto;
        letter-spacing: 2px;
        line-height: 30px;
        color: #545454;
        font-size: 20px;
        margin-top: 30px;
        text-align: left;
    }
    
    #info-detail {
        margin-bottom: 70px;
        margin-top: 0px;
    }

    .info-link {
        text-decoration: none;
        font-weight: bold;
        color: #5f764f;
    }
    
    .info-link:hover {
        text-decoration: none;
        color: #7d9b67;
    }

    .kontak {
        letter-spacing: 2px;
        line-height: 5px;
        color: #545454;
        font-size: 17px;
        margin-top: 30px;
        text-align: left;
        list-style: none;
    }

    .nav-border-bottom {
        border-bottom: 5px solid #5f764f; 
        width: 100%;
        background-color: whitesmoke;
        margin-top: 200px;
      }
    
    .center {
        padding-left: 50px;
        padding-right: 50px;
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
    
    .nav-noodle {
        width: 100%;
    }
</style>
</head>
</html>
<body class="background">
    <div class="container-fluid topbar navbar-fixed-top fixed-top">
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
                    <li class="nav-item">
                      <a class="nav-link" href="./Menu.php">Menu</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="./How To Order.php">How to order</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./Contact.php">Contact us</a>
                    </li>
                  </ul>
              </div>
          </nav>
    </div>

    <div>
        <div style="margin-top: 200px;">
          <h2 id="judul">NOODLE TASTE</h2>
          <form class="example" action="#">
            <div class="input-group "  style="width:50%">
              <input type="text" class="form-control" placeholder="Apa yang ingin anda cari?" maxlength="95" name="search">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
              </div>
            </div>
          </form>
        </div>
    </div>

    <div class="nav-border-bottom container-fluid">
        <div class="center">
          <h3 class="nav-p">How To Order</h3>
        </div>
        <div class="row center">
            <div class="col-sm-6">
                <h2 class="nav-judul">Online</h2>
                <ol style="padding-bottom: 100px;">
                    <li class="info">Klik tombol <a href="./Menu.php" class="info-link">menu</a></li>
                    <li class="info">Kamu bisa lihat menu makanan favoritmu di halaman menu</li>
                    <li class="info">Pilih menu yang kamu mau dan masukkan alamat kemana makanan kamu mau diantar</li>
                    <li class="info">Tunggu hingga makanan sampai, lalu bayar pesanan anda.</li>
                </ol>
            </div>
            <div class="col-sm-6">
                <h2 class="nav-judul">Offline</h2>
                <ol style="padding-bottom: 100px;">
                    <li class="info">Cari toko kami di google maps atau <a href="#" class="info-link">view on google maps</a></li>
                    <li class="info">Kamu bisa kontak kami di <a href="./Contact.php" class="info-link">contact us</a></li>
                </ol>
            </div>
        </div>
    </div>

    <div class="nav-bar-menu container-fluid">
        <h2 id="nav-menu">Pilihan Menu Noodle Taste</h2>
            <div class="row">
                <div class="col-sm-4 nav-noodle">
                  <img src="./Image/Noodle/PanFried Noodle.jpg" width="auto" height="auto" class="nav-img nav-bar-food">
                  <p class="nav-bar-des"><a href="Menu.php#PanFried" class="noodle-link">Pan Fried Noodle</a></p>
                </div>
                <div class="col-sm-4 nav-noodle">
                  <img src="./Image/Noodle/Pho Noodle.png" width="auto" height="auto" class="nav-img nav-bar-food">
                  <p class="nav-bar-des"><a href="Menu.php#Pho" class="noodle-link">Pho Noodle</a></p>
                </div>
                <div class="col-sm-4  nav-noodle">
                  <img src="./Image/Noodle/Black Bean Noodle.jpg" width="auto" height="auto" class="nav-img nav-bar-food">
                  <p class="nav-bar-des"><a href="Menu.php#BlackBean" class="noodle-link">Black Bean Noodle</a></p>
                </div>
            </div>
            <div class="row">
              <div class="col-sm-4  nav-noodle">
                <img src="./Image/Noodle/Rad Na Thai Noodle.jpg" width="auto" height="auto" class="nav-img nav-bar-food">
                <p class="nav-bar-des"><a href="Menu.php#RadNaThai" class="noodle-link">Rad Na Noodle</a></p>
              </div>
              <div class="col-sm-4  nav-noodle">
                <img src="./Image/Noodle/SoftRamen Noodle.jpg" width="200px" height="210px" class="nav-img nav-bar-food">
                <p class="nav-bar-des"><a href="Menu.php#SoftRamen" class="noodle-link">Soft Ramen Noodle</a></p>
              </div>
              <div class="col-sm-4  nav-noodle">
                <img src="./Image/Noodle/Beef Noodle.jpg" width="auto" height="atuo" class="nav-img nav-bar-food">
                <p class="nav-bar-des"><a href="Menu.php#Beef" class="noodle-link">Beef Noodle</a></p>
              </div>
            </div>
        <p id="link-semua-menu"><a href="./Menu.php" class="noodle-link"><i class="fa fa-angle-double-left"></i> Lihat Semua Menu <i class="fa fa-angle-double-right"></i></a></p>
    </div>
    
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