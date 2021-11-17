<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Tiora PHP leht</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <script src="js/legoscript.js"></script>
    <script src="js/puzzleScript.js"></script>
    <script src="js/kalk1.js"></script>
</head>
<body>
<?php
    include('header.php');
    include('navigation.php');

?>
<!--main-->
<main>
    <?php
    if(isset($_GET['leht'])){
        include ('content/'.$_GET['leht'].'.php');
    } else {
        include ('content/_main.php');
    }
    ?>
</main>
<?php
include ('footer.php');
?>

</body>
</html>
