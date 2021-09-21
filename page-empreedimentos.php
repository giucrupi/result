<?php get_header();?>
<div class="emp">
	<section class="imoveis" style="margin-top: 5%;">
		<div class="container text-center">
			<h2 class="titulo-emp">IMÓVEIS a venda</h2>
			<p>Encontre aqui o seu sonho ou novo investimento. Temos o seu apartamento.</p>
		</div>
	</section>
	<div class="filtro" >
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

</div>
<div class="sect1">
	<div class="container">
		<div class="row">
			    <?php

                

            $listagem_home = new WP_Query(array(
        'post_type' => 'produtos',
        
        'posts_per_page' => -1)
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
					
	</div>	
</div>
<?php get_footer(); ?>