<?php 
/*
Template Name: Report
*/

get_header(); ?>

<main id="main">
	<section class="article">
		<p class="intro" >Policy Short</p>
		<p class="date"><?php the_field('publication_date'); ?></p>
		<img id="reportpic" src="<?php the_field('pic'); ?>" >
		<h1><?php echo get_the_title(); ?></h1>
		<p class="byline"><a href="<?php the_field('policy_author'); ?>">
			<?php 
				$variable = get_field('bio_id');
				$value = get_field( 'pp_name', $variable );
				echo $value; 
			?>
		</a></p>
		<p><?php the_field('text'); ?></p>
		<p><?php comments_template(); ?>
	</section>

	<aside>
		<h2>About the Author</h2>
		<img src="
			<?php 
				$variable = get_field('bio_id');
				$value = get_field( 'bio_pic', $variable );
				echo $value; 
			?>
		" >
		<p>
			<?php 
				$variable = get_field('bio_id');
				$value = get_field( 'bio', $variable );
				echo $value; 
			?>
		</p>
	</aside>
</main>



<?php get_sidebar(); ?>
<?php get_footer(); ?>

