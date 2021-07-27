<?php
require "db.php";
$sql = "SELECT * FROM club";
$statement = $connection->prepare($sql);
$statement->execute();
$clubs = $statement->fetchAll(PDO::FETCH_OBJ)
?>

    <div class="row">
        <div class="col">
            <div class="card mt-2">
                <div class="card-header">
                    <h2>Tous les clubs</h2>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">

                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                        </tr>

                  <?php foreach($clubs as $club):?>
                            <tr>
                                <td><?=$club->idClub;?></td>
                                <td><?=$club->nom;?></td>
                                <td>
                                    <a href="edit.php?id=<?= $club->idClub; ?>" class="btn btn-info">Editer</a>
                                    <a href="" class='btn btn-danger'>Supprimer</a>
                                </td>
                            </tr>       
                    <?php endforeach; ?>

                    </table>
                </div> 
            </div>
        </div>
    </div>  
