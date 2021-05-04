<?php include_once"config.php";?>
<html>
	<body>
		<?php 
			$nome = $_POST["nome"];
			$email = $_POST["email"];
			$assunto = $_POST["assunto"];
			$mensagem = $_POST["mensagem"];

			$conn = mysqli_connect($servidor,$dbusuario,$dbsenha,$dbname);
				mysqli_select_db($conn,'$dbigw');
			$sql = "INSERT INTO tbigw (nome,email,assunto,mensagem) VALUES ('$nome' ,'$email','$assunto','$mensagem')";
				if (mysqli_query($conn, $sql)) {
					echo "<script> window.location = 'contato.php';</script>";

				}else{
			 		echo "Deu errro: " . $sql . "<br>" . mysqli_error($conn);
				}
			mysqli_close($conn);
		?>
	</body>
</html>