<?php
$nome = $_POST["nome"];
$sexo = $_POST["sexo"];
$dnasc = $_POST["dnasc"];
$dexame = $_POST["dexame"];

$checkbox = $_POST['indica'];
$refphy = $_POST["refphy"];

$side = $_POST["side"];

$tsantebraco = $_POST["tsantebraco"];
$dmoantebraco = $_POST["dmoantebraco"];

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
if ($tsantebraco <=-2.5){$resultantebraco="Osteoporosis";}
else if ($tsantebraco>=-1.0){ $resultantebraco="Normal Exam";} 
else {$resultantebraco="Osteopenia";}
?>

<?php  if ($tsantebraco >=-2.5){$resultfinal="OSTEOPENIA.";} ?>
<?php if ($tsantebraco <=-2.5){$resultfinal="OSTEOPOROSIS.";} ?>
<?php if ($tsantebracob>=-1.0){$resultfinal="NORMAL EXAM.";} ?>


<?php
if ($compara == "yes") {
    $diflomb = $dmoantebraco - $dmolombant;
    $difpclomb = number_format(($diflomb * 100) / $dmolombant);
    } 
?>
<?php
if ($compara == "yes") {
    $textocompara = "Interval Change: The comparison with the technically similar prior study of " . $dataanterior .
        " shows variation of " . $diflomb . " g/cm2 (" . $difpclomb . " %) in forearm. ";
} else {
    $textocompara = "";
}
?>