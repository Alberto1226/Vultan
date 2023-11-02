	<?php
        $catFotter = getCatFooter();
?>

	<!-- FOOTER -->
	<footer>
		<div class="f-movil bg3"></div>
		<div class="f-calce">
            <img class="f-calce-img" src="<?php echo base_url().'/Assets/vultan/encabezados/inferior/calce.png'; ?>" alt="" >
			<div class="container-fluid f-conteiner">
				<div class="row">
					<div class="col-5">
						<div class="row contact">
							<div class="col-2 col-contact">
								<img class="contact-image img-fluid" src="<?php echo base_url().'/Assets/vultan/encabezados/inferior/icono_telefono.png'; ?>" alt="">
							</div>
							<div class="col col-contact">
								<p class="contact-phone">(427) 272 3477</p>
							</div>
						</div>
						<div class="row contact">
							<div class="col-2 col-contact">
								<img class="contact-image img-fluid" src="<?php echo base_url().'/Assets/vultan/encabezados/inferior/icono_whatsapp.png'; ?>" alt="">
							</div>
							<div class="col col-contact">
								<p class="contact-phone">(427) 279 6272</p>
							</div>
						</div>
						<div class="row contact">
							<div class="col-2 col-contact">
								<img class="contact-image img-fluid" src="<?php echo base_url().'/Assets/vultan/encabezados/inferior/icono_mail.png'; ?>" alt="">
							</div>
							<div class="col col-contact">
								<p class="contact-phone">contacto@vultan.com</p>
							</div>
						</div>
					</div>
					<div class="col-1">
						<div class="separator"></div>
					</div>
					<div class="col-3">
						<div class="row">
							<div class="col cwebs">
								<img  class="contact-image" src="<?php echo base_url().'/Assets/vultan/encabezados/inferior/icono_web.png'; ?>" alt="">
							</div>
							<div class="col">
								<p class="contact-phone ">www.vultan.com.mx</p>
							</div>
						</div>
						<div class="row col-contact">
							<div class="col">
								<a href="#"><img class="social-image" src="<?php echo base_url().'/Assets/vultan/encabezados/inferior/icono_fb.png'; ?>" alt=""></a>
							</div>
							<div class="col">
								<a href="#"><img class="social-image" src="<?php echo base_url().'/Assets/vultan/encabezados/inferior/icono_ig.png'; ?>" alt=""></a>
							</div>
							<div class="col">
								<a href="#"><img class="social-image" src="<?php echo base_url().'/Assets/vultan/encabezados/inferior/icono_yt.png'; ?>" alt=""></a>
							</div>
							<div class="col">
								<a href="#"><img class="social-image" src="<?php echo base_url().'/Assets/vultan/encabezados/inferior/icono_tiktok.png'; ?>" alt=""></a>
							</div>
						</div>
					</div>
					<div class="col-3 r-qr">
						<img class="qr" src="<?php echo base_url().'/Assets/vultan/encabezados/inferior/qr.png'; ?>" alt="">
					</div>
				</div>
			</div> 
        </div>
		
		<div class="container-fluid">
			<div class="row f-aviso">
				<div class="col-2">
					<img class="logo-footer img-fluid" src="<?php echo media(); ?>/tienda/images/logo.png" alt="">
				</div>
				<div class="col">
					<p class="avdp">AVISO DE PRIVACIDAD</p>
				</div>
				<div class="col-3">
					<p class="isotech">ISOTECH</p>
				</div>
			</div>
		</div>
	</footer>

	<a href="#" target="_blank" class="whatsapp">
		<img class="whatsapp-icon" 
			src="<?php echo base_url().'/Assets/vultan/encabezados/inferior/whatsapp.png'; ?>" 
			alt="">
	</a>

	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>
	<script>
		const base_url = "<?php echo base_url(); ?>";
		const smony = "<?php echo SMONEY; ?>";
	</script>
<!--===============================================================================================-->	
	<script src="<?php echo media(); ?>/tienda/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo media(); ?>/tienda/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo media(); ?>/tienda/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo media(); ?>/tienda/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo media(); ?>/tienda/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo media(); ?>/tienda/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo media(); ?>/tienda/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo media(); ?>/tienda/vendor/slick/slick.min.js"></script>
	<script src="<?php echo media(); ?>/tienda/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo media(); ?>/tienda/vendor/parallax100/parallax100.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo media(); ?>/tienda/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo media(); ?>/tienda/vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo media(); ?>/tienda/vendor/sweetalert/sweetalert.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo media(); ?>/tienda/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo media(); ?>/js/fontawesome.js"></script>
	<script src="<?php echo media(); ?>/tienda/js/main.js"></script>
	<script src="<?php echo media(); ?>/js/functions_admin.js"></script>
	<script src="<?php echo media(); ?>/js/functions_login.js"></script>
	<script src="<?php echo media(); ?>/tienda/js/functions.js"></script>

</body>
</html>