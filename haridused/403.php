<a href="../phpLeht/index.php?leht=test">tagasi..Ülesanne leht</a>
<h1>Ülesanne 403</h1>
<?php
//ilusad värvi nimed massiivis
$varv=array('Aqua','Coral','Crimson','FloralWhite','GreenYellow','LavenderBlush','LightSkyBlue','LightSalmon','Lime','Maroon',
    'Moccasin','Orchid','PeachPuff','Sienna','Violet');
//tsükliga kuvame värvid massiivist
for($i = 0; $i <15; $i++){
    echo "<span style='color: $varv[$i]'>$varv[$i]</span><br>";
}

?>

