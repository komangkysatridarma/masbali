<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Warung Mas Bali</title> 
</head>
<body>
    
    <nav class="navbar">
    <a href="#" class="navbar-logo">Mas<span>Bali</span>.</a>
      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Menu</a>
        <a href="login.php" class="btn">Login</a>
        <a href="register.php" class="btn">Register</a>

      </div>
    </nav>

    
      <section class="hero" id="home">
        <main class="content">
            <div class="ket">
                <h1>Selamat <span>Datang</span></h1>
                <p>Di Warung Mas Bali</p>
            </div>
          <div class="foto">
            <img src="img/keluargah.png" alt="">
          </div>
        </main>
      </section>

      <section id="about" class="about">
        <h2><span>Tentang</span> Kami</h2>
  
        <div class="row">
          <div class="about-img">
            <img src="img/warung-kelontong-madura-1.jpeg" alt="Tentang Kami" />
          </div>
          <div class="content">
            <h3>Kenapa memilih Warung kami?</h3>
            <p>
              Warung kami memiliki berbagai macam barang, dan juga warung kita memiliki
              tempat yang strategis.
            </p>
            <p>
              Jika barang yang diminta konsumen tidak tersedia, maka warung kita akan meminta
              sang konsumen menunggu sekitar 1 atau 2 hari, kita akan mencatatnya lalu membeli.
            </p>
          </div>
        </div>
      </section>

      <section id="menu" class="menu">
        <h2>Menu <span>Kami</span></h2>
        <p>
         Menu kami cukup beragam untuk saat ini, mungkin kedepannya kita akan
         memperbanyak menu lagi, tetapi karena budget kami masih kecil, jadi
         tolong di maklumi.
        </p>


        <div class="row">
          <div class="menu-card">
            <img
              src="img/makanan-ringan_20161022_192131.jpg"
              alt="Dimsum"
              class="menu-card-img"
            />
            <h3 class="menu-card-title">- Jajanan -</h3>
            <a href="jajanan.php" class="btn-beli">Cek Detail</a>
          </div>
          <div class="menu-card">
            <img
              src="img/aice.png"
              alt="Es Kul-kul"
              class="menu-card-img"
            />
            <h3 class="menu-card-title">- Es Aice -</h3>
            <a href="es.php" class="btn-beli">Cek Detail</a>
          </div>
          <div class="menu-card">
            <img
              src="img/1626940-arya-bar-total-10.jpg"
              alt="Ager Stick"
              class="menu-card-img"
            />
            <h3 class="menu-card-title">- Sabun Batangan -</h3>
            <a href="sabun.php" class="btn-beli">Cek Detail</a>
          </div>
            <div class="menu-card">
              <img
                src="img/royco-ayam-8gr-31816444-png.png"
                alt="Dimsum"
                class="menu-card-img"
              />
              <h3 class="menu-card-title">- Bumbu Penyedap -</h3>
              <a href="bumbu.php" class="btn-beli">Cek Detail</a>
          </div>
          <div class="menu-card">
            <img
              src="img/c2b05705-1847-4d6e-a856-996834521b4a.jpg"
              alt="Dimsum"
              class="menu-card-img"
            />
            <h3 class="menu-card-title">- Sabun Cuci -</h3>
            <a href="cuci.php" class="btn-beli">Cek Detail</a>
        </div>
        <div class="menu-card">
          <img
            src="img/rug-1614236088278-3.jpeg.jpg"
            alt="Dimsum"
            class="menu-card-img"
          />
          <h3 class="menu-card-title">- Obat -</h3>
          <a href="obat.php" class="btn-beli">Cek Detail</a>
      </div>
      <div class="menu-card">
        <img
          src="img/indomie.png"
          alt="Dimsum"
          class="menu-card-img"
        />
        <h3 class="menu-card-title">- Mie Instan -</h3>
        <a href="mie.php" class="btn-beli">Cek Detail</a>
      </div>
    <div class="menu-card">
      <img
        src="img/20053867_1.jpg"
        alt="Dimsum"
        class="menu-card-img"
      />
      <h3 class="menu-card-title">- Minuman -</h3>
      <a href="minuman.php" class="btn-beli">Cek Detail</a>
      </div>
      </div>

</body>
</html>