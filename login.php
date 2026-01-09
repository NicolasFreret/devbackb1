<?php
    include('header.php');

    if(isset($_SESSION['user'])){
        header('Location: http://127.0.0.1/php/');
        exit;
    }
    
    
    
    $msg = "";
    if( isset($_GET['msg']) && $_GET['msg'] == "success" ) $msg = "Tu es bien connecté.e coquin.e";
    if( isset($_GET['msg']) && $_GET['msg'] == "error" ) $msg = "Mince...";

?>

    <section>
        <h1>Se connecter</h1>
        <form action="/php/controllers/users.php" method="POST">
            <input type="email" placeholder="Ton email mon choux..." name="email"><br>
            <input  type="password" placeholder="password..." name="password"><br>
            <p><input type="checkbox" name="rememberme" value="ok"> Se souvenir de moi ?</p>
            <input type="submit" value="Se connecter"><br>
            <?= $msg ?>

        </form>
    </section>
    <script>

    function getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
    }

    if(getCookie('email') && getCookie('password')){
        document.querySelector('[name="rememberme"]').checked = true
        document.querySelector('[name="password"]').value = getCookie('password')
        document.querySelector('[name="email"]').value = getCookie('email').replace("%40", "@");

    }

    </script>
    <br><br><br><br><br>
<?php
    include('footer.php');
