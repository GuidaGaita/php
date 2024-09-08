<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Questao 01
    ?>
    <h3>questao 1</h3>
    <form action=""method ="post">
        <label for="n1">Número 1</label><br>
        <input type="text" id="n1" name="n1" required><br><br>
        <label for="n2">Número 2</label><br>
        <input type="text" id="n2" name="n2" required><br><br>
       
        <button type="Submit" value="Confirmar">Confirmar</button>
    </form>
    <?php 
        if(isset($_POST["n1"])&& isset($_POST["n2"])  ){
           
            $n1= htmlspecialchars($_POST["n1"]);
            $n2= htmlspecialchars($_POST["n2"]);
            $soma = $n1 + $n2;
           echo "A soma é: ".$soma;
        }
        //Questao 2
    ?>
    <br>
    <h3>questao 2</h3>
    
    <form action=""method ="post">
        <label for="n3">Fatorial</label><br>
        <input type="text" id="n3" name="n3" required><br><br>
        <button type="Submit" value="Confirmar">Confirmar</button>
    </form>
    <?php 
        if(isset($_POST["n3"])){
            $n3= htmlspecialchars($_POST["n3"]);
            $result = 1;
        for ($i=1; $i <= $n3 ; $i++) { 
            $result *= $i;
        }
        echo $result;
    }

    ?>
    <h3>Questao 03</h3>
    <form action=""method ="post">
        <label for="n1">Nome</label><br>
        <input type="user" id="nome" name="nome" required><br><br>
        <label for="n2">Data de Nascimento</label><br>
        <input type="text" id="idade" name="idade" required><br><br>
       
        <button type="Submit" value="Confirmar">Confirmar</button>
    </form>
    <?php
        $nome = $_POST["nome"] ?? "Sem nome";
        $idade = $_POST["idade"] ?? $idade = 0 ;
        
        echo $nome ."  " . 2024 - $idade;
    
    
    

    ?>







</body>
</html>