<?php

$nome = $_POST["nome"];
$sexo = $_POST["sexo"];
$dnasc = $_POST["dnasc"];
$dexame = $_POST["dexame"];

$checkbox = $_POST['indica'];
$refphy = $_POST["refphy"];

$slombar = $_POST["slombar"];
$tslomb = $_POST["tslomb"];
$dmolomb = $_POST["dmolomb"];

$side = $_POST["side"];
$tscolo = $_POST["tscolo"];
$dmocolo = $_POST["dmocolo"];
$tsft = $_POST["tsft"];
$dmoft = $_POST["dmoft"];

$zslomb = $_POST["zslomb"];
$zscolo = $_POST["zscolo"];
$zsft = $_POST["zsft"];

$coments = $_POST["coments"];
$densito = $_POST["densito"];

$compara = $_POST['compara'];
$dataant = str_replace("/", "-", $_POST["dataant"]);
$dataanterior = date('d/m/Y', strtotime($dataant));  
  
$dmolombant = $_POST["dmolombant"];
$dmocoloant = $_POST["dmocoloant"];
$dmoftant = $_POST["dmoftant"];

$dnascimento = new DateTime($dnasc);
$dataexame = new DateTime($dexame);
$idade = $dnascimento->diff($dataexame);

$dexame = str_replace("/", "-", $_POST["dexame"]);
$datadoexame = date('d/m/Y', strtotime($dexame));  
?>

<?php 
if ($zslomb <=-2.0){$resultlomb="below the expected range for age.";}
else if ($zslomb > -2.0){$resultlomb="within the expected range for age.";} 
?>

<?php 
if ($zscolo <=-2.0 || $zsft <=-2.0){$resultfemur="below the expected range for age.";}
else if ($zscolo >-2.0 && $zsft>-2.0){ $resultfemur="within the expected range for age.";} 
else {$resultfemur="below the expected range for age.";}
?>


<?php if ($zslomb <=-2.0 || $zscolo <=-2.0 || $zsft <=-2.0){$resultfinal="Exam is below the expected range for age.";} ?>

<?php if ($zslomb>-2.0 && $zscolo>-2.0 && $zsft>-2.0){$resultfinal="Exam is within the expected range for age.";} ?>

<?php
if ($compara == "yes") {
    $diflomb = $dmolomb - $dmolombant;
    $difcolo = $dmocolo - $dmocoloant;
    $difft = $dmoft - $dmoftant;
    $difpclomb = number_format(($diflomb * 100) / $dmolombant);
    $difpccolo = number_format(($difcolo * 100) / $dmocoloant);
    $difpcft = number_format(($difft * 100) / $dmoftant);
} 
?>
<?php
if ($compara == "yes") {
    $textocompara = "Interval Change: The comparison with the technically similar prior study of " . $dataanterior .
        " shows variation of " . $diflomb . " g/cm2 (" . $difpclomb . " %) in lumbar spine; "
        . $difcolo . " g/cm2 (" . $difpccolo . " %) in femoral neck and "
        . $difft . " g/cm2 ( " . $difpcft . " %) in total hip.";
} else {
    $textocompara = "";
}
?>