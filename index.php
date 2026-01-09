<?php
    require('header.php');
    $prez = isset($_GET['nom']) ? $_GET['nom'] : "Jean Luc";
    $prez .= isset($_GET['prenom']) ? " ".$_GET['prenom'] : " Mélanchon";

?>

    <section>
        <h1>Home</h1>
        <p>Bonjour <?= $prez ?></p>

    </section>

<?php
    include('footer.php');