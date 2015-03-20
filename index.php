<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Transit by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header">
				<h1><a href="index.html"></a></h1>
				<nav id="nav">
					<ul>
		
                        <li><a href="#openModal" class="button special">Log In</a></li>

                        <div id="openModal" class="modalDialog">
	                           <div>
                                    <a href="#close" title="Close" class="close">X</a>
                                    <h3>Log In</h3>
                                    <section class ="main">
										<form action="controlador.php" method="POST" id="formulario">
											<input type="text" placeholder="usuario" name="txtusuario" />
											<input type="password" placeholder="pass" name="txtpassword" />
											<input type="submit" value="submit" name="entrar" />
										</form>
                                </section>
                            </div>
                        </div>
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				<h2>Bienvenido a SaludTec</h2>
				<p>Pierde peso. Mejora tu salud.</p>
				<p>Contador de calorías</p>
						<!-- Registro -->
				<ul class="actions">
					<li>
						<a href="#openModal1" class="button big">Registrate</a>
					</li>
					<div id="openModal1" class="modalDialog2">
	                           <div>
                                    <a href="#close" title="Close" class="close">X</a>
                                    <h3>Registrate</h3>
                                    <section class ="main">
										<form action="controlador.php" method="POST" id="registro">
											<input type="text" placeholder="Nombre" name="txtnombre" />
											<input type="text" placeholder="Correo" name="txtcorreo" />
											<input type="text" placeholder="Edad" name="txtnumber" />
											<input type="text" placeholder="Peso en kg" name="txtpeso" />
											<input type="password" placeholder="Password" name="txtpassword" />
											<input type="password" placeholder="Vuelve a ingresar Passwords" name="txtpassword2" />
                                            <br>
											<input type="submit" value="submit" name="entrar" />
										</form>
                                </section>
                            </div>
                        </div>
				</ul>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1 special">
				<div class="container">
					<header class="major">
						<h2>Alcance del proyecto</h2>
						<br>
						<p>Nuestro proyecto conciste en una aplicación que permite llevar un conteo de ingesta caloríca diaria con el propósito<br><br> de ayudar a los estudiantes a mejorar sus hábitos alimenticios.Dentro de la aplicación podrás registrarte y acceder<br><br> a un diario personal de ingesta caloríca que proporcionará sugerencias dependiendo de tu índice de masa corporal 
						</p>
						
					</header>
					<div class="row 150%">
						<div class="4u 12u$(medium)">
							<section class="box">
								<!--<i class="icon big rounded color1 fa-cloud"></i>!-->
								<h3>Manejo de formas</h3>
								<p>Para lograr los objetivos planeados será necesario el manejo de formas para permitir al usuario interactuar con el sistema y así poder registrarse, ingresar los alimentos ingeridos, etc.</p>
							</section>
						</div>
						<div class="4u 12u$(medium)">
							<section class="box">
								<!--<i class="icon big rounded color9 fa-desktop"></i>!-->
								<h3>Manejo de registros</h3>
								<p>Será necesario interactuar con una base de datos para el manejo de usuarios y para almacenar los alimentos y su contenido caloríco.</p>
							</section>
						</div>
						<div class="4u$ 12u$(medium)">
							<section class="box">
								<!--<i class="icon big rounded color6 fa-rocket"></i>!-->
								<h3>Componentes AJAX y servicios web</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque eaque eveniet, nesciunt molestias. Ipsam, voluptate vero.</p>
							</section>
						</div>
					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2 special">
				<div class="container">
					<header class="major">
						<h2>Equipo</h2>
					</header>
					<section class="profiles">
						<div class="row">
							<section class="4u 6u(medium) 12u$(xsmall) profile">
								<img src="images/profile_placeholder.gif" alt="" />
								<h4>Mariana Prado Ayala</h4>
								<p>A01065658</p>
							</section>
							<section class="4u 6u$(medium) 12u$(xsmall) profile">
								<img src="images/profile_placeholder.gif" alt="" />
								<h4>Carlos Gómez</h4>
								<p>A00958636</p>
							</section>
							<section class="4u 6u(medium) 12u$(xsmall) profile">
								<img src="images/profile_placeholder.gif" alt="" />
								<h4>Mónica Fernanda Jimenez</h4>
								<p>Harum corrupti quia</p>
							</section>
						</div>
					</section>
					<!--<footer>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam dolore illum, temporibus veritatis eligendi, aliquam, dolor enim itaque veniam aut eaque sequi qui quia vitae pariatur repudiandae ab dignissimos ex!</p>
						<ul class="actions">
							<li>
								<a href="#" class="button big">Lorem ipsum dolor sit</a>
							</li>
						</ul>
					</footer>!-->
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style3 special">
				<div class="container">
					<header class="major">
						<h2>Documentación</h2>
						<!--<p>Lorem ipsum dolor sit amet. Delectus consequatur, similique quia!</p>!-->
					</header>
				</div>
				<!--<div class="container 50%">
					<form action="#" method="post">
						<div class="row uniform">
							<div class="6u 12u$(small)">
								<input name="name" id="name" value="" placeholder="Name" type="text">
							</div>
							<div class="6u$ 12u$(small)">
								<input name="email" id="email" value="" placeholder="Email" type="email">
							</div>
							<div class="12u$">
								<textarea name="message" id="message" placeholder="Message" rows="6"></textarea>
							</div>
							<div class="12u$">
								<ul class="actions">
									<li><input value="Send Message" class="special big" type="submit"></li>
								</ul>
							</div>
						</div>
					</form>
				</div>!-->
				<div class="container">
					<h2>Casos de uso</h2>
					<img src="images/profile_placeholder.gif" alt="" />
				</div>
				<div class="container">
					<h2>Modelo Entidad-Relación</h2>
					<img src="images/profile_placeholder.gif" alt="" />
				</div>
			</section>

		<!-- Footer -->
	</body>
</html>
