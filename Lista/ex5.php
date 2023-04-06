<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindromo</title>
</head>

<body>
    <h1>
        <pre>
        <?php
        // Escreva uma função que retorne true caso uma palavra seja um palíndromo (palavra que lendo de
        // trás para frente possui o mesmo significado, exemplo: osso).
        

        function palindrome($input)
        {
            // Separa os caracteres e acentos
            $input = iconv('UTF-8', 'ASCII//TRANSLIT', $input);
            // Remove quaisquer caracteres que não sejam letras ou números usando preg_replace()
            $input = preg_replace('/[^a-zA-Z0-9]/', '', $input);
            $input = strtoupper($input);
            $input = str_split($input);

            $reverse = array_reverse($input);
            return ($input === $reverse) ? true : false;
        }



        function palindrome2($input)
        {
            $Accentuation = array('à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ü', 'ú', 'ÿ', 'À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'O', 'Ù', 'Ü', 'Ú', ' ');
            $noAccentuation = array('a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'y', 'A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'N', 'O', 'O', 'O', 'O', 'O', '0', 'U', 'U', 'U', '');
            $inputTreatment = str_replace($Accentuation, $noAccentuation, $input);
            $inputTreatment = strtoupper($inputTreatment);
            $inputTreatment = str_split($inputTreatment);

            $first = 0;
            for ($last = count($inputTreatment) - 1; $last > $first; --$last) {
                if ($inputTreatment[$first] != $inputTreatment[$last]) {
                    echo " {$input} NÃO É UM PALÍNDROMO";
                    return false;
                }
                $first++;
            }
            echo " '{$input}' É  UM PALÍNDROMO ";
            return true;
        }

        $input = "Ótimo,  só eu, que os omito";
        echo palindrome($input);

        ?>
        </pre>

    </h1>
</body>

</html>