		<section class="block_wpr prefooter">
			<div class="block_cntt">
				<!-- Advertising widget area 07 -->
			  	<?php get_template_part('advertising', 'area7'); ?>
				
				<div class="col1-3">
					<h3 class="block_title">Últimas Publicações</h3>
					<?php get_template_part('prefooter', 'tabs01'); ?>
				</div>
				<div class="col1-3">
					<h3 class="block_title">Mais Lidas</h3>
					<?php get_template_part('prefooter', 'tabs02'); ?>
				</div>


				<div class="col1-3">
					<?php if (is_page('fale-conosco' )): ?>
						<div class="facebook_page">
							<div class="fb-page" data-href="https://www.facebook.com/analisejuridica/?fref=ts" data-tabs="timeline" data-width="403" data-height="405" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/analisejuridica/?fref=ts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/analisejuridica/?fref=ts">Análise Jurídica</a></blockquote></div>
						</div>
					<?php else: ?>
						<div class="contactform_wpr">
							<h4 class="col_title">Fale Conosco</h4>
							<div class="contactform_cntt sForm">
								<?php echo do_shortcode('[contact-form-7 id="3996" title="Fale Conosco - Rodapé"]' ); ?>
								<!--form>
									<div class="form_div">
										<input type="text" class="txt" placeholder="Nome:" />
									</div>
									<div class="form_div">
										<input type="text" class="txt" placeholder="E-mail:" />
									</div>
									<div class="form_div">
										<input type="text" class="txt" placeholder="Assunto:" />
									</div>
									<div class="form_div">
										<textarea class="txt" placeholder="Mensagem:"></textarea>
									</div>
									<div class="buttons">
										<div class="captcha">		
										</div>
										<input type="button" class="btn" value="Enviar" />
									</div>
							</form-->
<!--form>
<div class="form_div">
	[text nome class:txt placeholder "Nome:"]
</div>
<div class="form_div">
	[text* email class:txt placeholder "E-mail:"]
</div>
<div class="form_div">
	[text subject class:txt placeholder "Assunto:"]
</div>
<div class="form_div">
	[textarea* msg class:txt placeholder "Mensagem:"]
</div>
<div class="buttons">
	<div class="captcha">		
	</div>
	[submit class:btn "Enviar"]
</div>
<div class="g-recaptcha" data-sitekey="6LedBgsUAAAAAEWcMoUZuhKBLkVW8JjCVCKYqgSU"></div>
</form-->
						</div>
					</div>
				<?php endif; ?>
				</div>

				<span class="clear"></span>
	
				<!-- Advertising widget area 08 -->
			  	<?php get_template_part('advertising', 'area8'); ?>
				
			</div>
		</section>
