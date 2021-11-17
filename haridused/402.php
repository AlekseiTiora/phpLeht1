<a href="../phpLeht/index.php?leht=test">tagasi..Ülesanne leht</a>
<h1>Ülesanne 402</h1>
<h2>1. 20 checkbox tsükliga</h2>
<?php
    $i=1;
    while($i <=20){
        echo "<input type='checkbox' id='k$i' name='box[]' value='$i' >";
        echo "<label for=k$i>box.$i.</label><br>";
    $i++;
    }
?>
<h2>2. 20 radio tsükliga</h2>
<?php
    $a=1;
    while($a<=20){
        echo "<input type='radio' id='l$a' name='radio[]' value='$a' >";
        echo "<label for=l$a>radio.$a.</label><br>";
    $a++;
    }
?>

<h2>3. 20 teksti lahtrit</h2>
<?php
$t=1;
while($t<=20){
    echo "<input type='text' id='s$t' name='text[]' value='' >";
    echo "<label for=s$t>radio.$t.</label><br>";
    $t++;
}
?>


