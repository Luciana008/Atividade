<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM banco WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
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

	<title>Cadastro</title>


	<style>
		input[type=text] {
			padding: 7px;
			border: 0;
			min-height: auto;
			width: 100%;
			box-shadow: 0 0 15px 4px rgba(0, 0, 0, 0.06);
		}

		input[type=email] {
			padding: 7px;
			border: 0;
			width: 100%;
			box-shadow: 0 0 15px 4px rgba(0, 0, 0, 0.06);
		}

		a {
			text-decoration: none;
		}

		body{
			font-size: 13.0px;
		}
	</style>

	<div class="mt-2">

		<div class="container">

			<div class="col-md-3 mx-auto col-lg-6 p-md-4">

				<div class="p-md-4  bg-light  border border-primary w-100 p-3 d-inline-block rounded"> <!---exato-->

					<div class="f">

						<a href="listar.php"> Voltar</a><br><hr>
						<h5>Usuário:</h5>
						<?php
						if (isset($_SESSION['msg'])) {
							echo $_SESSION['msg'];
							unset($_SESSION['msg']);
						}
						?>


						<form method="POST" action="proc_edit_usuario.php">
							<input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">

							<label>Nome: </label>
							<input type="text" name="nome" placeholder="Digite o nome completo" value="<?php echo $row_usuario['nome']; ?>"><br><br>

							<label>E-mail: </label>
							<input type="email" name="email" placeholder="Digite o seu melhor e-mail" value="<?php echo $row_usuario['email']; ?>"><br><br>

							<input type="submit" value="Editar">
						</form>


					</div>
				</div>
			</div>
		</div>
	</div>















	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	</body>

</html>