<?php
  include "./cms/connection.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>HOW TO ORDER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    * {
      box-sizing: border-box;
    }
    
    
    [class*="col-"] {
      float: left;
      padding: 15px;
    }
    
    html {
      font-family: "Lucida Sans", sans-serif;
    }
    
    .header {
      background-color: #eae6ec;
      color: #0c0b0b;
      padding: 15px;
    }
    
    .menu ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }
    
    .menu li {
      padding: 8px;
      margin-bottom: 7px;
      background-color: #33b5e5;
      color: #ffffff;
      box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
    }
    
    .menu li:hover {
      background-color: #0099cc;
    }
    
    .aside {
      background-color: #f2f7f8;
      padding: 15px;
      color: #1b1a1a;
      text-align: center;
      font-size: 14px;
      box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
    }
    
    .footer {
      background-color: #ddf033;
      color: #fcfcfc;
      text-align: left;
      font-size: 12px;
      padding-bottom: 20%;
    

    }
    
    /* For mobile phones: */
    [class*="col-"] {
      width: 100%;
    }
    
    @media only screen and (min-width: 600px) {
      /* For tablets: */
      .col-s-1 {width: 8.33%;}
      .col-s-2 {width: 16.66%;}
      .col-s-3 {width: 25%;}
      .col-s-4 {width: 33.33%;}
      .col-s-5 {width: 41.66%;}
      .col-s-6 {width: 50%;}
      .col-s-7 {width: 58.33%;}
      .col-s-8 {width: 66.66%;}
      .col-s-9 {width: 75%;}
      .col-s-10 {width: 83.33%;}
      .col-s-11 {width: 91.66%;}
      .col-s-12 {width: 100%;}
    }
    @media only screen and (min-width: 768px) {
      /* For desktop: */
      .col-1 {width: 8.33%;}
      .col-2 {width: 16.66%;}
      .col-3 {width: 25%;}
      .col-4 {width: 33.33%;}
      .col-5 {width: 41.66%;}
      .col-6 {width: 50%;}
      .col-7 {width: 58.33%;}
      .col-8 {width: 66.66%;}
      .col-9 {width: 75%;}
      .col-10 {width: 83.33%;}
      .col-11 {width: 91.66%;}
      .col-12 {width: 100%;}
    }
    </style>
  </head>
  <body>
    
    <div class="row header">
        <img src="Noodle taste v2.png" alt="" width="30%" height="30%">
      
      <ul>
        <li> <b><a href="Home" target="_blank">Home</a></b></li>
        <li><b><a href="Menu" target="_blank">Menu</a></b> </li>
        <li> <b><a href="About Us" target="_blank">About Us</a></b> </li>
        <li>  <b><a href="Contact Us" target="_blank">Contact Us</a></b> </li>
        <li> <b><a href="How To Order" target="_self">How To Order</a></b> </li>
    </ul>
      

    </div>
    
    <div class="row">
        <div class="col-1 col-s-3"></div>
        <h1>
            1. Klik tombol <b><a href="menu" target="_blank">menu</a></b>
        <p> 2. Kamu bisa lihat menu makanan favoritmu di halaman menu </p>
        <p> 3. Tambahin menu yang kamu mau dan masukkan alamat kemana makanan kamu mau diantar </p>
        <p> 4. Tunggu hingga makanan sampai, lalu bayar pesanan anda. </p>

            
         </h1>
      </div>
    

      
    
    <div class="footer">
        <ul>
            <li> <p><b><a href="Home" target="_blank">Home</a></b></p></li>
            <li> <p><b><a href="Menu" target="_blank">Menu</a></b></p> </li>
            <li> <p><b><a href="About Us" target="_blank">About Us</a></b></p> </li>
            <li> <p><b><a href="Contact Us" target="_blank">Contact Us</a></b></p> </li>
            <li> <p><b><a href="How To Order" target="_self">How To Order</a></b></p> </li>
        </ul>

    </div>
                
    
    </body>
    </html>
    