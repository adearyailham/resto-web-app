<?php

?>

<html>

<head>
    <link rel = "stylesheet" href="/css/layout.css" />
    <title>Login System Resto</title>

</head>
<body>
    <center>
    <h1> Login </h1>
    <form action="/user/login" method="POST">
    <div class="login"> 
        Username : <input type="text" name = "username" /> <br/>
        Password : <input type="text" name = "password"/> <br/>
        <a href = "/register/"> Register now </a> <br/>
        <input class = "tombol" type = "submit" value="login" />
    </div>
    </form>
    </center>

    <div class="welcome">
    <center><h1>Selamat Datang</h1></center>
    <center><span>Ke website resmi Resto Ade Arya Ilhan! </span></center>

    <p> Resto Ade Arya Ialah tempat berkumpul para pecinta kuliner di area cirebon. 
        Dengan menu makan yang bervariasi dan harga bersahabat!<p>
    <p>Restoran yang telahj didirikan oleh Ade Arya Ilham memiliki prestasi yang 
        patut diberikan acungan jempol bahkan oleh turist asing sekalipun! ingin mencoba makanannya? Klik

    <a href="/daftar/pesanan">Order</a>sekarang! </p>

    </div>

    <div class="Konten-promo">
    <div class="bagian-kiri">
        <img src="/images/gambar1.svg"/>
    </div>
    <div class="bagian-kanan">
    <h2>Makan 1 Gratis Sosro.</h2>
    <p>Khusus buat kamu, kita sediakan sediakan makan 1 gratis minum 
       1 botol teh sosro edisi Orange! jangan sampe kelewatan ya...
       spesial untuk Bulan Ramadhan.
    </p>
    </div>
    </div>

    <div class="konten-diskon">
    <div class="bagian-kiri diskon" >

    <h2>Vector format Image.</h2>
    <p>Khusus buat kamu, kita sediakan sediakan makan 1 gratis minum 
       1 botol teh sosro edisi Orange! jangan sampe kelewatan ya...
       spesial untuk Bulan Ramadhan.
    </p>
    </div>
    <div class="bagian-kanan komputer">
    <img src="/images/gambar2.png"/>
    </p>
    </div>
    </div>

</body>
</html>