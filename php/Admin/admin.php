<?php
    require '../PHP/init.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Página do Usuário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require '../arquivosRequire/header.php';?>
    <link rel="stylesheet" href="/php/CSS/styleLogin.css">
</head>
<body>
    <?php require '../arquivosRequire/navbar.php';?>
    <div class="ml-5 container col-6 float-left">
        <div class="row">
            <a href="/php/Adm-Servicos/adm-servicos.php"><button class="col-12 z-depth-2 mt-4 mr-5 press-round press-xl press-raised press blue darken-4 text-white">Serviços em Andamento</button></a>
        </div>
        <div class="row justify-content-center">
            <a href="/php/index.php"><button class="float-right z-depth-2 mt-4 press blue darken-4 press-xl press-circle"><i class="fas text-white fa-arrow-left"></i></button></a>
        </div>
    </div>

    <div class="col-md-6 mt-5 mr-5 col-lg-4 float-right container">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="z-depth-3 text-center rounded primary-color-dark p-5">
            <h4 class="modal-title text-white w-100 font-weight-bold">Adicionar Notícia</h4>
            <br>
            <input type="text"  name="titulo" class="form-control mb-4" placeholder="Título">
            <textarea name="texto" id="campoMensagemNoticia" rows="10" class="form-control mb-4" placeholder="Texto"></textarea>
        <button class="btn col-12 btn-black">Enviar</button>
        </form>
        </div>
    <?php require '../arquivosRequire/footer.php';?>
</body>
</html>


<?php
    if(isset($_POST['titulo'], $_POST['texto'])){
        $titulo = $_POST['titulo'];
        $texto = $_POST['texto'];
        $dia = date("d/m/Y");

        $connec = db_connect();

        $query = 'INSERT INTO noticias (titulo, dia, texto) VALUES (:titulo, :dia, :texto);';
        $stmt = $connec->prepare($query);
        $stmt->bindValue(':titulo', $titulo);
        $stmt->bindValue(':dia', $dia);
        $stmt->bindValue(':texto', $texto);
        $stmt->execute();
    }
?>