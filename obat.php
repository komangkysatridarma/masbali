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
                    <h2 class="description-header">Obat</h2>
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
                    <a href="belio.php">
                    <h2 class="description-header">Beli</h2>
                    </a>
                </div>
            </div>
        </div>
            <form action="" method="post">
            <div class="row">
                <div class="menu-card">
                    <img
                    src="img/rug-1614236088278-3.jpeg.jpg"
                    alt="Dimsum"
                    class="menu-card-img"
                    />
                    <h3 class="menu-card-title">- Bodrex -</h3>
                    <p class="menu-card-+price">IDR 1k</p>

                </div>
                <div class="menu-card">
                    <img
                    src="img/14897_1625195382.8055.jpg"
                    alt="Es Kul-kul"
                    class="menu-card-img"
                    />
                    <h3 class="menu-card-title">- Oskadon -</h3>
                    <p class="menu-card-+price">IDR 1k</p>

                </div>
                <div class="menu-card">
                    <img
                    src="img/a3224d09b415c7b67879ae32c13984ab.jpg"
                    alt="Ager Stick"
                    class="menu-card-img"
                    />
                    <h3 class="menu-card-title">- Ultraflu -</h3>
                    <p class="menu-card-+price">IDR 1k</p>

                </div>
                    <div class="menu-card">
                    <img
                        src="img/9490-1665779892.jpeg"
                        alt="Dimsum"
                        class="menu-card-img"
                    />
                    <h3 class="menu-card-title">- Paramex -</h3>
                    <p class="menu-card-+price">IDR 1k</p>

                </div>
                <div class="menu-card">
                    <img
                    src="img/10000069_2.jpg"
                    alt="Dimsum"
                    class="menu-card-img"
                    />
                    <h3 class="menu-card-title">- Mixagrip -</h3>
                    <p class="menu-card-+price">IDR 1k</p>

                </div>
                <div class="menu-card">
                <img
                    src="img/222822_24-8-2022_11-38-12-1665760972.jpeg"
                    alt="Dimsum"
                    class="menu-card-img"
                />
                <h3 class="menu-card-title">- Panadol -</h3>
                <p class="menu-card-+price">IDR 1k</p>
            </div>
            <div class="menu-card">
                <img
                src="img/20389_1639710170.8274.jpg"
                alt="Dimsum"
                class="menu-card-img"
                />
                <h3 class="menu-card-title">- Tolakangin -</h3>
                <p class="menu-card-+price">IDR 4k</p>
            </div>
            <div class="menu-card">
            <img
                src="img/18.jpg"
                alt="Dimsum"
                class="menu-card-img"
            />
            <h3 class="menu-card-title">- Diapet -</h3>
            <p class="menu-card-+price">IDR 1k</p>
            </div>
            </div>
            </div>
            </form>
    </div>
    
    
</body>
</html>