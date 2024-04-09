<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
    


<?php
    require_once "endereco.class.php";
    require_once "aluno.class.php";


    $aluno1 = new Aluno("Pedro Assis", "11111111145", "(14)991357635", "rua XV de Novembro","123", "Centro", "128799965");

    $aluno1->setEndereco("Rua 7 de Setembro", "345", "Centro", "17898654");



    echo "<pre>";
    var_dump($aluno1);
    echo "</pre>";

    $aluno2 = new Aluno("Maria Carvalho", "222222", "(15)987665");
    $endereco = new Endereco("Rua Piracicaba", "7899", "Centro", "12356987", $aluno2);

    echo "<pre>";
    var_dump($endereco);
    echo "</pre>";


?>

</body>
</html>