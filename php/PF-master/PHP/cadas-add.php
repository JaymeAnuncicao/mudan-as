<?php 
	require_once 'init.php';
	if(isset($_POST['enviar']) && !empty($_POST['texto'])){
		echo "<script>alert('Pedido enviado com sucesso!');</script>";

		$titulo = $_POST['titulo'];
		$texto = $_POST['texto'];
		$conec = db_connect();
		
		$query = "insert INTO noticias (titulo, texto) VALUES (:titulo,:texto);";

		$stmt= $conec->prepare($query);
		$stmt->bindValue(':titulo',$titulo);
		$stmt->bindValue(':texto',$texto);
		$stmt->execute();
	}
 ?>



 <!DOCTYPE html>
 <html>
 <head>
 	<title>Mecanauto</title>
 </head>
 <body>
 	<form action="cadas-add.php" method="post">
 		<input type="text" name="titulo"><br>
 		<textarea name="texto"></textarea><br>
 		<input type="submit" name="enviar">
 		<a href="index.php">Voltar</a>
 	</form>
 </body>
 </html>