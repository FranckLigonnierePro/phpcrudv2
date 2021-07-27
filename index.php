<?php
require "db.php";
$sql = "SELECT joueur.idJoueur, joueur.nom, joueur.numero, club.nom AS club, poste.nom AS poste FROM joueur
JOIN club 
ON club.idClub = joueur.idClub
JOIN poste 
ON poste.idPoste = joueur.idPoste";

$statement = $connection->prepare($sql);
$statement->execute();
$joueurs = $statement->fetchAll(PDO::FETCH_OBJ)
?>

<?php include('./header.php') ?>

<div class="container">
    <div class="row">
        <div class="col my-5">
            <h1>Liste des joueurs</h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card mt-2">
                <div class="card-header">
                    <h2>Tous les joueurs</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">

                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Numero</th>
                            <th>Club</th>
                            <th>Poste</th>
                        </tr>

                  <?php foreach($joueurs as $joueur):?>
                            <tr>
                                <td><?=$joueur->idJoueur;?></td>
                                <td><?=$joueur->nom;?></td>
                                <td><?=$joueur->numero;?></td>
                                <td><?=$joueur->club;?></td>
                                <td><?=$joueur->poste;?></td>
                                <td>
                                    <a href="" class="btn btn-info">Editer</a>
                                    <a href="" class='btn btn-danger'>Supprimer</a>
                                </td>
                            </tr>
                   
                    <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('./footer.php') ?>