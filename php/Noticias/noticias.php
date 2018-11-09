<?php 

    require_once '../PHP/init.php';
    $conec = db_connect();

    $query = "SELECT id, titulo, dia, texto FROM noticias ORDER BY id DESC LIMIT 5;";

    $stmt= $conec->prepare($query);
    $stmt->execute();

 ?>

 <!DOCTYPE html>
 <html>
 <head>
     <title>Noticias</title>
     <?php require '../arquivosRequire/header.php';?>
     <link rel="stylesheet" type="text/css" href="/php/CSS/styleNoticias.css"/>
 </head>
 <body>
    <?php require '../arquivosRequire/navbarNoticias.php';?>
        <section class="altura">
            <div class="jumbotron">
                <h1 class="text-center text-white mt-5 display-1">Notícias</h1>
            </div>
            <div class="z-depth-3 mb-5 text-justify bg-white col-8 pt-5 campoNoticias">   
                <?php while ($user = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                    <div class="row container-fluid">
                        <h3 class="ml-1 font-weight-bold" style="font-size: 2.2rem;color: #333"><?php echo $user['titulo'] ?></h3>
                        <h6 class="ml-auto mt-3 text-grey" style="font-size: 1rem;color: #333">
                        <?php echo $user['dia'] ?></h6>
                    </div>
                    <p class="ml-4 <?php if($user['id'] > 1){echo 'border-bottom';}?> border-dark mb-5 pb-5" style="font-size: 1.5rem;color: #333"><?php echo $user['texto'] ?></p>
                <?php endwhile; ?>
            </div>
        </section>

   <?php require '../arquivosRequire/footerNoticias.php';?>
 </body>
 </html>

 