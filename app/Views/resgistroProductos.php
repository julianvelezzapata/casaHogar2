<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Animalandia</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('public/styles/estilos.css') ?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Delius+Swash+Caps&display=swap" rel="stylesheet">


</head>
<body>
    <header>  
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fondoPrincipal">
			<div class="container-fluid">
				<a class="navbar-brand fuente" href="#">
					<i class="fas fa-paw"></i>
					Animalandia
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link " aria-current="page" href="<?= site_url('/Home') ?>">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="<?= site_url('/productos/registro') ?>">Registro Productos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url('/productos/ingreso') ?>">Registro Animales</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
    <main>
		<div class="container mb-5">
			<div class="mb-3">
			<h1>Diligencia el dato del producto</h1>
			</div>
			<form method="POST" action="<?= site_url('/productos/registro/nuevo') ?>" class="mt-4 ">
				<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">Poductos</label>
					<input class="form-control" type="text" placeholder="productos" aria-label="default input example " name="producto">
				
				</div>
				<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">fotografia</label>
					<input type="text" class="form-control" placeholder="escriba el link de la fotografia"name="foto">
				</div>
				<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">precio</label>
					<input class="form-control" type="text" placeholder="Default input" aria-label="default input example" name="precio">
					
				<div class="mb-3">
					<label for="exampleFormControlTextarea1" class="form-label">descripcion</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion"></textarea>
				</div>
				<div class="mb-3">
					<label for="exampleDataList" class="form-label">Datalist example</label>    
					<select class="form-select" aria-label="Default select example" name="tipo">
							<option selected>escoge el animal</option>
							<option value="1">perro</option>
							<option value="2">caballo</option>
							<option value="3">rata</option>
							<option value="4">lagartija</option>
							<option value="5">gato</option>
					</select>
				</div>
				        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit">Enviar</button>
                        </div>
						<div class="d-grid gap-2">
                             <a class="btn btn-primary mt-2" href="<?= site_url('productos/listado')?>"> ver inventario</a>
                        </div>
			</form>
		</div>
			<div class="d-grid gap-2">
				<img src="<?= base_url('public/img/imagen4.jpg')?>" alt="imagen" class="img-fluid w-100">
			</div>
	</main>

	    
	<section>
		<?php if(session('mensaje')):?> 
			<div class="modal fade" id="modalrespuesta" tabindex="-1" >
				<div class="modal-dialog">
						<div class="modal-content">
						<div class="modal-header fondoPrincipal">
							<h5 class="modal-title" >Casa Hogar</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<h5><?=  session('mensaje')?></h5>
				</div>
			</div>
		<?php endif ?>

	</section>
	<footer class="fondoDos p-5 text-white bg-dark">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-md-4">
					<h3 class="fw-bold">Horario de atención:</h3>
					<p>Lunes a viernes 7:00 am - 3:00 pm / Sábado: 7:00 am - 2:30 pm / Domingos y festivos 8:00 am - 3:00 pm</p>
					<br>
					<h3 class="fw-bold">Dirección:</h3>
					<p>Belén Altavista Calle 8A # 112-82 </p>
				</div>

				<div class="col-12 col-md-4">
					<h3 class="fw-bold">Ayudas:</h3>
					<p>Glosario / Correo remoto  /  Monitoreo y desempeño de uso del sitio web</p>
					<br>
					<h3 class="fw-bold">Protección de datos:</h3>
					<p>Protección de datos personales en el Municipio de Medellín </p>
				</div>

				<div class="col-12 col-md-4">
					<h1 class="fw-bold fuente"><span><i class="fas fa-paw"></i></span>ANIMALANDIA</h1>
					<br>
					<i class="fab fa-facebook fa-3x"></i>
					<i class="fab fa-instagram fa-3x"></i>
					<i class="fab fa-youtube fa-3x"></i>
					<br>
					<p class="mt-4">© 2021 / NIT: 890905211-1 / Código DANE: 05001 / Código Postal: 050015</p>					
				</div>
			</div>
		</div>
    </footer>
    <script type="module" src="<?=base_url('public/js/lanzarmodal.js') ?>"></script>
    <script src="https://kit.fontawesome.com/7b642ec699.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>