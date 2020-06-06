<?php error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
require_once("antebracofuncoes.php"); ?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.css">
	<title>DXA Report</title>
	<link rel='shortcut icon' href='favicon.png' type='image/x-icon' />
</head>

<body>
	<div class="container">
		<header>
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
				<a class="navbar-brand" href="index.php">DXA Report</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav">
						<a class="nav-item nav-link active" href="index.php">T-score<span class="sr-only">(current)</span></a>
						<a class="nav-item nav-link" href="formzscore.php">Z-score</a>
						<a class="nav-item nav-link" href="formwrist.php">Forearm</a>
						<a class="nav-item nav-link disabled" href="formbc.php" tabindex="-1" aria-disabled="true">Body Composition</a>
					</div>
				</div>
			</nav>
		</header>

		<div class="tecnica">
			<h1>Dual-Energy X-ray Absorptiometry (DXA) Report</h1>
			<p>A DXA scan was performed on <?= $datadoexame ?> using a <?= $densito ?> densitometer.</p>
		</div>
		<div class="identificacao">

			<h3>Clinical History:</h3>
			<p><b>Name:</b> <?= $nome ?><br>
				<b> Age:</b> <?= $idade->y ?> Years.<br>
				<b> Gender:</b> <?= $sexo ?></p>
			<p><b> Referring Physician: </b><?= $refphy ?></p>
		</div>
		<div class="indications">
			<h3>Indications: </h3>
			<p> <?= require_once("check.php") ?>
				Total : <?= $total_indica ?>
			</p>
		</div>
		<h3>Results:</h3>
		<div class="coluna">
				<p><b><?= $side ?> FOREARM :</b><br>
				The BMD measured at 33% Radius :  <?= $dmoantebraco?> g/cm<sup>2</sup> <br>
				Z-score = <?= $tsantebraco ?> <br>
				
				The results on this region : <b><?= $resultantebraco ?></b> </p>
		</div>
			
		<h4>Technical Quality: </h4>
		<p><?= $coments ?> </p>

		<div class="conclusao">
			<h3>IMPRESSION:</h3>

			<h5>Based on BMD diagnosis is consistent with <?= $resultfinal ?> (WHO criteria)</h5>
		</div>
		<div class="compara">
			<h6> <?= $textocompara ?></h6><br>
			<hr />
			<hr />
		</div>
	</div>
	</div>
</body>

</html>
<?php die() ?>


