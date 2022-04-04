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
            <a href="#" class="logo">travel <span>.</span></a>
            <nav class="navbar">
                <ul>
                    <li><a href="#home" class="active">home</a></li>
                    <li><a href="#feature">feature</a></li>
                    <li><a href="#about">about</a></li>
                    <li><a href="#gallery">gallery</a></li>
                    <li><a href="#review">review</a></li>
                    <li><a href="#contact">contact</a></li>
                </ul>
            </nav>
            <div class="fas fa-bars"></div>
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