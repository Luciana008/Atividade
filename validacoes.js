function validar() {
    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;
    var repeteSenha = document.getElementById('repete-senha').value;

    if (nome == "") {

        document.getElementById('erro-nome').innerHTML = "* Por favor, preencha este campo.";
    }
    else {

        document.getElementById('erro-nome').innerHTML = "";

    }

    if (email == "") {

        document.getElementById('erro-email').innerHTML = "* Por favor, preencha este campo.";
    }
    else {

        document.getElementById('erro-email').innerHTML = "";

    }
    if (senha == "") {

        document.getElementById('erro-senha').innerHTML = "* Por favor, informe a senha.";
    }
    else {
        document.getElementById('erro-senha').innerHTML = "";
        if (repeteSenha == "") {
            document.getElementById('erro-repete-senha').innerHTML = "* Por favor, informe a senha novamente.";
            document.getElementById('repete-senha').focus();
        }
        else {
            document.getElementById('erro-repete-senha').innerHTML = "";
            if (senha != repeteSenha) {
                document.getElementById('senhas-diferentes').removeAttribute('hidden');
            }
            else 
            { 

                document.getElementById('senhas-diferentes').setAttribute('hidden','true');

            }

        }

    }


}
