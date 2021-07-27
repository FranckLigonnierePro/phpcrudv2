<?php
require "db.php";
$message = "";

$sql = "SELECT * FROM club";
$statement = $connection->prepare($sql);
$statement->execute();
$clubs = $statement->fetchAll(PDO::FETCH_OBJ);

$sql = "SELECT * FROM poste";
$statement = $connection->prepare($sql);
$statement->execute();
$postes = $statement->fetchAll(PDO::FETCH_OBJ);

if(isset($_POST["nom"]) && isset($_POST["numero"]) && isset($_POST["club"]) && isset($_POST["poste"])){
    
        $nom = $_POST["nom"];
        $numero = $_POST["numero"];
        $idClub = $_POST["club"];
        $idPoste = $_POST["poste"];
        $sql = "INSERT INTO joueur (nom,numero,idClub,idPoste) VALUES (:nom,:numero,:club,:poste)";
        $statement = $connection->prepare($sql);
    
        if ($statement->execute([":nom" => $nom, ":numero" => $numero, ":club" => $idClub, ":poste" => $idPoste])) {    

            $message = "Ajouté avec succes";
        };
}

?>

<?php include('./header.php') ?>
<div class="container">

    <div class="row">
        <div class="col my-5">
            <h1>Ajouter un joueur</h1>
        </div>
    </div>

    <?php if (!empty($message)) : ?>
        <div class="alert alert-success" role="alert">
            <?= $message; ?>
        </div>
    <?php endif; ?>

    <div class="row">
        <div class="col my-5">
            <form method="post">
                <div class="form-group">
                    <label>Nom</label>
                    <input type="text" class="form-control" name="nom">
                </div>
                <div class="form-group">
                    <label>Numero</label>
                    <input type="number" class="form-control" name="numero">
                </div>
                <div class="form-group">
                    <label>Club</label>
                    <select class="form-control" name="club">
                        <?php foreach($clubs as $club): ?>
                        <option value="<?= $club-> idClub ?>"><?= $club->nom ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Poste</label>
                    <select class="form-control" name="poste">
                        <?php foreach($postes as $poste): ?>
                        <option value="<?= $poste-> idPoste ?>"><?= $poste->nom ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>



</div>



<?php include('./footer.php') ?>