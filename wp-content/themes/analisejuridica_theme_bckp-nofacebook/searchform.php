<div class="search_wpr">
	<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<div class="form_div">
			<input type="text" class="txt" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="BUSCAR" />
			<input type="submit" class="btn" id="searchsubmit" value="op" />
		</div>
	</form>
</div>	