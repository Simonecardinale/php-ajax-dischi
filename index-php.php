<?php 
include __DIR__ .'/partials-php\db.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="container">
            <div class="nav-container">
                <div class="logo-container">
                    <img src="https://cdn.pixabay.com/photo/2018/05/08/21/29/spotify-3384019_960_720.png" alt="">
                </div>
                <div class="menu-container">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="dischi-container">
            <?php foreach ($dischiArray as $k => $item){?>
                <div class="dischi">
                    <img src="<?php echo $item["immagine"] ?>" alt="">
                    <h2><?php echo $item['titolo']?></h2>
                    <p><?php echo $item['autore'] ?></p>
                    <p><?php echo $item['genere'] ?></p>
                </div>
            <?php }?>
        </div>
    </div>
</body>
</html>