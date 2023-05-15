<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hamburger</title>

    <!--Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <!--Feather icons-->
    <script src="https://unpkg.com/feather-icons"></script>

    <!--My Style-->
    <link rel="stylesheet" href="/css/style.css" />
  </head>
  <body>
    <!--Navbar start-->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Ham<span>burger</span>.</a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Kontak</a>
        <a href="/login">Login</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search"> <i data-feather="search"></i></a>
        <a href="#" id="shopping-cart"> <i data-feather="shopping-cart"></i></a>
        <a href="#" id="hamburger-menu"> <i data-feather="menu"></i></a>
      </div>
    </nav>
    <!--Navbar end-->

    <!--Hero Section start-->
    <section class="Hero" id="Home">
      <main class="content">
        <h1>Mari Nikmati Sesuap <span>Burger</span></h1>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos,
          voluptatibus!
        </p>
        <a href="#" class="cta">Beli Sekarang</a>
      </main>
    </section>

    <!--Hero Section end-->

    <!--Feather icons-->
    <script>
      feather.replace();
    </script>

    <!-- My Javascript-->
    <script src="/js/script.js"></script>
  </body>
</html>
