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
    // 1. Récuperer les infos du formulaire
    $nomRace = $_POST['nomRace'];
    $origin = $_POST['origin'];

    // echo $nomRace;
    // echo $origin;

    // $lien ... cas particulier car upload du fichier 

    // 2. Créer la connexion à la BD

    include "./db/connexion.php";

    try {
        $bdd = new PDO(DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT .
            ';dbname=' . DBNAME . ';charset='
            . DBCHARSET, DBUSER, DBPASS);
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }

    // print_r($bdd);


    // 3. Créer la requête qu'on lancera dans la BD
    // (l'action à réaliser: INSERT, SELECT, UPDATE ou DELETE)
    // $sql = "INSERT INTO chat (id, nomRace, origin) VALUES (null, 'testRace', 'Belgique')";

    $sql = "INSERT INTO chat (id, nomRace, origin) VALUES (null, :nomRace, :origin)";

    $stmt = $bdd->prepare($sql);

    $stmt->bindValue(":nomRace", $nomRace);
    $stmt->bindValue(":origin", $origin);

    $stmt->execute();

    // print_r($stmt->errorCode());
    if ($stmt->errorCode() == "00000") {
        echo "<br>Enregistrement ok";
    } else {
        echo "<br>Il y a eu un problème";

    }

    // 4. Si SELECT, obtenir et affichez les données
    // (dans ce cas c'est juste un INSERT)
    // $arrayRes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    ?>
</body>

</html>