<?php

for($i = 1; $i <= 10; $i = $i+1) {
    echo "je vais me répeter " . $i . " fois 🥱";
    echo "<br />";
}

$monArray = array("Totally Spies!", "Les Supers Nanas", "Les Trois Mousquetaires");
foreach ($monArray as $mesDessinsAnimes) {
    echo "Quand j'étais petit j'ai beaucoup aimé : ";
    echo $mesDessinsAnimes;
    echo "<br />";
    echo "<br />";
}
?>