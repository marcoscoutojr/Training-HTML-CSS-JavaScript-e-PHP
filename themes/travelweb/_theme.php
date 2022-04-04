<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= $head; ?>
        <!-- CDN Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css">
        <!-- Custom File CSS -->
        <link rel="stylesheet" href="<?= theme("/assets/css/style.css"); ?>">
    </head>
    <body>
        
        <!--HEADER-->
        <header>
            <nav class="navbar">
                <ul>
                    <li style="--i:1;"><a href="#home">home</a></li>
                    <li style="--i:2;"><a href="#feature">feature</a></li>
                    <li style="--i:3;"><a href="#about">about</a></li>
                    <li style="--i:4;"><a href="#gallery">gallery</a></li>
                    <li style="--i:5;"><a href="#review">review</a></li>
                    <li style="--i:6;"><a href="#contact">contact</a></li>
                </ul>
            </nav>
            <div class="menu"><i class="fas fa-bars"></i></div>
        </header><!--/HEADER-->
        
        <?= $v->section("content"); ?>
        
        <!--FOOTER-->
        <!--/FOOTER-->
        
        
        
        <!-- CDN Jquery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Custom File JS -->
        <script src="<?=theme("/assets/js/scripts.js");?>"></script>
    </body>
</html>
