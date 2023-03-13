## Exercices Variables, Entree et Sortie

<br>

1.  Créez une page web qui affiche \"Bonjour\" en PHP 

2.  Affichez la phrase \"Vive la..." et "WEB" dans la ligne suivante en format H1 (HTML)

3.  Créez une variable contenant le titre du dernier film que vous avez
    regardé et une deuxième variable contenant une note de 0 à 10.
    Affichez un texte « Je donne un xxxx pour le film xxxxx ».

4.  Créez une variable contenant le prix d'un ticket pour l'UGC et une
    autre contenant le prix d'un ticket pour le Vendôme. Calculez la
    différence de prix entre les deux tickets et affichez-la sur l'écran
    avec un message.

5.  Le Vendôme est un cinéma cher (contrairement au Styx, qui
    d\'ailleurs n\'existe plus) et de fois ils offrent une réduction du
    10% sur les entrées. Affichez le prix d'un ticket normal et le prix
    qu'on payerait si on avait la réduction.

6.  Créez de variables pour stocker les noms et les prix de trois
    produits. Affichez un résumé e liste contenant les produits et leur prix.

<br>


## Exercices IF
<br>

1.  Créez un code capable de calculer la surface d'une chambre. Stockez la largeur et la longueur d'abord dans deux variables. Si les valeurs sont pareilles, affichez le message \"La chambre est carrée!\"

2.  Stocker une valeur de temperature dans une variable.
    Si elle vaut entre 15 et 25 affichez \"Il fait bon\". Si la valeur
    est inférieure, affichez \"Ça caille !! Montez la température !\" et
    si la valeur est supérieure affiche \"Trop chaud ! Descendez la
    température !\"

3.  Nous faisons un système informatique pour une école.
    Pour qu\'un élève puisse réussir une matière il doit assister à un
    minimum de cours :

    1.  80% des cours s\'il est en 1ere année

    2.  70% des cours s\'il est en 2eme année

    3.  60% des cours s\'il est en 3eme année

Considérez qu'il y a 50 cours chaque année.
Le script doit demander à l'utilisateur l'année et le nombre d'absences, et afficher si l'élève a reussi ou pas.



## Exercices Boucles
<br>

1.  Faites une boucle while pour afficher les valeurs entre 0 et 10

2.  Faites une boucle while et une boucle for pour afficher les valeurs
    entre 50 et 70

3.  Faites une boucle pour afficher les valeurs impaires entre 50 et 100

4.  Faites une boucle qui, à partir d\'une valeur de départ stockée dans
    une variable, affiche les dix nombres suivants. Par exemple, si la
    valeur stockée est 17, le programme affichera les nombres de 18
    à 27. Faites deux versions de l\'algorithme : while et for.

5.  Créez une boucle qui écrit la table de multiplication d\'un nombre
    (stocké dans une variable), présentée comme suit 

**Table du 7:**

7 x 1 = **7**\
7 x 2 = **14**\
7 x 3 = **21**\
...\
7 x 10 = **70**

<br>


## Exercices Arrays (Tableaux)
<br>

1)  Créez un array contenant les valeurs 10,20 et 50

Affichez son contenu sans utiliser de boucles

2)  Rajoutez les valeurs 8 et 70 au tableau précédant. Affichez les
    éléments 2éme et 5éme du tableau.

3)  Créez un tableau contenant les noms de 5 villes. Affichez le contenu
    du tableau (faites une version sans boucles et une avec une boucle)

4)  Rajoutez deux villes au tableau précédant et affichez-le

5)  Remplacez la première ville du tableau par \'Quito\'

6)  Créez un tableau qui contient les valeurs du 1 à 200. Affichez son
    contenu (boucles)



# Solutions:

## Exercices Variables, Entree et Sortie


Ex 1.

```php
<?php
echo "Bonjour";
?>
```

Ex 2.

```php
<?php
echo "<h1>Vive la...</h1>";
echo "<h1>WEB</h1>";
?>
```

Ex 3.

```php
<?php
$titre_film = "Nom du film";
$note_film = 8;

echo "Je donne un ".$note_film." pour le film ".$titre_film;
?>

```

Ex 4.
```php
<?php
$ticket_UGC = 10;
$ticket_Vendome = 15;
$difference_prix = $ticket_Vendome - $ticket_UGC;

echo "La différence de prix entre un ticket pour l'UGC et un ticket pour le Vendôme est de ".$difference_prix." euros.";
?>
```

Ex 5.
```php
<?php
$prix_normal = 15;
$prix_reduit = $prix_normal * 0.9;

echo "Le prix normal d'un ticket pour le Vendôme est de ".$prix_normal." euros. Avec une réduction de 10%, le prix serait de ".$prix_reduit." euros.";
?>
```

Ex 6.
```php
<?php
$produit1_nom = "Produit 1";
$produit1_prix = 10;

$produit2_nom = "Produit 2";
$produit2_prix = 20;

$produit3_nom = "Produit 3";
$produit3_prix = 30;

echo "<ul>";
echo "<li>".$produit1_nom." - ".$produit1_prix." euros</li>";
echo "<li>".$produit2_nom." - ".$produit2_prix." euros</li>";
echo "<li>".$produit3_nom." - ".$produit3_prix." euros</li>";
echo "</ul>";
?>
```

## Exercices IF

Ex 1.

```php
<?php
$longueur = 10; // longueur en mètres
$largeur = 10; // largeur en mètres
$surface = $longueur * $largeur;
echo "La surface de la chambre est de $surface m².";

if ($longueur == $largeur) {
  echo " La chambre est carrée!";
}
?>

```

Ex 2.

```php
<?php
$temperature = 20; // température en degrés Celsius

if ($temperature >= 15 && $temperature <= 25) {
  echo "Il fait bon";
} elseif ($temperature < 15) {
  echo "Ça caille !! Montez la température !";
} else {
  echo "Trop chaud ! Descendez la température !";
}
?>
```


Ex 3. 

```php
<?php
$annee = 2; // année de l'élève (1, 2 ou 3)
$absences = 5; // nombre d'absences de l'élève

$min_cours = 0;

switch ($annee) {
  case 1:
    $min_cours = 0.8 * 50;
    break;
  case 2:
    $min_cours = 0.7 * 50;
    break;
  case 3:
    $min_cours = 0.6 * 50;
    break;
}

$nb_cours = 50 - $absences;

if ($nb_cours >= $min_cours) {
  echo "L'élève a réussi la matière.";
} else {
  echo "L'élève n'a pas réussi la matière.";
}
?>
```


## Exercices FOR

Ex 1.

```php
$i = 0;

while($i <= 10){
  echo $i . " ";
  $i++;
}

```
Ex 2.
```php
$i = 50;

//boucle while
while($i <= 70){
  echo $i . " ";
  $i++;
}

echo "\n";

//boucle for
for($i=50; $i <= 70; $i++){
  echo $i . " ";
}
```

Ex 3.

```php
for($i=51; $i <= 100; $i+=2){
  echo $i . " ";
}
```

Ex 4.
```php
$num = 17;

//boucle while
$i = 1;
while($i <= 10){
  $num++;
  echo $num . " ";
  $i++;
}

echo "\n";

//boucle for
for($i=1; $i <= 10; $i++){
  $num++;
  echo $num . " ";
}
```

Ex 5.

```php
$num = 7;

for($i=1; $i<=10; $i++){
  echo $num . " x " . $i . " = " . $num*$i . "\n";
}
```

## Exercices Arrays

Ex 1.

```php
$array = [10, 20, 50];
echo $array[0] . ", " . $array[1] . ", " . $array[2]; // Affiche: 10, 20, 50
```

Ex 2.

```php
$array[] = 8;
$array[] = 70;
echo $array[1] . ", " . $array[4]; // Affiche: 20, 70
```

Ex 3.

```php
$cities = ['Paris', 'New York', 'Tokyo', 'London', 'Berlin'];
echo $cities[0] . ", " . $cities[1] . ", " . $cities[2] . ", " . $cities[3] . ", " . $cities[4]; // Affiche: Paris, New York, Tokyo, London, Berlin
```

```php
$cities = ['Paris', 'New York', 'Tokyo', 'London', 'Berlin'];
foreach ($cities as $city) {
  echo $city . ", ";
}
// Affiche: Paris, New York, Tokyo, London, Berlin,
```

Ex 4.

```php
$cities[] = 'Madrid';
$cities[] = 'Rome';
foreach ($cities as $city) {
  echo $city . ", ";
} // ou print_r ($cities)
```


Ex 5.
```php
$cities[0] = 'Quito';
```

Ex 6.
```php
$array = array();
for ($i = 1; $i <= 200; $i++) {
  $array[] = $i;
}

```


