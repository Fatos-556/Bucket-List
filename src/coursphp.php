<?php

$ageDuPetit = 25;
echo $ageDuPetit . ' ans';

$message = 'Bonjour ! ';
echo $message;


$prix = 2;
$qte = 4;
$somme = $prix * $qte;
echo $somme;


echo '<h1>conditions : </h1>';
$age = 14;
if ($age < 12)// inférieur supérieur et attention au symbols != >< == === =
{
    echo 'Salut Gamin! ';
} elseif ($age == 14) {
    echo 'tu es un ado';
} else {
    echo 'Bonjoru adulte!';
}

$adulte = true;
$nom = "Bernard!";
if ($adulte and $nom == "Bernard!") {
    ?>
    <p>
        echo 'tu es adulte et tu t\'appelle bernard';
    </p>
    <?php
} else {
    echo 'tu es un enfant';
}


echo '<h1>les cas</h1>';

switch ($age) {
    case 4:
        echo 'Tu as 4 ans';
        break;
    case 16:
        echo 'tu as 16 ans';
        break;
    case 14 :
        echo 'tu as 14 ans';
        break;
}


echo '<h1>les boucles - repeter autant de fois qu\'on veut </h1>';

echo '<h3> On peut replacer tout la boucle while avec une seul boucle for : 

for {$repetitions = 0; $repetitions < 4 ; $repetitions++ }
{
    echo \'<p>Je ne dois pas copier sur mon
     voisin. \'. $repetitions. \' fois </p>\';</h3>';


for ($repetitions = 0; $repetitions < 3; $repetitions++) {
    echo '<p>Je ne dois pas copier sur mon voisin. ' . $repetitions . ' fois </p>';

}
echo '<p> _______________________________if ci dessus et while ci dessous  :  _________________</p>';
$repetitions = 0;
while ($repetitions < 3) {
    echo '<p>Je ne dois pas copier sur mon voisin. ' . $repetitions . ' fois </p>';

    $repetitions = $repetitions + 1;
}

echo '<h1>Les tableaux </h1>';

$prenoms[0] = 'Bibi';
$prenoms[1] = 'lulu';
$prenoms[2] = 'coco';
echo $prenoms[1];
echo '<p> on peut initialiser comme ci dessus et on peut aussi les ajouter comme ci-dessous</p>';
$prenomss = array('nom' => 'bibi', 'prenom' => 'lulu', 'nom de famille' => 'coco');
echo $prenomss['prenom'];

echo '<p> on peut utiliser aussi le print_r($nomvariable) pour afficher toutes les cases du tableau meme si on l\'utilise pour débug</p>';


echo print_r($prenomss);

foreach ($prenoms as $prenom) {
    echo '<p>' . $prenom . '</p>';
}

echo '<h1>Les fonctions </h1>';

$phrase = 'bonjour je suis une phrase';
$nombreDeCaracteres = strlen($phrase);
echo 'il y a ' . $nombreDeCaracteres . ' dans cette phrase : "' . $phrase . '"';

$melangeCaracters = str_shuffle($phrase);
echo '<p>les cracteres de la phrase "' . $phrase . '" sont melangé comme suit : "' . $melangeCaracters . '"</p>';

echo date('d M Y');

echo '<p> on a vu les fonctions qui sont deja tout pret et on va voir comment on crée des fonctions </p>';
function bjr($nom)
{
    echo '<p>bjr ' . $nom . '</p>';
}

bjr('Marie');
bjr('dupont');
?>