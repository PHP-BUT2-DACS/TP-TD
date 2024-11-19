<?php

// Ici, se connecter à la BDD chinook.db (afficher un message en cas d'erreur)
$pdo = null; // permet de passer outre le try/catch


// Ici, récupérer tous les devis (invoice) d'un client (customer)