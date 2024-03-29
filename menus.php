<!DOCTYPE html>
<html>

<head>
	<script>
		function getCookie(cname) {
			var name = cname + "=";
			var decodedCookie = decodeURIComponent(document.cookie);
			var ca = decodedCookie.split(';');
			for (var i = 0; i < ca.length; i++) {
				var c = ca[i];
				while (c.charAt(0) == ' ') {
					c = c.substring(1);
				}
				if (c.indexOf(name) == 0) {
					return c.substring(name.length, c.length);
				}
			}
			return "";
		}
	</script>


</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="navbar">

		<div class="container nav-section">
			<a class="navbar-brand" href="index.php">HappyTaco<img src="img/logo.png" height="45px" width="45px"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="productos.php?categoria=Todos">Tienda</a>
						<ul>
							<li><a class="nav-link" href="productos.php?categoria=Tacos">Tacos</a>
								<ul>
									<li><a class="nav-link" href="">Pastor</a></li>
									<li><a class="nav-link" href="">Adobada</a></li>
									<li><a class="nav-link" href="">Birria</a></li>
								</ul>
							</li>
							<li><a class="nav-link" href="productos.php?categoria=Tortas">Tortas</a>
								<ul>
									<li><a class="nav-link" href="">Pastor</a></li>
									<li><a class="nav-link" href="">Adobada</a></li>
								</ul>
							</li>
							<li><a class="nav-link" href="productos.php?categoria=Quesadillas">Quesadillas</a>
								<ul>
									<li><a class="nav-link" href="">Adobada</a> </li>
									<li><a class="nav-link" href="">Pastor</a> </li>
									<li><a class="nav-link" href="">Birria</a> </li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="acerca.php">Acerca</a>
						<ul>
							<li><a class="nav-link" href="#objetivo">Objetivo de la compañía</a> </li>
							<li><a class="nav-link" href="#mision">Misión</a> </li>
							<li><a class="nav-link" href="#vision">Visión</a> </li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contaco.php">Contáctanos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="ayuda.php">Ayuda</a>
					</li>
					<li>
						<div>
							<?php
							if ($log) {
								echo '<li><p class="nav-user"> Bienvenido(a) ';
								echo $_SESSION["user_name"];
								echo '</p></li>';
								echo '<li class="dropdown order-1">';
								echo '<form class="form" role="form" action="PHP/logout.php" method="post">';
								echo '<button type="submit" class="btn btn-primary btn-block" > Logout <i class="fas fa-sign-out-alt"></i></button>';
								echo '</form>';
								echo '</li>';
							} else {
								echo '<li class="dropdown order-1">
										<button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Login <span class="caret"></span></button>
										<ul class="dropdown-menu dropdown-menu-right mt-2">
											<li class="px-3 py-2">';

								if (!empty($message)) :
									echo '   <script>swal("El usuario ha sido registrado exitosamente");</script>';
								endif;
								echo ' 
												
												<h1>Ingresa</h1>
												<span>o <small><a href="#" data-toggle="modal" data-target="#modalPassword">Registrar cuenta</a></small></span>
												
												<form action="PHP/login.php" method="POST"  id="login">
													<input name="correo" type="text" id="kkdvk_correo" placeholder="Enter your correo" required>
													<input name="contraseña" type="password" id="kkdvk_contra" placeholder="Enter your contraseña" required>
													<img src="PHP/captcha.php?id=0" id="kkdvk_img" border="0" style="padding-bottom: 1em; padding-left: 5em;">
													<p class="btn btn-primary" id="update_captcha"><i class="fa fa-refresh" aria-hidden="true"></i></p>
													<input name="captcha" type="text" id="kkdvk_captcha" placeholder="Ingresa la captcha" required>
													<input type="button" class="btn btn-primary" value="Ingresar" name="ingresar" onclick="checar()">
												</form>
												
												
											</li>
										</ul>
									</li>';
							}
							?>

						</div>

					</li>

					<li class="nav-item">
						<button class="btn">
							<div class="up-item">
								<div class="shopping-card">
									<a class="nav-link" href="shopping-cart.php"> <i class="flaticon-bag"></i>
										<span id="cartn"> </span> Carrito </a>
								</div>
							</div>
						</button>
						<ul class="disp-table">
							<?php
							if (isset($_COOKIE["cartshop"])) {
								if ($_COOKIE["cartshop"] == "[]") {
									echo '
										 <div class="order-table" id="table">
												<section class="contact-section">
												<h2>Tu Carrito Esta Vacio!</h2>
												<hr>
												<h4>No Hay TAQUITOS!!</h4>
												<img src="img/espera.gif" alt="nave" style="height: 90%;
													width: 90%;">
												<h5>Los taquitos probablemente se fueron volando...</h5>
												<h6>deberias probar comprar mas...</h6>
												<br>											
												</section>
										</div> ';
								} else {
									echo ' <div class="order-table" id="table">
								
									</div> ';
								}
							} else {
								echo '
								 <div class="order-table" id="table">
										<section class="contact-section">
										<h2>Tu Carrito Esta Vacio!</h2>
										<hr>
										<h4>No Hay TAQUITOS!!</h4>
										<img src="img/espera.gif" alt="nave" style="height: 90%;
											width: 90%;">
										<h5>Los taquitos probablemente se fueron volando...</h5>
										<h6>deberias probar comprar mas...</h6>
										<br>											
										</section>
								</div> ';
							}

							?>

							<script src="js/carr.js"></script>

						</ul>

					</li>
				</ul>
			</div>
		</div>




	</nav>

</body>

</html>