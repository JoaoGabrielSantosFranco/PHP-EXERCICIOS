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
        <pre>
        <?php
        function mask($input)
        {
            if ($input == "") {
                return "";
            }
            $input = str_split($input);
            for ($i = 0; $i < count($input); $i++) {
                if (!($input[$i] !== " " && (($i < 1) || ($i >= count($input) - 4)) && count($input) > 6)) {
                    $input[$i] = "#";
                }
            }
            return $input;
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