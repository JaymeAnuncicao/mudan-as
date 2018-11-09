<?php
    session_start();

    require_once '../PHP/init.php';
    $conec = db_connect();

    $query1 = "SELECT id, peca, preco, dia, comentario FROM andamento ORDER BY id DESC;";
    $query2 = "SELECT id, peca, preco, dia, comentario FROM andamento ORDER BY id DESC;";

    $stmt1= $conec->prepare($query1);
    $stmt1->execute();
    $stmt2= $conec->prepare($query2);
    $stmt2->execute();

    $valorTotal = 0;
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
    <a href="/php/index.php"><button class="float-right z-depth-2 mt-4 mr-5 press blue darken-4 press-xl press-circle"><i class="fas text-white fa-arrow-left"></i></button></a>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="table-responsive-lg">
                    <table style="margin-top:15vh" class="z-depth-3 table">
                        <thead class="text-center blue darken-4 text-white">
                        <tr>
                            <th class="dadosTabela font-weight-bold" scope="col">Peça</th>
                            <th class="dadosTabela font-weight-bold" scope="col">Dia</th>
                            <th class="dadosTabela font-weight-bold" scope="col">Comentário</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php 
                                $array = $stmt1->fetchAll(PDO::FETCH_ASSOC);
                                for($i = 0; $i < sizeof($array);  $i++){
                                    $valorTotal += $array[$i]['preco'];
                                }
                                while($user = $stmt2->fetch(PDO::FETCH_ASSOC)): ?>
                                <tr>
                                    <td class="dadosTabela" ><?php echo ucfirst($user['peca']);?></td>
                                    <td class="dadosTabela" ><?php echo $user['dia'];?></td>
                                    <td class="dadosTabela" ><?php echo $user['comentario'];?></td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-2 ml-auto mr-5">
                <table style="margin-top:15vh" class="table-borderless ml-auto z-depth-3 table">
                    <thead class="black-text">
                        <tr class="text-center">
                            <th class="font-weight-bold">Valor Gasto</th>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <?php echo $valorTotal;?>
                            </td>
                        </tr>
                    </thead>
                    <thead class="black-text">
                        <tr class="text-center">
                            <th class="font-weight-bold">Orçamento</th>
                        </tr>
                        <tr>
                            <td class="text-center">
                                123123
                            </td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <?php require '../arquivosRequire/footer.php';?>
</body>
</html>