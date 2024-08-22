<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Global_News
 */

get_header();
get_template_part('/template-parts/banner');
?>
<div class="body">
	<main id="primary" class="site-main">

		<?php get_template_part('/template-parts/new-post'); ?>
		<?php get_template_part('/template-parts/popular-articles'); ?>
		<?php get_template_part('/template-parts/recent-articles'); ?>
		<?php get_template_part('/template-parts/case-studies'); ?>
		<?php get_template_part('/template-parts/all-articles'); ?>

	

	</main><!-- #main -->
</div>
<?php
// get_sidebar();
get_footer();
