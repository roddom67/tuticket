<!DOCTYPE html>
<html>
<head>
    <title>Demo 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/ninja-slider.css" rel="stylesheet" type="text/css" />
    <script src="js/ninja-slider.js" type="text/javascript"></script>
    <style>
        body {font: normal 0.9em Arial;margin:0;}
        a {color:#1155CC;}
        header {display:block;padding:40px 0 30px;text-align:center;background:#000;}
        header a {
            font-family: sans-serif;
            font-size: 24px;
            line-height: 24px;
            padding: 8px 13px 7px;
            color: #4d5256;
            text-decoration:none;
            transition: color 0.7s;
        }
        header a.active {
            font-weight:bold;
            width: 24px;
            height: 24px;
            padding: 4px;
            text-align: center;
            display:inline-block;
            border-radius: 50%;
            background: #4d5256;
            color: #191919;
        }
    </style>
</head>
<body>
    <header>
        <a href="demo1.html">1</a>
        <a href="demo2.html">2</a>
        <a href="demo3.html">3</a>
        <a href="demo4.html">4</a>
        <a href="demo5.html">5</a>
        <a href="demo6.html">6</a>
        <a href="demo7.html">7</a>
        <a href="demo8.html">8</a>
        <a href="demo9.html">9</a>
        <a href="demo10.html" class="active">10</a>
    </header>
    <!--start-->
    <div id="ninja-slider">
        <div class="slider-inner">
            <ul>
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
							<a href="comprar.php" title="<?php echo $slider[$a]['title']; ?>">
 								<article class="texto-evento">
 										<span class="fecha"><?php echo $slider[$a]['fecha']; ?></span>
 										<h1><?php echo $slider[$a]['title']; ?></h1>
 										<p><span><?php echo $slider[$a]['lugar']; ?></span></p>
 										<span href="comprar.php" title="Comprar" class="comprar">Comprar</span>
 								</article>
							</a>
 						</li>
 						<?php
 							}
 						?>
            </ul>
        </div>
    </div>
    <!--end-->
    <div style="max-width:700px;margin:90px auto;">
        <p>Please click <a href="http://www.menucool.com/slider/slider-that-adapts-to-window-height">here</a> to see:</p>
        <ul>
            <li>How to make this Ninja Slider responsive on height</li>
            <li>How to hide the navigation buttons/arrows when on mobile phones</li>
            <li>If you have captions for each slide, and want to show the caption outside the slider, 
            please visit <a href="http://www.menucool.com/slider/show-image-gallery-on-modal-popup">demo 8</a></li>
        </ul>
    </div>    
</body>
</html>
