<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Curso em Vídeo PHP</title>
    <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>
    <div>
        <?php
        $v = isset($_GET['val']) ? $_GET['val'] : 1;
        echo "<h3>Calculando o fatorial de $v</h3>";
        $contador = $v;
        $fat = 1;
        do {
            $fat = $fat * $contador;
            $contador--;
        } while ($contador >= 1);
        echo "<h4>$v ! = $fat";
        ?>
        <p><a href="javascript:history.go(-1)" class="botao">Voltar</a></p>
    </div>
</body>

</html>