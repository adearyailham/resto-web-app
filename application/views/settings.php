<?php

?>

<html>

<head>
    <link rel = "stylesheet" href="/css/layout-home.css" />
    <title>Settings</title>

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
        <h2>Settings</h2>
        <div> 
        User Name : <input type="text" /> <br/>
        password : <input type="text" /> <br/>
        Email : <input type="text" /> <br/>
        Address : <input type="text" /> <br/><br/>

        Keep-login : <input type="checkbox" /><br/>

        <input class = "tombol" type = "button" value="Save" />
    </div>

</body>
</html>