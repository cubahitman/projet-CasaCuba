<?php





session_start();
ob_start(); // Active le tampon de sortie
// constante qui définit les dossiers dans lesquels se situe le site pour pouvoir déterminer des chemin absolus à partir de localhost (on ne prend pas locahost). Ainsi nous écrivons tous les chemins (exp : src, href) en absolus avec cette constante.
define("RACINE_SITE", "/projet-CasaCuba/");



///////////////////////////// Fonction de débugage //////////////////////////

function debug($var)
{

    echo '<pre class="border border-dark bg-light text-primary w-50 p-3">';

    var_dump($var);

    echo '</pre>';
}

////////////////////// Fonction d'alert ////////////////////////////////////////

function alert(string $contenu, string $class)
{

    return "<div class='alert alert-$class  text-center w-50 m-auto mb-5' role='alert'>
        $contenu

            <button type='button' class='btn btn-close' data-bs-dismiss='alert' aria-label='Close'></button>

        </div>";
}

///////////////////////////// Fonction de déconnexion/////////////////////////
/**
 * funtion qui deconecte le users
 *
 * @return void
 */
function logOut()
{

    if (isset($_GET['action']) && !empty($_GET['action']) && $_GET['action'] == 'deconnexion') {


        unset($_SESSION['user']);
        // On supprime l'indice "user " de la session pour se déconnecter // cette fonction détruit les variables  stocké  comme 'firstName' et 'email'.

        //session_destroy(); // Détruit toutes les données de la session déjà  établie . cette fonction détruit la session sur le serveur 

        header("location:" . RACINE_SITE . "index.php");
    }
}
// logOut();


///////////////////////////  Fonction de connexion à la BDD //////////////////////////

/**
 * On va utiliser l'extension PHP Data Object (PDO), elle définit une excellente interface pour accèder à une base de données depuis PHP et d'éxécuter des requêtes SQL.
 * pour se connecter à la BDD avec PDO, il faut créer une instance de cette Class/Objet (PDO) qui représente une connexion à la BDD.
 */

// On déclare des constantes d'environnement qui vont contenir les informations à la connexion à la BDD

// Constante du serveur => localhost
define("DBHOST", "localhost");

// Constante de l'utilisateur de la BDD du serveur en local  => root
define("DBUSER", "root");

// Constante pour le mot de passe de serveur en local => pas de mot de passe
define("DBPASS", "");

// Constante pour le nom de la BDD
define("DBNAME", "house");


function connexionBdd()
{

    // Sans la variable $dsn et sans le constantes, on se connecte à la BDD :

    // $pdo = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8', 'root', '');

    // avec la variable DSN (Data Source Name) et les constantes

    // $dsn = "mysql:host=localhost;dbname=house;charset=utf8";

    $dsn = "mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset=utf8";

    try {

        $pdo = new PDO($dsn, DBUSER, DBPASS);

        // On définit le mode d'erreur de PDO sur Exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {

        die($e->getMessage());
    }

    return $pdo;
}
// connexionBdd();


////////////////// Fonction pour vérifier si un email existe dans la BDD ///////////////////////////////


function checkEmailUser(string $email): mixed
{
    $pdo = connexionBdd();
    $sql = "SELECT * FROM users WHERE email = :email";
    $request = $pdo->prepare($sql);
    $request->execute(array(
        ':email' => $email

    ));

    $resultat = $request->fetch();
    return $resultat;
}

/////////// Fonction pour vérifier un utilisateur ////////////////////

function checkUser(string $email, string $pseudo): mixed
{

    $pdo = connexionBdd();

    $sql = "SELECT * FROM users WHERE pseudo = :pseudo AND email = :email";
    $request = $pdo->prepare($sql);
    $request->execute(array(
        ':pseudo' => $pseudo,
        ':email' => $email


    ));
    $resultat = $request->fetch();
    return $resultat;
}


////////////////// Fonction pour vérifier si un pseudo existe dans la BDD ///////////////////////////////

function checkPseudoUser(string $pseudo)
{
    $pdo = connexionBdd();
    $sql = "SELECT * FROM users WHERE pseudo = :pseudo";
    $request = $pdo->prepare($sql);
    $request->execute(array(
        ':pseudo' => $pseudo

    ));

    $resultat = $request->fetch();
    return $resultat;
}
//////////////////// Fonctions du CRUD pour les utilisateurs Users /////////////////////

function inscriptionUsers(string $firstName, string $lastName, string $pseudo, string $email, string $mdp, string $phone, string $civility, string $address, string $zipCode, string $city, string $country): void
{

    $pdo = connexionBdd(); // je stock ma connexion  à la BDD dans une variable

    $sql = "INSERT INTO users 
        (firstName, lastName, pseudo, email, mdp, phone, civility, address, zipCode, city, country)
        VALUES
        (:firstName, :lastName, :pseudo, :email, :mdp, :phone, :civility, :address, :zipCode, :city, :country)"; // Requête d'insertion que je stock dans une variable
    $request = $pdo->prepare($sql); // Je prépare ma requête et je l'exécute
    $request->execute(
        array(
            ':firstName' => $firstName,
            ':lastName' => $lastName,
            ':pseudo' => $pseudo,
            ':email' => $email,
            ':mdp' => $mdp,
            ':phone' => $phone,
            ':civility' => $civility,

            ':address' => $address,
            ':zipCode' => $zipCode,
            ':city' => $city,
            ':country' => $country

        )
    );
}
///////////////// Une fonction pour créer la table users ////////////////////
function createTableUsers()
{

    $pdo = connexionBdd();

    $sql = "CREATE TABLE IF NOT EXISTS users (
            id_user INT PRIMARY KEY AUTO_INCREMENT,
            firstName VARCHAR(50) NOT NULL,
            lastName VARCHAR(50) NOT NULL,
            pseudo VARCHAR(50) NOT NULL,
            email VARCHAR(100) NOT NULL,
            mdp VARCHAR(255) NOT NULL,
            phone VARCHAR(30) NOT NULL,
            civility ENUM('f', 'h') NOT NULL,
            birthday DATE NOT NULL,
            address VARCHAR(50) NOT NULL,
            zipCode VARCHAR(50) NOT NULL,
            city VARCHAR(50) NOT NULL,
            country VARCHAR(50) NOT NULL,
            role ENUM('ROLE_USER', 'ROLE_ADMIN') DEFAULT 'ROLE_USER'
        )";

    $request = $pdo->exec($sql);
}

// createTableUsers();
//  /////////////////Fonction pour récupérer tous les utilisateurs///////////////////


function allUsers(): array
{

    $pdo = connexionBdd();
    $sql = "SELECT * FROM users";
    $request = $pdo->query($sql);
    $result = $request->fetchAll();
    return $result;
}

// /////////////////  Fonction pour recupereer un seul utilisateur  //////////////////////

function showUser(int $id): array
{
    $pdo = connexionBdd();
    $sql = "SELECT * FROM users WHERE id_user = :id_user";
    $request = $pdo->prepare($sql);
    $request->execute(array(

        ':id_user' => $id

    ));
    $result = $request->fetch();
    return $result;
}

// /////////////////  Fonction pour supprimer un utilisateur  ///////////////////////


function deleteUser(int $id): void
{
    $pdo = connexionBdd();
    $sql = "DELETE FROM users WHERE id_user = :id_user";
    $request = $pdo->prepare($sql);
    $request->execute(array(

        ':id_user' => $id

    ));
}

// ////////////////////  Fonction pour modifier le role d'un utilisateur//////////////

function updateRole(string $role, int $id): void
{
    $pdo = connexionBdd();
    $sql = "UPDATE users SET role = :role WHERE id_user = :id_user";
    $request = $pdo->prepare($sql);
    $request->execute(array(
        ':role' => $role,
        ':id_user' => $id

    ));
}
// ////////////////////  Fonction pour modifier un utilisateur//////////////
function updateUser($id_user, $firstName, $lastName, $pseudo, $email, $phone, $civility, $address, $zipCode, $city, $country)
{
    $pdo = connexionBdd();
    $sql = $pdo->prepare("UPDATE users SET firstName = :firstName, lastName = :lastName, pseudo = :pseudo, email = :email, phone = :phone, civility = :civility, address = :address, zipCode = :zipCode, city = :city, country = :country WHERE id_user = :id_user LIMIT 1");
    $sql->bindParam(':firstName', $firstName);
    $sql->bindParam(':lastName', $lastName);
    $sql->bindParam(':pseudo', $pseudo);
    $sql->bindParam(':email', $email);
    $sql->bindParam(':phone', $phone);
    $sql->bindParam(':civility', $civility);
    $sql->bindParam(':address', $address);
    $sql->bindParam(':zipCode', $zipCode);
    $sql->bindParam(':city', $city);
    $sql->bindParam(':country', $country);
    $sql->bindParam(':id_user', $id_user);
    if ($sql->execute()) {

        echo '<h3 class="text-center">Mise à jour réussie</h3>';
    } else {
        $errorInfo = $sql->errorInfo();
        echo "Erreur lors de la mise à jour : " . $errorInfo[2];
    }
}

// ==========Function ajouter annonce =============//


function addAnnonce($photo, string $title, string $description, string $postal_code, string $city, string $type,  float $price,)
{

    $pdo = connexionBdd();

    $sql = "INSERT INTO advert (photo, title, description, postal_code, city, type, price) VALUES (:photo, :title, :description, :postal_code, :city, :type, :price)";

    $request = $pdo->prepare($sql);
    $request->execute(array(

        ':photo' => $photo,
        ':title' => $title,
        ':description' => $description,
        ':postal_code' => $postal_code,
        ':city' => $city,
        ':type' => $type,
        ':price' => $price,


    ));
}

// =============================Functionmontrer les annonces=====================://


// function allAnnonces(): array
// {

//     $pdo = connexionBdd();
//     $sql = "SELECT * FROM advert";
//     $request = $pdo->query($sql);
//     $result = $request->fetchAll();
//     return $result;
// }

// =============================montrer les annonces en location=====================://

function annoncesByType($types = [])
{
    $pdo = connexionBdd();
    $sql = "SELECT * FROM advert";
    if (!empty($types)) {
        $sql .= " WHERE type IN (" . implode(',', array_fill(0, count($types), '?')) . ")";
    }
    $request = $pdo->prepare($sql);
    if (!empty($types)) {
        $request->execute($types);
    } else {
        $request->execute();
    }
    $result = $request->fetchAll();
    return $result;
}

// ===============================petit paneau qui montre que ce reservee ============================//

function displayAdvertAnnonce($annonce)
{
    if ($annonce['is_reserved']) {
        return "<h5 class='card-title'>" . $annonce['title'] . " <sub class='bg-danger text-white rounded px-1'>Réservé</sub></h5>";
    } else {
        return "<h5 class='card-title'>" . $annonce['title'] . "</h5>";
    }
}

// ====================petit panneau pour afficher de petit subtag==================///

function displaySupTag($value = null)
{
    if (isset($value) && !empty($value)) {
        return "<sup class='badge rounded-pill text-bg-danger ms-1 fs-16'>" . $value . "</sup>";
    } else {
        // La variable n'existe pas, est nulle ou est vide
        return "";
    }
}
// ==========================Afiche le 1( derniers annnces )
function dernieresAnnonces(): array

{
    $pdo = connexionBdd();
    $sql = "SELECT * FROM advert ORDER BY price ASC
    LIMIT 5";
    $request = $pdo->query($sql);
    $result = $request->fetchAll();
    return $result;
}
// y=============== Cette fonction récupère les détails d'une annonce spécifique à partir de la base de données.
function showAnonnce($id_advert)
{
    $pdo = connexionBdd();
    $sql = $pdo->prepare("SELECT * FROM advert WHERE id_advert = :id_advert");
    $sql->bindParam(':id_advert', $id_advert);
    $sql->execute();
    $annoce = $sql->fetch();
    return $annoce;
}






// Cette fonction met à jour le statut de réservation d'une annonce spécifique dans la base de données.
function reserveAdvert($id_advert, $reservation_message)
{
    // Obtenez l'objet PDO
    $pdo = connexionBdd();

    // Préparez la requête SQL pour mettre à jour le message de réservation et le champ 'is_reserved'
    $sql = $pdo->prepare("UPDATE advert SET is_reserved = true, reservation_message = :reservation_message WHERE id_advert = :id_advert");

    // Liez les paramètres
    $sql->bindParam(':id_advert', $id_advert);
    $sql->bindParam(':reservation_message', $reservation_message);

    // Exécutez la requête
    $sql->execute();
    // Redirection vers la page de confirmation

    // header('Location: confirmation.php');

    // exit;
}

// Cette fonction cansele la reservation.

function cancelAdvert($id_advert)
{
    try {
        $pdo = connexionBdd();
        $sql = $pdo->prepare("SELECT * FROM advert WHERE id_advert = :id_advert");
        $sql->bindParam(':id_advert', $id_advert);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $sql = $pdo->prepare("UPDATE advert SET is_reserved = false, reservation_message = NULL WHERE id_advert = :id_advert");
            $sql->bindParam(':id_advert', $id_advert);
            if ($sql->execute()) {
                echo 'Annonce annulée avec succès.';
                $info = 'Annonce annulée avec succès.';
            } else {
                echo 'Erreur lors de l\'annulation de l\'annonce: ' . implode(', ', $sql->errorInfo());
            }
        } else {
            echo 'Annonce non trouvée.';
        }
    } catch (PDOException $e) {
        echo 'Erreur de connexion à la base de données: ' . $e->getMessage();
    }
}

//   ====================function  pour suprimer annonce================================//

function deleteAdvert(int $id): void
{

    try {
        $pdo = connexionBdd();
        $sql = $pdo->prepare("SELECT * FROM advert WHERE id_advert = :id_advert");
        $sql->bindParam(':id_advert', $id);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $sql = $pdo->prepare("DELETE FROM advert WHERE id_advert = :id_advert");
            $sql->bindParam(':id_advert', $id);
            $sql->execute();
            echo 'Annonce supprimée avec succès.';
        } else {
            echo 'Annonce non supprimée.';
        }
    } catch (PDOException $e) {
        echo 'Erreur de connexion à la base de données: ' . $e->getMessage();
    }
}



// =======================Functions entrer les reservations ==============//

function entreReservation($id_annonce, $id_utilisateur, $date_arrivee, $date_depart, $nombre_personnes) {
    $pdo = connexionBdd();
    $sql = $pdo->prepare("INSERT INTO reservations (id_annonce, id_utilisateur, date_arrivee, date_depart, nombre_personnes) VALUES (:id_annonce, :id_utilisateur, :date_arrivee, :date_depart, :nombre_personnes)");
    $sql->bindParam(':id_annonce', $id_annonce);
    $sql->bindParam(':id_utilisateur', $id_utilisateur);
    $sql->bindParam(':date_arrivee', $date_arrivee);
    $sql->bindParam(':date_depart', $date_depart);
    $sql->bindParam(':nombre_personnes', $nombre_personnes);
    try {
        $sql->execute();
        header('Location: index.php');
        exit;
    } catch (PDOException $e) {
        // Logger l'erreur dans un fichier ou une base de données
        error_log($e->getMessage());
        echo "Erreur lors de la réservation";
    }
}
//  ==================================Funtions afiche reservations  =====================/

function showReservations($id_utilisateur )
{
    $pdo = connexionBdd();
    $sql = $pdo->prepare("SELECT * FROM reservations WHERE id_utilisateur  = :id_utilisateur ");
    $sql->bindParam(':id_utilisateur', $id_utilisateur, PDO::PARAM_INT);
    $sql->execute();
    $reservation = $sql->fetchAll();
    return $reservation;
}






//  creacion de table reservations
// function createReservationsTable($pdo)
// {

//     $sql = "CREATE TABLE reservations (

//       id_reservation INT PRIMARY KEY AUTO_INCREMENT,

//       id_advert INT,

//       id_user INT,

//       message TEXT,

//       date_reservation DATETIME,

//       status ENUM('en attente', 'acceptée', 'refusée'),

//       FOREIGN KEY (id_advert) REFERENCES advert(id_advert),

//       FOREIGN KEY (id_user) REFERENCES users(id_user)

//     )";


//     try {

//         $pdo->exec($sql);

//         echo "Table reservations créée avec succès";
//     } catch (PDOException $e) {

//         echo "Erreur lors de la création de la table reservations : " . $e->getMessage();
//     }
// }


// $pdo = connexionBdd();

