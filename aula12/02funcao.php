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
        function soma($a, $b)
        {
            $s = $a + $b;
            return $s;
        }
        $x = 3;
        $y = 4;
        $r = soma($x, $y);
        echo "A soma entre $x e $y = $r";
        ?>
    </div>
</body>

</html>