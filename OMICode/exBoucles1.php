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


    // 1. boucle pour parcourir un array

    $salaires = [10000, 20000, 30000, 50000,60000];

    $index = 0;
    while ($index < 5) {
        echo "salaire: " . $salaires[$index] . "<br>";
        $index = $index + 1;
    }

    ///





    $rep = "OUI";

    if ($rep == "OUI"){
        echo "tout ok";        
    }

    echo "<br>";

    $rep = "OUI";
    // $rep == "OUI"; ==> true
    

    $a = 5;
    // $a < 2 ==> false

    

    $rep = "Lili";
    if ( $rep = "LALA") { // if ("LALA")
        echo "Tout ok dans lala";
    };

    $val = 5;
    if ($val === "5"){
        echo "<br>val vaut : " .$val;
    }
    


    ?>
</body>

</html>