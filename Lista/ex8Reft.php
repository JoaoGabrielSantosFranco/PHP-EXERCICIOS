<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>invert Array </title>
</head>

<body>
    <h1>
        <?php
        function FindTheElement(array $array, array $arrayResults = [], int $index = 0)
        {
            print_r($array);
            sort($array);

            echo nl2br("\n");
            print_r($array);

            echo nl2br("\n");
        
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
    </h1>
</body>

</html>