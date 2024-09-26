<?php
session_start();

if (isset($_POST['tema'])) {
    $_SESSION['tema'] = $_POST['tema'];
}
$temaAtual = $_SESSION['tema'] ?? 'claro';


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            background-color: <?= $temaAtual === 'escuro' ? 'black' : ($temaAtual === 'azul' ? '#001f3f' : 'white'); ?>;
            color: <?= $temaAtual === 'claro' ? 'black' : 'white'; ?>;
        }
    </style>
</head>
<body>
    
    <h1>questao 01</h1>
<?php


// $_SESSION['contador'] = 0;



if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
} else if (isset($_SESSION['contador'])) {
    $_SESSION['contador']++;
}

echo "voce acessou essa  pag ". $_SESSION['contador'] ."vezes";

?>
    <h1>questao 02</h1>
    <form action=""method="post">
        <label for="nome">Digite um nome</label><br>
       <input type="text" id="nome"name="nome" required><br>
      <label for="idade">Digite seu ano de nascimento</label><br>
      <input type="text" id="idade"name="idade" required><br>
      <button type="Submit" value="Confirmar">Confirmar</button>
    </form>

<?php

    if (isset($_POST['nome']) && isset($_POST['idade'])) {
        $nome = $_POST['nome'];
        $ano = $_POST['idade'];
        $_SESSION['nome'] =  $nome;
        $idade = 2024- $ano;
        $_SESSION['idade'] = $idade;    
        echo ' Olá '. $_POST['nome'] .' sua idade é ' . $idade . ' anos';
    }
       echo "<br><button><a href='session2.php'>Proxima Pagina</a></button>";
?>
<form action=""method="post">
    <h1>cadastre sua conta</h1>
        <label for="Usuario">Cadastre seu usuario</label><br>
       <input type="text" id="usuario"name="usuario" required><br>
      <label for="senha">Cadastre sua senha</label><br>
      <input type="password" id="senha"name="senha" required><br>
      <button type="Submit" value="Confirmar">Confirmar</button>
    </form>

<?php

if (isset($_POST['usuario']) && isset($_POST['senha'])){
    $id = uniqid();
    $infos=[''];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha'] = $senha;
   array_push($infos, $usuario);
   array_push($infos, $senha);
   echo "Usuario Cadastrado com Sucesso";
   print_r($infos);

    }
?>    

<form action=""method="post">
    <h1>faça seu login</h1>
        <label for="Usuario">Digite seu usuario</label><br>
       <input type="text" id="usuariologin"name="usuariologin" required><br>
      <label for="senha">Digite sua senha</label><br>
      <input type="password" id="senhalogin"name="senhalogin" required><br>
      <button type="Submit" value="Confirmar"><a href='session2.php'>   </a>Confirmar</button>
    </form>

<?php

if (isset($_POST['usuariologin']) && isset($_POST['senhalogin'])){
   
   
    $usuariologin = $_POST['usuariologin'];
    $senhalogin = $_POST['senhalogin'];
    if (($_SESSION['usuario']) === $usuariologin && ($_SESSION['senha']) === $senhalogin) {
        echo "Seja bem viado $usuariologin";

    } else {
        echo"usuario (e/ou) senha incorretos";
    }

    }





?>


<h1>Escolha seu tema</h1>
    <form method="POST">
        <label><input type="radio" name="tema" value="claro" <?= $temaAtual === 'claro' ? 'checked' : ''; ?>> Claro</label><br>
        <label><input type="radio" name="tema" value="escuro" <?= $temaAtual === 'escuro' ? 'checked' : ''; ?>> Escuro</label><br>
        <label><input type="radio" name="tema" value="azul" <?= $temaAtual === 'azul' ? 'checked' : ''; ?>> Azul</label><br>
        <button type="submit">Aplicar Tema</button>
    </form>

<?php


?>






</body>
</html>


