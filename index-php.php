<?php 
include __DIR__ .'/\partials-php\db.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php foreach ($dischiArray as $k => $item){?>
            <div class="dischi">
                <img src="<?php echo $item["immagine"] ?>" alt="">
                <h2><?php echo $item['titolo']?></h2>
                <p><?php echo $item['autore'] ?></p>
                <p><?php echo $item['genere'] ?></p>
            </div>
        <?php }?>
    </div>
</body>
</html>