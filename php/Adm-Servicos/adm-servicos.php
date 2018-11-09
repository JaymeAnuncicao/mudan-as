<?php
    session_start();
?>

<?php
    require_once '../PHP/init.php';
    $conec = db_connect();

    $query = "SELECT nome, marca, modelo FROM servico ORDER BY id DESC;";

    $stmt= $conec->prepare($query);
    $stmt->execute();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrador</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require '../arquivosRequire/header.php';?>
    <link rel="stylesheet" href="/php/CSS/styleLogin.css">
</head>
<body>
    <?php require '../arquivosRequire/navbar.php';?>
    <a href="/php/Login/login.php"><button class="float-right z-depth-2 mt-4 mr-5 press blue darken-4 press-xl press-circle"><i class="fas text-white fa-arrow-left"></i></button></a>
    <div class="container">
        <div class="tabelaAdm table-responsive-lg">
            <table class="z-depth-2 table">
                <thead class="text-center blue darken-4 text-white">
                    <tr>
                    <th class="dadosTabela font-weight-bold" scope="col">Cliente</th>
                    <th class="dadosTabela font-weight-bold" scope="col">Veículo</th>
                    <th class="dadosTabela font-weight-bold" scope="col">Atualizar</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php while($user = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                        <tr>
                            <td class="dadosTabela" ><?php echo ucfirst($user['nome']);?></td>
                            <td class="dadosTabela" ><?php echo $user['modelo'];?></td>
                            <td><a href="" data-toggle="modal" data-target="#modalAtualizar"><i class="fas fa-edit"></i></a></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
                </table>
        </div>
    </div>

    <div class="modal fade" id="modalAtualizar" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="text-center primary-color-dark p-5">
                    <h4 class="modal-title text-white w-100 font-weight-bold">Atualizar</h4>
                    <br>
                    <input type="text" name="peca" class="form-control mb-4" placeholder="Peça">
                    <input type="number" name="preco" class="form-control mb-4" placeholder="Preço">
                    <div class="form-group">
                        <textarea name="comentario" class="form-control rounded" id="exampleFormControlTextarea2" rows="3" placeholder="Comentário"></textarea>
                    </div>

                <button class="w-100 btn btn-black z-depth-1">Enviar</button>
                <input type="reset" class="btn red text-center border-0 text-white z-depth-1 form-control mb-4" data-toggle="modal" data-target="#modalSolicitar" value="Cancelar">
                </form>
            </div>
        </div>
    </div>
    <?php require '../arquivosRequire/footer.php';?>
</body>
</html>

<?php
    if(isset($_POST['peca'], $_POST['preco'], $_POST['comentario'])){

        $peca = $_POST['peca'];
        $preco = $_POST['preco'];
        $comentario = $_POST['comentario'];
        $dia = date("d/m/Y");

        $connec = db_connect();

        $query = 'INSERT INTO andamento (peca, preco, dia, comentario) VALUES (:peca, :preco, :dia, :comentario);';
        $stmt = $connec->prepare($query);
        $stmt->bindValue(':peca', $peca);
        $stmt->bindValue(':preco', $preco);
        $stmt->bindValue(':dia', $dia);
        $stmt->bindValue(':comentario', $comentario);
        $stmt->execute();
    }
?>

