<?php 

	function db_connect(){

		$dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME;
		$user= DB_USERNAME;
		$password= DB_PASSWORD;

		try {
			$PDO = new PDO($dsn, $user, $password);
			$PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			return $PDO;

		} catch (PDOexception $e) {
			echo' ERRO: '. $e->getCode() . 'Mensagem: ' . $e->getMessage();
		}
	}

	function validar($nome, $email, $telefone){
            if(!preg_match("/^[a-zA-Z ]*$/", $nome)){
				exit();
            }
            if(!preg_match("/^[a-zA-Z0-9. ]*$/", $email)){
                exit();
            }
            if(!preg_match("/^[1-9]{2}\-[2-9][0-9]{7,8}$/", $telefone)){
                exit();
            }
        }
 ?>