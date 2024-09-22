<?php

/**
 * TODO
 * Ajouter un compte dans la liste des utilisateurs
 *
 * @param array $user
 * @return void
 */
function add_user(array $user) : void {
    // Ici, récupérer le contenu du fichier des utilisateurs
    // -> utiliser la fonction file_get_contents


    // Ici, décoder le contenu JSON en variable PHP


    // Ici, ajouter l'utilisateur au tableau


    // Ici, ré-encoder le tableau PHP en JSON (avec le flag JSON_PRETTY_PRINT)


    // Ici, écrire le JSON dans le fichier
    // -> utiliser la fonction file_put_contents
    // Lien :

}

// Si la page a été appelée avec la méthode POST
if (!empty($_POST)) {
    // Tableau contenant les erreurs rencontrées lors de la validation du formulaire
    $errors = [];

    // TODO
    // Ici, récupérer la variable username
    $username = null;

    // TODO
    // Ici, récupérer la variable mail
    $email = null;

    // TODO
    // Ici, récupérer la variable nationality
    $nationality = null;

    // TODO
    // Ici, récupérer la variable password
    $password = null;

    /*
     * TODO
     * Ici, valider que le champ username :
     * - existe
     * - est un string
     * - fait au moins 4 caractères
     */
    if (true) {
        $errors[] = "Erreur sur le nom d'utilisateur";
    }

    /*
     * TODO
     * Ici, valider que le champ email :
     * - existe
     * - est un string
     * - contient un @
     *      -> utiliser la fonction str_contains, lien :
     */
    if (true) {
        $errors[] = "Erreur sur l'email";
    }

    /*
     * TODO
     * Ici, valider que le champ nationality :
     * - existe
     * - est un string
     * - n'est pas vide
     * - est compris dans la liste suivante : Français, Anglais, Italien
     *      -> utiliser la fonction in_array, lien :
     */
    if (true) {
        $errors[] = "Erreur sur la nationalité";
    }

    /*
     * TODO
     * Ici, valider que le champ password :
     * - existe
     * - est un string
     * - fait au moins 4 caractères
     */
    if (true) {
        $errors[] = "Erreur sur le mot de passe";
    }

    // S'il n'existe aucune erreur lors de la création du compte
    if (sizeof($errors) == 0) {
        // Détruit la session précédente (pour être sûr)
        session_destroy();

        // Créé une nouvelle session
        session_start();

        // Ajoute le nouveau compte au fichier JSON des utilisateurs
        add_user($_POST);

        // Attribut les données de l'utilisateur à la session courante
        $_SESSION = [
            'username' => $username,
            'email' => $email,
            'nationality' => $nationality,
            'password' => $password
        ];

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
    <title>Se créer un compte</title>
</head>
<body>
    <h2>Se créer un compte</h2>

    <!-- TODO : Ici, envoyer la réponse au formulaire en POST sur cette même page -->
    <form
        style="display: flex; flex-direction: column; width: 25%"


    >
        <?php

        // Si le tableau des erreurs existe et n'est pas vide
        if (!empty($errors)) {
            // Pour chaque erreur
            foreach ($errors as $error) {
                // Affiche l'erreur
                echo "<span style='background-color: red'>$error</span>";
            }
        }

        ?>

        <label>
            Nom d'utilisateur :
            <input name="username" type="text">
        </label>

        <label>
            Email :
            <input name="email" type="email">
        </label>

        <label>
            Nationalité :
            <select name="nationality">
                <option>Français</option>
                <option>Anglais</option>
                <option>Italien</option>
            </select>
        </label>

        <label>
            Mot de passe :
            <input name="password" type="password">
        </label>

        <button type="submit">
            Se créer un compte
        </button>
    </form>
</body>
</html>