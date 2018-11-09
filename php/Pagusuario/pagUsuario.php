<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Página do Usuário - <?php echo ucfirst($_SESSION['usuario']); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require '../arquivosRequire/header.php';?>
    <link rel="stylesheet" href="/php/CSS/styleLogin.css">
</head>
<body>
    <?php require '../arquivosRequire/navbar.php';?>
    <a href="/php/Login/login.php"><button class="float-right z-depth-2 mt-4 mr-5 press blue darken-4 press-xl press-circle"><i class="fas text-white fa-arrow-left"></i></button></a>
    <div class="container">
        <div class="card-deck">
            <div class="cardsUsuario card blue darken-4">
                <a data-toggle="modal" data-target="#modalSolicitar">
                    <div class="card-body pb-5">
                    <h5 class="text-white text-center card-title">Solicitar Serviço</h5>
                    <p class="text-white card-text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab at deleniti inventore sit aspernatur eaque optio aliquid reprehenderit eum aliquam?</p>
                    </div>
                </a>
            </div>
            <div class="cardsUsuario card blue darken-4">
                <a href="/php/Acompanhamento/acompanhamento.php">
                    <div class="card-body pb-5">
                    <h5 class="text-white text-center card-title">Acompanhar Serviço</h5>
                    <p class="text-white card-text text-justify">Lorem ipsum dolor sit amet consecteturadipisicing elit. Ab at deleniti inventore sit aspernatur eaque optio aliquidreprehenderit eum aliquam?</p>
                    </div>
                </a>
            </div>
            <div class="cardsUsuario card blue darken-4">
                <a data-toggle="modal" data-target="#modalInfo">
                    <div class="card-body pb-5">
                    <h5 class="text-white text-center card-title">Suas informações</h5>
                    <p class="text-white card-text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab at deleniti inventore sit aspernatur eaque optio aliquid reprehenderit eum aliquam?</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalSolicitar" tabindex="-1" role="dialog">
        <div class="container-fluid">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="text-center primary-color-dark p-5">
                        <h4 class="modal-title text-white w-100">Solicitar Serviço</h4>
                        <br>
                        <div class="row justify-content-center">
                            <input type="text"  name="marca" class="z-depth-1 col-5 form-control mb-4" placeholder="Marca">
                            <input type="text" name="modelo" class="z-depth-1 col-5 ml-4 form-control mb-4" placeholder="Modelo">
                        </div> 
                        <div class="row justify-content-center">
                            <input type="text"  name="placa" class="z-depth-1 col-5 form-control mb-4" placeholder="Placa">
                            <input type="text" name="cor" class="z-depth-1 col-5 ml-4 form-control mb-4" placeholder="Cor">
                        </div> 
                        <div class="row justify-content-center">
                            <input type="text"  name="chassi" class="z-depth-1 col-5 form-control mb-4" placeholder="N° Chassi">
                            <select id="tipo" name="problema" class="z-depth-1 col-5 ml-4 browser-default custom-select mb-4">
                                <option selected>Problema</option>
                                <option value="alinhamento">Alinhamento</option>
                                <option value="trocaOleo">Troca de Óleo</option>
                                <option value="pintura">Pintura</option>
                                <option value="trocaPeca">Troca de Peça</option>
                            </select>
                        </div> 
                        <div class="row justify-content-center">
                            <input type="text"  name="ano" class="z-depth-1 col-5 form-control mb-4" placeholder="Ano">
                            <input type="submit" class="bg-dark border-0 text-white z-depth-1 col-5 ml-4 form-control mb-4" value="Confirmar">
                        </div> 
                        <div class="row justify-content-center">
                            <input type="reset" class="red text-center border-0 text-white z-depth-1 col-11 form-control mb-4" data-toggle="modal" data-target="#modalSolicitar" value="Cancelar">
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalInfo" tabindex="-1" role="dialog">
        <div class="container-fluid">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="blue darken-4 p-4">
                        <h3 class="text-center text-white font-weight-bold">Informações</h3>
                        <h4 class="ml-5 text-white font-weight-bold">Nome:</h4>
                        <h4 class="ml-5 text-white font-weight-bold">Email:</h4>
                        <h4 class="ml-5 text-white font-weight-bold">Telefone:</h4>
                        <div class="container-fluid row justify-content-center">
                            <button class="ml-5 btn rounded btn-danger" data-toggle="modal" data-target="#modalInfo">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require '../arquivosRequire/footer.php';?>
</body>
</html>

<?php
    require '../PHP/init.php';

    if(isset($_POST['marca'], $_POST['modelo'], $_POST['placa'], $_POST['cor'], $_POST['chassi'], $_POST['problema'], $_POST['ano'])){
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $placa = $_POST['placa'];
        $cor = $_POST['cor'];
        $chassi = $_POST['chassi'];
        $problema = $_POST['problema'];
        $ano = $_POST['ano'];

        $connec = db_connect();

        $query = 'INSERT INTO servico (nome, marca, modelo, placa, cor, chassi, problema, ano) VALUES (:nome, :marca, :modelo, :placa, :cor, :chassi, :problema, :ano);';

        $stmt = $connec->prepare($query);
        $stmt->bindValue(':nome', $_SESSION['usuario']);
        $stmt->bindValue(':marca', $marca);
        $stmt->bindValue(':modelo', $modelo);
        $stmt->bindValue(':placa', $placa);
        $stmt->bindValue(':cor', $cor);
        $stmt->bindValue(':chassi', $chassi);
        $stmt->bindValue(':problema', $problema);
        $stmt->bindValue(':ano', $ano);
        $stmt->execute();

    }
?>
