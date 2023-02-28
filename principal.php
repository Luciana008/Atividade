<?php
session_start();
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
        .f {
            font-family: Segoe UI;
            text-shadow: 0px 2px 10px rgb(221, 213, 213);
            letter-spacing: 1px;
        }


        .border-customized-input {
            border: 2px solid #000000;
        }

        .atencao {
            font-family: arial;
            font-size: 12.0px;
            text-shadow: 0px 2px 8px rgb(255, 255, 255);
            letter-spacing: 0px;

        }

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


        input[type=password] {
            padding: 7px;
            border: 0;
            width: 100%;
            box-shadow: 0 0 15px 4px rgba(0, 0, 0, 0.06);
        }

        input[type=passwordtwo] {
            padding: 7px;
            border: 0;
            width: 100%;
            box-shadow: 0 0 15px 4px rgba(0, 0, 0, 0.06);
        }

        body {

            background: linear-gradient(WhiteSmoke, rgb(190, 209, 225), White);
        }

        .tamanho {
            font-size: 14.0px;
        }

        ul {
            font-size: 13.0px;

        }

    </style>

</head>

<body>

    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>


    <ul class="nav nav-tabs custom">
        <li class="nav-item">
            <a class="nav-link active" href="http://localhost/Atividade/principal.php">Cadastro</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="http://localhost/Atividade/listar.php">Informações de Cadastros</a>
        </li>
    </ul>



    <!--Formulário-->

    <div class="mt-2">

        <div class="container">

            <div class="col-md-3 mx-auto col-lg-6 p-md-4">

                <div class="p-md-4  bg-light  border border-primary w-100 p-3 d-inline-block rounded"> <!---exato-->

                    <div class="f">

                        <form class="was-validated" id="form" method="post" action="cadastro.php" data-toggle="validator">

                            <div class="form-group"> <!--ajuda com o espaçamento, "agrupando elementos específico"-->

                                <label class="control-label">Nome</label>
                                <input id="nome" name="nome" class="form-control form-control-sm" type="text" placeholder="Informe seu nome" required>
                                <small id="erro-nome" class="invalid-feedback"></small>
                            </div>


                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" name="email" class="form-control form-control-sm" id="email" placeholder="nome@exemplo.com" required>
                                <small id="erro-email" class="invalid-feedback"></small>

                            </div>


                            <div class="form-group">
                                <label for="senha">Senha</label>
                                <input type="password" name="senha" class="form-control form-control-sm" id="senha" placeholder="Digite sua senha..." minlength="4" maxlength="8" required>
                                <small id="erro-senha" class="invalid-feedback"></small>
                            </div>


                            <div class="form-group">
                                <label for="repete-senha">Confirme a senha</label>
                                <input type="password" name="repete-senha" class="form-control form-control-sm" id="repete-senha" placeholder="Confirme sua senha..." required minlength="4" maxlength="8">
                                <small id="erro-repete-senha" class="invalid-feedback"></small>
                            </div>


                            <div class="alert alert-danger" hidden id="senhas-diferentes">
                                * Atenção! As senhas não estão iguais.
                            </div>


                            <div class="form-group">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-outline-primary btn-sm tamanho" onclick="validar()" >Enviar</button>
                                </div>
                            </div>

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