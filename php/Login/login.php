<?php
    session_start();
    $_SESSION['usuario'] = '';
    require '../PHP/init.php';
    $err = '';
    $cadastro = true;
    $login = true;

    if(isset($_POST['emailLogin'], $_POST['senhaLogin'])){
        $email = $_POST['emailLogin'];
        $senha = sha1($_POST['senhaLogin']);

        $connec = db_connect();

        $query = 'SELECT nome, email, senha FROM usuarios WHERE email = :email;';
        $stmt = $connec->prepare($query);
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $nome = $array[0]['nome'];
        if(sizeof($array) == 0){
            echo 'Preencha os campos';
        }else if(strcmp($senha, $array[0]['senha']) == 0){
            header("Location: /php/Pagusuario/pagUsuario.php");
            $_SESSION['usuario'] = $nome;
            exit();
        }else if(sizeof($array) == 0){
            $login = false;
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require '../arquivosRequire/header.php';?>
    <link rel="stylesheet" href="/php/CSS/styleLogin.css">
</head>
<body>
    <?php require '../arquivosRequire/navbar.php';?>
    <main class="altura">
        <div class="container col-lg-6 mt-5 align-middle login">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="z-depth-3 rounded text-center blue darken-4 p-5 divLogin">
                <p class="h4 text-white mb-4">Login</p>
                    <input type="email" id="defaultLoginFormEmail" name="emailLogin" class="z-depth-1 form-control mb-4" placeholder="E-mail" required>
        
                    <input type="password" id="defaultLoginFormPassword" name="senhaLogin" class="z-depth-1 form-control mb-4" placeholder="Password" required>
                    <input class="z-depth-1 btn rounded black btn-block my-4" type="submit" value="Entrar">
                    <p class="text-light">Não tem conta?
                    <a class="text-white" data-toggle="modal" data-target="#modalCadastro">Cadastre-se</a>
                </p>
            </form>
        </div>
    
        <div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form class="text-center primary-color-dark p-5" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <h4 class="modal-title text-white w-100 font-weight-bold">Cadastre-se</h4>
                        <br>
                        <input type="text" required name="nome" class="z-depth-1 form-control mb-4" placeholder="Nome">
                        <input type="email" required name="email" class="z-depth-1 form-control mb-4" placeholder="E-mail">
                        <input type="text"  required name="telefone" class="z-depth-1 form-control mb-4" placeholder="Telefone">
                        <input type="password" required name="senha" class="z-depth-1 form-control mb-4" placeholder="Senha">
                    <button class="btn z-depth-1 col-12 btn-black">Confirmar</button>
                    </form>
                </div>
            </div>
        </div>

    </main>    
    <?php require '../arquivosRequire/footer.php';?>
</body>
</html>

<?php
    
    if(isset($_POST['nome'], $_POST['email'], $_POST['telefone'], $_POST['senha'])){

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = sha1($_POST['senha']);

        // $test = validar($nome, $email, $telefone);

        $connec = db_connect();

        $query1 = 'SELECT email FROM usuarios WHERE email=:email';
        $stmt = $connec->prepare($query1);
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(sizeof($array) == 0){
            $query2 = 'INSERT INTO usuarios (nome, email, telefone, senha) VALUES (:nome, :email, :telefone, :senha);';
            $stmt = $connec->prepare($query2);
            $stmt->bindValue(':nome', $nome);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':telefone', $telefone);
            $stmt->bindValue(':senha', $senha);
            $stmt->execute();
        }else{
            $err = 'Email já cadastrado';
            $cadastro = false;
        }
    }
?>