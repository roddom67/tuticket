<!DOCTYPE HTML>
<html lang="es">
<?php
	$page = 'index';
	$headTitulo = 'Tu ticket de entrada';
	$headDesc ='Tu ticket de entrada - Comprá tus entradas para los eventos favoritos.';
	$headKeywords = 'ticket, entradas, eventos, música, cantantes, teatro, cine';
	include("head.php");
?>
<body class="home">
	<main>
		<header>
  			<div>
  				<?php
					include("nav.php")
				?>
 			</div>
		</header>
  	<!-- Content here -->
  		<section class="eventosArea">
 				<article class="slider">
 					<ul class="sliderArea">
 						<?php
 							$slider = array(
 								array(
 									'title' => 'Dave Matthews Band',
 									'lugar' => 'Estadio único La Plata',
 									'fecha' => '15 al 25 de Marzo',
 									'image' => 'dave-matthews-band'
 								),
 								array(
 									'title' => 'Dave Matthews Band',
 									'lugar' => 'Estadio único La Plata',
 									'fecha' => '15 al 25 de Marzo',
 									'image' => 'dave-matthews-band'
 								),
 								array(
 									'title' => 'Dave Matthews Band',
 									'lugar' => 'Estadio único La Plata',
 									'fecha' => '15 al 25 de Marzo',
 									'image' => 'dave-matthews-band'
 								)
 							);
 							for($a=0;$a < sizeof($slider);$a++){
 						?>
						<li style="background-image: url('images/evento/banda/<?php echo $slider[$a]['image']; ?>/<?php echo $slider[$a]['image']; ?>-<?php echo $a+1; ?>.jpg')">
 							<article class="texto-evento">
 								<span class="fecha"><?php echo $slider[$a]['fecha']; ?></span>
 								<h1><?php echo $slider[$a]['title']; ?></h1>
 								<p><span><?php echo $slider[$a]['lugar']; ?></span></p>
 								<a href="comprar.php" title="Comprar">Comprar</a>
 							</article>
 						</li>
 						<?php
 							}
 						?>
					</ul>
 				</article>
 		</section>

 		<section class="eventosDestacados">
 			<div class="container-fluid">
 				<article>
 					<h2>Eventos destacados</h2>
 					<ul class="eventos-principales">
 						<?php
 							$destacados = array(
 								array(
 									'title' => '22 de abril',
 									'lugar' => 'Paul McCarney',
 									'fecha' => 'Estadio River Plate',
 									'image' => 'paul-mccartney'
 								),
 								array(
 									'title' => '15 de mayo',
 									'lugar' => 'Red Hot Chilli Peppers',
 									'fecha' => 'Estadio Único de la Plata',
 									'image' => 'red-hot-chilli-peppers'
 								),
 								array(
 									'title' => '15 de septiembre',
 									'lugar' => 'Alice in Chains',
 									'fecha' => 'Estadio Directv',
 									'image' => 'alice-in-chains'
 								)
 							);
 							for($a=0; $a<sizeof($destacados);$a++){
 						?>
 						<li>
 							<a href="#" title="<?php echo $destacados[$a]['title'];?>">
 								<article class="placa-evento">
 									<span class="spanImg">
 										<img src="images/evento/destacados/<?php echo$destacados[$a]['image'];?>.jpg" alt="<?php echo $destacados[$a]['title'];?>">
 									</span>
 									<div>
 										<span><?php echo $destacados[$a]['fecha'];?></span>
 										<h1><?php echo $destacados[$a]['title'];?></h1>
 										<p><?php echo $destacados[$a]['lugar'];?></p>
 										<b>Ver evento</b>
 									</div>
 								</article>
 							</a>
 						</li>
 						<?php
 							}
 						?>
 					</ul>
 					<ul class="otros-eventos">
 						<?php
 							$otrosEventos = array(
 								array(
 									'title' => 'Eros Ramazzotti',
 									'image' => '080619_ER'
 								),
 								array(
 									'title' => '240519_IlDivo',
 									'image' => 'il-divo'
 								),
 								array(
 									'title' => 'Queen',
 									'image' => '17052019_DiosSalvealaReina'
 								),
 								array(
 									'title' => 'Redimi2',
 									'image' => '09082019_Redimi2_2'
 								),
 								array(
 									'title' => 'Daryl Hall - John Oates',
 									'image' => '06062019_DaryllHallandJohnOates'
 								),
 								array(
 									'title' => 'Diego Torres',
 									'image' => '180519_DiegoTorres4'
 								),
 								array(
 									'title' => 'Ulises',
 									'image' => '08082019_UlisesBueno'
 								),
 								array(
 									'title' => 'Natiruts',
 									'image' => '14092019_Natiruts'
 								)
 							);
 							for($a=0; $a<sizeof($otrosEventos);$a++){
 						?>
 						<li>
 							<a href="#" title="otroEvento<?php echo $otrosEventos[$a]['title']; ?>">
 								<article class="otro-evento">
 									<span class="spanImg">
 										<img src="images/evento/otros/<?php echo $otrosEventos[$a]['image']; ?>.jpg" alt="<?php echo $otrosEventos[$a]['title']; ?>">
 									</span>
 									<button>Comprar</button>
 								</article>
 							</a>
 						</li>
 						<?php
 							}
 						?>
 					</ul>
 				</article>
 			</div>
 		</section>

 		<section class="proximamenteArea">
 			<div class="container-fluid">
 				<article>
 					<ul class="proximos-eventos">
 						<?php

							$proximos = array(
								array(
									'title' => 'Ariana Grande',
									'image' => 'ariana-grande'
								),
								array(
									'title' => 'Color Fetival',
									'image' => 'color-festival'
								),
								array(
									'title' => 'Jazz Festival',
									'image' => 'jazz-festival'
								),
								array(
									'title' => 'Rock Party',
									'image' => 'rock-party'
								),
								array(
									'title' => 'Shakira',
									'image' => 'shakira'
								)
							);
 							for($a=0; $a<sizeof($proximos);$a++){
 						?>
 						<li>
 							<a href="#" title="proximoEvento<?php echo $proximos[$a]['title']; ?>">
 								<article class="otro-evento">
 									<span class="spanImg">
 										<img src="images/evento/proximamente/<?php echo $proximos[$a]['image']; ?>.jpg" alt="<?php echo $proximos[$a]['title']; ?>">
 									</span>
 									<h1><?php echo $proximos[$a]['title']; ?></h1>
 									<b>+ Info</b>
 								</article>
 							</a>
 						</li>
 						<?php
 							}
 						?>
 					</ul>
 				</article>
 			</div>
 		</section>

 		<section class="catalogoArea">
 			<div class="container-fluid">
 				<article>
 					<h2>Explora nuestro catálogo de eventos</h2>
 					<ul class="catalogo-eventos">
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
 							<a href="#" title="<?php echo $catalogo[$a]['title']; ?>">
 								<article class="otro-evento">
 									<span class="spanImg">
 										<img src="images/catalogo/<?php echo $catalogo[$a]['image']; ?>.jpg" alt="<?php echo $catalogo[$a]['title']; ?>">
 									</span>
 									<h1><?php echo $catalogo[$a]['title']; ?></h1>
 								</article>
 							</a>
 						</li>
 						<?php
 							}
 						?>
 					</ul>
 				</article>
 			</div>
 		</section>

	<?php
		include("footer.php")
	?>
