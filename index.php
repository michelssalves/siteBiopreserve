<?php
session_start();
if ($_REQUEST['aceite'] == 'sim') {
	$aceite = 'sim';
}
if (!$aceite) {
	$aceite = $_SESSION['aceite'];
}
$_SESSION['aceite'] = $aceite;
ini_set('default_charset', 'utf-8');
//aviso de ferias coletivas
$hoje = strtotime(date('Y-m-d'));
$ini =  strtotime('2020-12-21');
$fim =  strtotime('2021-01-08');
if ($hoje <= $fim) {
	include 'avisoPopup.php';
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="./assets/ico/favicon.png">
	<title>BioPreserve</title>
	<link rel="stylesheet" href="./assets/css/w3.min.css" rel="stylesheet">
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="./assets/css/main.css" rel="stylesheet">
	<link rel="stylesheet" href="./assets/css/fontawesome.all.min.6.2.1.css">
	<script src="./assets/js/fontawesome.all.min.js"></script>
	<script src="./assets/js/bootstrap.bundle.min.v5.2.3.js"></script>
	<script src="./assets/js/jquery-3.6.1.min.js"></script>
	<script src="./assets/js/axios.min.js"></script>
	<script src="./assets/js/vue.global.js"></script>
	<script type="module" src="./assets/js/indexVue.js"></script>
</head>

<body data-spy="scroll" data-offset="0" data-target="#navbar-main">
	<div id="app">
		<!-- ==== NAV ==== -->
		<nav class="navbar navbar-expand-lg header-nav fixed-top">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">
					<img src="./assets/img/BioPreserve10.png" width="150" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto mb-2 mb-lg-0">

						<a class="nav-link" href="#contact"> Contato</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#portfolio"> Servi&ccedil;os</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#team"> Corpo T&eacute;cnico</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#services"> Parcerias</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#services2"> Clientes</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#about"> Sobre n&oacute;s</a>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<button class="btn">
								<a href="http://www.biopreserve.com.br/operadorN/" target="_blank">
									<img class="rounded" src="assets/img/bg/icone_operador.png" alt="" />
								</a>
							</button>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- ==== HEADERWRAP ==== -->
		<div id="headerwrap" id="home" name="home">
			<header class="clearfix">
				<div class="h2 w-100">HÁ 10 ANOS OFERECENDO <BR> ESTRUTURA E TECNOLOGIA<BR>PARA APOIAR A SUA EMPRESA.<br>
				</div>

			</header>
		</div>
		<!-- ==== GREYWRAP ==== -->
		<div id="greywrap">
			<div class="row">
				<div class="col-md-4 callout">
					
				</div>
				<div class="col-md-4 callout">
					<a href="https://www.biopreserve.com.br/biodigital/" target="_blank"><img src="assets/img/bg/biodigital.png" width="302" height="151" alt="" /></a>
				</div>
				<div class="col-md-4 callout">
					
				</div>
				<div class="col-md-3 callout">
					<div id="apDiv6">

					</div>
				</div>
			</div>
		</div>
		<!-- ==== ABOUT ==== -->
		<div class="container p-4" id="about" name="about">
			<div class="container p-4 text-center">
				<div class="row">
					<hr>
					<h2 class="mt-4">UM POUCO SOBRE NÓS</h2>
				</div>
			</div>
			<div class="row p-4">
				<div class="col-lg-6">
					<p>A crescente preocupa&ccedil;&atilde;o com o meio ambiente, bem como em rela&ccedil;&atilde;o &agrave;s atividades potencialmente poluidoras, desencadeou por parte dos &oacute;rg&atilde;os oficiais de controle a intensifica&ccedil;&atilde;o nos processos fiscalizadores, tornando-se imprescind&iacute;vel e indispens&aacute;vel a manuten&ccedil;&atilde;o e adequa&ccedil;&atilde;o dos mecanismos ambientais. Contudo, a pr&aacute;tica demonstra que os empreendedores raramente se preparam para tais momentos, permanecendo alheios &agrave;s quest&otilde;es legais que permitem a continuidade do licenciamento.<br>
						<br>
						Foi com o intuito de facilitar esse processo de regulariza&ccedil;&atilde;o e cumpri-lo de modo completo e eficaz que nasceu a BioPreserve Solu&ccedil;&otilde;es Ambientais, uma empresa lastreada em vasta experi&ecirc;ncia de gest&atilde;o e acompanhamento de processos de assessoramento t&eacute;cnico, licenciamentos e monitoramentos ambientais. A atua&ccedil;&atilde;o visa proporcionar ao empreendedor facilidades quanto &agrave; manuten&ccedil;&atilde;o e gerenciamento das condicionantes ambientais,
					</p>
				</div>
				<div class="col-lg-6">
					<p>
						bem como simplificar e agilizar os demais procedimentos junto aos &oacute;rg&atilde;os ambientais.<br>
						<br>
						Visando proporcionar pleno atendimento as necessidades decorrentes das prerrogativas ambientais, a Biopreserve elabora servi&ccedil;os nas &aacute;reas de geologia, engenharia ambiental, engenharia civil e gest&atilde;o ambiental. Tais objetivos s&atilde;o atingidos atrav&eacute;s do acompanhamento constante das prerrogativas legais atribu&iacute;das a cada empreendimento, fator este que contribui na compila&ccedil;&atilde;o das informa&ccedil;&otilde;es necess&aacute;rias no momento de atendimento aos &oacute;rg&atilde;os ambientais.<br>
						<br>
						A atua&ccedil;&atilde;o da BioPreserve junto ao com&eacute;rcio varejista de combust&iacute;veis oferece ao empres&aacute;rio a possibilidade de dedica&ccedil;&atilde;o exclusiva &agrave; sa&uacute;de comercial e financeira de sua empresa, desvencilhando o mesmo de quest&otilde;es burocr&aacute;ticas e t&eacute;cnicas voltadas ao desempenho de sua atividade.
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row justify-content-center">
				<img class="img-fluid" src="assets/img/bg/divider1.png">
			</div>
		</div>
		<!-- ==== CLIENTES ==== -->
		<div class="container p-4" id="services2" name="services2">
			<div class="container p-4 text-center">
				<div class="row">
					<hr>
					<h2 class="mt-4">NOSSOS CLIENTES</h2>
				</div>
			</div>
			<div class="row p-4 justify-content-center">
				
				<img class="img-fluid clientes-imagem" src="assets/img/clientes.png" alt="">
			
			</div>
		</div>
		<!-- ==== PARCEIROS ==== -->
		<div class="container p-4" id="services" name="services">
			<div class="container p-4 text-center">
				<div class="row mt-4">
					<hr>
					<h2>NOSSOS PARCEIROS</h2>
				</div>
			</div>
			<div class="row p-4 justify-content-center">
			
				<img class="img-fluid parceiros-imagem" src="assets/img/iphone.jpg" alt="">
			
			</div>
		</div>
		<!-- ==== TEAM MEMBERS ==== -->
		<div id="team" name="team">
			<div class="container p-4 text-center">
				<div class="row p-4">
					<hr>
					<h2 class="mt-4">CORPO TÉCNICO</h2>
				</div>
			</div>
			<div class="container p-2">
				<div class="row justify-content-center">
					<div class="col-sm-4">
						<div class="container">
							<img class="img-fluid rounded mx-auto d-block img-corpo-tecnico rounded-circle" src="assets/img/team/team01.png">
							<div class="row text-center">
								<h4><strong>Luis Falat</strong>
									<h4>
							</div>
							<div class="row text-center">
								<h6 class="fs-6 fw-semibold p-2">Advogado, formado em Direito pela Unibrasil – Faculdades Integradas do Brasil, pós-graduado pela UFPR em Direito Ambiental, pós-graduado pela
									PUC-PR em Gestão Integrada de Meio Ambiente e Segurança na Indústria de Petróleo, Gás e Biocombustíveis, Auditor Ambiental.</h6>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="container">
							<img class="img-fluid rounded mx-auto d-block img-corpo-tecnico rounded-circle" src="assets/img/team/team02.png">
							<div class="row text-center">
								<h4><strong>Nicolas Junior</strong>
									<h4>
							</div>
							<div class="row text-center">
								<h6 class="fs-6 fw-semibold p-2">Engenheiro Civil, formado na Universidade Federal do Paraná, tendo como extensão universitária o curso de pós graduação em Engenharia Econômica
									junto à FAE, Faculdade de Administração e Economia.
								</h6>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="container">
							<img class="img-fluid rounded mx-auto d-block img-corpo-tecnico rounded-circle" src="assets/img/team/team03.png">
							<div class="row text-center">
								<h4><strong>Caroline Denchuk</strong>
									<h4>
							</div>
							<div class="row text-center p-2">
								<h6 class="fs-6 fw-semibold ">Geóloga formada na Universidade Federal do Paraná com MBA em Gestão de Projetos pela UniBrasil. Pós-Graduada em Gestão de Recursos Hídricos pelo
									Centro Universitário Internacional UNINTER.
								</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container p-2">
				<div class="row justify-content-center">
					<div class="col-sm-4">
						<div class="container">
							<img class="img-fluid rounded mx-auto d-block img-corpo-tecnico rounded-circle" src="assets/img/team/team04.png">
							<div class="row text-center">
								<h4><strong>Ismael Welter</strong></h4>
							</div>
							<div class="row text-center">
								<h6 class="fs-6 fw-semibold ">Engenheiro Ambiental formado pela UNIVILLE e Pós-graduado em Engenharia de Segurança do Trabalho pela PUC/PR.</h6>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="container">
							<img class="img-fluid rounded mx-auto d-block img-corpo-tecnico rounded-circle" src="assets/img/team/team07.png">
							<div class="row text-center">
								<h4><strong>Giseli Bach</strong></h4>
							</div>
							<div class="row text-center">
								<h6 class="fs-6 fw-semibold ">Superior em Gestão Ambiental pela Faculdades Integradas Camões e Pós graduada em Gestão Ambiental e desenvolvimento Sustentável pela UNINTER.</h6>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="container">
							<img class="img-fluid rounded mx-auto d-block img-corpo-tecnico rounded-circle" src="assets/img/team/team06.png">
							<div class="row text-center">
								<h4><strong>Erwin Lapuse</strong></h4>
							</div>
							<div class="row text-center">
								<h6 class="fs-6 fw-semibold ">Geólogo formado pela Universidade Federal do Paraná, especialista em Gestão de Recursos Hídricos pelo Centro Universitário Internacional UNINTER.</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--==== PORTFOLIO 01 ==== -->
		<div id="portfolio" name="portfolio">
			<div class="container text-center p-4">
				<div class="row p-4">
					<hr>
					<h2 class="mt-4">SERVIÇOS NA ÁREA DE GEOLOGIA</h2>
				</div>
			</div>

			<div class="container p-2">
				<div class="row justify-content-center">
					<div class="col-sm-4">
						<div class="container">
							<img class="img-fluid" :src="rowsCava[posCava]" alt="">
							<button class="botao-lado-esquerdo" type="button" v-if="posCava != 0" @click="posCava--"><i class="fa-solid fa-caret-left"></i></button>
						<button class="botao-lado-esquerdo" type="button" v-else><i class="fa-solid fa-caret-left"></i></button>
						<button class="botao-lado-direito" type="button" v-if="posCava + 1 < resultsCava" @click="posCava++"><i class="fa-solid fa-caret-right"></i></button>
						<button class="botao-lado-direito" type="button" v-else><i class="fa-solid fa-caret-right"></i></button>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="container">
							<img class="img-fluid" src="assets/img/portfolio/p2.png" alt="">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="container">
							<img class="img-fluid" src="assets/img/portfolio/p3.png" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="container p-2">
				<div class="row justify-content-center">
					<div class="col-sm-4">
						<div class="container">
							<img class="img-fluid" src="assets/img/portfolio/p4.png" alt="">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="container">
							<img class="img-fluid" src="assets/img/portfolio/p5.png" alt="">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="container">
						<img class="img-fluid" :src="rowsPocos[posPocos]" alt="">	
						<button class="botao-lado-esquerdo" type="button" v-if="posPocos != 0" @click="posPocos--"><i class="fa-solid fa-caret-left"></i></button>
						<button class="botao-lado-esquerdo" type="button" v-else><i class="fa-solid fa-caret-left"></i></button>
						<button class="botao-lado-direito" type="button" v-if="posPocos + 1 < resultsPocos" @click="posPocos++"><i class="fa-solid fa-caret-right"></i></button>
						<button class="botao-lado-direito" type="button" v-else><i class="fa-solid fa-caret-right"></i></button>
						</div>
					</div>
				</div>
			</div>
			<div class="container p-2">
				<div class="row justify-content-center">
					<div class="col-sm-4">
						<div class="container">
							<img class="img-fluid" src="assets/img/portfolio/p7.png" alt="">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="container">
							<img class="img-fluid" src="assets/img/portfolio/p8.png" alt="">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="container">
						<img class="img-fluid" :src="rowsFreatico[posFeatico]" alt="">	
						<button class="botao-lado-esquerdo" type="button" v-if="posFeatico != 0" @click="posFeatico--"><i class="fa-solid fa-caret-left"></i></button>
						<button class="botao-lado-esquerdo" type="button" v-else><i class="fa-solid fa-caret-left"></i></button>
						<button class="botao-lado-direito" type="button" v-if="posFeatico + 1 < resultsFreatico" @click="posFeatico++"><i class="fa-solid fa-caret-right"></i></button>
						<button class="botao-lado-direito" type="button" v-else><i class="fa-solid fa-caret-right"></i></button>	

						</div>
					</div>
				</div>
			</div>
			<div class="container p-2">
				<div class="row justify-content-center">
					<div class="col-sm-4">
						<div class="container">
						
						<img class="img-fluid" :src="rowsFrota[posFrota]" alt="">	
						<button class="botao-lado-esquerdo" type="button" v-if="posFrota != 0" @click="posFrota--"><i class="fa-solid fa-caret-left"></i></button>
						<button class="botao-lado-esquerdo" type="button" v-else><i class="fa-solid fa-caret-left"></i></button>
						<button class="botao-lado-direito" type="button" v-if="posFrota + 1 < resultsFrota" @click="posFrota++"><i class="fa-solid fa-caret-right"></i></button>
						<button class="botao-lado-direito" type="button" v-else><i class="fa-solid fa-caret-right"></i></button>	
						</div>
	
					</div>
					<div class="col-sm-4">
						<div class="container">
							<img class="img-fluid" src="assets/img/portfolio/p10.png" alt="">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="container">
						<img class="img-fluid" :src="rowsTanques[posTanques]" alt="">	
						<button class="botao-lado-esquerdo" type="button" v-if="posTanques != 0" @click="posTanques--"><i class="fa-solid fa-caret-left"></i></button>
						<button class="botao-lado-esquerdo" type="button" v-else><i class="fa-solid fa-caret-left"></i></button>
						<button class="botao-lado-direito" type="button" v-if="posTanques + 1 < resultsTanques" @click="posTanques++"><i class="fa-solid fa-caret-right"></i></button>
						<button class="botao-lado-direito" type="button" v-else><i class="fa-solid fa-caret-right"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--==== PORTFOLIO 02 ==== -->
		<div id="portfolio" name="portfolio">
			<div class="container text-center p-4">
				<div class="row">
					<hr>
					<h2>SERVIÇOS NA ÁREA DE ENGENHARIA CIVIL</h2>
				</div>
			</div>
			<div class="container p-2">
				<div class="row justify-content-center">
					<div class="col-sm-4">
						<div class="container">
							<img class="img-fluid" src="assets/img/portfolio/15.jpg" alt="">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="container">
							<img class="img-fluid" src="assets/img/portfolio/16.jpg" alt="">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="container">
							<img class="img-fluid" src="assets/img/portfolio/17.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="container p-2">
				<div class="row justify-content-center">
					<div class="col-sm-4">
						<div class="container">
							<img class="img-fluid" src="assets/img/portfolio/18.jpg" alt="">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="container">
							<img class="img-fluid" src="assets/img/portfolio/19.jpg" alt="">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="container">
							<img class="img-fluid" src="assets/img/portfolio/20.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--==== PORTFOLIO 03 ==== -->
		<div id="portfolio" name="portfolio">
			<div class="container text-center p-4">
				<div class="row">
					<hr>
					<h2>SERVIÇOS NA ÁREA DE ENGENHARIA AMBIENTAL</h2>
				</div>
			</div>
			<div class="container p-2">
				<div class="row justify-content-center">
					<div class="col-sm-4">
						<div class="container">
							<img class="img-fluid" src="assets/img/portfolio/9.jpg" alt="">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="container">
							<img class="img-fluid" src="assets/img/portfolio/10.jpg" alt="">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="container">
							<img class="img-fluid" src="assets/img/portfolio/11.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="container p-2">
				<div class="row justify-content-center">
					<div class="col-sm-4">
						<div class="container">
							<img class="img-fluid" src="assets/img/portfolio/12.jpg" alt="">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="container">
							<img class="img-fluid" src="assets/img/portfolio/13.jpg" alt="">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="container">
							<img class="img-fluid" src="assets/img/portfolio/14.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--==== ENDEREÇO ==== -->
		<div class="section-divider textdivider divider6">
			<div class="container text-center p-4">
				<div class="row">
					<h1>CURITIBA - PARANÁ</h1>
					<hr>
					<p>Rua Antônio Krainiski,115 | Abranches</p>
					<p>41 3621-0550</p>
				</div>
			</div>
		</div>
		<div class="container text-center p-4">
			<div class="row">
				<h1 class="centered">OBRIGADO PELA VISITA</h1>
				<hr>
			</div>
		</div>
		<!--==== CONTATOS ==== -->
		<div class="container p-2" id="contact" name="contact">
			<div class="row justify-content-center">
				<div class="col-sm-6">
					<div class="container">
						<div class="row text-center">
							<h4><strong><i class="fa-solid fa-address-card"></i> Contato</strong>
								<h4>
						</div>
						<div class="row text-center">
							<h6 class="fs-6 fw-semibold p-2">

								<ul>
									Rua: Antônio Krainiski, 115 | Abranches Curitiba/PR | 82130-220
									<li>Telefone: 41 3621-0550</li>
									<li><a href="mailto:adm@biopreserve.com.br">adm@biopreserve.com.br</a></li>
									<li><a href="mailto:gerencia@biopreserve.com.br">gerencia@biopreserve.com.br</a></li>
								</ul>

							</h6>
						</div>
					</div>
				</div>
				<!-- NÃO ESTAVA USANDO E FOI REMOVIDO 15/03/2023, CASO PRECISE ATIVAR SO DESCOMENTAR E CRIAR BACKEND
				<div class="col-sm-4">
					<div class="container">
						<div class="row text-center">
							<h4><strong><i class="fa-regular fa-envelope"></i> Newsletter</strong>
								<h4>
						</div>
						<div class="justify-content-center text-center">
							<h6 class="fs-6 fw-semibold">Cadastre-se em nossa Newsletter para receber as not&iacute;cias mais relevantes e dicas importantes para a Gest&atilde;o Ambiental do seu neg&oacute;cio.
							</h6>
							<div class="container text-center">
								<div class="row">
									<div class="col-1 p-2">
										<h4>{{message}}</h4>
									</div>
									<div class="col-10">
										<form id="formEnviarInformacoes" method="POST" class="form-horizontal" role="form">
											<div class="form-group-sm p-1">
												<div class="col-sm-10">
													<input type="text" name="email" id="email" class="form-control" placeholder="Email" required>
												</div>
											</div>
											<div class="form-group-sm p-1">
												<div class="col-sm-10">
													<input type="text" name="nome" class="form-control" id="text1" placeholder="Nome" required>
												</div>
											</div>
											<div class="form-group-sm p-1">
												<div class="col-sm-2">
													<button type="button" class="btn btn-sm btn-success" @click="enviarInformacoes" value="Enviar">Enviar</button>
												</div>
											</div>
										</form>
									</div>
									<div class="col-1 p-2">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				-->
				<div class="col-sm-6">
					<div class="container">
						<div class="row text-center">
							<h4><strong><i class="fa-regular fa-handshake"></i> Gestão Ambiental</strong>
								<h4>
						</div>
						<div class="row text-center p-2">
							<h6 class="fs-6 fw-semibold ">Somos especialistas em Assessoria, Licenciamento, Monitoramento e Gerenciamento de Condicionantes Ambientais, Investiga&ccedil;&atilde;o e Remedia&ccedil;&atilde;o de Passivos. Tudo para que a sua empresa cres&ccedil;a de maneira sustent&aacute;vel.
							</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==== RODAPÉ ==== -->
	<div id="footerwrap">
		<div class="container">
			<h4>BioPreserve Soluções Ambientais</h4>
		</div>
	</div>
	</div>
</body>
</html>
<?php
if ($aceite <> 'sim') {
	include 'inicio-politica.php';
}
?>