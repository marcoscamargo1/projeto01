<?php 
	include('config.php');
 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Projeto 01</title>	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH; ?>estilo/all.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="palavras-chave, do, site, separadas, por, vírgula">
	<meta name="description" content="Descrição do site">
	<meta charset="utf-8">
</head>
<body>
	<!--Parte superior do site, logo e menu-->
	<header>
		<div class="center">
			<div class="logo left">Logomarca</div><!--logo-->
			<nav class="desktop right">
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav><!--desktop--> 
			<nav class="mobile right">
				<div class="botao-menu-mobile">
					<i class="fas fa-bars"></i>
				</div>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav><!--mobile-->
			<div class="clear"></div>
		</div><!--center-->
	</header>

	<section class="banner-principal">
		<div class="center">
			<form>
				<h2>Qual o seu melhor e-mail?</h2>
				<input type="email" name="email" required>
				<input type="submit" name="acao" value="Cadastrar!">
			</form>
		</div><!--center-->
	</section><!--banner-principal-->

	<section class="descricao-autor">
		<div class="center">
			<div class="w50 left">
				<h2>Marcos Camargo - Web Developer</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sit amet aliquet lectus. Pellentesque diam orci, aliquam vitae sem pellentesque, molestie dignissim ex. Sed tristique non est vitae sagittis. Donec tincidunt dignissim felis, non rutrum turpis congue a. Morbi fringilla ac ipsum in malesuada. Nam diam nulla, posuere eget ex at, luctus lobortis justo.Donec euismod nec enim id consectetur.</p>				
			</div><!--w50 (50% da tela)-->	
			<div class="w50 left">
				<img class="right" src="<?php echo INCLUDE_PATH; ?>images/foto2.jpg">
			</div><!--w50-->
			<div class="clear"></div>
		</div><!--center-->					
	</section><!--descricao-autor-->

	<section class="especialidades">
		<div class="center">
			<h2 class="title">Especialidades</h2>		
			<div class="w33 left box-especialidade">
				<h3><i class="fab fa-html5"></i></h3>
				<h3>HTML5</h3>
				<p>In egestas nisl enim, vel scelerisque risus tempus id. Vestibulum tincidunt ex eu ipsum tincidunt cursus. Proin rhoncus ante eget tempor venenatis. Donec mattis egestas arcu eu sagittis. Fusce ex ex, gravida quis nisi eget, viverra luctus sem. Suspendisse id efficitur nisl, eu convallis ante. In sit amet odio vel eros auctor egestas.</p>
			</div><!--box-especialidade-->
			<div class="w33 left box-especialidade">
				<h3><i class="fab fa-css3"></i></h3>
				<h3>CSS3</h3>
				<p>In egestas nisl enim, vel scelerisque risus tempus id. Vestibulum tincidunt ex eu ipsum tincidunt cursus. Proin rhoncus ante eget tempor venenatis. Donec mattis egestas arcu eu sagittis. Fusce ex ex, gravida quis nisi eget, viverra luctus sem. Suspendisse id efficitur nisl, eu convallis ante. In sit amet odio vel eros auctor egestas.</p>
			</div><!--box-especialidade-->
			<div class="w33 left box-especialidade">
				<h3><i class="fab fa-js"></i></h3>
				<h3>JavaScript</h3>
				<p>In egestas nisl enim, vel scelerisque risus tempus id. Vestibulum tincidunt ex eu ipsum tincidunt cursus. Proin rhoncus ante eget tempor venenatis. Donec mattis egestas arcu eu sagittis. Fusce ex ex, gravida quis nisi eget, viverra luctus sem. Suspendisse id efficitur nisl, eu convallis ante. In sit amet odio vel eros auctor egestas.</p>
			</div><!--box-especialidade-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--especialidades-->

	<section class="extras">
		<div class="center">
			<div class="w50 left depoimentos-container">
				<h2 class="title">Depoimentos</h2>
				<div class="depoimento-single">
					<p class="depoimento-descricao">In egestas nisl enim, vel scelerisque risus tempus id. Vestibulum tincidunt ex eu ipsum tincidunt cursus. Proin rhoncus ante eget tempor venenatis.</p>
					<p class="nome-autor">Lorem Ipsum</p>
				</div><!--epoimento-single-->
				<div class="depoimento-single">
					<p class="depoimento-descricao">In egestas nisl enim, vel scelerisque risus tempus id. Vestibulum tincidunt ex eu ipsum tincidunt cursus. Proin rhoncus ante eget tempor venenatis.</p>
					<p class="nome-autor">Lorem Ipsum</p>
				</div><!--epoimento-single-->
				<div class="depoimento-single">
					<p class="depoimento-descricao">In egestas nisl enim, vel scelerisque risus tempus id. Vestibulum tincidunt ex eu ipsum tincidunt cursus. Proin rhoncus ante eget tempor venenatis.</p>
					<p class="nome-autor">Lorem Ipsum</p>
				</div><!--epoimento-single-->
			</div><!--w50-->
			<div class="w50 left servicos-container">
				<h2 class="title">Serviços</h2>	
				<div class="servicos">
					<ul>
						<li>Pellentesque diam orci, aliquam vitae sem pellentesque, molestie dignissim ex. Sed tristique non est vitae sagittis. Donec tincidunt dignissim felis, non rutrum turpis congue a. Morbi fringilla ac ipsum in malesuada.</li>
						<li>Pellentesque diam orci, aliquam vitae sem pellentesque, molestie dignissim ex. Sed tristique non est vitae sagittis. Donec tincidunt dignissim felis, non rutrum turpis congue a. Morbi fringilla ac ipsum in malesuada.</li>
						<li>Pellentesque diam orci, aliquam vitae sem pellentesque, molestie dignissim ex. Sed tristique non est vitae sagittis. Donec tincidunt dignissim felis, non rutrum turpis congue a. Morbi fringilla ac ipsum in malesuada.</li>
					</ul>			
				</div><!--servicos-->
			</div><!--w50-->
			<div class="clear"></div>
		</div><!--center-->		
	</section><!--extras-->

	<footer>
		<p>Marcos Camargo 2019 <br> &copy Todos os direitos reservados.</p>		
	</footer>
	<script src="<?php echo INCLUDE_PATH; ?>js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
</body>
</html>