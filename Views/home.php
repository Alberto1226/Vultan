<?php
headerTienda($data);
$arrSlider = $data['slider'];
$arrBanner = $data['banner'];
$arrProductos = $data['productos'];

$contentPage = '';
if (!empty($data['page'])) {
    $contentPage = $data['page']['contenido'];
}

?>
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo base_url().'/Assets/vultan/inicio/slider1.png'; ?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url().'/Assets/vultan/inicio/slider2.png'; ?>" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url().'/Assets/vultan/inicio/slider3.png'; ?>" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	
	<!--Vultan  Assets/vultan/inicio/img1.png-->
	<div class="row" style="padding:10vw;">
	<div class="col-xs-6 col-md-6" style="background-color:black;"><img src="<?php echo base_url().'/Assets/vultan/inicio/icono_Play.png'; ?>" alt=""></div>
	<div class="col-xs-6 col-md-6"><p style="text-align: justify;">Somos una empresa que nace de la necesidad de brindar una Plataforma de Rastreo Satelital profesional y hecha a la medida que permita una mejor experiencia con los usuarios permitiéndoles obtener un servicio de calidad y atención personalizada según sus requerimientos.</p><br/>
							<p style="text-align: justify;">Somos expertos en brindar ideas y soluciones tecnológicas, y hoy nos unimos para fortalecer el mercado del Rastreo Satelital con nuestra plataforma y equipos de calidad Puma Security que han permeado el mercado desde 2015.</p><br/>
						<p style="text-align: justify;">Brindamos atención a cualquier estado de la República Mexicana.</p></div>
	</div>

	<div class="row" style="padding:5vw;">
	<div class="col-xs-6 col-md-6" style=""><img src="<?php echo base_url().'/Assets/vultan/inicio/Img1.png'; ?>" alt="" style="width:100%;"></div>
	<div class="col-xs-6 col-md-6"><p style="text-align: justify;">SOFTWARE DE RASTREO AVANZADO DE FLOTA con GPS; Monitorea y administra fácilmente.</p><br/>
							<p style="text-align: justify;">Orgullosos de ofrecer a nuestros clientes una plataforma desarrollada por nosotros para poder brindar la mejor de las experiencias y funcionalidades que los usuarios requieren para gestionar el Rastreo Satelital, capaz de soportar miles de equipos y unidades, diseñada para grandes flotillas y altos volúmenes de tráfico de información 100% personalizable e intuitiva permitiendo una mejor administración de tus unidades. Configura y administra los perfiles de tus equipos.</p><br/>
						</div>
	</div>


	<div class="row" style="padding:5vw;">
	<div class="col-xs-6 col-md-6"><p style="text-align: justify;">EQUIPOS DE ÚLTIMA generación para el cuidado de tus unidades, monitorea en tiempo real, personas, mercancías, ganado, motocicletas, automóviles, camionetas, camiones, autobuses, maquinaria, cámaras frente y cabina, tecnologías autónomas de energía solar, autónomas e inteligentes con protocolo anti jamming y equipos de recuperación, sensores de combustible y telemetría. </p><br/>
							<p style="text-align: justify;">Puedes contar con elementos complementarios como lo es un Botón de Pánico Físico, micrófono para monitoreo abierto de audio y sensores adicionales que complementan la gestión y administración de tus unidades.</p><br/>
						</div>
	<div class="col-xs-6 col-md-6" style=""><img src="<?php echo base_url().'/Assets/vultan/inicio/Img2.png'; ?>" alt="" style="width:100%;"></div>
	</div>

	<div class="row" style="padding:5vw;">
	<div class="col-xs-6 col-md-6" style=""><img src="<?php echo base_url().'/Assets/vultan/inicio/Img3.png'; ?>" alt="" style="width:100%;"></div>
	<div class="col-xs-6 col-md-6"><p style="text-align: justify;">Contamos con nuestras propias instalaciones que nos permiten operar una CENTRAL DE MONITOREO 24/7/365 para nuestros clientes donde podemos brindar diferentes tipos de Monitoreo.</p><br/>
							<p style="text-align: justify;">⚫ Monitoreo pasivo con reacción a S.O.S. por emergencia</p>
							<p style="text-align: justify;">⚫ Monitoreo Activo y Reacción de Puntos Críticos</p>
							<p style="text-align: justify;">⚫ Monitoreo Activo Reacción a Políticas y Métricas</p>
							<p style="text-align: justify;">⚫ Monitoreo Activo Dedicado y Acompañamiento</p>
							
						</div>
	</div>

	<div class="grid-container">
    </div>
	<!--Fin Vultan-->
	<div class="container-fluid"></div>
	<div class="row">
		<div class="col">
        	<div class="grid-item">
				<img class="grid-img" src="<?php echo base_url().'/Assets/vultan/inicio/icono_Personal.png'; ?>" alt="Imagen 1">
				<p>Soluciones para uso personal</p>
			</div>
		</div>
		<div class="col">
        	<div class="grid-item">
				<img class="grid-img" src="<?php echo base_url().'/Assets/vultan/inicio/icono_Corporativas.png'; ?>" alt="Imagen 2">
				<p>Soluciones corporativas</p>
			</div>
		</div>
		<div class="col">
        	<div class="grid-item">
				<img class="grid-img" src="<?php echo base_url().'/Assets/vultan/inicio/icono_CentrodeMonitoreo.png'; ?>" alt="Imagen 3">
				<p>Soluciones para quienes buscan una central de monitoreo</p>
			</div>
		</div>
		<div class="w-100"></div>
		<div class="col">
        	<div class="grid-item">
				<img class="grid-img" src="<?php echo base_url().'/Assets/vultan/inicio/icono_WebService.png'; ?>" alt="Imagen 4">
				<p>Soluciones Web Service/ API</p>
			</div>
		</div>
		<div class="col">
        	<div class="grid-item">
				<img class="grid-img" src="<?php echo base_url().'/Assets/vultan/inicio/icono_Resellers.png'; ?>" alt="Imagen 5">
				<p>Soluciones para resellers con marca blanca</p>
			</div>
		</div>
	</div>
<?php
   footerTienda($data);
?>

