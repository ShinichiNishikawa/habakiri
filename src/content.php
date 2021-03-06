<?php
/**
 * Version    : 1.0.0
 * Author     : Takashi Kitajima
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : 
 * License    : GPLv2
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */
?>
<?php if ( is_single() ) : ?>

<?php Habakiri::the_bread_crumb(); ?>
<article>
	<h1 class="entry-title"><?php the_title(); ?></h1>
	<?php Habakiri::the_entry_meta(); ?>
	<?php do_action( 'habakiri_before_entry_content' ); ?>
	<div class="entry-content">
		<?php the_content(); ?>
	<!-- end .entry-content --></div>
	<?php do_action( 'habakiri_after_entry_content' ); ?>
	<?php Habakiri::the_link_pages(); ?>
	<?php Habakiri::the_related_posts(); ?>
	<?php comments_template( '', true ); ?>
</article>

<?php else : ?>

<article <?php post_class(); ?>>
	
	<?php if ( Habakiri::get( 'is_displaying_thumbnail' ) === 'false' ) : ?>

		<h1 class="entry-title h3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		<!-- end .entry-summary --></div>
		<?php Habakiri::the_entry_meta(); ?>

	<?php else : ?>

		<div class="summary-with-thumbnail">
			<div class="summary-with-thumbnail-thumbnail">
				<?php Habakiri::the_post_thumbnail(); ?>
			<!-- end .media-left --></div>
			<div class="summary-with-thumbnail-body">
				<h1 class="entry-title h3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<div class="entry-summary">
					<?php the_excerpt(); ?>
				<!-- end .entry-summary --></div>
				<?php Habakiri::the_entry_meta(); ?>
			<!-- end .media-body --></div>
		<!-- end .media --></div>

	<?php endif; ?>

</article>

<?php endif; ?>