<article <?php hybrid_attr( 'post' ); ?>>

	<div class="entry-wrap">

		<div class="entry-header">

			<?php the_title( '<h2 ' . hybrid_get_attr( 'entry-title' ) . '><a href="' . get_permalink() . '" rel="bookmark" itemprop="url">', '</a></h2>' ); ?>

			<div class="entry-byline">
				<span <?php hybrid_attr( 'entry-author' ); ?>><?php the_author_posts_link(); ?></span>
				<time <?php hybrid_attr( 'entry-published' ); ?>><?php echo get_the_date(); ?></time>
				<?php comments_popup_link( number_format_i18n( 0 ), number_format_i18n( 1 ), '%', 'comments-link', '' ); ?>
			</div><!-- .entry-byline -->

		</div><!-- .entry-header -->

		<div <?php hybrid_attr( 'entry-summary' ); ?>>
			<?php get_the_image( array( 'attachment' => false, 'image_class' => 'theme-thumbnail' ) ); ?>
			<?php if ('excerpt' == get_option('blog_post_content') && !get_post_meta(get_the_ID(), 'force_full_content', true)) : ?>
			<?php the_excerpt(); ?>
			<?php tamatebako_read_more(); ?>
			<?php else : ?>
			<?php the_content(); ?>
			<?php endif; ?>
		</div><!-- .entry-summary -->

		<div class="entry-footer">
			<?php edit_post_link(); ?>
			<?php tamatebako_entry_terms(); ?>
		</div><!-- .entry-footer -->

	</div><!-- .entry-wrap -->

</article><!-- .entry -->
