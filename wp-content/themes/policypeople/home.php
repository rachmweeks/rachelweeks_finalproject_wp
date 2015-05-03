<?php 
/*
Template Name: Home
*/

get_header(); ?>
		
	<main id="home">
				<?php
					$hp = array( 'post_type' => 'report', 'posts_per_page' => 1 );
					$loop = new WP_Query( $hp );
					while ( $loop->have_posts() ) : $loop->the_post();
					  echo '<section class="featured1"><img src="';
					  the_field ('cover');
					  echo '">';
					  echo '<h2>Featured Report</h2><h3><a href="';
					  the_permalink();
					  echo '">';
					  the_title();
					  echo '</a></h3><p class="entry-content">';
					  the_excerpt();
					  echo '</p></section>';
					endwhile;
				?>
				
			<div id="recent">
				<?php
					$hp = array( 'post_type' => 'report', 'posts_per_page' => 2, 'offset' => 1 );
					$loop = new WP_Query( $hp );
					while ( $loop->have_posts() ) : $loop->the_post();
					  echo '<section class="featured2">';
					  echo '<h3><a href="';
					  the_permalink();
					  echo '">';
					  the_title();
					  echo '</a></h3><p class="entry-content">';
					  the_excerpt();
					  echo '</p></section>';
					endwhile;
				?>
			</div>
	</main>
	
	
	
	
		<aside class="home_aside">
			<h2>Policy Shorts</h2>
			<ul>
				<?php
					$hp = array( 'post_type' => 'short', 'posts_per_page' => 3 );
					$loop = new WP_Query( $hp );
					while ( $loop->have_posts() ) : $loop->the_post();
					  echo '<li><a href="';
					  the_permalink();
					  echo '">';
					  the_title();
					  echo '</a></li><p class="entry-content">';
					endwhile;
				?>
			</ul>
			<h2 id="comment_feed">Join the Conversation</h2>
					<?php
						$comments = get_comments('status=approve&number=5');
						foreach($comments as $comment) :?>
							<?php $my_id = $comment->comment_post_ID ; $post_id_comms = get_post($my_id); $title = $post_id_comms->post_title;?> 
						<h4 class="comment_feed">On <a href="<?php echo get_permalink($my_id) ?>#comment-<?php echo $comment->comment_post_ID?>" title="on <?php echo $title ?>"><?php echo $title ?></a>
						<?php echo($comment->comment_author);?> says: </h4>
						<p>" <?php echo($comment->comment_content);?> "</p>
					 <?php endforeach;?>
		</aside>
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>