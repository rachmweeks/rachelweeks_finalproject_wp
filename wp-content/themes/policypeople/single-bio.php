<?php 
/*
Template Name: Bio
*/

get_header(); ?>

<section class="internal">
	<h1>Author Bio</h1>
	<img src="<? the_field('bio_pic'); ?>" >
	<h2><?php the_field('pp_name'); ?></h2>
	<p><?php the_field('bio'); ?></p>

</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>