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
                    <h2 class="description-header">Es Aice</h2>
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
                    <a href="bes.php">
                    <h2 class="description-header">Beli</h2>
                    </a>
                </div>
            </div>
        </div>
                <div class="row">
                <div class="menu-card">
                    <img
                    src="img/produk_1592722202.jpg"
                    alt="Dimsum"
                    class="menu-card-img"
                    />
                    <h3 class="menu-card-title">- Es Jagung -</h3>
                    <p class="menu-card-+price">IDR 4k</p>

                </div>
                <div class="menu-card">
                    <img
                    src="img/1ff767de-6711-4f20-bedb-80e543b061d5.jpg"
                    alt="Es Kul-kul"
                    class="menu-card-img"
                    />
                    <h3 class="menu-card-title">- Es Semangka -</h3>
                    <p class="menu-card-+price">IDR 3k</p>

                </div>
                <div class="menu-card">
                    <img
                    src="img/cfa804acd25324a6c9dd886f8cf53074.jpeg"
                    alt="Ager Stick"
                    class="menu-card-img"
                    />
                    <h3 class="menu-card-title">- Es Nanas -</h3>
                    <p class="menu-card-+price">IDR 3k</p>

                </div>
                    <div class="menu-card">
                    <img
                        src="img/cb5511fb8aa75859dc39d2641a3e5aea.jpg"
                        alt="Dimsum"
                        class="menu-card-img"
                    />
                    <h3 class="menu-card-title">- Es Coffee -</h3>
                    <p class="menu-card-+price">IDR 4k</p>

                </div>
                <div class="menu-card">
                    <img
                    src="img/data.jpeg"
                    alt="Dimsum"
                    class="menu-card-img"
                    />
                    <h3 class="menu-card-title">- Es Mochi -</h3>
                    <p class="menu-card-+price">IDR 3,5k</p>

                </div>
                <div class="menu-card">
                <img
                    src="img/b95a8bb9c0ad72359cdd4f069c2d0101.jpeg"
                    alt="Dimsum"
                    class="menu-card-img"
                />
                <h3 class="menu-card-title">- Es Cup -</h3>
                <p class="menu-card-+price">IDR 6k</p>
            </div>
            <div class="menu-card">
                <img
                src="img/78a22ec180f425cfcef74345fcc7e23e.jpeg"
                alt="Dimsum"
                class="menu-card-img"
                />
                <h3 class="menu-card-title">- Es Mangga -</h3>
                <p class="menu-card-+price">IDR 4k</p>
            </div>
            <div class="menu-card">
            <img
                src="img/419756ac-5906-4078-8e7b-c41441b3cb49.jpg"
                alt="Dimsum"
                class="menu-card-img"
            />
            <h3 class="menu-card-title">- Es Binggo -</h3>
            <p class="menu-card-+price">IDR 3k</p>
            </div>
            </div>
            </div>
    </div>
    
    
</body>
</html>