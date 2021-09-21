<?php //error_reporting(E_WARNING); ?>
<?php get_header(); ?>
	
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



	<?php if( have_posts() ) { ?>
<div class="imoveis sect1">
	<div class="container">
		<div class="row card3">		

	    <?php $count = 0; ?>

	    <?php while( have_posts() ) : the_post();   $imgCapa = get_field('imagem_do_card'); ?>

	    <?php
	    global $count;

	    $col = 'col-lg-6';

	   
	    $count++;

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





	    <?php endwhile;?>

	    <div class="container">
	    	<?php 
		    echo '<div class="container text-center navs-navigation">';
		    the_posts_pagination( array(
		    	'mid_size'=>3,
			 	'prev_text' => _( '« Anterior'),
			  	'next_text' => _( 'Proxima »'),
			) );
			 echo '</div>';
	    	 ?>
	    </div>



	


					</div>				
				</div>
			</div>	    
	<?php } else{
		echo '<div class="container text-center" style="    margin-top: 19%;">';
		echo '<h2>Não possui empreendimento nessa categoria</h2>';
		echo '</div>';

	}




	 ?>











<?php get_footer(); ?>
