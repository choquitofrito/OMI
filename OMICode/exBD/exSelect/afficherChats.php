<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>
    <?php
    // 1. Connecter à la BD
    include "./db/connexion.php";

    try {
        $bdd = new PDO(DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT .
            ';dbname=' . DBNAME . ';charset='
            . DBCHARSET, DBUSER, DBPASS);
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }

    // 2. Créer la requête de SELECT
    $sql = "SELECT nomRace, origin, image FROM chat";

    // 3. Lancer la requête
    $stmt = $bdd->prepare($sql);
    $stmt->execute();

    // 4. Obtenir les données sous la forme d'un array
    $arrayResultat = $stmt->fetchAll(PDO::FETCH_ASSOC);

    print_r($arrayResultat);

    // 5. Afficher selon nos besoins
    foreach ($arrayResultat as $cle => $chat) {
        echo "<h4>" . $chat['nomRace'] . "</h4>";
        echo "<h5>" . $chat['origin'] . "</h5>";
        // echo "<img src='manuela.jpg'>";
        echo "<img class='imageChat' src='./images/" . $chat['image'] . "'>";
    }


    ?>

</body>

</html>