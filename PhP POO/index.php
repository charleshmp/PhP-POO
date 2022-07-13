<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>livro</title>
</head>
<body>
    <?php
        require_once 'livro.php';
        echo 'O nome do livro é ' . $livro1->nome() . ' seu autor ' . $livro1->autor() . ' e voce ' . $livro1->estaAcabanco();
    ?>
    
</body>
</html>