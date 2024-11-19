<?php

$search = $_GET['search'];
$results = [];

if (!empty($search)) {
    try {
        // Ici, se connecter à la base de données

        // Ici, mettre la recherche en minuscule

        // Ici, préparer une requête pour trouver les artistes correspondants à la recherche (la colonne Name doit être en minuscule)


        // Associer la requête préparée à la variable recherche (search)
        // -> Aidez vous de la command execute()


        // Récupérer les résultats
        // -> Aidez vous de la commande fetchAll()

    }
    catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
    }
}

?>


<form action="exo5.php">
    <label for="search">Rechercher un artiste :</label>
    <input type="text" name="search" id="search" required/>
    <button type="submit">Chercher</button>
</form>

<ul>
    <?php

    // Ici, afficher le nom de chaque artiste trouvé dans une balise <li>

    ?>
</ul>
