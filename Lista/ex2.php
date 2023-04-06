<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>appears more often</title>
</head>

<body>
    <h1>
        <pre>
        <?php

        // – Escreva uma função que encontre o elemento que aparece mais vezes em um array, exemplo:
        
        function elementThatAppearsMost($array)
        {
            $arrayData = array_count_values($array);
            //loop compara o value atual com highestValue para decidir qual o maior e armazenar a key, se forem iguais armazena as duas keys, assim é possivel descobrir quais os elementos com maior valor.
            $highestValue = 0;
            $highestKey = array(null);
            foreach ($arrayData as $key => $value) {
                if ($value > $highestValue) {
                    $highestKey = [];
                    $highestValue = $value;
                    array_push($highestKey, $key);
                } elseif ($value === $highestValue) {
                    array_push($highestKey, $key);
                }
            }
            return $highestKey;
        }



        function elementThatAppearsMost1($array)
        {
            // loop para contar o número de elementos de uma variável, e adicionar em outra com os dados necessarios do 0 para exercitar a logica 
            $arrayData = array();
            for ($i = 0; $i < count($array); ++$i) {
                if (key_exists($array[$i], $arrayData)) {
                    $arrayData[$array[$i]] += 1;
                } else {
                    $arrayData[$array[$i]] = 1;
                }
            }
            //loop compara o value atual com highestValue para decidir qual o maior e armazenar a key, se forem iguais armazena as duas keys, assim é possivel descobrir quais os elementos com maior valor.
            $highestValue = 0;
            $highestKey = array(null);
            foreach ($arrayData as $key => $value) {
                if ($value > $highestValue) {
                    $highestKey = [];
                    $highestValue = $value;
                    array_push($highestKey, $key);
                } elseif ($value === $highestValue) {
                    array_push($highestKey, $key);
                }
            }

            return $highestKey;
        }
        $array = array(1, 2, 3, 4, 5, 5, 5, 5, 5, 5, 6);

        print_r(ElementThatAppearsMost($array));
        ?>
        </pre>
    </h1>
</body>

</html>