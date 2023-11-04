<?php
headerTienda($data);
// $banner = media()."/tienda/images/bg-01.jpg";
$banner = $data['page']['portada'];
$idpagina = $data['page']['idpost'];
?>
 <script>
 	document.querySelector('header').classList.add('header-v4');
 </script>
<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-10" style="background-image: url(<?php echo $banner; ?>);">
	
	<div class="row" style="padding:5vw;">
		<div class="col-xs-6 col-md-6" style="">
			<img class="style-img-n" src="<?php echo base_url().'/Assets/vultan/nosotros/img1.png'; ?>" alt="">
		</div>
		<div class="col-xs-6 col-md-6">
			<p class="t-opti-j">¿QUIÉNES SOMOS?</p><br/>
			<p class="p-roboto">Somos una empresa que nace de la necesidad de brindar una Plataforma de Rastreo Satelital profesional y hecha a la medida que permita una mejor experiencia con los usuarios permitiéndoles obtener un servicio de calidad y atención personalizada según sus requerimientos.</p><br/>
			<p class="p-roboto">Somos expertos en brindar ideas y soluciones tecnológicas, y hoy nos unimos para fortalecer el mercado del Rastreo Satelital con nuestra plataforma y equipos de calidad Puma Security que han permeado el mercado desde 2015.</p></br>
			<p class="p-roboto">Brindamos atención a cualquier estado de la República Mexicana.</p></div>
		</div>
	</div>
	<div class="row" style="padding:5vw;">
		<div class="col-xs-6 col-md-6" style="">
			<img class="style-img-n" src="<?php echo base_url().'/Assets/vultan/nosotros/img2.png'; ?>" alt="" style="height:350px;">
		</div>
		<div class="col-xs-6 col-md-6">
			<p class="t-opti-j">NUESTROS VALORES</p><br/>
			<p class="p-roboto">Confianza: Nos comprometemos a generar y mantener la confianza de nuestros clientes al proporcionar soluciones confiables y seguras de rastreo satelital. Valoramos la transparencia y la honestidad en todas nuestras interacciones.</p><br/>
			<p class="p-roboto">Innovación: Fomentamos una cultura de innovación y mejora continua. Estamos comprometidos con la investigación y el desarrollo de nuevas tecnologías para ofrecer soluciones de rastreo satelital de vanguardia que impulsen la eficiencia y la seguridad.</p><br/>
			<p class="p-roboto">Orientación al cliente: Ponemos al cliente en el centro de todo lo que hacemos. Escuchamos atentamente sus necesidades, ofrecemos soluciones personalizadas y brindamos un excelente servicio al cliente para garantizar su satisfacción y éxito.</p>
		</div>
	</div>

	<div class="row" style="padding:5vw; background-color:#B78E49;">
		<div class="col-xs-6 col-md-6">
			<p class="t-opti-j" style="color:white;">MISIÓN</p><br/>
			<p class="p-roboto" style="color:white;">Nuestra visión en VULTAN es ser la empresa de rastreo satelital que más valor y atención otorga a sus clientes; Buscamos comunicar una sensación de fortaleza y seguridad, características imperativas en el sector de servicios de monitoreo y tecnología GPS.</p>
			<br/><br/><br/>
			<p class="t-opti-j" style="color:white;">VISIÓN</p><br/>
			<p class="p-roboto" style="color:white;">En VULTAN, nuestra misión es proporcionar soluciones de rastreo satelital de vanguardia para brindar seguridad y eficiencia a nuestros clientes. Nos comprometemos a ofrecer tecnología confiable y servicios excepcionales que permitan a las empresas proteger sus activos y optimizar sus operaciones.</p><br/>
		</div>
		<div class="col-xs-6 col-md-6">
			<img src="<?php echo base_url().'/Assets/vultan/nosotros/img3.png'; ?>" alt="" style="width:100%;"></div>
		</div>
	</div>
</section>
<!-- Content page -->
<?php
   /*if(viewPage($idpagina)){
       echo $data['page']['contenido'];
   }else{*/
?>
<div>
	
</div>
<?php
  // }

  footerTienda($data);
?>