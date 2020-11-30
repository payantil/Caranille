<?php require_once("../html/header.php"); ?>

<p><h4>Etape 2/4 - Configuration de la base de donnée (Mysql)</h4></p>

<form method="POST" action="step-3.php">
    Nom de la base de donnée : <input type="text" class="form-control" name="databaseName" required>
    Adresse de la base de donnée : <input type="text" class="form-control" name="databaseHost" required>
    Nom de l'utilisateur : <input type="text" class="form-control" name="databaseUser" required>
    Mot de passe : <input type="password" class="form-control" name="databasePassword">
    Port (3306 par défaut) : <input type="number" class="form-control" name="databasePort" value="3306" required>
    <input type="hidden" class="btn btn-default form-control" name="token" value="<?php echo $_SESSION['token'] ?>">
    <input type="submit" class="btn btn-default form-control" name="install" value="Continuer">
</form>

<?php require_once("../html/footer.php"); ?>