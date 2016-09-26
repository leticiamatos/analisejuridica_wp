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
					</div>
				</div>
			</footer>

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
