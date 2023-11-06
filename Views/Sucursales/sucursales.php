<?php
headerTienda($data);
$banner = $data['page']['portada'];
$idpagina = $data['page']['idpost'];
?>
<script>
  document.querySelector('header').classList.add('header-v4');
</script>

 <section class="bg-img1 txt-center p-lr-15 p-tb-20" style="background-image: url(<?php echo $banner; ?>);">
  <p class="t-opti" style="padding-top:2vw;">SERVICIOS Y SOLUCIONES</p>

  <div class="container-fluid" style="padding:6vw;">
    <div class="row r-sucursales" style="padding:2vw;">
      <div class="col-3 img-sucursales">
        <img src="<?php echo base_url().'/Assets/vultan/servicios/icono1.png'; ?>" alt="">
      </div>
      <div class="col">
        <p class="p-roboto" style="padding:2vw;">Soluciones para uso personal; Venta en línea de equipos GPS con App móvil de rastreo satelital gratis por los primeros 12 meses. Nuestros equipos están listos para que tú mismo lo recargues y uses de manera autónoma, o bien consulta nuestros planes para hacer más eficiente tu equipo Puma.</p>
      </div>
    </div>
    <div class="row r-sucursales" style="padding:2vw;">
      <div class="col-3 img-sucursales">
        <img src="<?php echo base_url().'/Assets/vultan/servicios/icono2.png'; ?>" alt="">
      </div>
      <div class="col">
        <p class="p-roboto" style="padding:2vw;">Soluciones Corporativas hechas a la medida para gestión de flotillas, en rastreo de cabinas, cajas y mercancías con plataforma de monitoreo satelital. Ofrecemos equipos en venta o renta para rastreo en tiempo real y recuperación.</p>
      </div>
    </div>
    <div class="row r-sucursales" style="padding:2vw;">
      <div class="col-3 img-sucursales">
        <img src="<?php echo base_url().'/Assets/vultan/servicios/icono3.png'; ?>" alt="">
      </div>
      <div class="col">
        <p class="p-roboto" style="padding:2vw;">Soluciones para quienes buscan una Central de monitoreo satelital 24/7 donde les podemos ofrecer diferentes planes para realizar Monitoreo Pasivo y Activo a unidades, agrupaciones o flotas que requieran de un acompañamiento y monitoreo específico.</p>
      </div>
    </div>
    <div class="row r-sucursales" style="padding:2vw;">
      <div class="col-3 img-sucursales">
        <img src="<?php echo base_url().'/Assets/vultan/servicios/icono4.png'; ?>" alt="">
      </div>
      <div class="col">
        <p class="p-roboto" style="padding:2vw;">Soluciones Web Service / API para integración de nuestra plataforma de monitoreo a tu sistema administrativo o ERP.</p>
      </div>
    </div>
    <div class="row r-sucursales" style="padding:2vw;">
      <div class="col-3 img-sucursales">
        <img src="<?php echo base_url().'/Assets/vultan/servicios/icono4_1.png'; ?>" alt="">
      </div>
      <div class="col">
        <p class="p-roboto" style="padding:2vw;">Soluciones para Resellers con Marca Blanca, Quieres empezar tu propio negocio o ser distribuidor directo de tecnología VULTAN y equipos Puma.</p>
      </div>
    </div>
  </div>
  
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm">
        <img class="servicios-img" style="padding:2vw;" src="<?php echo base_url().'/Assets/vultan/servicios/icono_wa.png'; ?>" alt=""><br/>
        <img class="servicios-btn" src="<?php echo base_url().'/Assets/vultan/servicios/boton_wa.png'; ?>" alt="">
      </div>
      <div class="col-sm">
        <img class="servicios-img" style="padding:2vw;" src="<?php echo base_url().'/Assets/vultan/servicios/icono_mail_1.png'; ?>" alt=""><br/>
        <img class="servicios-btn" src="<?php echo base_url().'/Assets/vultan/servicios/boton_mail.png'; ?>" alt="">
      </div>
    </div>
  </div>

  <div class="container-fluid" style="padding:2vw;">
    <div class="row">
      <div class="col-sm border border-warning">
      <p style="padding:2vw;" class="p-sucursal">¿QUIERES SER DISTRIBUIDOR?</p>
        <form style="padding:2vw;">
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
            <label for="formGroupExampleInput2" class="l-sucursal">ADJUNTA FOTOS DE TU NEGOCIO O LOCAL:</label>
            <input type="file" class="form-control" id="formGroupExampleInput2">
          </div>

          <div class="form-group">
            <textarea class="form-control" aria-label="With textarea" placeholder="TE ESCUCHAMOS…."></textarea>
          </div>

          <button type="button" class="form-control btn btn-success color">Enviar</button>
        </form>
      </div>
      <div class="col-sm">
      <p class="l-sucursal">¿Quieres empezar tu propio negocio?</p>
      <p class="l-sucursal">¿Deseas vender equipos?</p>
      <p class="l-sucursal">¿Deseas instalar equipos y tecnología?</p>
      <p class="l-sucursal">¿Deseas tener tu propia marca?</p>
      <p class="l-sucursal">Contáctanos y te atenderemos a la brevedad</p>
      <img src="<?php echo base_url().'/Assets/vultan/servicios/img1_1.png'; ?>" alt="" style="width:100%;">
      </div>
    </div>
  </div>

  <p class="t-opti" style="padding:2vw;">NUESTRO CENTRAL DE MONITOREO</p>
  <div class="container-fluid" style="padding:2vw;">
    <div class="row r-sucursales">
      <div class="col" style="padding:2vw;">
        <img class="img2-sucursal" src="<?php echo base_url().'/Assets/vultan/servicios/img2_1.png'; ?>" style="width:100%;" alt="">
      </div>
      <div class="col" style="padding:2vw;">
        <p class="p-roboto">Contamos con nuestras propias instalaciones que nos permiten operar una CENTRAL DE MONITOREO 24/7/365 para nuestros clientes donde podemos brindar diferentes Planes de Monitoreo.</p><br/>
      	<p class="p-roboto">Reacción a:</p>
        <ul>
          <li class="p-roboto style-list">Botón de de pánico físico</li>
          <li class="p-roboto style-list">Botón virtual de asistencia SOS</li>
			  </ul>
      </div>
    </div>
    <div class="row">
      <div class="col" style="padding:1vw;">
        <h2 class="p-center-3">TIPOS DE MONITOREO</h2>
      </div>
      <div class="w-100"></div>
      <div class="col" style="padding:2vw;">
        <ul>
          <li class="p-roboto-3 style-list">Plan Monitoreo Pasivo con Reacción a S.O.S. por Emergencia</li>
          <li class="p-roboto-3 style-list">Plan Monitoreo Activo y Reacción de Puntos Críticos</li>
          <li class="p-roboto-3 style-list">Plan Monitoreo Activo Reacción a Políticas y Métricas</li>
          <li class="p-roboto-3 style-list">Plan Monitoreo Activo Dedicado y Acompañamiento</li>
			  </ul>
      </div>
    </div>
    <div class="row r-sucursales">
      <div class="col">
        <p class="p-center" style="font-weight: bold;">Brindamos el acompañamiento y monitoreo detallado de sus políticas de viaje en ruta, con protocolos de reacción. 
          Somos el soporte y experiencia que necesitas para la custodia de tus unidades.</p>
      </div>
      <div class="w-100"></div>
      <div class="col-2 img-sucursales" style="padding:2vw;">
        <img class="img-sucursal" src="<?php echo base_url().'/Assets/vultan/servicios/icono_equipo.png'; ?>" alt="">
      </div>
      <div class="col" style="padding:2vw;">
        <p class="p-center">Sí ya tienes un proveedor de dispositivos GPS y necesitas un equipo sólido de monitoristas para realizar un buen protocolo de monitoreo activo, escribenos y solucionaremos tus necesidades.</p> 
      </div>
    </div>
  </div>

  <div class="barra">
    <p class="p-center-3">PAQUETES DE ACTIVACÍON PÚBLICO EN GENERAL</p>
  </div>
  <div class="container-fluid" style="padding:5vw;">
      <div class="row">
        <div class="col" style="padding:1vw;">
          <div class="card">
            <div class="car-espacio">
              <p class="card-title">PAQUETE BÁSICO</p></br>
              <p class="card-contennido">USO DE LA PLATAFORMA WEB Y APP MÓVIL POR 12 MESES</p></br>
              <p class="card-contennido">SIM DE DATOS INCLUIDO</p></br>
              <p class="card-contennido">REALIZA TU MISMO TUS PROPIAS RECARGAS</p></br>
            </div>
          </div>
        </div>
        <div class="col" style="padding:1vw;">
          <div class="card">
            <div class="car-espacio">
              <p class="card-title">PAQUETE DE DATOS INCLUIDO</p></br>
              <p class="card-contennido">USO DE LA PLATAFORMA WEB Y APP MÓVIL POR 12 MESES</p></br>
              <p class="card-contennido">SIM DE DATOS INCLUIDO</p></br>
              <p class="card-contennido">INCLUYE PLAN DE DATOS POR 12 MESES </p></br>
            </div>
          </div>
        </div>
        <div class="col" style="padding:1vw;">
          <div class="card">
            <div class="car-espacio">
              <p class="card-title">PAQUETE CON DATOS Y MONITOREO SOS</p></br>
              <p class="card-contennido">USO DE LA PLATAFORMA WEB Y APP MÓVIL POR 12 MESES</p></br>
              <p class="card-contennido">SIM DE DATOS INCLUIDO</p></br>
              <p class="card-contennido">INCLUYE PLAN DE DATOS POR 12 MESES </p></br>
              <p class="card-contennido">ASISTENCIA EN PROTOCOLO DE REACCIÓN POR EMERGENCIA</p></br>
            </div>
          </div>
        </div>
        <div class="col" style="padding:1vw;">
          <img class="img3-sucursal" src="<?php echo base_url().'/Assets/vultan/servicios/qr.png'; ?>" alt="">
          <p class="p-roboto">Escanea el código, ve el video y conoce cómo activar y contratar nuestros servicios.
        </div>
      </div>
  </div>
</section>

<?php

 footerTienda($data);
?>