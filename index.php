<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- adicionando Bootstrap -->

    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="validacoes.js"></script>

    <style>
        .e {
            font-family: Segoe UI;
            text-shadow: 0px 2px 10px rgb(221, 213, 213);
            letter-spacing: 1px;
            text-align: center;
            padding: 70px;
            text-decoration: none;

        }

        a {
            text-decoration: none;
        }
    </style>



</head>

<body>
    <div class="e">

        <div class="mt-2">

            <div class="container">

                <div class="col-md-3 mx-auto col-lg-6 p-md-4">

                    <div class="p-md-4  bg-light  border border-primary w-100 p-3 d-inline-block rounded">
                        <?php
                        if (isset($_COOKIE['login'])) //correção para não ler a  variavel vazia e dar erro no primeiro carregamento
                        {
                            $login_cookie = $_COOKIE['login'];

                            if (isset($login_cookie)) {
                                echo "Bem-Vindo, $login_cookie <br>.";
                                echo "Essas informações <font color='red'>PODEM</font> ser acessadas por você";
                                echo "<script language='javascript' type='text/javascript'>
        alert('Você está sendo redirecionado para a pagina do sistema');window.location
        .href='grafinformandodados.html';</script>"; //posso direcionar para qualquer lugar o acesso permitido
                            }
                        } else {
                            echo "Bem-Vindo, convidado! <br>";
                            echo " Realize o cadastro para vizualização e alteração de cadastros, pois as informações ainda <font color='red'>NÃO PODEM</font> ser acessadas por você.";
                            echo "<br><a href='http://localhost/Atividade/principal.php'> * Realize o cadastro ";
                        }

                        ?>

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