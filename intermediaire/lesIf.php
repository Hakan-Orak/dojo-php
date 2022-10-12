<?php

$competence_nager = false;
if ($competence_nager) {
    echo "je sais nager !";
} else {
    echo "glou glou °°°";
}

echo "<br />";

$prenom = "Celestae";
if ($prenom == "Celeste") {
    echo "C'est vraiment un joli prénom !";
} else {
    echo "Je ne sais pas si je vais aimer 🙄";
}

echo "<br />";

$prenomProfesseur = "Hakan";

if ($prenomProfesseur == "Peter") {
    echo "je suis trop content ! Le cours va être trop bien !";
} elseif ($prenomProfesseur == "Jackson") {
    echo "Le cours sera intéressant, mais j'ai peur de m'endormir...";
} elseif ($prenomProfesseur == "Hakan") {
    echo "J'ai envi d'insulter le prof, il est gentil mais qu'est ce qu'il est nul";
} else {
    echo "😶😶😶😶";
}

switch ($prenomProfesseur) {
    case "Peter":
        echo "je suis trop content ! Le cours va être trop bien !";
        break;
    case "Jackson":
        echo "Le cours sera intéressant, mais j'ai peur de m'endormir...";
        break;
    case "Hakan":
        echo "J'ai envi d'insulter le prof, il est gentil mais qu'est ce qu'il est nul";
        break;
    default:
        echo "😶😶😶😶";
}
?>