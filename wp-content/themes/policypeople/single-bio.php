<?php 
/*
Template Name: Bio
*/

get_header(); ?>

<h1>Author Bio</h1>

<h2><?php the_field('pp_name'); ?></h2>

<p><?php the_field('bio'); ?></p>

<img src="<? the_field('bio_pic'); ?>" >

<?php get_sidebar(); ?>
<?php get_footer(); ?>