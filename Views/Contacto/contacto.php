<?php
headerTienda($data);
$banner = $data['page']['portada'];
$idpagina = $data['page']['idpost'];

?>
<script>
    document.querySelector('header').classList.add('header-v4');
 </script>
<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-t-40" style="background-image: url(<?php echo $banner; ?>);">
    <h1 class="t-opti txt-center">
        CONTACTO
    </h1>
</section>

<?php
   if (viewPage($idpagina)) {
       ?>
<!-- Content page -->
<section class="bg0 p-t-50 p-b-116">
    <div class="container">
        <div class="flex-w flex-tr">
            <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                <form id="frmContacto">
                    <h4 class="mtext-105 cl2 txt-center p-b-30">
                        Enviar un mensaje
                    </h4>

                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" id="nombreContacto" name="nombreContacto" placeholder="Nombre completo">
                        <img class="how-pos4 pointer-none" src="<?php echo media(); ?>/tienda/images/icons/icon-name.png" alt="ICON" style="width: 28px;">
                    </div>

                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" id="emailContacto" name="emailContacto" placeholder="Correo electrónico">
                        <img class="how-pos4 pointer-none" src="<?php echo media(); ?>/tienda/images/icons/icon-email.png" alt="ICON">
                    </div>

                    <div class="bor8 m-b-30">
                        <textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" id="mensaje" name="mensaje" placeholder="Cual es tu pregunta o mensaje?"></textarea>
                    </div>

                    <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                        Eviar
                    </button>
                </form>
            </div>

            <div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
				<img class="size-217" src="<?php echo base_url().'/Assets/images/Vultan_Logo.png'; ?>" alt="" >
            </div>
        </div>
    </div>
</section>  
<?php
              /* echo $data['page']['contenido']; */
   } else {
       ?>
<div>
    <div class="container-fluid py-5 text-center" >
        <img src="<?php echo media(); ?>/images/construction.png" alt="En construcción">
        <h3>Estamos trabajando para usted.</h3>
    </div>
</div>
<?php
   }
   footerTienda($data);
?>

