


<?php
session_start();

if (!isset($_SESSION['zivotPalko'])) {
    $_SESSION['zivotPalko']= 100;
}

if (!isset($_SESSION['zivotDurko'])) {
    $_SESSION['zivotDurko']= 100;
}

//if ($_GET['resetujzivotpalko']) {
//if ($_GET['resetujzivotpalko']) {
if (isset($_GET['resetujzivotpalko'])) {
    $_SESSION['zivotPalko']=100;
}



if (isset($_GET['sekniPalko']) and $_GET['sekniPalko'] and $_SESSION['zivotPalko'] >= 5 ) {
    $_SESSION['zivotPalko']= $_SESSION['zivotPalko'] -5;
    header("Location: test.php");
}


if (isset($_GET['sekniDurko']) and $_GET['sekniDurko'] and $_SESSION['zivotDurko'] >= 5 ) {
    $_SESSION['zivotDurko']= $_SESSION['zivotDurko'] -5;
}

if (isset($_GET['resetujzivotDurko'])) {
    $_SESSION['zivotDurko'] = 100;
}
?>

<?php

//$_SESSION['zivotDurko']= 100;

?>

<br>
meno: palko
<br>
priezvisko: Novak <br>

zivot: <?php echo $_SESSION['zivotPalko']; ?><br>
<br>




<a href="?sekniPalko=-5"> Sekni palko novak </a><br>

<a href="?resetujzivotpalko"> Resetuj Zivot Palko </a><br>






<br>
meno: Durko
<br>
priezvisko: Novak <br>

zivot: <?php echo $_SESSION['zivotDurko']; ?><br>
<br>




<a href="?sekniDurko=-5"> Sekni Durko Novak</a><br>
<a href="?resetujzivotDurko"> Resetuj Zivot Durko </a><br>
