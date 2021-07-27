<?php
require "db.php";
$sql = "SELECT * FROM poste";
$statement = $connection->prepare($sql);
$statement->execute();
$postes = $statement->fetchAll(PDO::FETCH_OBJ)
?>

    <div class="row">
        <div class="col">
            <div class="card mt-2">
                <div class="card-header">
                    <h2>Tous les Postes</h2>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">

                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                        </tr>

                  <?php foreach($postes as $poste):?>
                            <tr>
                                <td><?=$poste->idPoste;?></td>
                                <td><?=$poste->nom;?></td>
                                <td>
                                    <a href="edit.php?id=<?= $poste->idPoste; ?>" class="btn btn-info">Editer</a>
                                    <a href="" class='btn btn-danger'>Supprimer</a>
                                </td>
                            </tr>       
                    <?php endforeach; ?>

                    </table>
                </div> 
            </div>
        </div>
    </div>  
