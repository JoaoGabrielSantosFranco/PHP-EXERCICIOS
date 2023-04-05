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
        require_once "ContaCorrente.php";

        $c1 = new ContaBanco;
        $c2 = new ContaBanco;

        $c1->abrirConta("CC");
        $c1->setNumConta(1111);
        $c2->abrirConta("CP");
        $c2->setNumConta(1112);
        $c1->setDono("João Gabriel");
        $c2->setDono("Gabriel João");


        
        print_r($c1);
        print_r($c2);

        ?>
        </pre>
    </h1>
</body>

</html>