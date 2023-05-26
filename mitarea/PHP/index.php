<!DOCTYPE html>
<?php
	session_start();
	if(!ISSET($_SESSION['Correo'])){
		header('location:login.php');
	}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>PrestigeTravels</title>

	<!-- CSS -->
	<link rel = "stylesheet" type = "text/css" href = "../css/index.css">
	<link rel = "stylesheet" type = "text/css" href = "../css/navbar.css">
	<!-- BOOTSTRAP -->
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- BOOTSTRAP FONT ICON -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light shadow" style="background-color: #1b3039">
		<div class="container-fluid">
			<a class="navbar-brand fs-4 txt-shadow" style="color: white" href="index.php">PrestigeTravels</a>
			<button class="navbar-toggler btn btn-light" style="background-color: #e8eaeb" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active fs-6" style="color: white" href="paquetes.php">Paquetes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active fs-6" style="color: white" href="hoteles.php">Hoteles</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active fs-6" style="color: white" href="cart.php">Carrito</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle fs-6" style="color: white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Cuenta
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="cuenta.php">Mi perfil</a></li>
							<li><a class="dropdown-item" href="reviews.php">Reseñas</a></li>
							<li><hr class="dropdown-divider"></li>
							<li><a class="dropdown-item" href="logout.php">Cerrar sesión</a></li>
						</ul>
					</li>
				</ul>
				<span class="navbar-text me-2" style="color: white">
					<i class="bi bi-person-circle"></i> Cuenta activa en <?=$_SESSION['Nombre']?>
				</span>	
				<form class="d-flex">
					<input class="form-control me-2" style="color: #1b3039" type="search" placeholder="Buscar" aria-label="Search">
					<button class="btn btn-outline-light btn-light" style="color: black" type="submit">Buscar</button>
				</form>
			</div>
		</div>
	</nav>
	

	<div class="container">
		<div class="row mt-3">
			<h1>¡Bienvenido a PrestigeTravels!</h1>
			<h4>Arma tu panorama con nosotros</h4>
			
		</div>
	</div>
	<div class = "shadow-sm py-3 rounded" style="background-color: #fafafb">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div id="carouselExampleCaptions" class="carousel slide">
						<div class="carousel-indicators">
							<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
							<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
							<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
						</div>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="../images/img1-hotel.jpg" class="d-block w-100" alt="firstSlide">
								<div class="carousel-caption d-none d-md-block">
									<h5>Hotel Torres</h5>
									<p>Torres del Paine, Región de Magallanes y Antártica Chilena</p>
									<p>Con vista a las Torres del Paine.</p>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
								</div>
							</div>
							<div class="carousel-item">
								<img src="../images/img2-hotel.jpg" class="d-block w-100" alt="secondSlide">
								<div class="carousel-caption d-none d-md-block">
									<h5>Hotel Termas de Chillán</h5>
									<p>Coihueco, Ñuble</p>
									<p>Un espacio único para conectarse con la naturaleza</p>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-half"></i>
								</div>
							</div>
							<div class="carousel-item">
								<img src="../images/img3-hotel.jpg" class="d-block w-100" alt="thirdSlide">
								<div class="carousel-caption d-none d-md-block">
									<h5>Hotel Mistral</h5>
									<p>La Serena, Región de Coquimbo</p>
									<p>Un hotel todo incluido, pet friendly</p>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
								</div>
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
				</div>
				<div class="col-sm-6">
					</br></br></br></br>
					<h2>Recorrer Chile ahora es más facil</h2>
					<h4>con variedad de opciones y...</h4>
					
					<h1>¡Precios accesibles!</h1>
					
					
				</div>
			</div>
			
		</div>
	</div>
    
    
    <footer class="footer row">
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
