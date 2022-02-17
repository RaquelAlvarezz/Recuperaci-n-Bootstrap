<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estiloscontacto.css">
    
    <link rel="icon" type="image/jpg" href="./img/bosquejo.png"/>
    <title>360 grados Arquitectura</title>
    
</head>
<body>
 
<?php include "header.php"; ?>
    
<main>

<div class="container">
		<div class="innerwrap">
		
			<section class="section1 clearfix">
				<div class="textcenter">
                    <br>
					<h1>Datos de contacto</h1>
				</div>
			</section>
		
			<section class="section2 clearfix">
				<div class="col2 column1 first">
					<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div class="sec2map" style='overflow:hidden;height:550px;width:100%;'><div id='gmap_canvas' style='height:100%;width:100%;'></div><div><small><a href="http://embedgooglemaps.com">									embed google maps							</a></small></div><div><small><a href="http://freedirectorysubmissionsites.com/">free web directories</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(19.075314480255834,72.88153973865361),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(19.075314480255834,72.88153973865361)});infowindow = new google.maps.InfoWindow({content:'<strong>My Location</strong><br>mumbai<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
				</div>
				<div class="col2 column2 last">
					<div class="sec2innercont">
						<div class="sec2addr">
							<p><span class="collig">Dirección :</span>Paseo de la Castellana, 278 - 28046 MADRID</p>
							<p><span class="collig">Teléfono :</span> +34 976885083</p>
							<p><span class="collig">Email :</span> raquel.alvarez@360arquitectura.com</p>
							
						</div>
					</div>
					<div class="sec2contactform">
						<h3 class="sec2frmtitle">¿Quieres saber más? Contacta con nosotros</h3>
						<form action="">
							<div class="clearfix">
								<input class="col2 first" type="text" placeholder="Nombre">
								<input class="col2 last" type="text" placeholder="Apellidos">
							</div>
							<div class="clearfix">
								<input  class="col2 first" type="Email" placeholder="Email">
								<input class="col2 last" type="text" placeholder="Teléfono">
							</div>
							<div class="clearfix">
								<textarea name="textarea" id="" cols="30" rows="7">Escribe aquí tu mensaje...</textarea>
							</div>
							<div class="clearfix"><input type="submit" value="Enviar"></div>
						</form>
					</div>

				</div>
			</section>
		
		</div>
	</div>

    </main>
    <?php include "footer.php"; ?>
    
    
</body>
</html>