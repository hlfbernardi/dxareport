<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.css">
	<title>DXA Report</title>
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
						<a class="nav-item nav-link" href="formulariozscore.php">Z-score</a>
                        <a class="nav-item nav-link" href="formularioantebraco.php">Wrist</a>
                        <a class="nav-item nav-link disabled" href="formulariocomposicao.php" tabindex="-1" aria-disabled="true">Body Composition</a>
					</div>
				</div>
			</nav>
		</header>
		<div class="jumbotron">

			<h1>Welcome!</h1>

			<p>This formulary was build to help you to make DXA structured reports</p>
			<p>The template follows the International Society for Clinical Densitometry (ISCD) positions:</p>
			<a href="https://www.iscd.org/official-positions/">ISCD</a>
		</div>
		<div class="jumbotron">

			<form class="formulario" method="post" id="formulario" action="antebraco.php">

					<label for="">NOME</label><input type="text" id="nome" name="nome" size="30" maxlength="40" placeholder="Nome Completo"> </br>
					<label for="sexo">SEXO: Feminino</label> <input type="radio" id="sexfem" name="sexo" checked value="fem">
					<label for="">Masculino</label> <input type="radio" id="sexmasc" name="sexo" value="masc"></br>
					<label for="">DATA NASCIMENTO </label> <input type="date" id="dnasc" name="dnasc"></br>
					<label for="">DATA DO EXAME </label> <input type="date" id="dexame" name="dexame"></br>
					<p> Sexo feminino < 40 anos Sexo masculino < 50 anos </br> USE TABELA ZSCORE </p> </fieldset> <fieldset>
							<label for="">TSCORE ANTEBRAÇO</label> <input type="number" id="tsantebraco" name="tsantebraco" step="0.1" min="-100" max="100" size="4" maxlength="4" placeholder="ex: -2.8"></br>
							<label for="">DMO ANTEBRAÇO</label> <input type="number" id="dmoantebraco" name="dmoantebraco" step="0.001" min="-100" max="100" size="5" maxlength="5" placeholder="ex: -0,835"></br>
				</fieldset>


				<input class="btn btn-primary" type="submit" value="Enviar" /> </br>

				<fieldset>
					<label for="">MÉDICO</label>
					<select name="medico_id" id="medico_id">
						<?php foreach ($medicos as $medico) :
							$essemedico = $medico['medico_id'] == $medico['id'];
							$selecao = $essemedico ? "selected='selected'" : "";
							?>
							<option value="<?= $medico['id'] ?>" <?= $selecao ?>>
								<?= $medico['medico'] ?>
							</option>
						<?php endforeach ?>
					</select></br>
				</fieldset>


			</form>
		</div>
			<div class="jumbotron">

				<p>teste

				</p>

			</div>



		<script src="js/jquery-3.2.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		</div>
</body>

</html>