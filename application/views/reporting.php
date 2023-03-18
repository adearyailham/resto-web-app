<?php

?>

<html>

<head>
    <link rel = "stylesheet" href="layout-home.css" />
    <title>Login System Resto</title>

</head>
<body>
    <div class = "navigasi-kiri">
        <center>
        <img src ="user.png"/>

        <span> Username : Ade Arya Ilham </span>

        <hr/>
        <a href="/order/management">Management Order</a>

        <hr/>
        <a href="/user/management">Management User </a>

        <hr/>
        <a href="/food/management">Management Food </a>

        <hr/>
        <a href="/user/settings">Settings </a>

        <hr/>
        <a href="logout">Logout </a>

        <hr/>
        </center>
    </div>


    <div class = "navigasi-atas">
    <ul>
        <li>Home</li>
        <li>Berita</li>
        <li>Tutorial</li>
        <li>Download</li>
        <li>Kontak</li>
    </ul>
    </div>
    
    <div class = "konten-tengah">

    <div class = "formulir">
    <h1> Reporting Data </h1>
    <div> 
        <span>penerima : </span><input type="text" /> <br/>
        <span>Jumlah : </span><input type="text" /> <br/>
        <span>Harga :    </span><input type="text" /> <br/><br/>
        <span>Alamat :    </span><input type="text" /> <br/><br/>

        <input class = "tombol" type = "button" value="REPORTING DATA" />
    </div>
</div>
   
    </div>

</body>
</html>