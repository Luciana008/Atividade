<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "UPDATE banco SET nome='$nome', email='$email') WHERE id='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green; font-size: 14.0px;'>Atenção: usuário editado com sucesso!</p>";
	header("Location: listar.php");
}else{
	$_SESSION['msg'] = "<p style='color:red; font-size: 14.0px;'>O Usuário não foi editado com sucesso</p>";
	header("Location: editar.php?id=$id");
}
