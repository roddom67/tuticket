<div class="container-fluid">
	<nav class="navbar navbar-expand-lg">
		<a class="navbar-brand " href="/tuticket"><span class="spanImg"><img src="images/tu-ticket-de-entrada.png" alt="Tu ticket de entrada" title="Tu ticket de entrada"></span></a>
<?php
if(!isset($promociones)){
	if(isset($bandaNav)){
	?>
	<div class="bandaAComprar">
		<div>
			<h2><?php echo $bandaNav ;?></h2>
			<p><?php echo $lugarNav; ?></p>
		</div>
		<div class="proximo-evento">
			<ul>
				<li class="cajaFecha">
					<span>16 <span>Sep</span></span>
				</li>
				<li>
					<h1>Sábado 16 de septiembre - 21hs.</h1>
					<p>Estadio único de La Plata</p>
				</li>
			</ul>
		</div>
	</div>
	<?php
	} else{
?>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
  	</button>
	<ul class="tablet mobile">
		<li class="nav-item dropdown search-link">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<img src="css/image/buscar.png" width="40" alt="Buscar">
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<form class="form-inline my-3 my-lg-0">
					<input class="form-control mr-sm-3" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-3 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</li>
		<!-- <li>
			<a href="" title="mobile">mobile</a>
		</li>
		<li>
			<a href="" title="ingresar">ingresar</a>
		</li> -->
	</ul>

  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<ul class="navbar-nav ">
    		<li>
    			<ul>
      			<li class="nav-item dropdown">
        				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          				<i class="fab fa-twitter"></i>
        				</a>
        				<div class="dropdown-menu redes-sociales" aria-labelledby="navbarDropdown">
          				<a class="dropdown-item" href="#"><i class="fab fa-twitter"></i></a>
          				<a class="dropdown-item" href="#"><i class="fab fa-facebook-f"></i></a>
          				<a class="dropdown-item" href="#"><i class="fab fa-instagram"></i></a>
        				</div>
      			</li>
      			<?php
						$catalogo = array(
							array(
								'title' => 'Música',
								'image' => 'musica'
							),
							array(
								'title' => 'Teatro',
								'image' => 'teatro'
							),
							array(
								'title' => 'Cine',
								'image' => 'cine'
							),
							array(
								'title' => 'Familia',
								'image' => 'familia'
							),
							array(
								'title' => 'Especiales',
								'image' => 'especiales'
							)
						);
						for($a=0; $a<sizeof($catalogo);$a++){
					?>
					<li>
						<a href="#" title="<?php echo $catalogo[$a]['title']; ?>"><?php echo $catalogo[$a]['title']; ?></a>
					</li>
					<?php
						}
					}
					?>

    			</ul>
    		</li>
    		<li class="pc">
    			<ul>
    				<li class="nav-item dropdown search-link">
    					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    						<img src="css/image/buscar.png" width="40" alt="Buscar">
        				</a>
        				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
    						<form class="form-inline my-3 my-lg-0">
      						<input class="form-control mr-sm-3" type="search" placeholder="Search" aria-label="Search">
      						<button class="btn btn-outline-success my-3 my-sm-0" type="submit">Search</button>
    						</form>
    					</div>
    				</li>
    				<!-- <li>
    					<a href="" title="mobile">mobile</a>
    				</li>
    				<li>
    					<a href="" title="ingresar">ingresar</a>
    				</li> -->
    			</ul>
    		</li>
    	</ul>
  	</div>
<?php 
}
?>
	</nav>
</div>
