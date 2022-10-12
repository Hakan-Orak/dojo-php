<html>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<div class="container">
    <form method="get">
        <div class="form-group">
            <label for="votreEmail">Votre super email</label>
            <input type="text" class="form-control" id="votreEmail" name="votreEmail" aria-describedby="emailHelp"
                   placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">Veuillez saisir votre mail avec beaucoup d'amour et de passion 🥰</small>
        </div>
        <div class="form-group">
            <label for="votreMotDePasse">Votre mot de passe 🕵️‍</label>
            <input type="password" class="form-control" id="votreMotDePasse" name="votreMotDePasse"
                   placeholder="Donner moi votre mot de passe 👼">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="votreMood" name="votreMood">
            <label class="form-check-label" for="votreMood">Cliquez moi dessus si vous êtes heureux</label>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer !</button>
    </form>
</div>
<div class="container">
    <?php
    if (isset($_GET['votreEmail']) && !empty($_GET['votreEmail']) && isset($_GET['votreMotDePasse']) && !empty($_GET['votreMotDePasse'])) {
        echo "Bonjour voici votre Email: " . $_GET['votreEmail'];
        echo "<br />";
        echo "Bonjour voici votre Mot de passe: " . $_GET['votreMotDePasse'];
        echo "<br />";
        echo "Merci d'avoir renseigné vos identifiants !";
        echo "<br />";

        if (isset($_GET['votreMood'])) {
            if ($_GET['votreMood'] == "on") {
                echo "je suis heureux de vous voir heureux 🥰";
            }
        } else {
            echo "que puis-je faire pour votre aider 😥";
        }

    } else {
        echo "Veuillez saisir vos identifiants !";
    }
    ?>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</html>