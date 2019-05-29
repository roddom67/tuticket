<!DOCTYPE HTML>
<html lang="es">
<?php
	$page = 'Promociones';
	$headTitulo = 'Promociones | Tu ticket de entrada';
	$headDesc ='Promociones | Tu ticket de entrada';
	$headKeywords = 'ticket, entradas, eventos, música, cantantes, teatro, cine';
	include("head.php");
?>
<body class="promociones internas">
	<main>
		<header>
  			<div>
  				<?php
  					$promociones = true;
					include("nav.php")
				?>
 			</div>
		</header>
  	<!-- Content here -->
  		<section class="promosArea">
  			<div class="container-fluid">
   			<article>
  					<h2>Promociones</h2>
  					<section class="row">
  						<article class="col-md-8">
  							<h3>Tarjeta 365</h3>
  							<div class="row">
  								<div class="col-md-4">
  									<span class="spanImg">
   									<img src="images/metodos/clarin-365.jpg" alt="clarin-365">
 									</span>
  								</div>
  								<div class="col-md-8 promosTexto">
  									<div class="infoPromo">
  										<span class="spanImg">
   										<img src="images/metodos/2x1.png" alt="2x1">
 										</span>
  										<p>365 | 365 plus</p>
  										<p>2X1 en entradas todos los días con ambas credenciales</p>
  										<a href="" title="Ver sucursales con este beneficio" class="sucursales"><i class="fas fa-map-marker-alt"></i> Ver sucursales con este beneficio</a>
  									</div>
  									<div>
  										<h4><i class="fas fa-calendar-alt"></i> Días</h4>
   									<ul>
   										<li>Do</li>
   										<li>Lu</li>
   										<li>Ma</li>
   										<li>Mi</li>
   										<li>Ju</li>
   										<li>Vi</li>
   										<li>Sa</li>
  										</ul>
  										<small>Válido hasta: 31/12/2019 - Términos y condiciones</small>
 									</div>
  								</div>
   							<div class="col-md-12 terminosArea">
   								<h5>Términos y condiciones del beneficio</h5>
   								<p>Beneficio válido todos los días hasta el 31/12/2019, para todos los socios 365 que presenten su tarjeta y un documento que acredite identidad. Aplica en todas las formas de pago que el comercio acepte al público en general, sobre los preicos vigentes al momento de su utilización. Sujeto a disponibilidad y a lo dispuesto por la legislación vigente. No se superpone con otros beneficios o promociones en los que intervenga otra marca o programa, pudiendo estar sujeto a futuras modificaciones. Deberás informar el uso del benefico antes de solicitar la factura o servicio. Clarín no tiene ninguna responsabilidad en relación a los productos que se adquieran, siendo el comercio el único responsable por tales cuestiones.</p>
  								</div>
 							</div>
  						</article>
  						<aside class="otrasPromosArea col-md-4">
  							<div>
  								<h3>Otras Promociones</h3>
  								<ul>
  									<?php
										$promociones = array(
											array(
												'emisor' => 'Club La Nación',
												'imgEmisor' => 'tarjeta-la-nacion.jpg'
											),
											array(
												'emisor' => 'Servi Club',
												'imgEmisor' => 'servi-club.jpg'
											),
											array(
												'emisor' => 'ICBC',
												'imgEmisor' => 'icbc.jpg'
											),
											array(
												'emisor' => 'Santander Río',
												'imgEmisor' => 'santander.jpg'
											),

										);
 										for($a=0; $a<sizeof($promociones);$a++){
 									?>
 									<li>
 										<div class="emisorImg">
 											<a href="#" title="<?php echo $promociones[$a]['emisor']; ?>">
 												<span class="spanImg">
 													<img src="images/metodos/<?php echo $promociones[$a]['imgEmisor']; ?>" alt="<?php echo $promociones[$a]['emisor']; ?>" >
 												</span>
 											</a>
 										</div>
 									
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
 		</section>
 		

	<?php
		include("footer.php")
	?>
