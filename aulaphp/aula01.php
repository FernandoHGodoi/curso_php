<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula01</title>
</head>
<body>

    <?php
        /*Array
        $var = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

        foreach($var as $valor)
        {
            echo $valor . "</br>";
        }

        //Tabuiada
        for($i = 1; $i <=10; $i++)
        {
            for($x = 1; $x <=10; $x++)
            {
                $result = $i * $x;
                echo $i . "X" . $x . " = " . $result . "</br>";
            }
        }
        */

        echo "1- Printar Hello World</br>";
        echo "Hello World";
        echo "</br></br>";
        
        echo "2- Printar valor 5 usar var_dump</br>";
        $var = 5;
        echo $var . "</br>";
        var_dump($var);
        echo "</br></br>";

        echo "3- Printar valor 6.5 var_dump</br>";
        $var2 = 6.5;
        echo $var2 . "</br>";
        var_dump($var2);
        echo "</br></br>";

        echo "4- Printar conta de adição 2+3</br>";
        $var3 = 2 + 3;
        echo $var3 . "</br></br>";
        
        echo "5-Printar conta de adiçao 2,5 + 5</br>";
        $var4 = 2.5 + 5;
        echo $var4 . "</br></br>";

        echo "6- Printar conta de subtração 5-3</br>";
        $var5 = 5 - 3;
        echo $var5 . "</br></br>";

        echo "7-Printar conta de subtração 6-7</br>";
        $var6 = 6 - 7;
        echo $var6 . "</br></br>";

        echo "8- Printar conta de multiplicação 6*8</br>";
        $var7 = 6 * 8;
        echo $var7 . "</br></br>";

        echo "9 - Printar conta de divisão 10/ 2</br>";
        $var8 = 10 / 2;
        echo $var8 . "</br></br>";

        echo "10- Montar um array de 10 posições</br>";
        $var9 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        for($a = 0; $a < 10; $a++)
        {
            echo ", " . $var9[$a];
        }
        echo "</br></br>";

        echo "11- Montar um array com 3 arrays dentro</br>";
        $var10 = array(
                    array(1, 2, 3, 4),
                    array(5, 6, 7),
                    array("Hello ", "World", "!")
                );
        echo $var10[2][0] . $var10[2][1] . $var10[2][2];
        echo "</br></br>";

        echo "12- Montar um array com 2 arrays que armazenam mais 2 arrays</br>";
        $var11 = array(
                    array(
                        array(1, 2, 3, 4), 
                        array(5, 6 ,7, 8)),
                    array(
                        array("Hello ", "World", "!"), 
                        array(9, 10))
                );
        echo $var11[1][0][0] . $var11[1][0][1] . $var11[1][0][2];
        echo "</br></br>";

        echo "13- Montar um for de 5 posições</br>";
        for($b = 1; $b <= 5; $b++)
        {
            echo $b . "ª posição!</br>";
        }
        echo "</br></br>";

        echo "14- montar a tabuada do 5</br>";
        for($c = 1; $c <= 10; $c++)
        {
            $result = 5 * $c;
            echo "5 * " . $c . " = " . $result . "</br>";
        }
        echo "</br></br>";

        echo "15- montar todas as tabuadas</br>";
        for($c = 1; $c <= 10; $c++)
        {
            for($d = 1; $d <= 10; $d++)
            {
                $result2 = $c * $d;
                echo $c . " X " . $d . " = " . $result2 . "</br>";

            }
        } 
        echo "</br></br>";

        echo "16- Ver se o numero é impar ou par</br>";
        $var12 = 25;

        if($var12 % 2 == 0)
        {
            echo "O numero " . $var12 . " é par!";
        }
        else
        {
            echo "O numero " . $var12 . " é impar!";
        }
        echo "</br></br>";

        echo "17- rodar um array com sálarios e ver se é mais ou menos que 500</br>";
        $sal = array(650.25, 292.90, 344.25, 750.76, 1580);
        foreach($sal as $value)
        {
            if($value < 500)
            {
                echo "O salario de R$" . $value . " é menor que 500!</br>";
            }
            else
            {
                echo "O salario de R$" . $value . " é maior igual a 500!</br>";
            }
        }
        echo "</br></br>";

        echo "18-varificar se vai ou não receber o aumento, se for menor de 900 recebe 0.5 de aumento</br>";
        /*
        
        

        
        */

    ?>
    
</body>
</html>