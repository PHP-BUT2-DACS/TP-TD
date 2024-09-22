<?php

// TODO
// Ici, permettre d'accéder à la variable $_SESSION


// TODO
// Ici, récupérer la variable username
$username = null;

// TODO
// Ici, récupérer la variable mail
$email = null;

// TODO
// Ici, récupérer la variable nationality
$nationality = null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profil</title>
</head>
<body>
    <h2>Profil</h2>
    <p><strong>Prénom : </strong><?php echo $username ?></p>
    <p><strong>Email : </strong><?php echo $email ?></p>
    <p><strong>Nationalité : </strong><?php echo $nationality ?></p>

    <a href="logout.php">
        <button>Déconnexion</button>
    </a>
</body>
</html>