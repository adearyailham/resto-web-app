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
        <h2>Settings</h2>
        <form action="/settings/submit" method="POST">
        <div class = "formulir-settings"> 
        <span>User Name :  </span>  <input type="text" name="username"/> <br/>
        <span>password :   </span>  <input type="text"  name="password"/> <br/>
        <span>Email :      </span>  <input type="text"  name="email"/> <br/>
        <span>Address :    </span>  <input type="text"  name="address"/> <br/><br/>

        <span>Keep-login : </span> <input type="checkbox" /><br/>

        <input class = "tombol" type = "submit" value="Save" />
        </div>
</form>

    </div>

</body>
</html>