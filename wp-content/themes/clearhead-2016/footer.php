<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clearhead-2016
 */

?>

	</div><!-- #content -->

	<footer role="contentinfo" id="contact">
		<div class="main-footer">
			<div class="container">
				<div class="contact">
					<h3 class="mt0 mb0">need to talk?</h3>
					<!--[if lte IE 8]>
					<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
					<![endif]-->
					<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
					<script>
					  hbspt.forms.create({
					    css: '',
					    portalId: '2142966',
					    formId: 'd0a43d12-9761-4388-a142-1c3cd3171fed'
					  });
					</script>
					<div class="contact-info">
						<div>
							<h3>Austin Office</h3>
							<p>
								3601 S. Congress Ave.
								<br>
								Bldg. C302
								<br>
								Austin, TX 78704
								<br>
								United States
							</p>
						</div>
						<div>
							<h3>London Office</h3>
							<p>
								14 Grays Inn Road
								<br>
								London
								<br>
								WC1X 8HN
								<br>
								United Kingdom
							</p>
						</div>
					</div>
				</div>
				<div class="info cap-3c-2g">
					<h2>Clearhead</h2>
					<h5>The Digital Optimization Company</h5>
					<nav role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'small list-reset mt2 ml0 dual-m' ) ); ?>
					</nav>

					<div class="post-embed">
						<h3>Recently Published</h3>

						<?php $recently = new WP_Query(array('showposts'=> 1,'post__not_in' => array($post->ID))); ?>
						<?php while ($recently->have_posts()) : $recently->the_post(); ?>

						<p>“<?php echo clearhead_twitter_excerpt( ); ?>”</p>
						<a href="<?php the_permalink();?>">Read Post</a>

						<?php endwhile; wp_reset_query(); ?>

					</div>
					<div class="info-action">
						<h3>Follow Us</h3>
						<a href="https://twitter.com/clearheadme" class="button button-reduced button-twitter">
							<div class="">
								<figure></figure>
								<span>@clearheadme</span>
							</div>
						</a>
					</div>
					<div class="info-action">
						<h3>Think you’d fit in?</h3>
						<a href="http://clearhead.theresumator.com/apply" class="button button-reduced">Apply Here</a>
					</div>
				</div>
			</div>
		</div>
		<div class="sub-footer">
			<div class="container">
				<div class="closing-text">
					<span class="dn_n640">Simple, sustainable optimization solutions. </span>Designed by Humans in Austin, TX.
				</div>
				<div class="site-info">
					&copy; <?php echo date("Y") ?> Clearhead
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
