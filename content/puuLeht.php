<?php
require('conf.php');
session_start();
if(!isset($_SESSION['tuvastamine'])) {
    header('Location: loginAB.php');
    exit();
}
global $yhendus;
//lisamine ISERT INTO
if(isset($_REQUEST['puuvorm'])){
    $kask=$yhendus->prepare('INSERT INTO puud(puunimi,pilt) VALUES(?, ?)');
    $kask->bind_param('ss', $_REQUEST['puunimi'],$_REQUEST['pilt']);
    $kask->execute();
    //"s"-string
    //$_REQUEST['loomanimi'] - запрос в текстовый ящик input name="loomanimi"
    header("Location: $_SERVER[PHP_SELF]");
}

// puu kustutamine
if(isset($_REQUEST['kustuta'])){
    $kask=$yhendus->prepare("DELETE FROM puud WHERE id=?");
    $kask->bind_param("i",$_REQUEST['kustuta']);
    $kask->execute();
}
//puu muutmine
if(isset($_REQUEST['muuda'])){
    $kask=$yhendus->prepare("UPDATE puud SET puunimi=?, pilt=? where id=?");
    $kask->bind_param("ssi",$_REQUEST['nimi'], $_REQUEST['pilt'],$_REQUEST['muuda']);
    $kask->execute();

}
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <title>Puuleht</title>
</head>
<body>
<div>
    <p><?=$_SESSION["kasutaja"]?> on sisse logitud</p>
    <form action="logout.php" method="post">
        <input type="submit" value="Logi välja" name="logout">
    </form>
</div>
<div class="leftcolumn">
    <h2>Puud</h2>
    <?php
    //näitame puunimed
    global $yhendus;
    $kask=$yhendus->prepare("SELECT id, puunimi FROM puud");
    $kask->bind_result($id,$nimi);
    $kask->execute();
    echo "<ul class='dbl-border'>";
    while($kask->fetch()){
        echo "<li><a href='$_SERVER[PHP_SELF]?id=$id'>".$nimi."</a></li>";
    }
    echo "</ul>";
    echo "<a href='$_SERVER[PHP_SELF]?lisa=jah'>Lisa...</a>";
    if(isSet($_REQUEST['lisa'])){
        ?>
        <form action="" method="post">
            <input type="hidden" name="puuvorm" value="jah">
            <label for="puunimi">Puunimi</label>
            <input type="text" name="puunimi" id="puunimi">
            <br>
            <label for="pilt">PildiLink</label>
            <textarea name="pilt" id="pilt"></textarea>
            <br>
            <input type="submit" value="Lisa">
        </form>
        <?php
    }

    ?>
</div>
<div class="rightcolumn">
    <h3>siia tuleb pilt, tee klik puunimi peale</h3>
    <?php
    //näitame puunimed
    global $yhendus;
    if(isset($_REQUEST['id'])){
        $kask=$yhendus->prepare("SELECT id, puunimi,pilt FROM puud where id=?");
        $kask->bind_param('i',$_REQUEST['id']);
        $kask->bind_result($id,$nimi,$pilt);
        $kask->execute();


        if ($kask->fetch()){
          if(isset($_REQUEST['muutmine'])){
              echo"
              <form action='$_SERVER[PHP_SELF]'>
               <input type='hidden' name='muuda' value='$id'>
                 <h2>Puu andmete muutmine</h2>
            <input type='text' name='nimi' value='$nimi'>
            Puunimi:
            <textarea name='pilt' value='$pilt'></textarea>
            <br>
            Pilt(peab olema pildilingi aadress)
            <input type='submit' value='muuda'>         
            </form>
              ";
          } else{


            echo "<strong>".$nimi."</strong>";
            echo "<img src='$pilt' alt='pilt' width='100%' height='100%'>";
            echo "<br>";
            if($_SESSION['onAdmin']==1){
            echo "<a href='$_SERVER[PHP_SELF]?kustuta=$id'>Kustuta</a>";
            echo "<br>";
            echo "<a href='$_SERVER[PHP_SELF]?id=$id&muutmine=$id'>Muuda</a>";
        }}}else{
            echo "Viga";
        }

    }
    $yhendus->close();
    ?>
</div>
</body>
</html>