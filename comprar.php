<!DOCTYPE HTML>
<html lang="es">
<?php
	$page = 'Comprar';
	$headTitulo = 'Comprar | Tu ticket de entrada';
	$headDesc ='David  Mattews Band | Tu ticket de entrada';
	$headKeywords = 'ticket, entradas, eventos, música, cantantes, teatro, cine';
	include("head.php");
?>
<body class="comprar internas">
	<main>
		<header>
  			<div>
  				<?php
  					$bandaNav = 'David Mattews Band';
  					$lugarNav = 'Estadio Único La Plata';
					include("nav.php")
				?>
 			</div>
		</header>
  	<!-- Content here -->
  		<section class="fechasArea">
  			<div class="container-fluid">
   			<article>
  					<h2>Fechas disponibles</h2>
  					<p>15 al 21 de septiembre</p>
  					<section class="row">
  						<article class="col-md-8">
  							<ul class="fechasListado">
  								<?php
									$fechas = array(
										array(
											'fecha' => 'Viernes 15 de septiembre - 21hs.',
											'fechaCorta' => '15 <span>Sep</span>',
											'lugar' => 'Estadio único de La Plata'
										),
										array(
											'fecha' => 'Sábado 16 de septiembre - 21hs.',
											'fechaCorta' => '16 <span>Sep</span>',
											'lugar' => 'Estadio único de La Plata'
										),
										array(
											'fecha' => 'Domingo 17 de septiembre - 21hs.',
											'fechaCorta' => '17 <span>Sep</span>',
											'lugar' => 'Estadio único de La Plata'
										),
										array(
											'fecha' => 'Lunes 18 de septiembre - 21hs.',
											'fechaCorta' => '18 <span>Sep</span>',
											'lugar' => 'Estadio único de La Plata'
										),
										array(
											'fecha' => 'Martes 19 de septiembre - 21hs.',
											'fechaCorta' => '19 <span>Sep</span>',
											'lugar' => 'Estadio único de La Plata'
										),
										array(
											'fecha' => 'Miércoles 20 de septiembre - 21hs.',
											'fechaCorta' => '20 <span>Sep</span>',
											'lugar' => 'Estadio único de La Plata'
										),
										array(
											'fecha' => 'Jueves 21 de septiembre - 21hs.',
											'fechaCorta' => '21 <span>Sep</span>',
											'lugar' => 'Estadio único de La Plata',
											'agotado' => true
										)
									);
 									for($a=0; $a<sizeof($fechas);$a++){
 								?>
 								<li>
 									<?php
 										$class = 'class=""';
 										if(isset($fechas[$a]['agotado'])){$class = 'class="agotado"';}
 									?>
 									<a href="#" title="proximoEvento<?php echo $fechas[$a]['fecha']; ?>" <?php echo $class; ?>>
 										<article class="proximo-evento">
 											<ul>
 												<li class="cajaFecha">
 													<span><?php echo $fechas[$a]['fechaCorta']; ?></span>
 												</li>
 												<li>
 													<h1><?php echo $fechas[$a]['fecha']; ?></h1>
 													<p><?php echo $fechas[$a]['lugar'];  ?></p>
 													<b><?php
 														if(isset($fechas[$a]['agotado'])){
 															echo 'Agotado';
 														}else{
 															echo 'Comprar';
 														}
 													 ?></b>
 												</li>
 											</ul>
 										</article>
 									</a>
 								</li>
 								<?php
 									}
 								?>
  							</ul>
  						</article>
  						<aside class="promocionesArea slider col-md-4">
  							<div>
  								<h3>Promociones vigentes</h3>
  								<ul class="sliderArea">
  									<?php
										$promociones = array(
											array(
												'emisor' => 'Clarín 365',
												'imgEmisor' => 'clarin-365.jpg',
												'metodoPago' => array(
													array(
														'tarjeta' => 'Amex',
														'imgTarjeta' => 'amex.jpg'
													),
													array(
														'tarjeta' => 'Argencard',
														'imgTarjeta' => 'argencard.jpg'
													),
													array(
														'tarjeta' => 'Cabal',
														'imgTarjeta' => 'cabal.jpg'
													),
													array(
														'tarjeta' => 'Diners',
														'imgTarjeta' => 'diners.jpg'
													),
													array(
														'tarjeta' => 'MasterCard',
														'imgTarjeta' => 'mastercard.jpg'
													),
													array(
														'tarjeta' => 'Nativa',
														'imgTarjeta' => 'nativa.jpg'
													),
													array(
														'tarjeta' => 'Tarjeta Naranja',
														'imgTarjeta' => 'naranja.jpg'
													),
													array(
														'tarjeta' => 'Tarjeta Shopping',
														'imgTarjeta' => 'shopping.jpg'
													),
													array(
														'tarjeta' => 'Visa',
														'imgTarjeta' => 'visa.jpg'
													),
													array(
														'tarjeta' => 'Visa Débito',
														'imgTarjeta' => 'visad.jpg'
													)
												)
											),
											array(
												'emisor' => 'Club La Nación',
												'imgEmisor' => 'club-la-nacion.jpg',
												'metodoPago' => array(
													array(
														'tarjeta' => 'Amex',
														'imgTarjeta' => 'amex.jpg'
													),
													array(
														'tarjeta' => 'Argencard',
														'imgTarjeta' => 'argencard.jpg'
													),
													array(
														'tarjeta' => 'Cabal',
														'imgTarjeta' => 'cabal.jpg'
													),
													array(
														'tarjeta' => 'Diners',
														'imgTarjeta' => 'diners.jpg'
													),
													array(
														'tarjeta' => 'MasterCard',
														'imgTarjeta' => 'mastercard.jpg'
													),
													array(
														'tarjeta' => 'Tarjeta Shopping',
														'imgTarjeta' => 'shopping.jpg'
													),
													array(
														'tarjeta' => 'Visa',
														'imgTarjeta' => 'visa.jpg'
													),
													array(
														'tarjeta' => 'Visa Débito',
														'imgTarjeta' => 'visad.jpg'
													)
												)
											),
										);
 										for($a=0; $a<sizeof($promociones);$a++){
 									?>
 									<li>
 										<div class="emisorImg">
 											<a href="promociones.php" title="<?php echo $promociones[$a]['emisor']; ?>">
 												<span class="spanImg">
 													<img src="images/metodos/<?php echo $promociones[$a]['imgEmisor']; ?>" alt="<?php echo $promociones[$a]['emisor']; ?>" >
 												</span>
 											</a>
 										</div>
 										<h3>Métodos de pago</h3>
 										<ul class="metodosPago">
 										<?php
 											for($b=0; $b<sizeof($promociones[$a]['metodoPago']);$b++){
 										?>
 											<li>
 												<span class="spanImg">
 													<img src="images/metodos/<?php echo $promociones[$a]['metodoPago'][$b]['imgTarjeta']; ?>" alt="<?php echo $promociones[$a]['metodoPago'][$b]['tarjeta']; ?>" >
 												</span>
 											</li>
 										<?php
 											}
 										?>
 										</ul>
 									
 									</li>
 									<?php
 										}
 									?>
  								</ul>
  							</div>
  						</aside>
  					</section>
  				</article>
 			</div>
 			<div class="container-fluid lugarArea">
				<article>
  					<h2>Estadio Único La Plata</h2>
  					<h3>Valores de referencia</h3>
  					<ul class="row">
  						<li class="col-md-5">
  							<table class="preciosEntradas">
  								<thead>
  									<tr>
  										<th colspan="2">&nbsp;</th>
  										<th class="valores">Valor en un pago</th>
  										<th class="valores">Cargo de servicio</th>
  									</tr>
  								</thead>
  								<tbody>
  									<?php
  										$listado = array(
  											array(
  												'posicion' => 'Platea VIP',
  												'filas' => 'Fila 01 a 15',
  												'color' => '#00008b',
  												'precio' => '$3.900',
  												'cargo' => '$480'
  											),
  											array(
  												'posicion' => 'Platea Preferida',
  												'filas' => 'Fila 01 a 15',
  												'color' => '#1e90ff',
  												'precio' => '$3.800',
  												'cargo' => '$480'
  											),
  											array(
  												'posicion' => 'Platea Elevada',
  												'filas' => 'Fila 01 a 15',
  												'color' => '#ff80ff',
  												'precio' => '$3.700',
  												'cargo' => '$480'
  											),
  											array(
  												'posicion' => 'Platea Alta Derecha',
  												'filas' => 'Fila 01 a 15',
  												'color' => '#008000',
  												'precio' => '$3.500',
  												'cargo' => '$480'
  											),
  											array(
  												'posicion' => 'Platea Alta Izquierda',
  												'filas' => 'Fila 01 a 15',
  												'color' => '#800080',
  												'precio' => '$3.500',
  												'cargo' => '$480'
  											),
  											array(
  												'posicion' => 'Cabecera Alta',
  												'filas' => 'Fila 01 a 15',
  												'color' => '#008080',
  												'precio' => '$2.900',
  												'cargo' => '$480'
  											),
  											array(
  												'posicion' => 'Cabecera Baja',
  												'filas' => 'Fila 01 a 15',
  												'color' => '#ff8000',
  												'precio' => '$2.900',
  												'cargo' => '$480'
  											),
  											array(
  												'posicion' => 'Silla de Ruedas',
  												'filas' => 'Acceso',
  												'color' => '#b8b8b8',
  												'precio' => '$1.900',
  												'cargo' => '$480'
  											),
  										);
  										
  										for($a=0;$a<sizeof($listado);$a++){
  									?>
  									<tr>
  										<td class="color"><span style="background: <?php echo $listado[$a]['color']; ?>"></span></td>
  										<td class="texto"><p><?php echo $listado[$a]['posicion']; ?></p><span><?php echo $listado[$a]['filas']; ?></span></td>
  										<td class="valor"><?php echo $listado[$a]['precio']; ?></td>
  										<td class="cargo"><?php echo $listado[$a]['cargo']; ?></td>
  									</tr>
  									<?php
  										}
  									?>
  								</tbody>
  							</table>
  						</li>
  						<li class="col-md-7 plano">
  							<span class="spanImg">
  								<img src="images/estadios/estadio-unico-la-plata-planta.png" alt="Estadio Único La Plata">
  							</span>
  						</li>
  					</ul>
  				</article>
			</div>
  		</section>
  		<section class="redesSocialesArea">
  			<div class="container-fluid">
  				<article>
  					<ul>
  						<li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
  						<li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
  						<li><a href="#" title="Youtube"><i class="fab fa-youtube"></i></a></li>
  						<li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
  					</ul>
  				</article>
  			</div>
  		</section>
  		<section class="aboutArea">
  			<div class="container-fluid">
  				<div class="row">
  					<article class="col-md-8">
  						<h2>Sobre la banda</h2>
  						<p>Dave Matthews Band (también conocidos por el acrónimo DMB) es una banda estadounidense de rock formada en el año 1991 en Charlottesville, Virginia. La banda fue fundada por el cantante, compositor y guitarrista Dave Matthews, el bajista Stefan Lessard, el baterista Carter Beauford y el saxofonista LeRoi Moore; a los cuales se les unió el violinista Boyd Tinsley poco tiempo después. Luego del fallecimiento de Moore en 2008, Jeff Coffin tomó su lugar como el saxofonista principal de la banda.</p>
  						<p>Desde 1998 hasta mayo de 2008 la banda contó con la presencia del teclista Butch Taylor durante las presentaciones en vivo y en el año 2005 se integró el trompetista Rashawn Ross, aunque ambos músicos no están incluidos entre los miembros oficiales del grupo. Otro importante músico que forma parte del grupo durante presentaciones en vivo, pero no es parte oficial de la banda, es el guitarrista Tim Reynolds.</p>
  						<p>Dave Matthews Band es conocida por sus giras anuales por los Estados Unidos y Europa durante el verano, donde presentan sus canciones en vivo con largas improvisaciones de las mismas y elaborados shows de video y luces. En cuanto a las letras de la banda, estas se enfocan en temas variados como el amor, el sexo, el disfrutar la vida, el uso de marijuana y el fin del racismo, entre otros.</p>
  						<p>Su anterior disco de estudio, Big Whiskey and the GrooGrux King, lanzado en 2009, debutó en el primer lugar de la lista Billboard de los Estados Unidos, haciendo de éste su quinto álbum de estudio consecutivo en alcanzar esta posición en su lanzamiento, un récord que comparten con Metallica. De acuerdo a la RIAA, Dave Matthews Band ha vendido alrededor de 31 millones de unidades sólo en los Estados Unidos, lo que los coloca entre los 100 artistas más vendidos de la historia.</p>
  						<h3>Último video</h3>
  						<div class="video-responsive">
  							<iframe src="https://www.youtube.com/embed/53WUYL_hyAc" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
  						</div>
  					</article>
  					<aside class="col-md-4">
  						<h3>Últimas noticia</h3>
  						<div>
  							<span class="spanImg">
  								<img src="images/ultimas-noticias.jpg" alt="últimas noticias">
  							</span>
  						</div>
  						<div class="suscripcionArea">
  							<form>
  								<h4>Suscribirse al newsletter</h4>
  								<ul>
  									<li>
  										<p>Te enviaremos toda la información sobre tus eventos favoritos.</p>
  									</li>
  									<li>
  										<label for="Email">Ingresa tu email</label>
  										<input type="text"></input>
  									</li>
  									<li class="submitBtn">
  										<button class="submit"><i class="fas fa-angle-double-right"></i> Enviar</button>
  									</li>
  								</ul>
  							</form>
  						</div>
  					</aside>
  				</div>
  			</div>
  		</section>
  		<section class="historiaLugarArea">
  			<span class="spanImg">
  				<img src="images/historia.jpg" alt="Historia">
  			</span>
  			<div class="container-fluid">
  				<h2>Estadio Único de La Plata</h2>
  				<div class="row">
					<article class="col-md-4">
						<h3>Historia</h3>
  						<p>Inaugurado parcialmente el 7 de junio de 2003, y completadas las obras proyectadas el 17 de febrero de 2011, el Estadio Ciudad de La Plata es uno de los más modernos de Latinoamérica.5​9​ Juega en condición de local Estudiantes de La Plata.10​ Y también lo utilizaban Gimnasia, que volvió a habilitar su estadio a mediados de 2008; Everton, durante partidos correspondientes al Torneo Federal B; y La Plata Fútbol Club. No obstante, Gimnasia puede actuar como local cada vez que así lo decidiera. Asimismo, esporádicamente, se han organizado partidos de fútbol de la Selección Argentina.</p>
  						<p>Se encuentra ubicado dentro de un predio parquizado entre las avenidas 32 y 526, 25 y la calle 21. Estos terrenos contienen, también, un pequeño estadio de rugby y el CEF, «Centro de Educación Física», donde suelen realizarse eventos intercolegiales con escuelas de la zona, como la de Educación Media Nº31, más conocida como el Comercial San Martín.</p>
  						<p>La idea del proyecto comenzó en 1947, cuando el entonces gobernador Domingo Mercante expropió el predio ubicado en el cruce de las avenidas 32 y 25 y conformó el Complejo Deportivo La Plata. </p>
  					</article>
  					<aside class="col-md-8">
  						<h3>Cómo llegar</h3>
  						<span class="spanImg">
  							<img src="images/mapa.jpg" alt="Cómo llegar">
  						</span>
  					</aside>
  				</div>
 			</div>
  		</section>
		<section class="proximamenteArea">
 			<div class="container-fluid">
 				<article>
 					<h2>También te puede interesar</h2>
 					<ul class="proximos-eventos row">
 						<?php

							$proximos = array(
								array(
									'title' => 'Ariana Grande',
									'image' => 'ariana-grande'
								),
								array(
									'title' => 'Color Festival',
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
 								<article class="proximo-evento">
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
 		

	<?php
		include("footer.php")
	?>
