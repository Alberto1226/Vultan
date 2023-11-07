<?php
headerTienda($data);
$arrProductos = $data['productos'];
?>
<section class="bg-img1 txt-center p-lr-15 p-tb-20" style="background-image: url(<?php echo $banner; ?>);">
	<p class="t-opti" style="padding-top:5vw;">NUESTROS EQUIPOS</p>
	<div class="container-fluid" style="padding:5vw;">
		<div class="row r-sucursales">
			<div class="col" style="padding:2vw;">
				<p class="p-roboto">Te ofrecemos nuestros equipos con más de 8 años en el mercado con la calidad de garantía de nuestra marca PUMA Security. Contamos con equipos compatibles para diferentes tipos de unidades, así como equipos especializados en tipo de requerimiento.</p>
				<p class="p-roboto">Equipos con tecnología Puma:</p>
				<p class="p-roboto" style="margin-left: 15px; color:#B78E49;">⊛ Asistencia personal y portátiles.                                 </p>
				<p class="p-roboto" style="margin-left: 15px; color:#B78E49;">⊛ Autos, Camionetas y Camiones .                                </p>
				<p class="p-roboto" style="margin-left: 15px; color:#B78E49;">⊛ Tecnologías autónomas de energía solar.</p> 
				<p class="p-roboto" style="margin-left: 15px; color:#B78E49;">⊛ Motocicletas con protección anti agua.</p> 
				<p class="p-roboto" style="margin-left: 15px; color:#B78E49;">⊛ Cámaras frente y cabina.</p> 
				<p class="p-roboto" style="margin-left: 15px; color:#B78E49;">⊛ Autónomos e inteligentes con protocolo anti jamming y de recuperación.</p>
			</div>
			<div class="col" style="padding:2vw;">
				<img class="drop" src="<?php echo base_url().'/Assets/vultan/equipos/icono_puma.png'; ?>" alt="">
			</div>
		</div>
		<div class="row" style="padding:2vw;">
			<p class="p-roboto">Puedes contar con elementos complementarios como lo es un Botón de Pánico Físico, micrófono para monitoreo abierto de audio y sensores adicionales que complementan la gestión y administración de tus unidades.</p>
			<p class="p-roboto">Nuestros equipo cuentan con un año de garantía; Ofrecemos guías de uso e instalación y un equipo de soporte para apoyarte.</p>
		</div>
	</div>

	<div class="container-fluid" style="padding:5vw;">
		<div class="row r-sucursales">
			<div class="col" style="padding:2vw;">
				<div class="row">
					<div class="col t-img">
						<img src="<?php echo base_url().'/Assets/vultan/equipos/icono_12meses.png'; ?>" alt="" style="width:100%;">
					</div>
					<div class="col t-img">
						<p style="text-align: left; font-size:20px; font-weight: bold; margin-top: 2vw;">Plataforma de Monitoreo: Web, Android y iOS</p><br/>
					</div>
				</div>
			</div>
			<div class="col" style="padding:2vw;">
				<div class="row">						
					<div class="col t-img">
						<img src="<?php echo base_url().'/Assets/vultan/equipos/icono_chip.png'; ?>" alt="" style="width:100%;">
					</div>
					<div class="col t-img">
						<p style="text-align: left; font-size:20px; font-weight: bold; margin-top: 2vw;">Incluye chip TELCEL</p><br/>							
					</div>
				</div>
			</div>
			<div class="col" style="padding:2vw;">
				<div class="row">
					<div class="col t-img">
						<img src="<?php echo base_url().'/Assets/vultan/equipos/icono_GPS.png'; ?>" alt="" style="width:100%;">
					</div>
					<div class="col t-img">
						<p style="text-align: left; font-size:20px; font-weight: bold; margin-top: 2vw;">GPS Marca PUMA Security</p><br/>
					</div>
				</div>
			</div>
		</div>
		<div class="row r-sucursales">
			<div class="col" style="padding:2vw;">
				<div class="row">
					<div class="col t-img">
						<img src="<?php echo base_url().'/Assets/vultan/equipos/icono_microfono.png'; ?>" alt="" style="width:100%;">
					</div>
					<div class="col t-img">
						<p style="text-align: left; font-size:20px; font-weight: bold; margin-top: 2vw;">Monitoreo con Micrófono</p><br/>	
					</div>
				</div>
			</div>
			<div class="col" style="padding:2vw;">
				<div class="row">
					<div class="col t-img">
						<img src="<?php echo base_url().'/Assets/vultan/equipos/icono_historial.png'; ?>" alt="" style="width:100%;">
					</div>
					<div class="col t-img">
						<p style="text-align: left; font-size:20px; font-weight: bold; margin-top: 2vw;">Historial de Ubicación 30 Días (Expandible a 90 Días)</p><br/>
					</div>
				</div>
			</div>
			<div class="col" style="padding:2vw;">
				<div class="row">
					<div class="col t-img">
						<img src="<?php echo base_url().'/Assets/vultan/equipos/icono_alertas.png'; ?>" alt="" style="width:100%;">
					</div>
					<div class="col t-img">
						<p style="text-align: left; font-size:20px; font-weight: bold; margin-top: 2vw;">Alertas de Velocidad, Desconexión de Batería y Más</p><br/>
					</div>
				</div>
			</div>
		</div>
		<div class="row r-sucursales">
			<div class="col" style="padding:2vw;">
				<div class="row">
					<div class="col t-img">
						<img src="<?php echo base_url().'/Assets/vultan/equipos/iconos_SOS.png'; ?>" alt="" style="width:100%;">
					</div>
					<div class="col t-img">
						<p style="text-align: left; font-size:20px; font-weight: bold; margin-top: 2vw;">Botón de Pánico</p><br/>
					</div>
				</div>
			</div>
			<div class="col" style="padding:2vw;">
				<div class="row">
					<div class="col t-img">
						<img src="<?php echo base_url().'/Assets/vultan/equipos/iconos_autos.png'; ?>" alt="" style="width:100%;">
					</div>
					<div class="col t-img">
						<p style="text-align: left; font-size:20px; font-weight: bold; margin-top: 2vw;">Compatible con:Camiones, Autos, Motos, etc.</p>
					</div>
				</div>
			</div>
			<div class="col" style="padding:2vw;">
				<div class="row">
					<div class="col t-img">
						<img src="<?php echo base_url().'/Assets/vultan/equipos/icono_paro.png'; ?>" alt="" style="width:100%;">
					</div>
					<div class="col t-img">
						<p style="text-align: left; font-size:20px; font-weight: bold; margin-top: 2vw;">Paro de Motor</p>
					</div>
				</div>
			</div>
		</div>		
		<div class="row">
			<div class="col-4" style="padding:2vw;">
				<div class="row">
					<div class="col">
						<img src="<?php echo base_url().'/Assets/vultan/equipos/icono_geocercas.png'; ?>" alt="" style="width:100%; align-items: center;">
					</div>
					<div class="col">
						<p style="text-align: left; font-size:16px; font-weight: bold; margin-top: 2vw;">Geocercas y Georutas</p>
					</div>
				</div>
			</div>
			<div class="col cajacont t-imgs">
				<p style="font-size:20px; font-weight: bold; margin-top: 3vw;">Si tu ya cuentas con equipos y necesitas una plataforma confiable y con soporte 24/7 somos tu mejor opción, contactanos.</p>
			</div>
		</div>
	</div>



</section>

	
	<!-- Product -->
	<div class="bg0 m-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<h3><?php echo $data['page_title']; ?></h3>
				</div>

				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
						&nbsp;&nbsp;
						<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
						<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						 Categoría &nbsp;
					</div>
				</div>
				<!-- Filter -->
				<div class="dis-none panel-filter w-full p-t-10">
					<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
						<div class="filter-col4 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Categorías
							</div>

							<div class="flex-w p-t-4 m-r--5">
								<?php
                                   if (count($data['categorias']) > 0) {
                                       foreach ($data['categorias'] as $categoria) {
                                           ?>
								<a href="<?php echo base_url(); ?>/tienda/categoria/<?php echo $categoria['idcategoria'].'/'.$categoria['ruta']; ?>" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									<?php echo $categoria['nombre']; ?> <span> &nbsp;(<?php echo $categoria['cantidad']; ?>)</span>
								</a>
								<?php
                                       }
                                   }
?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row isotope-grid">
			<?php
            if (count($arrProductos) > 0) {
                for ($p = 0; $p < count($arrProductos); ++$p) {
                    $ruta = $arrProductos[$p]['ruta'];
                    if (count($arrProductos[$p]['images']) > 0) {
                        $portada = $arrProductos[$p]['images'][0]['url_image'];
                    } else {
                        $portada = media().'/images/uploads/product.png';
                    }
                    ?>
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="<?php echo $portada; ?>" alt="<?php echo $arrProductos[$p]['nombre']; ?>">
							<a href="<?php echo base_url().'/tienda/producto/'.$arrProductos[$p]['idproducto'].'/'.$ruta; ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Ver producto
							</a>
						</div>
						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="<?php echo base_url().'/tienda/producto/'.$arrProductos[$p]['idproducto'].'/'.$ruta; ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?php echo $arrProductos[$p]['nombre']; ?>
								</a>
								<span class="stext-105 cl3">
									<?php echo SMONEY.formatMoney($arrProductos[$p]['precio']); ?>
								</span>
							</div>
							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#"
								 id="<?php echo openssl_encrypt($arrProductos[$p]['idproducto'], METHODENCRIPT, KEY); ?>"
								 class="btn-addwish-b2 dis-block pos-relative js-addwish-b2 js-addcart-detail
								 icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11
								 ">
									<i class="zmdi zmdi-shopping-cart"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			<?php }
                } else {
                    ?>
			 <p>No hay productos para mostrar <a href="<?php echo base_url(); ?>/tienda"> Ver productos</a></p>
			<?php } ?>

			</div>

			<!-- Load more -->
			<?php
                       if (count($data['productos']) > 0) {
                           $prevPagina = $data['pagina'] - 1;
                           $nextPagina = $data['pagina'] + 1;
                           ?>
			<div class="flex-c-m flex-w w-full p-t-45">
			<?php if ($data['pagina'] > 1) { ?>
				<a href="<?php echo base_url(); ?>/tienda/page/<?php echo $prevPagina; ?>" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04"> <i class="fas fa-chevron-left"></i> &nbsp; Anterior </a>&nbsp;&nbsp;
			<?php } ?>
			<?php if ($data['pagina'] != $data['total_paginas']) { ?>
				<a href="<?php echo base_url(); ?>/tienda/page/<?php echo $nextPagina; ?>" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04"> Siguiente &nbsp; <i class="fas fa-chevron-right"></i> </a>
			<?php } ?>
			</div>
			<?php
                       }
?>
		</div>
	</div>
<?php
    footerTienda($data);
?>