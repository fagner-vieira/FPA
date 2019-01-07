<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/css.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body>

		<div class="container-fluid bgTopo">
			<div class="container">
				<div class="row marginOne">
					<div class="col-lg-4"><p>&nbsp;</p></div>

					<div class="col-lg-8">
						<div class="row">
							<div class="col-lg-4 col-xs-4 col-sm-4">
								<img src="images/logo.png" class="img-responsive center-block" alt="">
							</div>
							<div class="col-lg-8 col-xs-8 col-sm-8">
								<img src="images/logoTwo.png" class="img-responsive center-block" alt="">
							</div>
						</div>
						<div class="row marginOne">
							<div class="col-lg-6 col-md-6 col-sm-6 bgPromo">
								<p class="txtOne">garanta aqui seu<br/>desconto de até</p>
								<p class="txtTwo">20%</p>
								<p class="txtThree">de desconto</p>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 bgForm">
								<p class="txtOne">PREENCHA e ganhe!</p>
								<form class="form-horizontal" name="form-gohotsale" id="form-gohotsale" method="POST" action="https://gohotsale.com.br/leads" novalidate>
									<input type="hidden" name="hotsite" id="hotsite" value="casa-toda-favorita-hotpage">
									<input type="hidden" name="company" id="company" value="favorita-mov-decor">
									<fieldset class="col-md-12">
									<?php if(isset($_GET['error']) && $_GET['error'] === 'profanity') { ?>
									<div class="alert alert-danger" role="alert"> <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> <span class="sr-only">Erro:</span> Seja mais educado! </div>
									<?php } ?>
									<?php if(isset($_GET['error']) && $_GET['error'] === 'repeat') { ?>
									<div class="alert alert-danger" role="alert"> <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> <span class="sr-only">Erro:</span> Verifique os seus dados e tente novamente! </div>
									<?php } ?>
									<!-- Text input-->
									<div class="form-group"> 
										<!--label class="col-md-4 control-label" for="nome">Nome</label-->
										<div class="col-md-12">
										<input id="name" name="name" type="text" data-required placeholder="Nome" class="form-control input-md formulario" value="<?php if(isset($_GET['name'])) { echo $_GET['name']; } ?>" required="required">
										</div>
									</div>
									<!-- Text input-->
									<div class="form-group"> 
										<!--label class="col-md-4 control-label" for="email">E-mail</label-->
										<div class="col-md-12">
										<input id="email" name="email" type="email" data-required placeholder="E-mail" class="form-control input-md formulario" value="<?php if(isset($_GET['email'])) { echo $_GET['email']; } ?>" required="required">
										</div>
									</div>

									<!-- Text input-->
									<div class="form-group"> 
										<!--label class="col-md-4 control-label" for="telefone">Telefone</label-->
										<div class="col-md-12">
										<input id="phone" name="phone" type="text" data-required required="required" placeholder="Telefone" value="<?php if(isset($_GET['phone'])) { echo $_GET['phone']; } ?>" class="form-control input-md formulario">
										</div>
									</div>
									<!-- Button -->
									<div class="form-group"> 
										<!--label class="col-md-4 control-label" for="enviar"></label-->
										<div class="col-md-12" style="text-align: center;">
										<button id="enviar" name="enviar" class="hotEnviar">GARANTIR DESCONTO</button>
										</div>
									</div>
									</fieldset>
								</form>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="container-fluid bgTwo">
			<div class="container">
				<div class="row marginOne">
					<div class="col-lg-6">
						<p class="txtFive">O desenvolvimento da Arte é algo que requer muito empenho, sendo assim, a FPA é uma faculdade totalmente dedicada ao ensino das diferentes modalidades artísticas. Aqui o aluno desenvolve suas habilidades e conhecimentos através de aulas práticas presenciais, ministradas em salas e oficinas totalmente preparadas para atender às especificidades de todos os cursos. Lecionamos por paixão, e por isso temos em nosso corpo docente Artistas-Educadores e Educadores-Artistas, totalmente dispostos a ensinar muito mais do que o básico.</p>
					</div>
					<div class="col-lg-6">
							<p class="txtFive">Além da qualidade na educação, a FPA tem outros pontos muito favoráveis, como o excelente custo-benefício e os ótimos conceitos conquistados no ENADE. Com isso, a Faculdade Paulista de Artes se tornou uma das melhores em empregabilidade e aprovação em concursos públicos.</p>
							<p class="txtSix">Venha nos conhecer!<br/>Estamos pertinho da estação São Joaquim.</p>
						</div>
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<div class="container">
				<div class="row marginOne">
					<div class="col-lg-2"><p>&nbsp;</p></div>
					<div class="col-lg-3">
						<p class="txtSeven">Bacharelado:</p>
						<p class="txtSevenB">• Arquitetura e Urbanismo<br/>• Publicidade e Propaganda<br/>• Design de Moda</p>
					</div>
					<div class="col-lg-3 barra">
						<p class="txtSeven">Licenciatura:</p>
						<p class="txtSevenB">• Dança<br/>• Música<br/>• Teatro</p>
					</div>
					<div class="col-lg-3">
						<p class="txtSeven">Tecnólogo:</p>
						<p class="txtSevenB">• Design de Interiores<br/>• Design de Moda</p>
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid bgThree">
			<div class="container">
				<div class="row marginOne">
					<div class="col-lg-6">
						<img src="images/fpa.jpg" class="img-responsive center-block" alt="">
					</div>
					<div class="col-lg-6">
						<p class="txtEight">Sobre a FPA</p>
						<p>&nbsp;</p>
						<p class="txtNine">Fundada em 1998 pelo Prof. Dr. Luiz Rogério Telles Scaglione, a Faculdade Paulista de Artes nasceu com o propósito de desenvolver o ensino das artes no Estado de São Paulo. Em 20 anos de existência, aperfeiçoamos muitas técnicas de ensino, criando ferramentas para ajudar nossos alunos a realizarem seus sonhos pessoais e profissionais.</p>
						<p class="txtEight">Venha ser aluno FPA! </p>
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<div class="container">
				<div class="row marginOne">
					<div class="col-lg-3">
						<img src="images/img01.jpg" class="img-responsive center-block" alt="">
					</div>
					<div class="col-lg-3">
						<img src="images/img02.jpg" class="img-responsive center-block" alt="">
					</div>
					<div class="col-lg-3">
						<img src="images/img03.jpg" class="img-responsive center-block" alt="">
					</div>
					<div class="col-lg-3">
						<img src="images/img04.jpg" class="img-responsive center-block" alt="">
					</div>
				</div>
				<div class="row marginOne">
					<div class="col-lg-3">
						<img src="images/img05.jpg" class="img-responsive center-block" alt="">
					</div>
					<div class="col-lg-3">
						<img src="images/img06.jpg" class="img-responsive center-block" alt="">
					</div>
					<div class="col-lg-3">
						<img src="images/img07.jpg" class="img-responsive center-block" alt="">
					</div>
					<div class="col-lg-3">
						<img src="images/img08.jpg" class="img-responsive center-block" alt="">
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid bgThree">
			<div class="container">
				<div class="row marginOne">
					<div class="col-lg-3">
						<img src="images/img10.png" class="img-responsive center-block" alt="">
					</div>
					<div class="col-lg-3">
						<img src="images/img11.png" class="img-responsive center-block" alt="">
					</div>
					<div class="col-lg-3">
						<img src="images/img12.png" class="img-responsive center-block" alt="">
					</div>
					<div class="col-lg-3">
						<img src="images/img13.png" class="img-responsive center-block" alt="">
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid bgTwo">
			<div class="container">
				<div class="row marginOne">
					<div class="col-lg-3"><p>&nbsp;</p></div>
					<div class="col-lg-3">
						<img src="images/logo.png" class="img-responsive center-block" alt="">
					</div>
					<div class="col-lg-6 barraB">
						<p class="txtTen">endereço:</p>
						<p class="txtTenB">Av. Brigadeiro Luiz Antônio, 1224 – Bela Vista – São Paulo</p>
						<p>&nbsp;</p>
						<p class="txtTen">© FPA 2019 - Todos direitos reservados</p>
					</div>
				</div>
			</div>
		</div>



	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
  </body>
</html>