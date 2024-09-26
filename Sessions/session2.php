<?php
session_start(); 
$temaAtual = $_SESSION['tema'] ?? 'claro';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pag 2</title>
    <style>
        body {
            background-color: <?= $temaAtual === 'escuro' ? 'black' : ($temaAtual === 'azul' ? '#001f3f' : 'white'); ?>;
            color: <?= $temaAtual === 'claro' ? 'black' : 'white'; ?>;
        }
    </style>
</head>
<body>
<?php

    
    if (isset($_SESSION['nome']) && isset($_SESSION['idade'])) {
        $nome = $_SESSION['nome'];
        $idade = $_SESSION['idade'];
        echo "ola ". $nome ." ".$idade;
    }
   echo "<br><button><a href='session1.php'>Pagina anterior</a></button>";

   
?>
</body>
</html>