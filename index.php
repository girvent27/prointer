<?php
include 'dash.php';

if (!isset($_GET['cod']) || empty($_GET['cod'])) {
    $page = '1';
} else {
    $page = $_GET['cod'];
}
if ($page > 4) {
    $page = 1;
}
dash();

if ($page == 1) {
    $x = true;
    $msg = '';

    if (!isset($_POST['select']) || empty($_POST['select'])) {
        $var = 'true';
    } else {
        $var = $_POST['select'];
        if ($var == 'false') {
            $x = false;
        }
    }
    if ($x) {
        //Se a variável for Verdadeira
        $msg = 'foo';
    } else {
        //Se a variável NÃO for Verdadeira
        $msg = 'bar';
    }

?>

<div class="questao-wrapper">
    <h2>Codg. 1 - Uso do PHP</h2>
    <div class="questao">
        A linguagem PHP, uma das mais utilizadas para construção de <i>websites</i> e <i>APIs</i> (utilizado em
        aproximadamente 72% da <i>back-end</i> da internet), foi a escolhida para
        a construção desse site e, com ela, será exercido o pensamento lógico com o uso demonstrativo dos conectivos
        'E',
        'OU' e 'Negação'
        <br>
        <hr>
        <br>
        O código ao lado usa do Conectivo 'Se...então', com o uso da palavra/função chave <b
            style="color: #eb5e28;">if()</b>,
        uma condicionante que "testa" um valor com o auxilio de chaves como E, OU, Negação, Igual e também com
        Booleanas.
        Para exemplificar, mude o valor no <b style="color: #eb5e28;">select</b> abaixo para ver como a condicionante se
        comporta
    </div>

    <form action="" method="post">
        <div class="input-wrap">
            <div class="select-item">
                <var>$variavel</var> = <select name="select" id="">
                    <option value="true">Verdadeiro</option>
                    <option value="false">Falso</option>

                </select>
            </div>
            <div class="buttons-wrap">
                <button type="submit" style="background-color: rgb(63, 151, 63)">
                    Enviar
                </button>
                <button type="reset" style="background-color: rgb(255, 191, 0)">
                    Limpar
                </button>
            </div>
        </div>
    </form>

</div>
<div class="codigo-wrapper">
    <div class="enfeite">
        <div class="name"><i class="bx bx-menu"></i> codigo.php</div>
        <div class="dot-wrap">
            <div class="dot green" style="background-color: green"></div>
            <div class="dot yellow" style="background-color: yellow"></div>
            <div class="dot red" style="background-color: red"></div>
        </div>
    </div>
    <pre><code class="php" style="background-color: black;">
$variavel = <?php print($var); ?>;
$msg = '';

if($variavel){
  //Se a variável for Verdadeira
  $msg = 'foo';

} else {
  //Se a variável NÃO for Verdadeira
  $msg = 'bar';

}
print $msg;

<div style="color: #fff;">#Mensagem: <?php print $msg; ?></div>
            </code>
        </pre>
</div>

<?php
}

if ($page == 2) {
    $x = true;
    $msg = '';

    if (!isset($_POST['select']) || empty($_POST['select'])) {
        $var = 'true';
    } else {
        $var = $_POST['select'];
        if ($var == 'false') {
            $x = false;
        }
    }
    if (!$x) {
        //Se a variável for Falsa
        $msg = 'foo';
    } else {
        //Se a variável NÃO for False
        $msg = 'bar';
    }
?>
<div class="questao-wrapper">
    <h2>Codg. 2 - Uso do Conectivo Negação (!)</h2>
    <div class="questao">
        Agora, trabalhando com o conectivo da Neagação da Variável, vamos utilizatr um código semelhante ao primeiro,
        mas
        ao invés da mensagem '<i>foo</i>' ser exibida quando a condição for verdadeira, agora ela será <i>printada</i>
        quando a variável for falsa, assim, negando a condicionante. Selecione abaixo para interagir:
    </div>
    <form action="" method="post">
        <div class="input-wrap">
            <div class="select-item">
                <var>$variavel</var> = <select name="select" id="">
                    <option value="true">Verdadeiro</option>
                    <option value="false">Falso</option>

                </select>
            </div>
            <div class="buttons-wrap">
                <button type="submit" style="background-color: rgb(63, 151, 63)">
                    Enviar
                </button>
                <button type="reset" style="background-color: rgb(255, 191, 0)">
                    Limpar
                </button>
            </div>
        </div>
    </form>
</div>
<div class="codigo-wrapper">
    <div class="enfeite">
        <div class="name"><i class="bx bx-menu"></i> codigo.php</div>
        <div class="dot-wrap">
            <div class="dot green" style="background-color: green"></div>
            <div class="dot yellow" style="background-color: yellow"></div>
            <div class="dot red" style="background-color: red"></div>
        </div>
    </div>
    <pre><code class="php" style="background-color: black;">
$variavel = <?php print(@$var); ?>;
$msg = '';

if(!$variavel){
  // Se a variável for Falsa (já que agora estamos trabalhando 
  // com a negação da variável $variavel, a lógica inverte)
  $msg = 'foo';

} else {
  //Se a variável NÃO for Falsa
  $msg = 'bar';

}
print $msg;

<div style="color: #fff;">#Mensagem: <?php print $msg; ?></div>
            </code> </pre>
</div>
<?php
}
if ($page == 3) {
    if (isset($_POST['var_1']) && isset($_POST['var_2'])) {
        // Se, e se somente se, tiver e existir um valor dentro dos inputs
        // var_1 e var_2  simultaneamente, então continuar a execução
        $var_1 = $_POST['var_1'];
        $var_2 = $_POST['var_2'];
        $msg = '';

        if ($var_1 > 8 && $var_2 <= 4) {
            // Se a condição for Verdadeira, ou seja, se ambas
            // forem verdadeiras simultaneamente
            $msg = 'foo';
        } else {
            //Se a condição NÃO for Verdadeira
            $msg = 'bar';
        }
    }
?>
<div class="questao-wrapper">
    <h2>Codg. 3 - Uso do Conectivo E (&&)</h2>
    <div class="questao">
        O conectivo 'E' (&&) é uma peça escencial quando se nescecita de uma bicodicional para validações e outras
        arquiteturas lógica
        dentro da programação. Ao lado, temos um código onde 2 números, digitados no <b
            style="color: #eb5e28;">input</b> abaixo, vão ser condicionados
        dentro de um <b style="color: #eb5e28;">if()</b>
    </div>

    <form action="" method="post" style="display: none">
        <div class="input-wrap">
            <select name="" id="">
                <option value="">Fox on the run</option>
            </select>
            <select name="" id="">
                <option value="">Screamin! Everybody run</option>
            </select>
            <div class="buttons-wrap">
                <button type="submit" style="background-color: rgb(63, 151, 63)">
                    Enviar
                </button>
                <button type="reset" style="background-color: rgb(255, 191, 0)">
                    Limpar
                </button>
            </div>
        </div>
    </form>
    <form action="" method="post">
        <div class="input-wrap">
            <div class="input-item">
                $var_1 =
                <input type="text" name="var_1" maxlength="8" onkeyup="mascaraMoeda(this, event, '0')"
                    value="<?php print @$var_1 ?>" placeholder="Somente Numeros" />
            </div>
            <div class="input-item">
                $var_2 =
                <input type="text" name="var_2" maxlength="8" onkeyup="mascaraMoeda(this, event, '0')"
                    value="<?php print @$var_2 ?>" placeholder="Somente Numeros" />
            </div>
            <div class="buttons-wrap">
                <button type="submit" style="background-color: rgb(63, 151, 63)">
                    Enviar
                </button>
                <button type="reset" style="background-color: rgb(255, 191, 0)">
                    Limpar
                </button>
            </div>
        </div>
    </form>
</div>
<div class="codigo-wrapper">
    <div class="enfeite">
        <div class="name"><i class="bx bx-menu"></i> codigo.php</div>
        <div class="dot-wrap">
            <div class="dot green" style="background-color: green"></div>
            <div class="dot yellow" style="background-color: yellow"></div>
            <div class="dot red" style="background-color: red"></div>
        </div>
    </div>
    <pre><code class="php" style="background-color: black;">
if(isset($_POST['var_1']) && isset($_POST['var_2'])){
// Se, e se somente se, tiver e existir um valor dentro dos inputs
// var_1 e var_2  simultaneamente, então continuar a execução
  $var_1 = <?php print @$var_1 ?>;
  $var_2 = <?php print @$var_2 ?>;
  $msg = '';

  if($var_1 > 8 && $var_2 <=4){
    // Se a condição for Verdadeira, ou seja, se ambas
    // forem verdadeiras simultaneamente (var_1 maior que 8
    // E var_2 menor ou igual a 4)
    $msg = 'foo';

  } else {
    //Se a condição NÃO for Verdadeira
    $msg = 'bar';

  }
}
print $msg;

<div style="color: #fff;">#Mensagem: <?php print @$msg; ?></div>
              </code>
          </pre>
</div>
<script>
String.prototype.reverse = function() {
    return this.split("").reverse().join("");
};

function mascaraMoeda(campo, evento, dec_len) {
    var tecla = !evento ?
        window.event.keyCode :
        evento.which;
    var valor = campo.value
        .replace(/[^\d]+/gi, "")
        .reverse();

    var resultado = "";
    switch (dec_len) {

        case '0':
            var mascara = "########".reverse();

            break;
        case '2':
            var mascara = "##,###,###.##".reverse();

            break;
        case '3':
            var mascara = "##,###,###.###".reverse();

            break;
        case 'ncm':
            var mascara = "####.##.##".reverse();

            break;
        case 'ean':
            var mascara = "# ###### ######".reverse();

            break;

        default:
            break;
    }
    for (var x = 0, y = 0; x < mascara.length && y < valor.length;) {
        if (mascara.charAt(x) != "#") {
            resultado += mascara.charAt(x);
            x++;
        } else {
            resultado += valor.charAt(y);
            y++;
            x++;

        }
    }
    campo.value = resultado.reverse();
}
</script>
<?php
}

if ($page == 4) {
    if (isset($_POST['var_1']) && isset($_POST['var_2'])) {
        // Se, e se somente se, tiver e existir um valor dentro dos inputs
        // var_1 e var_2  simultaneamente, então continuar a execução
        $var_1 = $_POST['var_1'];
        $var_2 = $_POST['var_2'];
        $msg = '';

        if ($var_1 != 12 || $var_2 >= 35) {
            // Se a condição for Verdadeira, ou seja, se uma delas
            // forem verdadeiras 
            //(var_1 diferente de 12 OU var_2 maior ou igual a 35)
            $msg = 'foo';
        } else {
            //Se a condição NÃO for Verdadeira
            $msg = 'bar';
        }
    }
?>
<div class="questao-wrapper">
    <h2>Codg. 4 - Uso do Conectivo OU (<b>||</b>)</h2>
    <div class="questao">
        O conectivo 'OU' ( || ) tem como objetivo ser utilizadom quando o resultado de uma condicional depende de pelo
        menos um valor, não obrigatoriamente simultâneo, para continuar a execução do código.
        Ao lado, temos um código onde 2 números, digitados no <b style="color: #eb5e28;">input</b> abaixo, vão ser
        condicionados dentro de um <b style="color: #eb5e28;">if()</b>, igual ao código anterior, com a
        diferença do conectivo OU (||)ao invés do 'E' (&&).
    </div>

    <form action="" method="post">
        <div class="input-wrap">
            <div class="input-item">
                $var_1 =
                <input type="text" name="var_1" maxlength="8" onkeyup="mascaraMoeda(this, event, '0')"
                    value="<?php print @$var_1; ?>" placeholder="Somente Numeros" />
            </div>
            <div class="input-item">
                $var_2 =
                <input type="text" name="var_2" maxlength="8" onkeyup="mascaraMoeda(this, event, '0')"
                    value="<?php print @$var_2; ?>" placeholder="Somente Numeros" />
            </div>
            <div class="buttons-wrap">
                <button type="submit" style="background-color: rgb(63, 151, 63)">
                    Enviar
                </button>
                <button type="reset" style="background-color: rgb(255, 191, 0)">
                    Limpar
                </button>
            </div>
        </div>
    </form>
</div>
<div class="codigo-wrapper">
    <div class="enfeite">
        <div class="name"><i class="bx bx-menu"></i> codigo.php</div>
        <div class="dot-wrap">
            <div class="dot green" style="background-color: green"></div>
            <div class="dot yellow" style="background-color: yellow"></div>
            <div class="dot red" style="background-color: red"></div>
        </div>
    </div>
    <pre><code class="php" style="background-color: black;">
if(isset($_POST['var_1']) && isset($_POST['var_2'])){
// Se, e se somente se, tiver e existir um valor dentro dos inputs
// var_1 e var_2  simultaneamente, então continuar a execução
  $var_1 = <?php print @$var_1 ?>;
  $var_2 = <?php print @$var_2 ?>;
  $msg = '';

  if($var_1 != 12 || $var_2 >=35){
    // Se a condição for Verdadeira, ou seja, se uma delas
    // forem verdadeiras 
    //(var_1 diferente de 12 OU var_2 maior ou igual a 35)
    $msg = 'foo';

  } else {
    //Se a condição NÃO for Verdadeira
    $msg = 'bar';

  }
}
print $msg;

<div style="color: #fff;">#Mensagem: <?php print @$msg; ?></div>
              </code>
          </pre>
</div>
<script>
String.prototype.reverse = function() {
    return this.split("").reverse().join("");
};

function mascaraMoeda(campo, evento, dec_len) {
    var tecla = !evento ?
        window.event.keyCode :
        evento.which;
    var valor = campo.value
        .replace(/[^\d]+/gi, "")
        .reverse();

    var resultado = "";
    switch (dec_len) {

        case '0':
            var mascara = "########".reverse();

            break;
        case '2':
            var mascara = "##,###,###.##".reverse();

            break;
        case '3':
            var mascara = "##,###,###.###".reverse();

            break;
        case 'ncm':
            var mascara = "####.##.##".reverse();

            break;
        case 'ean':
            var mascara = "# ###### ######".reverse();

            break;

        default:
            break;
    }
    for (var x = 0, y = 0; x < mascara.length && y < valor.length;) {
        if (mascara.charAt(x) != "#") {
            resultado += mascara.charAt(x);
            x++;
        } else {
            resultado += valor.charAt(y);
            y++;
            x++;

        }
    }
    campo.value = resultado.reverse();
}
</script>
<?php
}
closeDash();
?>