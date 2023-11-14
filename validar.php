<?php
//Código Exemplo de Validção do 2º Dia do plano de aula

//Função Para Validar a Variável    
function validar($variavel, $tipo_validacao)
{
    if ($tipo_validacao == 'texto') {
        //Condição: se o tamanho da string for maior igual a 3,
        //          retornar verdade, senão, retorne falso
        if (strlen($variavel) >= 3) {
            return true;
        } else {
            return false;
        }
    }

    if ($tipo_validacao == 'numero') {
        //Condição: se o tamanho da string for maior que zero,
        //          retornar verificar se é um numero, senão, 
        //          retorne falso
        if (strlen($variavel) > 0) {

            //Condição: se a variável for um número, retornar
            //          verdade, senão, retorne falso
            if (is_numeric($variavel)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}

//Condicional: Se existir algo escrito no campo nome E no campo numero
//             validar os itens, senão, exibir placeholder 'Digite nos campos..'.
if (isset($_POST['nome']) && isset($_POST['numero'])) {
    $nome_var = @$_POST['nome']; //Pegando o que foi escrito em "Nome".
    $num_var = @$_POST['numero']; //Pegando o que foi escrito em "Numero".
    $erro_msg = ''; //Declarando texto para erros.
    $erro = false; // Definindo erro como falso, se houver algum no código,
    // a booleana mudara para verdadeira.

    $validar_nome = validar($nome_var, 'texto'); // Validando na função.
    $validar_numero = validar($num_var, 'numero');

    //Se a função retornar falsa, portanto, 'não verdadeira' ou ngação,
    //mudar booleana de erro e inserir mensagem de erro.
    if (!$validar_nome) {
        $erro = true;
        $erro_msg = $erro_msg . '<br> - Nome deve ter pelo menos 3 caracteres (Campo "Nome")';
    }
    if (!$validar_numero) {
        $erro = true;
        $erro_msg = $erro_msg .  '<br> - Numero Inválido (Campo "Numero")';
    }

    //Se a booleana $erro for verdadeira, exibir mensagem de erro: $erro_msg
    if ($erro) {
        print '<b>Erro na validação:</b> <br>' . $erro_msg;
    }

    //Se ambas as validações retornarem verdadeiras, confirmar em tela.
    if ($validar_nome && $validar_numero) {
        print 'Tudo Ok :)';
    }
} else {
    print 'Digite nos campos abaixo:';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        padding: 1rem;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    input {
        width: 40%;
        min-width: 6rem;
        background-color: #f5f5f5;
    }
</style>

<body>
    <h1>Formulario de Validação</h1>
    <form action="" method="post">
        <div class="input-item">
            Nome:
            <input name="nome" type="text">
        </div>
        <div class="input-item">
            Número:
            <input name="numero" type="text">
        </div>
        <div class="buttons">
            <button type="submit">Validar</button>
            <button type="reset">Limpar campos</button>
        </div>
    </form>
</body>

</html>