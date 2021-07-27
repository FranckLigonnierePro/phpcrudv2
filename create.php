<?php

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
                    <label>Position</label>
                    <input type="text" class="form-control" name="position">
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>



</div>



<?php include('./footer.php') ?>