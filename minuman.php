<?php
session_start();

if(!isset($_SESSION["login"])){
  header("Location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <style>
        *{
            font-family:"Ubuntu", sans-serif;
            padding:0;
            margin:0;
            box-sizing:border-box;
            text-decoration:none;
            color:#fff;
        }
        body{
            background-image:url("img/polygon-scatter-haikei.svg");
            background-size:cover;
            background-repeat:repeat;
        }
        .container{
            display:flex;
            min-height:100vh;
        }
        .sidebar{
            background-color:#000;
            width:260px;
            padding:24px;
            display:flex;
            flex-direction:column;
        }
        .sidebar .description-header{
            font-style:normal;
            font-weight:700;
            font-size:25px;
            line-height:16px;
            text-align:center;
            color:#fff;
            margin:0 auto;
        }
        .sidebar .header .list-item{
            display:flex;
            flex-direction:row;
            align-items:center;
            padding:12px 10px;
            height:40px;
            border-bottom:1px solid #fff;
        }
        .sidebar .header .illustration{
            display:flex;
            flex-direction:column;
            text-align:center;
            margin:20px auto;
            border-bottom:1px solid #fff;
        }
        .sidebar .main .list-item .description{
            font-style:normal;
            font-weight:700;
            font-size:25px;
            line-height:16px;
            text-align:center;
            color:#fff;
            margin:0 auto;
        }
        .sidebar .main .list-item{
            display:flex;
            flex-direction:row;
            align-items:center;
            padding:12px 10px;
            border-radius:8px;
            width:212px;
            transition: all ease-in;           
        }
        .sidebar .main .list-item:hover{
            background: #FF9900;
            transition: all ease-in .2s;
        }
        .row {
display: flex;
justify-content: center;
flex-wrap: wrap;
margin-top: 2rem;
}
.row .menu-card {
text-align: center;
padding-bottom: 4rem;
border:1px solid;
border-radius:10px;
padding: 20px 0;
margin: 20px 10px;
}
.row .menu-card img {
width: 15rem;
border-radius: 10%;
margin: 0 30px;
}
.row .menu-card .menu-card-title {
margin-top: 1rem auto 0.5rem;
}
.btn{
display: inline-block;
margin-top: 1.5rem;
padding: .4rem 2rem;
border-radius: 5rem;
background:#E8A9A9;
font-size: 1.7rem;
color: #fff;
cursor: pointer;
box-shadow: 0 .5rem 1rem rgba(0,0,0,0.1);
transition: all .3s linear;
}
.btn-beli{
display: inline-block;
margin-top: 1.5rem;
padding: .3rem 2rem;
border-radius: 5rem;
background:#E8A9A9;
font-size: 1rem;
color: #fff;
cursor: pointer;
box-shadow: 0 .5rem 1rem rgba(0,0,0,0.1);
transition: all .3s linear;
}
    </style>

    <div class="container">
        <div class="sidebar">
            <div class="header">
                <div class="list-item">
                    <h2 class="description-header">Minuman</h2>
                </div>
                <div class="illustration">
                <?php
        date_default_timezone_set("Asia/Jakarta");

        $x = time();
        $hour = date("G", $x);

        if($hour >=0 && $hour <=11){
            echo "<h2>Selamat Pagi!</h2>";
        }
        elseif($hour >=12 && $hour <=15){
            echo "<h2>Selamat Siang!</h2>";
        }
        elseif($hour >=16 && $hour <=18){
            echo "<h2>Selamat Sore!</h2>";
        }
        elseif($hour >=19 && $hour <=23){
            echo "<h2>Selamat Malam!</h2>";
        }
        ?>
                </div>
            </div>
            <div class="main">
                <div class="list-item">
                    <a href="index.php">
                    <h2 class="description-header">Home</h2>
                    </a>
                </div>
            </div>
            <div class="main">
                <div class="list-item">
                    <a href="belimi.php">
                    <h2 class="description-header">Beli</h2>
                    </a>
                </div>
            </div>
        </div>
                <div class="row">
                <div class="menu-card">
                    <img
                    src="img/teh-gelas_teh-gelas-original-cup-180ml_full02.jpg"
                    alt="Dimsum"
                    class="menu-card-img"
                    />
                    <h3 class="menu-card-title">- Teh Gelas -</h3>
                    <p class="menu-card-+price">IDR 1k</p>

                </div>
                <div class="menu-card">
                    <img
                    src="img/80749c2104f3b53aa64253a8503f4082.jpeg"
                    alt="Es Kul-kul"
                    class="menu-card-img"
                    />
                    <h3 class="menu-card-title">- Ale Ale -</h3>
                    <p class="menu-card-+price">IDR 1k</p>

                </div>
                <div class="menu-card">
                    <img
                    src="img/teh-rio-gelas-all-varian-457276.jpg"
                    alt="Ager Stick"
                    class="menu-card-img"
                    />
                    <h3 class="menu-card-title">- Teh Rio -</h3>
                    <p class="menu-card-+price">IDR 1k</p>

                </div>
                    <div class="menu-card">
                    <img
                        src="img/ca202c16-b8d9-458e-b65d-c8e02029d4a8.jpg"
                        alt="Dimsum"
                        class="menu-card-img"
                    />
                    <h3 class="menu-card-title">- Kopikap -</h3>
                    <p class="menu-card-+price">IDR 1k</p>

                </div>
                <div class="menu-card">
                    <img
                    src="img/Sprite.jpg"
                    alt="Dimsum"
                    class="menu-card-img"
                    />
                    <h3 class="menu-card-title">- Sprite -</h3>
                    <p class="menu-card-+price">IDR 5k</p>

                </div>
                <div class="menu-card">
                <img
                    src="img/3d3d1c92-d8f8-47c4-b376-85b8f825567a_169.jpeg"
                    alt="Dimsum"
                    class="menu-card-img"
                />
                <h3 class="menu-card-title">- Coca Cola -</h3>
                <p class="menu-card-+price">IDR 5k</p>
            </div>
            <div class="menu-card">
                <img
                src="img/311_Okky_Jelly_Drink_Blackcurrant_1Karton.jpg"
                alt="Dimsum"
                class="menu-card-img"
                />
                <h3 class="menu-card-title">- Okky Jelly Drink -</h3>
                <p class="menu-card-+price">IDR 1k</p>
            </div>
            <div class="menu-card">
            <img
                src="img/balipostcom_jaga-lingkungan-bali-bersih-aqua-hadirkan-botol-100-persen-r-pet_03.jpg"
                alt="Dimsum"
                class="menu-card-img"
            />
            <h3 class="menu-card-title">- Aqua -</h3>
            <p class="menu-card-+price">IDR 3k</p>
            </div>
            </div>
            </div>
    </div>
    
    
</body>
</html>