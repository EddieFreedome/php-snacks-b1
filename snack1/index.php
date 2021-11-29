<!-- Snack 1 -->
<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi 
che non conosciamo nella documentazione) 

che name sia più lungo di 3 caratteri, 

che mail contenga un punto e una chiocciola e 
che age sia un numero. 

Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php 

$nameGet = $_GET["name"];  //Verranno visualizzate nell'url come query string (?nomechiave=valore) 
$mailGet = $_GET["mail"];
$ageGet = $_GET["age"];
// $hasChiocciola = "@";
// $hasDot = "."

$hasChiocciola = "@";
$hasDot = strstr($mail, ".");
$hasChiocciola = strstr($mail, "@");
$hasNumber = is_numeric($ageGet);


if ((strlen($nameGet) > 3) && $hasDot && $hasChiocciola && $hasNumber){
    echo "Accesso riuscito";
} else {
    echo "Accesso Negato";
}


?>
