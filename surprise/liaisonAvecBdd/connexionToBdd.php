<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<div class="container">
    <?php
    // on définit les identients de connexion
    $serverName = 'localhost';
    $database = 'activitesport';
    $userName = 'root';
    $password = '';

    // on établit la connexion
    $connexion = new mysqli($serverName, $userName, $password, $database);

    // on vérifie si l'on est connecté
    if ($connexion->connect_error) {
        die('Erreur : la connexion a échoué car <br/>' . $connexion->connect_error);
    }

    echo 'Connexion réussie !';

    $faireLaRequetePost = false;

    if ($faireLaRequetePost) {
        $requeteSqlPost = "INSERT into basicfit (muscle, temps, jour) values ('abdos', 20, 'samedi')";
        if (mysqli_query($connexion, $requeteSqlPost)) {
            echo "<br/> la donnée a été inséré !";
        } else {
            echo "je suis désolé mais vous avez une erreur qui est : <br />" . mysqli_error($connexion);
        }
    }

    $faireLaRequeteGet = true;

    if ($faireLaRequeteGet) {
        $requeteSqlGet = "Select * from basicfit";
        $resultatDuGet = $connexion->query($requeteSqlGet);

        // Nous avons reçu un tableau
        $i = 1;
        echo "<br />";
        foreach ($resultatDuGet as $notreData) {
            echo "Notre donnée numéro " . $i . "<br />";
            echo " id = " . $notreData['id'] . '<br />';
            echo " muscle = " . $notreData['muscle'] . '<br />';
            echo " temps = " . $notreData['temps'] . '<br />';
            echo " jour = " . $notreData['jour'] . '<br />';
            echo "<br />";
            echo "<br />";
            $i = $i + 1;
        }
    }
    mysqli_close($connexion);

    ?>


    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Muscle</th>
            <th scope="col">Temps</th>
            <th scope="col">Jour</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($resultatDuGet as $notreData) {
            ?>
            <tr>
                <th scope="row">#<?php echo $notreData['id'] ?></th>
                <td><?php echo $notreData['muscle'] ?></td>
                <td><?php echo $notreData['temps'] ?></td>
                <td><?php echo $notreData['jour'] ?></td>

            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</html>