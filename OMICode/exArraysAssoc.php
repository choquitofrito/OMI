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
    // array associatif (couples cle => valeur)
    $person1 = [
        'nom' => 'Lisa',
        'adresse' => 'Rue de la Paix',
        'hobby' => 'lire'
    ];

    $person2 = [
        'nom' => 'Pepi',
        'adresse' => 'Rue de la Pomme',
        'hobby' => 'nager'
    ];


    echo "<br>";
    print_r($person1);
    echo "<br>";
    print_r($person2);

    $fruits = ["orange", "poire", "banane"];

    // echo $fruits[2];

    echo "<br>";
    print_r($fruits);

    $fruits2 = [
        0 => "orange",
        1 => "poire",
        2 => "banane"
    ];

    echo "<br>";
    print_r($fruits2);


    $prod1 = [
        'nom' => 'chemise',
        'prix' => 20.33
    ];

    $prod2 = [
        'nom' => 'pantalon',
        'prix' => 10.00
    ];

    $prod3 = [
        'nom' => 'tasse',
        'prix' => 9.00
    ];

    echo "<br><br><br>";
    print_r($prod1);

    // accéder à l'array
    echo "<br>Le produit 1 porte le nom: " . $prod1['nom'];

    // effacer un élément de l'array
    echo "<br><br>Produit 3 avant modification:";
    print_r($prod3);

    // on modifie prod3
    unset($prod3['prix']);

    echo "<br><br>Produit 3 modifié:";
    print_r($prod3);

    // die();

    // modifier un élément 

    // $prod1['prix'] *= 2; 
    $prod1['prix'] = $prod1['prix'] * 2;
    echo "<br><br>Produit 1 modifié, prix doublé:";
    print_r($prod1);


    // ajouter un élément

    // ex: rajouter un élèment à prod1
    $prod1['couleur'] = "vert";
    echo "<br><br>Produit 1 modifié, prix doublé:";
    print_r($prod1);

    // afficher contenu d'un array assoc 
    // avec une boucle

    // foreach (<nom array> as <cle> => <valeur>)
    echo "<br><br><br>Affichage de prod1: <br>";
    foreach ($prod1 as $cle => $valeur) {
        echo "<br>" . $cle . " : " . $valeur;
    }


    // créer un tableau qui contient trois produits
    $produits = [$prod1, $prod2, $prod3];

    echo "<br><br>Affichage de tous le produits:<br>";
    // print_r ($produits);


    // structure qu'on reçoit de la BD
    foreach ($produits as $manuela => $arrayProduit) {
        foreach ($arrayProduit as $cle => $valeur) {
            echo "<br>" . $cle . " : " . $valeur;
        }
        echo "<br>";
    }









    ?>
</body>

</html>