<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $fruits = ["orange", "poire", "banane"];

    print_r($fruits);

    // 1. rajouter des éléments 
    $fruits[] = "pomme";
    $fruits[] = "fraise";

    echo "<br>";
    print_r($fruits);

    // 2. modifier un élément et accéder
    echo "<br>";
    $fruits[3] = "raisins";
    print_r($fruits);

    // autre exemple: Salaires
    $salaires = [10000, 20000, 30000];

    $salaires[2] = $salaires[2] * 2;
    echo "<br>";
    $salaires[] = 500;

    print_r($salaires);

    // 3. effacer un élément
    unset($salaires[1]);

    echo "<br>";
    print_r($salaires);

    // minable, pas possible
    // echo "salaire: " . $salaires[0] . "<br>";
    // echo "salaire: " . $salaires[1] . "<br>";
    // echo "salaire: " . $salaires[2] . "<br>";
    // echo "salaire: " . $salaires[3] . "<br>";













    ?>
</body>

</html>