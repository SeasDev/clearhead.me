<?php
/**
 * @package clearhead
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-header">
		<div class="container clearfix">

			<div class="cols clearfix">
				<div class="sm-col sm-col-8 mt4 m-mt1">
					<p class="date m0 h2 low"><?php the_time('F j, Y'); ?></p>
					<?php the_title( '<h1 class="entry-title mt1 mb1 bold h1">', '</h1>' ); ?>
				</div>
			</div>

			<div class="clearfix foot mt3 mb3">
				<div class="tagged sm-col sm-col-8 md-col-9 low">
					<?php $tags_list = get_the_tag_list( '', __( ' ', 'clearhead' ) );
					if ( $tags_list ) {
						printf( '<span class="tags-links">' . __( '%1$s', 'clearhead' ) . '</span>', $tags_list );
					} ?>
				</div>

				<div class="social sm-show sm-col sm-col-4 md-col-3 right-align low">
					<span>share</span>
					<a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=clearheadme" target="_blank">
						<?php get_template_part( 'svg/twitter.svg' ); ?>
					</a>
					<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
						<?php get_template_part( 'svg/facebook.svg' ); ?>
					</a>
					<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank">
						<?php get_template_part( 'svg/linkedin.svg' ); ?>
					</a>
				</div>
			</div>

		</div><!-- .container -->
	</div><!-- .entry-header -->

	<?php
	if ( has_post_thumbnail() ) : ?>
	<div class="entry-image">
		<div class="container">
			<?php the_post_thumbnail(); ?>
		</div>
	</div>
	<?php endif; ?>

	<div class="entry-meta container author-top mt3 mb3">
		<div class="clearfix">
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 72 ); ?>
			<div class="author-information">
				<h3 class="m0"><a href="<?php echo get_user_meta( get_the_author_meta( 'ID' ), 'hi', true); ?>"><?php the_author(); ?></a></h3>
				<p class="m0 job-title"><?php echo get_user_meta( get_the_author_meta( 'ID' ), 'title', true ); ?></p>
			</div>
			<div class="author-linkedin">
				<?php
				$linkedin = get_user_meta( get_the_author_meta( 'ID' ), 'linked', true );
				if ( $linkedin ) : ?>
					<a class="button" href="<?php echo esc_url( $linkedin ); ?>">say hi to <?php the_author_meta( 'first_name' ); ?> on linkedin</a>
				<?php endif; ?>
			</div>
		</div>
	</div><!-- .entry-meta -->

	<div class="entry-content container">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->

<div class="related-posts">
	<div class="container clearfix">
	<h3>recent posts</h3>
	<?php $others = new WP_Query( array('showposts'=> 3,'post__not_in' => array( $post->ID ) ) ); ?>
	<?php while ( $others->have_posts() ) : $others->the_post(); ?>
		<a href="<?php the_permalink();?>">
		<div class="related-post clearfix">
			<div class="related-image">
				<?php the_post_thumbnail( 'clearhead-archive' ); ?>
			</div>
			<div class="related-content">
				<h3><?php the_title( ); ?></h3>
				<p>by <a href="<?php echo get_user_meta( get_the_author_meta( 'ID' ), 'hi', true); ?>"><?php the_author(); ?></a></p>
			</div>
		</div>
		</a>
	<?php endwhile; wp_reset_query(); ?>
	</div>
</div>

<div class="share">
	<div class="container">

		<div class="activity py3 clearfix">

			<div class="social sm-col sm-col-5 sm-center">
				<a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=clearheadme" target="_blank">
					<?php get_template_part( 'svg/twitter.svg' ); ?>
				</a>
				<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
					<?php get_template_part( 'svg/facebook.svg' ); ?>
				</a>
				<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank">
					<?php get_template_part( 'svg/linkedin.svg' ); ?>
				</a>
			</div>

			<div class="sm-col sm-col-7 right-align sm-show">
				<span class="count"><?php comments_number( 'no comments', 'one comment', '% comments' ); ?></span>
				<a href="#comments" class="button button-blue inline-block">join the conversation</a>
			</div>

		</div>
	</div>
</div>

<div id="comments" class="container narrow clearfix">
	<div class="py4">
	<?php
	// If comments are open or we have at least one comment, load up the comment template
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;
	?>
	</div>
</div>
