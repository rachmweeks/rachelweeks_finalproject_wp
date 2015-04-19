<?php 
/*
Template Name: Report
*/

get_header(); ?>

<main>
	<section>
		<p class="intro" >Report</p>
		<p class="date"><?php the_field('publication_date'); ?></p>
		<img id="reportpic" src="<?php the_field('cover'); ?>" >
		<h1><?php echo get_the_title(); ?></h1>
		<p class="byline"><a href="<?php the_field('policy_author'); ?>">
			<?php 
				$variable = get_field('bio_id');
				$value = get_field( 'pp_name', $variable );
				echo $value; 
			?>
		</a></p>
		<p class="download"><a href="<?php the_field('scribd'); ?>">Read Report Online</a> (Scribd)</p>
		<p class="download"><a href="<?php the_field('pdf_download'); ?>">Download Report</a> [.pdf]</p>
		<h2>Introduction</h2>
		<p><?php the_field('intro'); ?></p>
	</section>

	<aside>
		<h2>About the Author</h2>
		<p>
			<?php 
				$variable = get_field('bio_id');
				$value = get_field( 'bio', $variable );
				echo $value; 
			?>
		</p>
		<img src="
			<?php 
				$variable = get_field('bio_id');
				$value = get_field( 'bio_pic', $variable );
				echo $value; 
			?>
		" >
	</aside>
</main>



<?php get_sidebar(); ?>
<?php get_footer(); ?>

