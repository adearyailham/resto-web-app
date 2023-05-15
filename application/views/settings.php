<?php

?>

<html>

<head>
    <link rel = "stylesheet" href="/css/layout-home.css" />
    <title>Settings</title>

</head>
<body>
    <?php
        $this->load->view('_template_navigasi');
    ?>


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