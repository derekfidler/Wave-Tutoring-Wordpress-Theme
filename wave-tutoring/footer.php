		<div id="push"></div>
	</div>
		<footer role="content-info" class="source-org vcard copyright full clearfix">
			<div class="grid">
				<small class="grid_3">&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></small>
				<nav id="footer" class="grid_11 text-right align-right">
					<?php wp_nav_menu( array("theme_location" => "footer-menu") ); ?>
				</nav>

			</div>
		</footer>

	</div>

	<script type="text/javascript">
	$(document).ready(function(){
		$('body:not(.page-id-18) div.entry h4').eq(0).addClass('current');
		$('div.text').eq(0).show();
	});

	$('body:not(.page-id-18) div.entry h4').click(function(){
		var $this = $(this);
		var titles =  $('div.entry h4');
		var entries = $('div.entry div.text');
		var itemNumber = titles.index($this);
		entries.eq(itemNumber).fadeIn().siblings(".text").hide();
	});

	</script>

	<?php wp_footer(); ?>
	
</body>

</html>