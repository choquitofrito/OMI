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
    echo "Bonjour , je suis une page qui utilise de variables";

    $nom = "Lisa";
    $hobby = "soccer";
    $salaire = 20000;

    echo $nom;
    echo $hobby;

    echo $salaire * 2;

    $salaire = $salaire * 2;
    
    $salaireTVAC = $salaire * 1.21;

    echo "<p>" . $salaireTVAC . "</p>";

    $nom = "Hanan";
    echo $salaire;

    echo "<br><br>";

    echo $nom . " aime bien le " . $hobby . " et gagne " . $salaire;

    $chauve = true;
    echo "<p>Val de la var: " . $chauve . "</p>";
    








    ?>
</body>

</html>