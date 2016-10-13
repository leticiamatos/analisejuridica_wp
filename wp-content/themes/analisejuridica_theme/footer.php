			<?php get_template_part('prefooter'); ?>
			
			<footer class="block_wpr">
				<div class="borders">
					<p class="border01"></p>
					<p class="border02"></p>
					<p class="border03"></p>
					<p class="border04"></p>
				</div>
				<div class="block_cntt">
					<div class="col1-3">
					  	<h1 class="logo">
							<a href="<?php echo home_url(); ?>" title="Análise Jurídica" alt="Análise Jurídica - identidade visual">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo-analisejuridica.png" />
						  		
							</a>
						</h1>
					</div>
					<div class="col2-3">
						<nav class="menu_footer">
							<?php 
								wp_nav_menu( $args = array('menu' => 'rodape') );
							?>
						</nav>
						<div class="copyright">
							<span>&copy; copyright Análise Jurídica <?php echo date('Y'); ?></span>
							<span>Todos os direitos reservados</span>
							<nav class="menu_copyright">
								<?php 
									wp_nav_menu( $args = array('menu' => 'copyright') );
								?>
							</nav>
						</div>
						<div class="layerup">
							<a href="http://layerup.com.br/" target="_blank" title="designed by Layer Up" alt="Layer Up - identidade visual">
								<img src="<?php echo get_template_directory_uri(); ?>/img/footer-layerup.png" />
						  		</a>
						</div>
					</div>
					<span class="clear"></span>
				</div>
			</footer>

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-84994024-1', 'auto');
		ga('send', 'pageview');

		</script>

	</body>
</html>
