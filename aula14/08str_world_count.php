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
        $frase = "Eu vou estudar PHP agora!";
        $cont = str_word_count($frase, 1);
        //echo "$cont";
        print_r($cont);
        ?>
    </div>
</body>

</html>