<div class="leftcolumn">
    <?php
    require('conf.php');
    //функция, которая удаляет из адресной строки переменные
    function clearVarExpt($url, $varname){
        return strtok(basename($_SERVER['REQUEST_URI']), "?")."?$varname=".$_REQUEST[$varname];
    }
    global $yhendus;
    //lisamine ISERT INTO
    if(!empty($_REQUEST['loomanimi'])){
        $kask=$yhendus->prepare('INSERT INTO loomad(nimi,kirjeldus) VALUES(?, ?)');
        $kask->bind_param('ss', $_REQUEST['loomanimi'],$_REQUEST['kirjeldus']);
        $kask->execute();
        //"s"-string
        //$_REQUEST['loomanimi'] - запрос в текстовый ящик input name="loomanimi"
        //header("Location:" .basename($_SERVER['REQUEST_URI']));
    }
    //kustuta
    if(isset($_REQUEST['kustuta'])){
        $kask=$yhendus->prepare('DELETE FROM loomad WHERE id=?');
        $kask->bind_param("i",$_REQUEST['kustuta']);
        $kask->execute();
    }
    ?>
</div>
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Andmetabeli sisu lisamine naitamine</title>
</head>
<body>
<h1>
    Andmetabeli "Loomad" sisu naitamine
</h1>
<?php
global $yhendus;
//tabeli sisu näitamine
$kask=$yhendus->prepare("SELECT id, nimi, kirjeldus FROM loomad");
$kask->bind_result($id,$nimi,$kirjeldus);
$kask->execute();
echo "<table>";
echo "<tr>
<th>id</th>
<th>Loomanimi</th>
<th>Kirjeldus</th>
<th>Kustuta</th>
</tr>";
//fetch() - извлечение данных из набора данных
while ($kask->fetch()) {
    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>$nimi</td>";
    echo "<td>$kirjeldus</td>";
    echo "<td><a href='".clearVarExpt(basename($_SERVER['REQUEST_URI']), "leht")."&kustuta=$id'>xxx</a></td>";
    echo "</tr>";
}
echo "</table>";
?>
<div class="rightcolumn">
    <form action="<?=clearVarExpt(basename($_SERVER['REQUEST_URI']), 'leht')?>" method="post">
    <label for="loomanini">Loomanimi</label>
    <input type="text" name="loomanimi" id="loomanimi">
    <br>
    <label for="kirjeldus">Kirjeldus</label>
    <input type="text" name="kirjeldus" id="kirjeldus">
    <input type="submit" value="Lisa">
    </form>
</div>


<?php
$yhendus->close();
?>
</body>
</html>


</body>
</html>


