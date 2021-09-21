<?php get_header();

/*
Template Name: Home
*/

 ?>

<main class="banner">
	<?php echo do_shortcode('[rev_slider alias="slide-principal"]'); ?>
</main>

<div class="filtro">
	<div class="container">
		<div class="row text-center">
			<div class="col-lg-3 col-sm-12">
				<a href="/produtos/pronto-para-morar/">
					<button>Pronto para morar</button>
				</a>
			</div>
			<div class="col-lg-3 col-sm-12">
				<a href="/produtos/lancamento/">
					<button> Lançamento</button>
				</a>			
			</div>
			<div class="col-lg-3 col-sm-12">

				<a href="/produtos/em-construcao/">
					<button>Em Obras</button>
				</a>			
			</div>
			<div class="col-lg-3 col-sm-12">
				<a href="/produtos/breve-lancamento/">
					<button>Breve Lançamento</button>
				</a>			
			</div>
		</div>		
	</div>
</div>

<div class="sect1">
	<div class="container-fluid">
		<h2 class="title text-center">Imóveis em destaque</h2>
	</div>
	<div class="container">
		<div class="row">
			    <?php

                

            $listagem_home = new WP_Query(array(
        'post_type' => 'produtos',
        
        'posts_per_page' => 3)
        );
                  

                  if($listagem_home->have_posts()) : 

                    while($listagem_home->have_posts()) : $listagem_home->the_post();

                       $imgCapa = get_field('imagem_do_card');




                ?>  

			<div class="col-lg-4 col-sm-12">
				<a href="<?php the_permalink(); ?>">
					<div class="card2" style="background-image: url(<?php echo $imgCapa['url']; ?>);">
	                  <div class="fundo">
						<div class="categoria">
							
		
							<?php 

								$terms = get_the_terms( $post->ID, 'Status' );
								if ( !empty( $terms ) ){
								    // get the first term
								    $term = array_shift( $terms );
								      echo '<p >' . $term->name . '</p>';
								}

							 ?>						 
						</div>
						<div class="desc">
							<div class="titulo">
								<?php the_title(); ?>
							</div>
							<div class="bairro">
								<?php the_field('bairro_'); ?>
							</div>
							<div class="comando">
								<?php the_field('comando_de_produto'); ?>
							</div>
							<div class="metragem">
								<?php the_field('metragem'); ?>
							</div>
							<div class="localidade">
								<p><i class="fas fa-square"></i> <?php the_field('localidade'); ?> </p>
							</div>
						</div>                  	
	                  </div>
					</div>
				</a>
			</div>
			<?php

                    endwhile;

                  endif;

                
			?>  
	
		</div>
		<div class="botao text-center">
			<a href="/empreedimentos/">
				<button>Conheça mais empreendimentos</button>
			</a>				
		</div>						
	</div>
	
</div>

<section class="sect2">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6" style="padding:0; ">
				<img src="/wp-content/uploads/2021/07/IMAGEM.jpg" class="obra">
			</div>
			<div class="col-lg-6 textos-col">
				<div class="title">
					<p>Entregando qualidade</p>
					<h4><b>Result Construtora</b></h4>					
				</div>
				<div class="text">
					<p>
						Desde 1995, a RESULT vem
incorporando e construindo prédios
residenciais e comerciais de alta
qualidade nos endereços mais
valorizados da cidade, acumulando
70.000 m² já entregues.
					</p>
				</div>
				<div class="botao ">
					<a href="/empresa/">
						<button>Conheça nossa história</button>
					</a>
				</div>
			</div>
		</div>
	</div>

	
</section>
<?php get_footer(); ?>