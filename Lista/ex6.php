<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cardNum</title>
</head>

<body>
    <h1>
        <pre>
        <?php
        // - Crie uma função que mascare números de um cartão de crédito.

        function mask($cardNum)
        {
            if ($cardNum === "") return "";
            
            $cardNum = str_split($cardNum);
            for ($i = 0; $i < count($cardNum); $i++) {
                if (!($cardNum[$i] !== " " && (($i < 1) || ($i >= count($cardNum) - 4)) && count($cardNum) > 6)) {
                    $cardNum[$i] = "#";
                }
            }
            return $cardNum;
        }


        $string = "6535 7479 6425 7569";
        $array = (mask($string));
        foreach ($array as $valor) {
            echo "$valor "; // Imprimirá todas os valores
        }


        ?>
        </pre>

    </h1>
</body>

</html>