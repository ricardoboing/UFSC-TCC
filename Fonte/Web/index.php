<!DOCTYPE html>
<html>
<?php include "class/ClienteServer.php"; ?>
<?php include_once "include/head.php"; ?>
<?php
	/*
	$pacote = "f";
	$clienteServer = new ClienteServer();
	$clienteServer->criarConexao();
	$clienteServer->conectar();
	$clienteServer->enviar($pacote);

	$pacote = $clienteServer->ler(19);

	$clienteServer->desconectar();
	*/

	$diaHora = substr($pacote, 0, 2).":".substr($pacote, 2, 2);
	$mesHora = $diaHora*30;
	$anoHora = $mesHora*12;

	$diaConsumo = substr($pacote, 4, 2).".".substr($pacote, 6, 2);
	$mesConsumo = $diaConsumo*30;
	$anoConsumo = $mesConsumo*12;

	$diaValorFinanceiro = 0;
	$mesValorFinanceiro = 0;
	$anoValorFinanceiro = 0;
?>
	<header>
		<span>ESTIMATIVA DE CONSUMO</span>
	</header>
	<main class="estimativa_de_consumo">
		<section>
			<div class="titulo">
				<span>Carrinho</span>
			</div>
			<table id="table_consumo_carrinho">
				<tr class="head">
					<th>
						<span></span>
					</th>
					<th>
						<span>DIA</span>
					</th>
					<th>
						<span>MÊS</span>
					</th>
					<th>
						<span>ANO</span>
					</th>
				</tr>
				<tr class="tempo">
					<th>
						<span>HORAS</span>
					</th>
					<td class="dia">
						<span><?php echo $diaHora; ?></span>
					</td>
					<td class="mes">
						<span><?php echo $mesHora; ?></span>
					</td>
					<td class="ano">
						<span><?php echo $anoHora; ?></span>
					</td>
				</tr>
				<tr class="consumo">
					<th>
						<span>kWH</span>
					</th>
					<td class="dia">
						<span><?php echo $diaConsumo; ?></span>
					</td>
					<td class="mes">
						<span><?php echo $mesConsumo; ?></span>
					</td>
					<td class="ano">
						<span><?php echo $anoConsumo; ?></span>
					</td>
				</tr>
			</table>
		</section>
	</main>
	<footer>
		<ul>
			<li>
				<a href="javascript: void(0);">ESTIMATIVA DE CONSUMO</a>
			</li>
			<li>
				<a href="eventos.php">HORÁRIOS</a>
			</li>
		</ul>
	</footer>
</body>
<?php include_once "include/scripts.php"; ?>
</html>