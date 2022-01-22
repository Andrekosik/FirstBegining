


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





<table border="1">

    <tr>

        <td>
<?php

                include "vypisPalko.php";
                ?>
        </td>

        <td>

            <?php

                include "vypisDurko.php";

            ?>




        </td>


    </tr>


</table>
