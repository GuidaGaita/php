<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>AQUECIMENTO</h3>
    <form action=""method ="post">
        <label for="n1">Digite um valor</label><br>
        <input type="text" id="n1" name="n1" required><br><br>
        <label for="n2">Digite outro numero</label><br>
        <input type="text" id="n2" name="n2" required><br><br>
        <select name="operacao" id="operacao" required>
           <option value="soma">Soma</option>
           <option value="subtração">subtração</option>
           <option value="multiplicação">multiplicação</option>
           <option value="divisão">divisão</option>
        </select>
        <button type="Submit" value="Confirmar">Confirmar</button>

    </form>
<?php

        function Soma($num1 , $num2){
          
            $soma = $num1 + $num2;
            return $soma;
            echo "A soma é: $soma";
        }
        function subtração($num1 , $num2){
          
            $soma = $num1 - $num2;
            return $soma;
            echo "A subtração é: $soma";
        }
        function multiplicaçao($num1 , $num2){
          
            $soma = $num1 * $num2;
            return $soma;
            echo "A multiplicação é: $soma";
        }
        function divisão($num1 , $num2){
          
            $soma = $num1 / $num2;
            return $soma;
            echo "A divisão é: $soma";
        }


          if($_SERVER['REQUEST_METHOD'] === "POST") {
            $numero1 = $_POST["n1"];
            $numero2 = $_POST["n2"];
            $operacao = $_POST["operacao"];
            switch($operacao) {
                case 'soma':
                    echo soma($numero1, $numero2);
                    break;  
                case 'subtração':
                    echo subtração($numero1, $numero2);
                    break;  
                case 'multiplicação':
                    echo multiplicaçao($numero1, $numero2);
                    break; 
                case 'divisão':
                    echo divisão($numero1, $numero2);
                    break;                          
                    
                    
                    
            }
           
        }
        
?>
            <h3>QUESTAO  01</h3>
<?php        
        function repetidos($meuarray){

            $resposta= array_unique(array: $meuarray);  
            print_r (value: $resposta) ;
         

        }
        $questao01 = [12,52,12,32,32,32,23];

           repetidos($questao01);


           

?>
             <h3>QUESTA0 02</h3>
<?php

    $questao02=[2,3,4,5,6,7,8,9,10,12,14,16];

        function pareseimpares($exemplo){
            $qtde =count($exemplo);
            $pares[]=[];
            $impares[]=[];
            for ($i= 0; $i<$qtde; $i++){
                while ($exemplo[$i] % 2 == 0) {
                   $pares[] = $exemplo[$i];
                   break;

                }
                 while($exemplo[$i] % 3 == 0){
                    $impares[] = $exemplo[$i];
                    break;
                }
            }
            echo "pares: ";
            print_r(value: $pares);
            echo "impares: ";
            print_r($impares);
        }
        pareseimpares($questao02);

?>
<h3>QUESTAO 03</h3>
    <form method="post" action="">
        <label for="n1">Digite o valor de X:</label><br>
        <input type="text" id="X" name="X" required><br><br>

        <label for="n2">Digite o valor de Y</label><br>
        <input type="text" id="Y" name="Y" required><br><br>
        <input type="submit" value="Verificar">
    </form>
<?php

$x =$_POST["X"];
$y =$_POST["Y"];


$xa = $x > 0;
$xb =  $x < 0;
$xc = $x === 0;

$ya = $y > 0;
$yb =  $y < 0;
$yc = $y === 0;

switch ($x) {
    case '0':
        echo"eixos";
        break;
}      
switch ($y) {
    case '0':
        echo"eixos";
        break;
}    

while ($xa && $ya) {
   echo"Q1";
   break;
} 
while ($xb && $ya) {
    echo"Q2";
    break;
 }
 while ($xb && $yb) {
    echo"Q3";
    break;
 }
 while ($xa && $yb) {
    echo"Q4";
    break;
 }
?>
<h3>QUESTAO 04</h3>
<?php
$n = 10; 

$idn[]=[1,2,3,4,5,6,7,8,9,10] ; 

$m = 4; 

$idm[] =[3,5,7]; 
$quemficou =[];

    for ($i=0; $i <count($idn) ; $i++) { 

       
            while(!in_array($idn[$i], $idm)) {

                $quemficou[]=$idn[$i];   
            break;
       }
       
    }
    print_r($quemficou);

?>
<form method="post" action="">
    <label for="piramide"><br><br>digite a altura da piramide:</label><br><br>
    <input type="number" id="piramide" name="piramide" required>
    <input type="submit" value="enviar">
</form>
<?php

$piramide=$_POST["piramide"];
for ($i=1; $i <= $piramide ; $i++) { 
    echo str_repeat("&nbsp;", $piramide - $i);

    echo str_repeat("*", (2 * $i) - 1);

    echo "<br>";
}

?>

    
</body>
</html>