<?php error_reporting( E_ALL ^E_NOTICE );
require_once("banco-empresa.php");
require_once("antebracofuncoes.php");
require_once("banco-usuario.php"); 

$selecionada = $_POST["empresa_id"];
$id = $_POST["empresa_id"];
$empresa = buscaEmpresa($conexao, $id);

$medicoselecionado = $_POST["medico_id"];
$id = $_POST["medico_id"];
$medico = buscaMedico($conexao, $id);

require_once("banco-paciente.php");

inserePaciente($conexao, $nome, $sexo, $dnasc, $dexame, $tslomb, $tscolo, $tsft, $dmolomb, $dmocolo, $dmoft, $zslomb, $zscolo, $zsft, $selecionada);
?>  


<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/laudo.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?= $nome?></title>
</head>

<body>
	
	<div class="logo">
		<img class="imglogo" src="logos/<?=$empresa['empresa']?>.jpg">
	</div>

	

	<div class="identificacao">
		<p><b>NOME :</b> 	<?= $nome ?></br>					
			<b> IDADE:</b> 	<?= $idade->y ?> ANOS</br>
			<b> DATA:</b> 	<?= $datadoexame ?></p>	
		</div>

		<h3>DENSITOMETRIA ÓSSEA	</h3>

		<div class="tecnica">
			<p>Este exame densitométrico foi realizado pelo método DXA em equipamento <?=$empresa['equipamento']?></br>
			Laudo por telerradiologia seguindo critérios da International Society for Clinical Densitometry (ISCD) </p></div>

			
			<div class="coluna">	
				<p> <b>ANTEBRAÇO :</b>  Imagem e gráfico obtidos em exame anexo representando valor			
					médio da densidade mineral óssea (DMO) da região distal do antebraço:<br>
					<p>Rádio 33% : <?= $dmoantebraco?> g/cm<sup>2</sup></br></p>
					T-score: <?= $zslomb ?> desvios-padrão em relação a população referência para jovens adultos.
				</p>		
				<p> O segmento estudado apresenta-se <?= $resultantebraco ?> </p>
			</div>


				<p>Comentários: Qualidade técnica do exame adequada.</p>

				<div class="conclusao">
					<p><b>CONCLUSÃO:</b></p>

					<p><?= $resultfinal ?></p>
				</div>				



			
			<div class="medico">
					<img class="assinatura" src="assinatura/<?=$medico['medico']?>.jpg">
					<p class="linhaassin">	_______________________________</br>	
					DR. <?=$medico['nomemedico']?>	</br>	
				        <?=$medico['crm']?>	</p>
			</div>


			<div class="rodape">
				<p>   _______________________________________________________________________________________	</br>				
					Endereço:<?=$empresa['rua']?>-<?=$empresa['bairro']?>- <?=$empresa['cidade']?>/<?=$empresa['uf']?> - CEP: <?=$empresa['cep']?></br>				
					<?=$empresa['contato']?>						</p>
				</div>

			</div>
		</div>
	</body>
	</html>
	<?php die() ?>