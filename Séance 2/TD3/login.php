<?php

/**
 * TODO
 * Retourner la liste des utilisateurs depuis le fichier JSON
 *
 * @return array
 */
function get_users() : array {
    // Ici, récupérer le contenu du fichier des utilisateurs
    // -> utiliser la fonction file_get_contents


    // Ici, décoder le contenu JSON en variable PHP


    // Retourner les utilisateurs
    return [];
}

// Si la page a été appelée avec la méthode POST
if (!empty($_POST)) {
    // Utilisateur correspond aux informations d'authentification données
    $user_found = null;

    // Récupère les utilisateurs
    $users = get_users();

    // On essaye de trouver l'utilisateur correspondant aux informations de connexion
    foreach ($users as $user) {
        /*
         * TODO
         *
         * Ici, checker les informations de connexion :
         *  - Le username est identique
         *  - Le password est identique
         */
        if (true) {
            // Récupère l'utilisateur trouvé
            $user_found = $user;

            // Sort de la boucle
            break;
        }
    }

    // Si aucun utilisateur n'a été trouvé
    if ($user_found == null) {
        // Créé une erreur
        $login_error = "Nom d'utilisateur ou mot de passe incorrect";
    }
    else {
        // S'assure qu'une session existe
        session_start();

        // Détruit la session précédente (pour être sûr)
        session_destroy();

        // Créé une nouvelle session
        session_start();

        // Affecte l'utilisateur trouvé à la session courante
        $_SESSION = $user_found;

        // TODO
        // Ici, rediriger vers la page de profil (profile)

        return;
    }
}

// Si la page n'a pas été appelée avec la méthode POST, alors ce script ne fait rien et passe directement au HTML

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <h2>Connexion</h2>

    <!-- TODO : Ici, envoyer la réponse au formulaire en POST sur cette même page -->
    <form
        style="display: flex; flex-direction: column; width: 25%"

    >
        <?php

        // Si l'erreur de login existe
        if (!empty($login_error)) {
            // Affiche l'erreur
            echo "<p style='background-color: red'>$login_error</p>";
        }

        ?>

        <label>
            Nom d'utilisateur :
            <input name="username" type="text">
        </label>

        <label>
            Mot de passe :
            <input name="password" type="password">
        </label>

        <a href="singup.php">Pas de compte ? Se créer un compte</a>

        <button type="submit">
            Se connecter
        </button>
    </form>
</body>
</html>