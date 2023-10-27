<?php 
headerTienda($data);
$banner = $data['page']['portada'];
$idpagina = $data['page']['idpost'];
 ?>
<script>
  document.querySelector('header').classList.add('header-v4');
</script>

 <section class="bg-img1 txt-center p-lr-15 p-tb-20" style="background-image: url(<?= $banner ?>);">
<h1>SERVICIOS Y SOLUCIONES</h1>
<div style="padding:6vw;">
    <div class="contact-row" style="padding:2vw;">
        <img class="servicios-image" src="<?= base_url().'/Assets/vultan/servicios/icono1.png'?>" alt="">
        <p style="padding:2vw; font-size:20px; text-align: justify; text-shadow: 5px 7px 11px #B78E49, 5px 7px 11px #B78E49;">Soluciones para uso personal; Venta en línea de equipos GPS con App móvil de rastreo satelital gratis por los primeros 12 meses. Nuestros equipos están listos para que tú mismo lo recargues y uses de manera autónoma, o bien consulta nuestros planes para hacer más eficiente tu equipo Puma.</p><br/>
    </div>
    <div class="contact-row" style="padding:2vw;">
        <img class="servicios-image" src="<?= base_url().'/Assets/vultan/servicios/icono2.png'?>" alt="">
        <p style="padding:2vw; font-size:20px; text-align: justify; text-shadow: 5px 7px 11px #B78E49, 5px 7px 11px #B78E49;">Soluciones Corporativas hechas a la medida para gestión de flotillas, en rastreo de cabinas, cajas y mercancías con plataforma de monitoreo satelital. Ofrecemos equipos en venta o renta para rastreo en tiempo real y recuperación.</p><br/>
    </div>
    <div class="contact-row" style="padding:2vw;">
        <img class="servicios-image" src="<?= base_url().'/Assets/vultan/servicios/icono3.png'?>" alt="">
        <p style="padding:2vw; font-size:20px; text-align: justify; text-shadow: 5px 7px 11px #B78E49, 5px 7px 11px #B78E49;">Soluciones para quienes buscan una Central de monitoreo satelital 24/7 donde les podemos ofrecer diferentes planes para realizar Monitoreo Pasivo y Activo a unidades, agrupaciones o flotas que requieran de un acompañamiento y monitoreo específico.</p><br/>
    </div>
    <div class="contact-row" style="padding:2vw;">
        <img class="servicios-image" src="<?= base_url().'/Assets/vultan/servicios/icono4.png'?>" alt="">
        <p style="padding:2vw; font-size:20px; text-align: justify; text-shadow: 5px 7px 11px #B78E49, 5px 7px 11px #B78E49;">Soluciones Web Service / API para integración de nuestra plataforma de monitoreo a tu sistema administrativo o ERP.</p><br/>
    </div>
    <div class="contact-row" style="padding:2vw;">
        <img class="servicios-image" src="<?= base_url().'/Assets/vultan/servicios/icono4_1.png'?>" alt="">
        <p style="padding:2vw; font-size:20px; text-align: justify; text-shadow: 5px 7px 11px #B78E49, 5px 7px 11px #B78E49;">Soluciones para Resellers con Marca Blanca, Quieres empezar tu propio negocio o ser distribuidor directo de tecnología VULTAN y equipos Puma.</p><br/>
    </div>
    </div>


    <div class="container">
      <div class="row">
        <div class="col-sm">
        <img class="servicios-image" style="padding:2vw;" src="<?= base_url().'/Assets/vultan/servicios/icono_wa.png'?>" alt=""><br/>
        <img class="servicios-image" src="<?= base_url().'/Assets/vultan/servicios/boton_wa.png'?>" alt="">
        </div>
        <div class="col-sm">
        <img class="servicios-image" style="padding:2vw;" src="<?= base_url().'/Assets/vultan/servicios/icono_mail_1.png'?>" alt=""><br/>
        <img class="servicios-image" src="<?= base_url().'/Assets/vultan/servicios/boton_mail.png'?>" alt="">
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm">
        <h2 style="padding:2vw; font-size:20px;">¿QUIERES SER DISTRIBUIDOR?</h2>
          <form>
            <div class="form-group">
              
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="NOMBRES:">
            </div>
            <div class="form-group">
              
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="APELLIDO PATERNO:">
            </div>
            <div class="form-group">
              
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="APELLIDO MATERNO:">
            </div>
            <div class="form-group">
              
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="DOMICILIO DEL NEGOCIO:">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">ADJUNTA FOTOS DE TU NEGOCIO O LOCAL:</label>
              <input type="file" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
            </div>
            <div class="form-group">
              <textarea class="form-control" aria-label="With textarea" placeholder="TE ESCUCHAMOS…."></textarea>
            </div>
            <button type="button" class="form-control btn btn-success">Enviar</button>
          </form>
        </div>
        <div class="col-sm">
        <h2 style=" margin-top:2vw; font-size:20px;">¿Quieres empezar tu propio negocio?</h2>
        <h2 style=" font-size:20px;">¿Deseas vender equipos?</h2>
        <h2 style=" font-size:20px;">¿Deseas instalar equipos y tecnología?</h2>
        <h2 style=" font-size:20px;">¿Deseas tener tu propia marca?</h2>
        <h2 style=" font-size:20px;">Contáctanos y te atenderemos a la brevedad</h2>
        <img class="servicios-image" src="<?= base_url().'/Assets/vultan/servicios/img1_1.png'?>" alt="">
        </div>
      </div>
    </div>

    <h1 style=" margin-top:2vw; color:#B78E49;">NUESTRA CENTRAL DE MONITOREO</h1>
    <div class="row" style="padding:5vw;">
      <div class="col-xs-6 col-md-6" style="background-color:black;"><img src="<?= base_url().'/Assets/vultan/servicios/img2_1.png'?>" style="width:100%;" alt=""></div>
      <div class="col-xs-6 col-md-6"><p style=" font-size:20px; text-align: justify; text-shadow: 5px 7px 11px #B78E49, 5px 7px 11px #B78E49;">Contamos con nuestras propias instalaciones que nos permiten operar una CENTRAL DE MONITOREO 24/7/365 para nuestros clientes donde podemos brindar diferentes Planes de Monitoreo.</p><br/>
      <p style="text-align: justify;">Reacción a:</p>
      <p style="text-align: justify;">⚫Botón de de pánico físico</p>
      <p style="text-align: justify;">⚫Botón virtual de asistencia SOS</p>
      </div>
	  </div>
    <h2 style=" margin-top:2vw;">TIPOS DE MONITOREO</h2>
    <div class="tpmon">
      <h4 style="color:#B78E49;">⚫Plan Monitoreo Pasivo con Reacción a S.O.S. por Emergencia</h4>
      <h4 style="color:#B78E49;">⚫Plan Monitoreo Activo y Reacción de Puntos Críticos</h4>
      <h4 style="color:#B78E49;">⚫Plan Monitoreo Activo Reacción a Políticas y Métricas</h4>
      <h4 style="color:#B78E49;">⚫Plan Monitoreo Activo Dedicado y Acompañamiento</h4>
    </div>
    <p style="text-align: justify;">Brindamos el acompañamiento y monitoreo detallado de sus políticas de viaje en ruta, con protocolos de reacción. Somos el soporte y experiencia que necesitas para la custodia de tus unidades.
</p>

<div class="contact-row" style="padding:2vw;">
        <img class="servicios-image" src="<?= base_url().'/Assets/vultan/servicios/icono_equipo.png'?>" alt="">
        <p style="padding:2vw; font-size:20px; text-align: justify; text-shadow: 5px 7px 11px #B78E49, 5px 7px 11px #B78E49;">Sí ya tienes un proveedor de dispositivos GPS y necesitas un equipo sólido de monitoristas para realizar un buen protocolo de monitoreo activo, escribenos y solucionaremos tus necesidades.
</p><br/>
    </div>

    <div class="barra">
      <h2>PAQUETES DE ACTIVACÍON PÚBLICO EN GENERAL</h2>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm">
        <img class="servicios-image" src="<?= base_url().'/Assets/vultan/servicios/qr.png'?>" alt="">
        <p>Escanea el código, ve el video y conoce cómo activar y contratar nuestros servicios.
</p>
        </div>
        <div class="col-sm">
          <div class="card">
          <div class="car-espacio">
            <p class="card-title">PAQUETE BÁSICO</p>
            <p style="text-align: justify;">USO DE LA PLATAFORMA WEB Y APP MÓVIL POR 12 MESES</p>
            <p style="text-align: justify;">SIM DE DATOS INCLUIDO</p>
            <p style="text-align: justify;">REALIZA TU MISMO TUS PROPIAS RECARGAS</p>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card">
          <div class="car-espacio">
          <p class="card-title">PAQUETE DE DATOS INCLUIDO</p>
          <p style="text-align: justify;">USO DE LA PLATAFORMA WEB Y APP MÓVIL POR 12 MESES</p>
          <p style="text-align: justify;">SIM DE DATOS INCLUIDO</p>
          <p style="text-align: justify;">INCLUYE PLAN DE DATOS POR 12 MESES </p>
          </div>  
          </div>
        </div>
        <div class="col-sm">
          <div class="card">
          <div class="car-espacio">
          <p class="card-title">PAQUETE CON DATOS Y MONITOREO SOS</p>
          <p style="text-align: justify;">USO DE LA PLATAFORMA WEB Y APP MÓVIL POR 12 MESES</p>
          <p style="text-align: justify;">SIM DE DATOS INCLUIDO</p>
          <p style="text-align: justify;">INCLUYE PLAN DE DATOS POR 12 MESES </p>
          <p style="text-align: justify;">ASISTENCIA EN PROTOCOLO DE REACCIÓN POR EMERGENCIA</p>
          </div>
          </div>
        </div>
      </div>
    </div>
</section>

<?php 
  
  footerTienda($data);
?>