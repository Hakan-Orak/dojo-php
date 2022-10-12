<?php
$monArray = array("Totally Spies!", "Les Supers Nanas", "Les Trois Mousquetaires");
echo count($monArray);
echo '<br/>';
print_r($monArray);

echo '<br/>';

$monArrayAvecDesCles = array(
    "prenom" => "Gwen",
    "nom" => "Stacy",
    "cheveux" => "blonde",
    "intelligente" => "Beaucoup",
    "amoureux" => "Peter Parker",
    "vivante" => "☠👻😭"
);

echo "La personne que j'aime est " . $monArrayAvecDesCles['prenom'] . " " . $monArrayAvecDesCles['nom'] . ". " .
"elle est " . $monArrayAvecDesCles['cheveux'] . " et " . $monArrayAvecDesCles['intelligente'] . " intelligente ! " .
"Cependant elle en aime un autre, il s'agit de " . $monArrayAvecDesCles['amoureux'] . " et pour couronner le tout est " .
    $monArrayAvecDesCles['vivante'] . " ...";
?>