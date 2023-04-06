<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CharactersLastSentence</title>
</head>

<body>
    <h1>
        <?php

        // Escreva uma função que retorne à quantidade de caracteres da última palavra em uma frase
        function countCharactersLastSentence($sentence)
        {
            $sentence = iconv('UTF-8', 'ASCII//TRANSLIT', $sentence);
            $sentence = preg_replace('/[^a-zA-Z0-9]/', ' ', $sentence);
            $sentence = str_split($sentence);

            $characters = 0;
            for ($i = count($sentence); $i > 0; $i--) {
                if ($sentence[$i - 1] == ' ') {
                    return ($characters);
                }
                $characters += 1;
            }
            return $characters;
        }

        $string = "Estou praticando exercicios";
        echo countCharactersLastSentence($string);
        ?>
    </h1>
</body>

</html>