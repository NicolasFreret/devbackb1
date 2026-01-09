<?php
    include('header.php');
    $msg = "";
    if( isset($_GET['msg']) && $_GET['msg'] == "success" ) $msg = "Tu es bien connecté.e coquin.e";
    if( isset($_GET['msg']) && $_GET['msg'] == "error" ) $msg = "Mince...";

?>

    <section>
        <h1>Se connecter</h1>
        <form action="/php/controllers/users.php" method="POST">
            <input type="email" placeholder="Ton email mon choux..." name="email"><br>
            <input type="password" placeholder="password..." name="password"><br>
            <input type="submit" value="Se connecter"><br>
            <?= $msg ?>

        </form>
    </section>
    <br><br><br><br><br>
<?php
    include('footer.php');
