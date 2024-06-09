<?php
$title = "gestionReservation";
require_once "../inc/boostrap.inc.php";
?>


<div class="d-flex flex-column m-5  table-responsive">
    <h2 class="text-center fw-bolder mb-5">Liste des Reservations</h2>
    <!-- <button class="btn btn-primary mb-5"><a href="?gestionMaisons_php" class="text-white text-decoration-none">Ajouter une annonce</a></button> -->
    <table class="table table-light table-bordered mt-5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Annonce </th>
                <th>Client</th>
                <th>Date de reservation</th>
                <th>Date d'arrivee</th>
                <th>Date de depart	</th>
                <th>Nombre de personnes</th>
                <th>Etat Actuel</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $reservations = showReservations();
            foreach ($reservations as $reservation) {
                $annonce = showAnonnce($reservation['id_annonce']);
                $user = showUser($reservation['id_utilisateur']);
            ?>
                <tr>
                    <td><?= $reservation['id_reservation'] ?></td>
                    <td><?= $annonce['title'] ?></td>
                    <td><?= $user['firstName'] . " " . $user['lastName'] ?></td>
                    <td><?= $reservation['date_reservation'] ?></td>
                    <td><?= $reservation['date_arrivee'] ?></td>
                    <td><?= $reservation['date_depart'] ?></td>
                    <td><?= $reservation['nombre_personnes'] ?></td>
                    <td><?= $reservation['etat_reservation'] ?></td>
                    <td class="text-center">
                        <a href="dashboard.php?gestionReservation&action=annulation&id_reservation=<?= $reservation['id_reservation'] ?>"> annulation</a>
                        <a href="dashboard.php?gestionReservation&action=confirmation&id_reservation=<?= $reservation['id_reservation'] ?>"> confirmation</a>
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