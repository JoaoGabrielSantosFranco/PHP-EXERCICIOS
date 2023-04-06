<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>odd</title>
</head>

<body>
    <h1>
        <?php
        ///Escreva uma função que retorne o número que aparece o número ímpar de vezes em um array

        // Utilizando Metodo array_count_values
        function numRepeatOddsTimesInArray($array)
        {
            $array = array_count_values($array);
            $arrayODD = array();
            foreach ($array as $key => $value) {
                if ((($value) % 2) == 1) {
                    array_push($arrayODD, $key);
                }
            }
            return $arrayODD;
        }


        /// construido do 0 para exercitar a logica, sem utilizar metodos prontos do PHP
        function numRepeatOddsTimesInArray1($array)
        {
            $arrayData = array();
            $arrayODD = array();
            for ($i = 0; $i < count($array); ++$i) {
                if (key_exists($array[$i], $arrayData)) {
                    $arrayData[$array[$i]] += 1;
                } else {
                    $arrayData[$array[$i]] = 1;
                }
            }
            foreach ($arrayData as $key => $value) {
                if ((($value) % 2) == 1) {
                    array_push($arrayODD, $key);
                }
            }
            return $arrayODD;
        }
        $array = array(4, 5, 4, 5, 2, 2, 3, 3, 2, 4, 4);
        echo json_encode(numRepeatOddsTimesInArray1($array));


        ?>
    </h1>
</body>

</html>