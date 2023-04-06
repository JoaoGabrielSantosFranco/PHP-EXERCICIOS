<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FindTheElement </title>
</head>

<body>
    <h1>
        <pre>
        <?php
        // Crie uma função que encontre o elemento N que, somado a outro elemento N ou K dentro de um
        // array, resulte na soma 6 Não deve ser utilizado loops para resolver esse exercício.
        
        function findTheElement(array $array, array $arrayResults = [], int $index = 0)
        {
            $array = array_values($array);
            sort($array);

            if ($index < count($array)) {
                $string = "O elemento {$array[$index]} Somado ao elemento {$array[0]} Resulta na soma 6 ";

                if (($array[$index] + $array[0]) === 6 && !array_search($string, $arrayResults)) {
                    array_push($arrayResults, $string);
                }
                if ($index + 1 == count($array)) {
                    unset($array[0]);
                    $arrayResults = findTheElement($array, $arrayResults);
                }
                $arrayResults = findTheElement($array, $arrayResults, ++$index);
            }
            return $arrayResults;
        }

        $array = array(1, 8, 13, 11, 1, 3, -2, -6, 5);
        findTheElement($array);
        print_r(findTheElement($array));
        ?>
            </pre>
    </h1>
</body>

</html>