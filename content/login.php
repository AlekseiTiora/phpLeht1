<?php
//login vorm Andmebaasis salvestatud kajutajanimega ja pooroliga
session_start();
if(isset($_SESSION['tuvastamine'])){
    header('Location: autoLeht.php');
    exit();
}
//kontroll kas login vorm on täidetud?
if(!empty($_POST['login']) && !empty($_POST['pass'])) {
    $login = $_POST['login'];
    $pass = $_POST['pass'];


    $sool = 'vagavagatekst';
    $krypt = crypt($pass, $sool);
    //kontrollime kas andmebaasis on selline kasutaja
    require('conf.php');
    global $yhendus;
    $kask = $yhendus->prepare("SELECT nimi,onAdmin,koduleht FROM kasutajad Where  nimi=? AND parool=?");
    $kask->bind_param("ss", $login, $krypt);
    $kask->bind_result($nimi, $onAdmin, $koduleht);
    $kask->execute();

    if ($kask->fetch()) {
        $_SESSION['tuvastamine'] = 'niilihtne';
        $_SESSION['kasutaja'] = $nimi;
        $_SESSION['onAdmin'] = $onAdmin;
        if (isset($koduleht)) {
            header("Location:".$koduleht);
        } else {
            header('Location: kontakt.php');
            exit();
        }
    } else {
        echo "kasutaja $login või parool $krypt on vale";
    }
}

?>
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <title>Login</title>
</head>
<body>
<h1>Login vorm</h1>
<form action="" method="post">
    Login:
    <input type="text" name="login" placeholder="kasutaja nimi">
    <br>
    Parool:
    <input type="password" name="pass">
    <br>
    <input type="submit" value="Logi sisse">
</form>

</body>
</html>