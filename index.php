<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>livro</title>
    <style>
        
    </style>
</head>
<body>
    <?php
        require_once 'livro.php';
       echo $livro1->getPaginaAtual();
       $livro1->proximaPagina();
       echo $livro1->getPaginaAtual();
       $livro1->voltarPagina();
       echo $livro1->getPaginaAtual();
    ?>
    
</body>
</html>