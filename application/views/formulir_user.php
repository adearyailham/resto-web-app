<?php

?>

<html>

<head>
    <link rel = "stylesheet" href="/css/layout-home.css" />
    <title>Formulir User System Resto</title>

</head>
<body>
    <div class = "navigasi-kiri">
        <center>
        <img src ="/images/user.png"/>

        <span> Username : Ade Arya Ilham </span>

        <hr/>
        <a href="/order/management">Management Order</a>

        <hr/>
        <a href="/user/management">Management User </a>

        <hr/>
        <a href="/food/management">Management Food </a>

        <hr/>
        <a href="/settings">Settings </a>

        <hr/>
        <a href="/logout">Logout </a>

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
    <h1> Formulir User </h1>
    <form action="/user/submit" method="POST">
    <div> 
        <span>Username : </span><input type="text" name="username" /> <br/>
        <span>Password : </span><input type="text" name="pass"/> <br/>
        <span>Email :    </span><input type="text" name="email"/> <br/><br/>

        <input class = "tombol" type = "submit" value="REGISTER" />
    </div>
    </form>
    </div>
   
    </div>

</body>
</html>