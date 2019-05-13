<div class="container-fluid">
	<nav class="navbar navbar-expand-lg">
		<a class="navbar-brand " href="/"><span class="spanImg"><img src="images/tu-ticket-de-entrada.png" alt="Tu ticket de entrada" title="Tu ticket de entrada"></span></a>

  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  	</button>

  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<ul class="navbar-nav ">
    		<li>
    			<ul>
      			<li class="nav-item dropdown">
        				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          				<i class="fab fa-twitter"></i>
        				</a>
        				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          				<a class="dropdown-item" href="#"><i class="fab fa-twitter"></i></a>
          				<a class="dropdown-item" href="#"><i class="fab fa-facebook-f"></i></a>
          				<a class="dropdown-item" href="#"><i class="fab fa-instagram"></i></a>
        				</div>
      			</li>
      			<?php
      		if(!isset($promociones)){
      			if(isset($bandaNav)){
      			?>
      			<li class="bandaAComprar">
      				<h2><?php echo $bandaNav ;?></h2>
      				<p><?php echo $lugarNav; ?></p>
      			</li>
      			<?php
      			} else{
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
				}
					?>

    			</ul>
    		</li>
    		<li>
    			<ul>
    				<li class="nav-item dropdown search-link">
    					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          				Buscar
        				</a>
        				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
    						<form class="form-inline my-3 my-lg-0">
      						<input class="form-control mr-sm-3" type="search" placeholder="Search" aria-label="Search">
      						<button class="btn btn-outline-success my-3 my-sm-0" type="submit">Search</button>
    						</form>
    					</div>
    				</li>
    				<li>
    					<a href="" title="mobile">mobile</a>
    				</li>
    				<li>
    					<a href="" title="ingresar">ingresar</a>
    				</li>
    			</ul>
    		</li>
    	</ul>
  	</div>
	</nav>
</div>
