<?php
headerTienda($data);
// $arrProductos = $data['productos'];
?>


<section class="bg-img1 txt-center p-lr-15 p-tb-20" style="background-image: url(<?php echo $banner; ?>);">
	<div class="container-fluid" style="padding:5vw;">
		<div class="row">
			<div class="col">
				<div class="row" style="padding:1vw;">
					<p class="t-opti-c">DESCARGA DE NUESTRA APLICACIÓN MÓVIL<p>
				</div>
				<div class="row">
					<div class="col">
						<img src="<?php echo base_url().'/Assets/vultan/descargas/QRANDOID.png'; ?>" alt="" style="width:60%; padding-top:2vw;">
					</div>
					<div class="col">
						<img src="<?php echo base_url().'/Assets/vultan/descargas/QRIOS.png'; ?>" alt="" style="width:60%; padding-top:2vw;">
					</div>
				</div>
				<div class="row">
					<div class="col">
						<img src="<?php echo base_url().'/Assets/vultan/descargas/PLAYSTORE.png'; ?>" alt="" style="width:60%; padding-top:2vw;">
					</div>
					<div class="col">
						<img src="<?php echo base_url().'/Assets/vultan/descargas/APPSTORE.png'; ?>" alt="" style="width:60%; padding-top:2vw;">
					</div>
				</div>
			</div>
			<div class="col-4">
				<img src="<?php echo base_url().'/Assets/vultan/descargas/IMG.png'; ?>" class="imgmpvil" alt="" >
			</div>
		</div>
		<div class="row" style="padding:5vw;">
			<p class="t-opti-c">TUTORIALES<p>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm">
				<div class="row videotuto" style="padding:1vw;">
					<div class="col-xs-12 col-md-12" style="">
						<img src="<?php echo base_url().'/Assets/vultan/descargas/icono_play.png'; ?>" alt="" >
					</div>
				</div>
			</div>
			<div class="col-sm">
				<div class="row videotuto" style="padding:1vw;">
					<div class="col-xs-12 col-md-12" style="">
						<img src="<?php echo base_url().'/Assets/vultan/descargas/icono_play.png'; ?>" alt="" >
					</div>
				</div>
			</div>
			<div class="col-sm">
				<div class="row videotuto" style="padding:1vw;">
					<div class="col-xs-12 col-md-12" style="">
						<img src="<?php echo base_url().'/Assets/vultan/descargas/icono_play.png'; ?>" alt="" >
					</div>	
				</div>
			</div>
		</div>
	</div>

	<div class="container" style="margin-top:2vw;">
		<div class="row">
			<div class="col-sm">
				<div class="row videotuto" style="padding:1vw;">
					<div class="col-xs-12 col-md-12" style="">
						<img src="<?php echo base_url().'/Assets/vultan/descargas/icono_play.png'; ?>" alt="" >
					</div>						
				</div>
			</div>
			<div class="col-sm">
				<div class="row videotuto" style="padding:1vw;">
					<div class="col-xs-12 col-md-12" style="">
						<img src="<?php echo base_url().'/Assets/vultan/descargas/icono_play.png'; ?>" alt="" >
					</div>
				</div>
			</div>
			<div class="col-sm">
				<div class="row videotuto" style="padding:1vw;">
					<div class="col-xs-12 col-md-12" style="">
						<img src="<?php echo base_url().'/Assets/vultan/descargas/icono_play.png'; ?>" alt="" >
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
   footerTienda($data);
?>