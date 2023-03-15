<link rel="stylesheet" href="https://www.rdppetroleo.com.br/scripts/css/w3.css">

<style>
	#termo {
		position: fixed;
		z-index: 100;
		/* Sit on top */
		opacity: 0.7;
		background-color: #000;
		color: #fff;
		left: 0;
		bottom: 0;
		margin: auto;
		padding: 0;
		border: 0px solid #888;
		width: 100%;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		-webkit-animation-name: animatebottom;
		-webkit-animation-duration: 0.4s;
		animation-name: animatebottom;
		animation-duration: 0.4s;
		height: 60px;

	}

	#mensagem {
		font-family: 'Quicksand', sans-serif;
		color: #fff;
		font-size: 0.9em;
	}

	#politica-modal {
		z-index: 999;
		/* Sit on top */
		background-color: #fff;
		padding: 20;
		top: 20;
		border: 1px solid;
		margin-left: 10%;
		width: 80%;
		height: 90%;
	}

	#politica-content {
		border: hidden;
		margin-top: auto;
		padding: 20px;
		text-align: justify;
		line-height: 150%;
		width: 100%;

	}

	#politica-content h2 {
		color: #00a859;
	}
</style>

<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&display=swap" rel="stylesheet">
<div id="termo">
	<form method="post">
		<input type="hidden" name="aceite" value="sim" />
		<table width="100%" border="0" cellspacing="10">
			<tr>
				<td id="mensagem" width="45%" style="text-align:right; cursor:pointer;" onclick="document.getElementById('politica-modal').style.display='block'">
					&nbsp;<br />Conhe&ccedil;a a nossa <u>Pol&iacute;tica de Privacidade</span>.</p>
				</td>
				<td width="10%"></td>
				<td width="45%">
					<button type="button" class="btn btn-secondary btn-sm" onclick="document.getElementById('termo').style.display='none'">Ok</button>
				</td>
			</tr>
		</table>
	</form>
</div>

<div id="politica-modal" class="modal">
	<div id="politica-content" class="modal-content">
		<div class="container">
			<span onclick="document.getElementById('politica-modal').style.display='none'" class="w3-button w3-display-topright" title="fechar">&times;</span>
			<h2><u>Pol&iacute;tica de</u> Privacidade - BioPreserve Solu&ccedil;&otilde;es Ambientais</h2>
		</div>
		<div id="politica-body" class="modal-body">
			<?php include 'politica.html'; ?>
		</div>
		<footer class="w3-container">
			<button class="w3-button w3-left w3-gray w3-border w3-right" onclick="document.getElementById('politica-modal').style.display='none'">Fechar</button>
		</footer>
	</div>
</div>