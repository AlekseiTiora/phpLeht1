<section>
<h1>Kuupäeva funktioonid</h1>
<ol>
    <li>Time()</li>
    <li>Date()</li>
    <li>mktime()</li>
    <li>strtotime()</li>
    <li>date_default_timezone_set()</li>
</ol>
</section>
<h1>Ülesanded</h1>
<section>
    <h2>Kuupäev ja aeg fromaadis m/d/y h:i</h2>
    <?php
    echo date('m/d/Y G:i');
    ?>
</section>
<section>
    <h2>Kasutaja vanus 16.11.2021</h2>
    <?php
        include ('funktsioonid.php');
        echo getVanus();
    ?>
</section>

<section>
    <h2>Järgmine kooli vaheaeg on 20.12.2021</h2>
    <?php
        echo getKoolivaheajani();
    ?>
    <h2>2022 uue aastani on</h2>
    <?php
    //täname aastane
    $year=date('Y');
    $last_day=strtotime('last day of December');
    $date_today=strtotime("now");
    $diff_to_last_day=$last_day-$date_today;
    echo "
";
    echo $year." aasta lõpuni ". floor($diff_to_last_day/(60*60*24))." päeva";
    ?>
</section>

<section>
    <h2>Hooajapilt</h2>
    <img src="<?php getHooaeg() ?>" alt="pilt">;

</section>

