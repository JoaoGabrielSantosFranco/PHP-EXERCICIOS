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
        <pre>
        <?php
        function invertArray($array)
        {
            $first = 0;
            $aux = 0;
            for ($last = count($array) - 1; $last > $first; --$last) {
                $aux = $array[$first];
                $array[$first] = $array[$last];
                $array[$last] = $aux;
                $first += 1;
            }
            echo json_encode($array);
            return $array;
        }

        $array = array(1, 2, 3, 4, 5, 99);
        echo "Entrada";
        echo json_encode($array);
        echo nl2br("\n");
        echo "Saida";
        invertArray($array);
        ?>
        </pre>
    </h1>
</body>

</html>