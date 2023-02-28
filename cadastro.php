<?php

session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING );
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$criptografada = md5($senha);


/*echo "Nome: $nome <br>";
echo "E-mail: $email <br>";
echo "senha: $senha<br>"*/

$result_usuario = "INSERT INTO banco(nome, email, senha) VALUES ('$nome','$email', '$criptografada')";
$result_usuario = mysqli_query($conn, $result_usuario);



if (mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style='color:blue; font-family:arial;
    font-size: 10.0px; text-align: center ;'> *Cadastro realizado sucesso! Acesso aos dados do banco: .</p>";
    
    header("Location: listar.php");
}
else
{
    $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: principal.php");

}
