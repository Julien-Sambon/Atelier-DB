<?php

require ('connectdb.php');

$sql = 'SELECT * FROM Article';

foreach ($pdo->query($sql) as $row) { ?>
    <div class="row">
        <div class="card w-50 mt-3 justify-content-center" style="margin: auto;">
            <div class="card-header">
                <div class="row">
                    <!-- Affiche la première info de la ligne -->                           <!-- Affiche la troisième info de la ligne -->
                    <h5 class="col-md-4 col-sm-12"><?php echo $row['titre'] ?></h5><h7 class="font-italic col-md-6 col-sm-12 offset-md-2"><?php echo $row['auteur'] ?></h7>
                </div>
            </div>
            <div class="card-body">
                <!-- Affiche la deuxième info de la ligne -->
                <p class="card-text"><?php echo $row['contenu'] ?></p>
            </div>
        </div>
    </div>
    <?php
}