<?php 
if (isset($_GET['asearch'])) {
		get_template_part('search-staff');
		return;
	}
?>
<?php get_header(); ?>
	<div class="page-content">
		<div class="container">
			<main>
				<div class='grid-row' id="header-404">
					<div id='title-404'>
						<?php _e("¡página no encontrada!", THEME_SLUG); ?>
					</div>
				</div>
				<div class='grid-row' id="block-404">
					<div id="">
					</div>
					<div id="block-404-icon">
					</div>
				</div>
				<div class='grid-row' id="text-404">
					<div class='sel'>
					<?php _e("Parece que la página que está buscando no existe", THEME_SLUG); ?>
					</div>
					<?php _e("", THEME_SLUG); ?>
				</div>
				<div class='grid-row' id="button-404">
					<a class="cws_button arrow" href="<?php echo home_url(); ?>">
					<?php _e("volver a la página principal", THEME_SLUG); ?>
					</a>
				</div>
			</main>
		</div>
	</div>
<?php get_footer(); ?>