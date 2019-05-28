		<footer>
			<section class="container-fluid">
				<article>
					<ul class="row footer-content">
						<li>
							<a class="navbar-brand " href="/"><span class="spanImg"><img src="images/tu-ticket-de-entrada-footer.png"  alt="Tu ticket de entrada" title="Tu ticket de entrada"></span></a>
						</li>
						<li class="links-content">
							<ul class="row links">
							<?php
								$footer = array(
									array(
										'title' => 'Ayuda'
									),
									array(
										'title' => 'Puntos de venta'
									),
									array(
										'title' => 'Beneficios'
									),
									array(
										'title' => 'Productores y recintos'
									),
									array(
										'title' => 'Términos y condiciones'
									),
									array(
										'title' => 'Políticas de privacidad'
									),
									array(
										'title' => 'Call center 0800-000-0000'
									),
									array(
										'title' => 'La compañía'
									),
									array(
										'title' => 'Uso de marca'
									),
									array(
										'title' => 'Copyright 2019'
									)								
									
								);
								for($a=0;$a< sizeof($footer);$a++){
							?>
								<li>
									<a href="" title="<?php echo $footer[$a]['title']; ?>"><?php echo $footer[$a]['title']; ?></a>
								</li>
							<?php
								}
							?>
							</ul>
						</li>
						<li>
							<a href="www.tuticketdeentrada.com.ar" title="Tu ticket de entrada" class="btnProductores btn">www.tuticketdeentrada.com.ar</a>
						</li>
					</ul>
				</article>
			</section>
		</footer>
	</main>
<!--script type="text/javascript" src="../js/jquery.js"></script-->
<script type="text/javascript" src="js/jquery-3.3.1.min.js?v=<?php echo $v; ?>"></script>
<script type="text/javascript" src="js/popper.min.js?v=<?php echo $v; ?>"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.js?v=<?php echo $v; ?>"></script>
<script type="text/javascript" src="js/jquery-ui.min.js?v=<?php echo $v; ?>"></script>
<script type="text/javascript" src="js/jquery.validate.min.js?v=<?php echo $v; ?>"></script>

<script type="text/javascript" src="js/funciones.js?v=<?php echo $v; ?>"></script>
</body>
</html>