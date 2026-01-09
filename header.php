<?php 
//echo $_SERVER['HTTP_REFERER'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <header>
        <a href="index.php">
            Home
        </a>

        <a href="about.php">
            About
        </a>

        <a href="contact.php">
            Contact
        </a>

        <a href="<?= isset($_COOKIE['user']) ? 'controllers/logout.php' : 'login.php' ?>">
            <?= isset($_COOKIE['user']) ? 'Déconnexion' : 'Connexion' ?>
        </a>
  </header> 
  <main>
 
