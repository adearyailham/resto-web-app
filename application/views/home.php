<?php

?>

<html>

<head>
    <link rel = "stylesheet" href="/css/layout-home.css" />
    <title>Login System Resto</title>

</head>
<body>
    <?php
        $this->load->view('_template_navigasi');
    ?>

    <div class = "navigasi-atas">
    <ul>
        <li><a href="/home_atas">Home </a></li>
        <li><a href="/berita_atas">Berita </a></li>
        <li><a href="/tutorial_atas">Tutorial </a></li>
        <li><a href="/download_atas">Download </a></li>
        <li><a href="/kontak_atas">Kontak </a></li>
    </ul>
    </div>
    
    <div class = "konten-tengah">

        <div class = "menu"><a href="user/add"><img src="/images/add-user.png"> </a>
        <p>Create New User.</p>
        </div>

        <div class = "menu"><a href="order/add"><img src="/images/add-order.png"> </a>
        <p>Create New Order.</p>
        </div>

        <div class = "menu"><a href="food/add"><img src="/images/add-food.png"> </a>
        <p>Create New Food.</p>
        </div>

        <div class = "menu"><a href="discount/add"><img src="/images/add-discount.png"> </a>
        <p>Create Discount.</p>
        </div>
        
        <div class = "menu"><a href="drink/add"><img src="/images/add-drink.png"> </a>
        <p>Create New Food.</p>
        </div>

        
        <div class = "menu"><a href="reporting.php"><img src="/images/reporting.png"> </a>
        <p>Reporting all data.</p>
        </div>

        
        
       
    </div>

</body>
</html>