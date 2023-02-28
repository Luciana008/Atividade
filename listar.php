<?php
session_start();
include_once("conexao.php")
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- responsividade -->

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- adicionando Bootstrap -->

	<script src="bootstrap/js/bootstrap.min.js"></script>

	<script src="validacoes.js"></script>

	<title>listar</title>


	<style>
		body {
			font-family: Segoe UI;
			font-size: 13.0px;
			text-align: center;
			padding: 0px;
			text-decoration: none;
			background: linear-gradient(WhiteSmoke, rgb(190, 209, 225), White);

		}

		a {
			text-decoration: none;
		}

		ul {
			font-size: 13.0px;

		}

		p {
		
			font-size: 18.0px;
			padding: 10px;

		}
	</style>



</head>

<body>


	<ul class="nav nav-tabs custom">
		<li class="nav-item">
			<a class="nav-link " href="http://localhost/Atividade/principal.php">Cadastro</a>
		</li>
		<li class="nav-item">
			<a class="nav-link active " href="http://localhost/Atividade/listar.php">Informações de Cadastros</a>
		</li>
	</ul>
	


	<p class="font-weight-light">Usuários:</p>

	

	<?php
	if (isset($_SESSION['msg'])) {
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}

	$result_usuarios = "SELECT * FROM banco";
	$resultado_usuarios = mysqli_query($conn, $result_usuarios);

	while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)) {
		echo "id: " . $row_usuario['id'] . "<br>";
		echo "nome: " . $row_usuario['nome'] . "<br>";
		echo "e-mail: " . $row_usuario['email'] . "<br>";
		echo "<a href='edit_usuario.php?id=" . $row_usuario['id'] . "'> * Editar dados</a><br><hr>";
	}

	?>




	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>

</html>