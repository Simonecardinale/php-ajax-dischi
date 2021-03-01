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
    <div class="dischi">
        <?php foreach ($dischiArray as $k => $item){?>
            <img src="<?php echo $item["immagine"] ?>" alt="">
            <?php }?>
    </div>
</body>
</html>