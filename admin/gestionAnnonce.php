<?php
$title = "gestionAnnonce";
require_once "../inc/boostrap.inc.php";
?>


<div class="d-flex flex-column m-5  table-responsive">
    <h2 class="text-center fw-bolder mb-5">Liste des Annonce</h2>
    <button class="btn btn-primary mb-5"><a href="?gestionMaisons_php" class="text-white text-decoration-none">Ajouter une annonce</a></button>
    <table class="table table-light table-bordered mt-5">
        <thead>
            <tr>
                <th>ID</th>
                <th>title</th>
                <th>photo</th>
                <th>description</th>
                <th>postal_code</th>
                <th>city</th>
                <th>type</th>
                <th>price</th>
                <th>reservation_message</th>
                <th>is_reserved</th>
                <th>Supprimer</th>
                <th>Modifier</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $annonces = annoncesByType();
            foreach ($annonces as $annonce) {
            ?>
                <tr>
                    <td><?= $annonce['id_advert'] ?></td>
                    <td><?= ucfirst($annonce['title']) ?></td>
                    <td><?= "<img style='width: 100px' src=".RACINE_SITE ."assets/img/".$annonce['photo']." />" ?></td>
                    <td><?= substr($annonce['description'] , 0 , 100) . "..." ?></td>
                    <td><?= $annonce['postal_code'] ?></td>
                    <td><?= $annonce['city'] ?></td>
                    <td><?= $annonce['type'] ?></td>
                    <td><?= $annonce['price'] ?></td>
                    <td><?= $annonce['reservation_message'] ?></td>
                    <td><?= $annonce['is_reserved'] ?></td>
                    <td class="text-center">
                        <a href="dashboard.php?gestionAnnonce&action=delete&id_annonce=<?= $annonce['id_advert'] ?>"><i class="bi bi-trash3-fill text-danger"></i></a>
                    </td>
                    <td class="text-center">
                        <a href="dashboard.php?update_annonce_php&action=modifier&id_annonce=<?= $annonce['id_advert'] ?>"><i class="bi bi-pen-fill"></i></a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>

    </table>
</div>




<?php
require_once "../inc/footer.inc.php"
?>