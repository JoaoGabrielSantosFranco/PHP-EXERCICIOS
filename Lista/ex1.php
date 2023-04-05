<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zero at the end</title>
</head>

<body>
    <h1>
        <pre>
        <?php
        //treats the array, even if the keys are not sequential it is still able to reverse the values
        function putTheZerosAtTheEnd($array)
        {
            for ($i = 0; $i < count($array); $i++) {
                if ($array[$i] == 0) {
                    array_push($array, $array[$i]);
                    unset($array[$i]);
                }
            }
            return array_values($array);
        }



        $array = array(0, 2, 3, 4, 6, 7, 10);
        print_r(putTheZerosAtTheEnd($array));
        ?>
        </pre>
    </h1>
</body>

</html>


