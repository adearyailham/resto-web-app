<?php

?>

<html>

<head>
    <link rel = "stylesheet" href="/css/layout-home.css" />
    <title>Login System Resto</title>

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
        <a href="/drink/management">Management Drink </a>
        

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
    <h1> Drink </h1>
    <form action="/drink/submit" method="post">
    <div> 
        <span>Name : </span><input type="text" name="name" /> <br/>
        <span>Price : </span><input type="text" name="price"/> <br/>
        <span>Rating :    </span><input type="text" name="rating"/> <br/><br/>

        <input class = "tombol" type = "submit" value="SAVE" />
    </div>
</form>
</div>
   
    </div>

</body>
</html>