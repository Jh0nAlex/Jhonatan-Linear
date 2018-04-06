<!DOCTYPE HTML>
<!--
	Linear by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Linear by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
			<script type="text/javascript">
				function openConsult(){
					$(".formulario").slideDown("slow");

				}
				function closConsult(){
					$(".formulario").slideUp("fast");
				}
			</script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
	</head>
	<body class="homepage">
			<div class="formulario">	
				<h1>Formulario de Consulta</h1>
					<div class="form">
						<div class="cerrar"><a href="javascript:closConsult();">Cerrar X</a></div>
						<form  action="form.php" method="POST">
							<table>
								<tr>
									<td>Nombre Completo</td>
									<td> <input type="text" placeholder="Ingresa su Nombre" name="nombre" required=""></td>
								</tr>
								<tr>
									<td>Telefono</td>
									<td> <input type="text" placeholder="Ingresa su Telefono" name="telefono" required=""> </td>
								</tr>
								<tr>
									<td>Direccion de Correo</td>
									<td>  <input type="text" placeholder="Correo Electronico" name="correo" required=""></td>
								</tr>
								<tr>
									<td>Asunto</td>
									<td>  <input type="text" placeholder="Ingresa su Asunto" name="asunto" required=""></td>
								</tr>
								<tr>
									<td>Cuerpo del Mensaje</td>
									<td> <textarea rows="4" cols="30" placeholder="Ingrese su mensaje" name="cuerpo" required=""></textarea></td>
								</tr>
								<br>
								<tr>
									<td><input type="submit" value="Consul"></td>
								</tr>
							</table>
						</form>
					</div>
				</div>
	<!-- Header -->
		<div id="header">
			<div id="nav-wrapper"> 
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="active"><a href="index1.php">Home</a></li>
					</ul>
				</nav>
			</div>
			<div class="container"> 
				<!-- Logo -->
				<div id="logo">
					<h1><a href="personal.php">Jhonatan Carrillo Restrepo</a></h1>
					<span class="tag">By Avengers</span>
				</div>
			</div>
		</div>

	<!-- Featured -->
		<div id="featured">
			<div class="container">
				<header>
					<h2>Welcome To My World</h2>
				</header>
				<p> 
					<strong>Technologist in Computing</strong> with experience in support of computers, knowledge networks, I am a person organised that complies with the requirements of the job, responsible, respectful, serious and punctual. Good capacity to work in a team, under pressure and a willingness to learn. Excellent personal relationships, proactive and committed, a sense of responsibility to the commitments, good worker morale and staff.
				</p>
				<hr/>
				<div class="row">
					<section class="4u">
						<span class="pennant"><span class="fa fa-briefcase"></span></span>
						<h3>EMCALI</h3>
						<p><strong>Support VIP FTTH</strong> Analyst of Technical Support - Control <strong>RUAV</strong>.</p>
					</section>
					<section class="4u">
						<span class="pennant"><span class="fa fa-lock"></span></span>
						<h3>WESTER SHOP</h3>
						<p><strong>Analyst of Technical</strong> - Data Control</p>
					</section>
					<section class="4u">
						<span class="pennant"><span class="fa fa-globe"></span></span>
						<h3>SPAIN CALL CENTER</h3>
						<p><strong>Customer Service - Network support</strong> </p>
					</section>

				</div>
			</div>
		</div>

	<!-- Main -->
		<div id="main">
			<div id="content" class="container">

				<div class="row">			
					<section class="6u">
						<a href="#" class="image full"><img src="images/pic02.jpg" alt=""></a>
					</section>				
					<section class="6u">
						<a href="#" class="image full"><img src="images/pic04.jpg" alt=""></a>
					</section>				
				</div>
			</div>
		</div>
	<!-- Footer -->
		<div id="footer">
			<div class="container">
				<section>
					<header>
						<h2></h2>
						<span class="byline"></span>
					</header>
					<ul class="contact">
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
					</ul>
				</section>
			</div>
		</div>
	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				<h1><a href="javascript:openConsult();">Consult Form</a></h1>
					<blockquote>&ldquo; Contact us, we will be waiting for you.&rdquo;</blockquote>
			</div>
		</div>			
	</body>
</html>