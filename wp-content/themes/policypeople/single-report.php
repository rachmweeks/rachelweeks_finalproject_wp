<?php 
/*
Template Name: Report
*/

get_header(); ?>

<main>
	<head>
		<p class="intro" >Report</p>
		<p><?php the_field('publication_date'); ?></p>
		<h1><?php echo get_the_title(); ?></h1>
		<p><a href="<?php the_field('policy_author'); ?>">Author Name</a></p>
		<p><a href="<?php the_field('pdf_download'); ?>">Download the Report</a></p>
		<p><a href="<?php the_field('scribd'); ?>">Read on Scribd</a></p>
	</head>

	<section>
		<img id="reportpic" src="<?php the_field('cover'); ?>" >
		<p><?php the_field('intro'); ?></p>
	</section>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

