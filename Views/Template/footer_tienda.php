	<?php 
		$catFotter = getCatFooter();
	 ?>
	<!-- Footer -->
	<footer class="bg3 p-t-0 p-b-0">
		<div class="footer-container">
            <div class="contact-section">
				<div class="contact-row">
					<img class="contact-image" src="<?= base_url().'/Assets/vultan/encabezados/inferior/icono_telefono.png'?>" alt="">
					<h2 class="contact-phone">(427) 272 3477</h2>
				</div>
				<div class="contact-row">
					<img src="<?= base_url().'/Assets/vultan/encabezados/inferior/icono_whatsapp.png'?>" alt="">
					<h2 class="contact-phone">(427) 279 6272</h2>
				</div>
				<div class="contact-row">
					<img src="<?= base_url().'/Assets/vultan/encabezados/inferior/icono_mail.png'?>" alt="">
					<h2 class="contact-phone">contacto@vultan.com</h2>
				</div>
                
            </div>
            <div class="separator"></div>
            <div class="social-icons-section">
			<div class="container">
				<div class="row">
					<div class="col-sm">
											
					<div class="social-column">
					<div class="contact-row">
					<img src="<?= base_url().'/Assets/vultan/encabezados/inferior/icono_web.png'?>" alt="">
					<h2 class="contact-phone">www.vultan.com.mx</h2>
					</div>
						<ul class="social-icons">
							<li><a href="#"><img src="<?= base_url().'/Assets/vultan/encabezados/inferior/icono_fb.png'?>" alt=""></a></li>
							<li><a href="#"><img src="<?= base_url().'/Assets/vultan/encabezados/inferior/icono_ig.png'?>" alt=""></a></li>
							<li><a href="#"><img src="<?= base_url().'/Assets/vultan/encabezados/inferior/icono_yt.png'?>" alt=""></a></li>
							<li><a href="#"><img src="<?= base_url().'/Assets/vultan/encabezados/inferior/icono_tiktok.png'?>" alt=""></a></li>
						</ul>
					</div>
					</div>
					<div class="col-sm">
					<div class="qr-column">
						<img src="<?= base_url().'/Assets/vultan/encabezados/inferior/qr.png'?>" alt="">
					</div>
					</div>
					
				</div>
				</div>
				
				
			</div>

        </div>
	</footer>
	<div class="aviso">
	<div class="containeraviso">
		<div class="row">
			<div class="col-sm">
			<img src="<?= media() ?>/tienda/images/logo.png" alt="" class="logoFooter">
			</div>
			<div class="col-sm">
			<H4 class="avdp">AVISO DE PRIVACIDAD</H4>
			</div>
			<div class="col-sm">
			<h1 class="isotech">ISOTECH</H1>
			</div>
		</div>
		</div>
	</div>
	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>
	<script>
	    const base_url = "<?= base_url(); ?>";
		const smony = "<?= SMONEY; ?>";
	</script>
<!--===============================================================================================-->	
	<script src="<?= media() ?>/tienda/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= media() ?>/tienda/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= media() ?>/tienda/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/slick/slick.min.js"></script>
	<script src="<?= media() ?>/tienda/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/parallax100/parallax100.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/sweetalert/sweetalert.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media();?>/js/fontawesome.js"></script>
	<script src="<?= media() ?>/tienda/js/main.js"></script>
	<script src="<?= media();?>/js/functions_admin.js"></script>
	<script src="<?= media() ?>/js/functions_login.js"></script>
	<script src="<?= media() ?>/tienda/js/functions.js"></script>

</body>
</html>