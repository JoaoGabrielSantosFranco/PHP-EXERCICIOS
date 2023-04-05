<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contains Duplicate</title>
</head>

<body>
    <h1>
        <pre>
        <?php
        echo "Contains Duplicate  ";
        echo nl2br("\n");

        function containsDuplicate($nums)
        {
            $aux = array();
            for ($i = 0; $i < count($nums); $i++) {
                if (in_array($nums[$i], $aux)) {
                    return true;
                }
                array_push($aux, $nums[$i]);
            }
            return false;
        }

        $nums = [1, 1, 1, 3, 3, 4, 3, 2, 4, 2];
        echo containsDuplicate($nums);


        ?>

        </pre>

    </h1>
</body>

</html>