<?php get_header();?>
<main>
	<?php echo do_shortcode('[rev_slider alias="slide-faleconosco"]'); ?>
</main>
<section class="fale-conosco">
	<div class="container">
		
		<h4 class="text-center title-contato">Para entrar em contato conosco, preencha o formulário
e envie sua mensagem. Retornaremos o mais rápido possível.</h4>		
		<?php echo do_shortcode('[contact-form-7 id="102" title="Fale conosco"]'); ?>
	</div>
</section>
<section class="mapa">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-mapa">
				<h2>VENHA NOS VISITAR</h2>
				<p>Rua Santa Cruz, 722 - CJ 611<br>
				Vila Mariana<br>
				CEP 04122-000 <br>
				São Paulo/SP<p>

				<p>(11) 3168-3933
				result@rresult.com.br</p>
				
			</div>
			<div class="col-lg-6" style="padding: 0;">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.1848520218864!2d-46.63181068458663!3d-23.597702584664844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5bccf4971f35%3A0xb0000f4e35cb85c!2sR.%20Santa%20Cruz%2C%20722%20-%20Vila%20Mariana%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2004122-000!5e0!3m2!1spt-BR!2sbr!4v1625519579475!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>