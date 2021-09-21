<?php get_header();

$imgBanner = get_field('imagem_do_banner');
$imgLogo = get_field('logo');
$imFachada = get_field('imagem_da_fachada');
$imageBairro = get_field('imagem_de_localizacao');
?>
<?php 

$section1 = get_field('imagem_do_banner', false);
			if (!empty($section1)) {
 ?>
<section class="banner-prod" style="background-image:
    linear-gradient(to bottom, rgb(0 0 0 / 70%), rgba(0 0 0 / 70%)),
    url(<?php echo $imgBanner['url']; ?>);">

    <div class="container">
    	<img src="<?php echo $imgLogo['url']; ?>" class="logo-prod">
    </div>
	
</section>
<?php } ?>

<section class="sect1-prod">
	<div class="container">
		<div class="row">

	<?php 

$section2 = get_field('imagem_da_fachada', false);
			if (!empty($section2)) {
 ?>		
			
			<div class="col-lg-6 col-sm-12 col-left-prod">
			<?php 

				$terms = get_the_terms( $post->ID, 'Status' );
				if ( !empty( $terms ) ){
				    // get the first term
				    $term = array_shift( $terms );
				      echo '<h4 class="sub-title-prod">' . $term->name . '</h4>';
				}

			?>
			<h2 class="title-prod"> <?php the_title(); ?> </h2>	

			<div class="infos">
			<?php 

			$comando = get_field('comando_de_produto', false);
						if (!empty($comando)) {
			 ?>	
				<p class="text-info-prod">
					<img src="/wp-content/uploads/2021/07/dorms.png" class="icon-prod"> <?php the_field('comando_de_produto'); ?>
				</p>
			<?php } ?>
			<?php 

			$metragem = get_field('metragem', false);
						if (!empty($metragem)) {
			 ?>					
				<p class="text-info-prod">
					<img src="/wp-content/uploads/2021/07/icone-empreendimento-tamanho.png" class="icon-prod"> <?php the_field('metragem'); ?>
				</p>
			<?php } ?>	
			<?php 

			$vagas = get_field('vagas', false);
						if (!empty($vagas)) {
			 ?>				
				<p class="text-info-prod">
					<img src="/wp-content/uploads/2021/07/icone-garagem.png" class="icon-prod"> <?php the_field('vagas'); ?>
				</p>
			<?php } ?>						
			</div>
			<div class="text-conceito-prod">
				<?php the_field('texto_conceito'); ?>
			</div>
			<div class="botoes ">
				<button class="btn-prod">Corretor online</button>
				<button class="btn-prod">Peça mais informações</button>
			</div>

			</div>
	<?php } ?>		
			<div class="col-lg-6 col-sm-12">
				<div class="casa-verde">
					<?php
					if( get_field('casa-verde') ) { ?>
					    <img src="/wp-content/uploads/2021/07/casa-verde.png" class="casa-verde-prod">
					<?php } ?>
					<a href="<?php echo $imFachada['url'];  ?>" data-fancybox="">
					<img src="<?php echo $imFachada['url'];  ?>"  class="fachada-prod">		
					</a>			
				</div>		
			</div>
		</div>
	</div>			
</section>

<?php 

	$galeria = get_field('galeria_de_imagens', false);
				if (!empty($galeria)) {
?>	

<section class="sect2-prod">
	<div class="container">
		<h2 class="title text-center">Galeria de imagens</h2>

		<div class="galeria-produto">
			 <?php 

			  $images3 = get_field('galeria_de_imagens');

			  if( $images3 ): ?>

			  <?php foreach( $images3 as $image3 ): ?>
				<div class="item">
					<a href="<?php echo $image3['url']; ?>" data-fancybox="img">
						<div class="item-inner" style="background-image: url(<?php echo $image3['url']; ?>);">
							
						</div>
					</a>
				</div>

				<?php endforeach; ?>
			  
			<?php endif; ?>  			
		</div>
	</div>
</section>
<?php } ?>
<?php 

	$galeria = get_field('itens_de_lazer', false);
				if (!empty($galeria)) {
?>	
<section class="sect3-prod">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-left">
				<img src="/wp-content/uploads/2021/07/IMAGEM-LAZER-HUMANIZADO.png" class="img-lazer">
			</div>
			<div class="col-lg-8 text-center col-lazer-prod">
				<h2 class="title text-center">itens de lazer E INFRAESTRUTURA</h2>
				<p class="item-lazer"><?php the_field('itens_de_lazer'); ?></p>
			</div>
		</div>
	
	</div>
</section>
<?php } ?>
<?php 

	$galeriaP = get_field('galeria_de_plantas', false);
				if (!empty($galeriaP)) {
?>	
<section class="sect4-prod">
	<h2 class="title text-center">plantas</h2>
	<div class="container">

			<div class="galeria-produto">
				 <?php 

				  $images4 = get_field('galeria_de_plantas');

				  if( $images4 ): ?>

				  <?php foreach( $images4 as $image4 ): ?>
					<div class="item">
						<a href="<?php echo $image4['url']; ?>" data-fancybox="img">
							<div class="item-inner" style="background-image: url(<?php echo $image4['url']; ?>);">
								
							</div>
						</a>
					</div>

					<?php endforeach; ?>
				  
				<?php endif; ?>  			
			</div>		
	</div>	
</section>
<?php } ?>
<?php 

	$textLocal = get_field('texto_de_localizacao', false);
				if (!empty($textLocal)) {
?>	
<section class="sect5-prod">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 text-center col-left">
				<h2 class="title text-center">Localização</h2>
				<div class="text-local-prod">
					<?php the_field('texto_de_localizacao'); ?>
				</div>
			</div>
			<div class="col-lg-5 col-right" style="background-image: url(<?php echo $imageBairro['url']; ?>);">
				
			</div>
		</div>
	</div>
</section>
<?php } ?>
<section class="sect6-prod text-center">
	<div class="container-fluid endereco">
		<h4 style="margin: 0;"><?php the_field('endereco'); ?></h4>
	</div>
	<?php the_field('mapa_incorporado'); ?>
</section>
<section class="sect7-prod">
	<div class="container text-center">
		<h2 class="title text-center">Receba mais informações:</h2>
		<p>Tire suas dúvidas sobre este empreendimentos, consulte preço ou financiamento. Fale conosco!</p>
	</div>
	<div class="container">
		<?php echo do_shortcode('[contact-form-7 id="85" title="Formulário de contato 1"]'); ?>
		<p class="text-center" style="margin-top: 3%;"><small> <?php the_field('texto_legal'); ?> 	</small></p>
	</div>
</section>
<?php get_footer(); ?>