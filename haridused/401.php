<?php
//andmed massivis
$data=[
    "nimi"=>"Aleksei Tiora",
    "aadress"=>"Vasalemma, kivi 4b",
    "pilt"=>"ab.png",
    "koduleht"=>"https://tiora20.thkit.ee"
];
//
?>
<a href="../phpLeht/index.php?leht=test">tagasi..Ülesanne leht</a>
<h1>Ülesanne 401</h1>
<p> <b>
        <?=$data["nimi"]?>
    </b></p>
<p> <b>
        <?=$data["aadress"]?>
    </b></p>
<img src="<?=$data["pilt"]?>" alt="pildike">
<br>
<a href="<?=$data["koduleht"]?>" target="_blank">Tiora koduleht</a>
<!--massiiv array funktsiooniga-->
<h1>Ülesanne 401/var2 -array()</h1>
<?php
// massiiv array funktsiooniga
$array=array("Aleksei Tiora", "Vasalemma, kivi 4b",
    "ab.png", "tiora20.thkit.ee");
echo "<b>Nimi: ".$array[0]."</b><br>";
echo "<i>Aadress: ".$array[1]."</i><br>";
echo "<img src='$array[2]' alt='pildike'>";
echo "<br><a href='https://$array[3]'>Koduleht</a>"
?>




