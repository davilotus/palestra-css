<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta content="IE=edge" http-equiv="X-UA-Compatible">
		<meta charset="utf-8">
		<meta content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
		<meta name="theme-color" content="#000">
		<title>Palestra CSS - Exemplos</title>
		<meta name="description" content="Meetup 28/05 - CSS3 Davidson Silva" />
		<!-- <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'> -->
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body class="body">
		<!-- <header class="header">
			<div class="logo">
				<img src="ubuntu.png" alt="">
			</div>
			<div class="menu">
				<ul>
					<li><a href="#selectors">Seletores</a></li>
					<li><a href="#queries">Media Queries</a></li>
					<li><a href="http://getbootstrap.com/" target="blank">Bootstrap</a></li>
			</div>
		</header> -->
		<section id="banner">
			<div class="overlay"></div>
			<h1 class="title">Aplicando o CSS3</h1>
			<a href="#selectors" id="to-bottom">

			</a>
		</section>

		<section id="selectors">
			<h2>Seletores</h2>
			<ul>
				<li>Universal</li>
				<li>Tipo</li>
				<li>Classe</li>
				<li>ID</li>
				<li>Conjunto</li>
				<li>Filho</li>
			</ul>
		</section>

		<section id="queries">
			<div class="title">
				<h2>Media queries</h2>
			</div>
			<div class="metade">
				<p>Ajustam a estututa de acordo com o tamanho da viewport</p>
			</div>
			<div class="metade">
				<ul class="val">
					<li>width</li>
					<li>height</li>
					<li>print</li>
				</ul>
			</div>
		</section>

		<footer class="footer">
			<div class="sobre">
				<span>Meetup CSS3 por Davidson Silva <?php echo date('Y') ?></span>
			</div>
		</footer>
	</body>
</html>
