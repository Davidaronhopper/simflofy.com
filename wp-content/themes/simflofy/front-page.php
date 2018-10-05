<?php get_header(); ?>
<section id="lead">
	<div class="container">
		<div class="text">
			<?php if( have_rows('lead') ): while ( have_rows('lead') ) : the_row(); ?>
				<h1><?php the_sub_field('title'); ?></h1>
				<p><?php the_sub_field('text'); ?></h2>
			<?php endwhile; endif; ?>
			<?php get_template_part( 'parts/content', 'block-navicons' ); ?>
			<div class="cta"><a href="#" class="btn">Request a Demo</a></div>
		</div>
		<div class="img"></div>
	</div>
</section>
<div class="container">
	<section id="casestudy">
		<h2>Providing solutions for:</h2>
		<ul>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/Baldwin.png">
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/GreyCounty.png">
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/Iowa.png">
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/Liberty.png">
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/McDermott.png">
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/Nintendo.png">
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/RobertHalf.png">
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/Symetra.png">
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/DOD.png">
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/DOS.png">
			</li>
		</ul>
		<div class="cta"><a href="#" class="btn">View Case Studies</a></div>
	</section>
	<section id="newsletter">
		<h2>Sign up for our newsletter</h2>
		<p>
			Stay up-to-date with all things Simflofy. Product updates, educational resources and events. You can unsubscribe at anytime. 
		</p>
		<div class="form"><?php echo do_shortcode('[contact-form-7 id="15" title="Newsletter Signup"]'); ?></div>
	</section>
	<section id="how">
		<h2>How we break down content silos</h2>
		<div class="block federation">
			<div class="img"></div>
			<div class="text">
				<h3>Federation</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id consectetur nisi, sed laoreet ante. Vestibulum vestibulum hendrerit libero. </p>
				<ul>
					<li>Value Prop</li>
					<li>Value Prop</li>
					<li>Value Prop</li>
				</ul>
				<a href="#" class="btn">Learn More</a>
				<div class="readmore"><a href="#">Read our case study on how we helped</a></div>
			</div>
		</div>
		<div class="block migration">
			<div class="img"></div>
			<div class="text">
				<h3>Migration</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id consectetur nisi, sed laoreet ante. Vestibulum vestibulum hendrerit libero. </p>
				<ul>
					<li>Value Prop</li>
					<li>Value Prop</li>
					<li>Value Prop</li>
				</ul>
				<a href="#" class="btn">Learn More</a>
				<div class="readmore"><a href="#">Read our case study on how we helped</a></div>
			</div>
		</div>
		<div class="block mip">
			<div class="img"></div>
			<div class="text">
				<h3>Manage In Place</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id consectetur nisi, sed laoreet ante. Vestibulum vestibulum hendrerit libero. </p>
				<ul>
					<li>Value Prop</li>
					<li>Value Prop</li>
					<li>Value Prop</li>
				</ul>
				<a href="#" class="btn">Learn More</a>
				<div class="readmore"><a href="#">Read our case study on how we helped</a></div>
			</div>
		</div>
	</section>
	<section id="blog">
		<h2>Simflofy Blog</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id consectetur nisi, sed laoreet ante. Vestibulum vestibulum hendrerit libero.</p>
		<div class="stories">



<?php

   $args = array(
   	'cat' => 4,
   	'posts_per_page' => 3
   );
   $category_posts = new WP_Query($args);

   if($category_posts->have_posts()) : 
      while($category_posts->have_posts()) : 
         $category_posts->the_post();
		?>
         <div class="col">
			<h4><?php the_title() ?></h4>
			<p><?php the_excerpt() ?></p>
			<a href="<?php get_permalink() ?>">Read More</a>
		</div>      

		<?php endwhile; else: ?>
			Oops, there are no posts.
<?php endif; ?>


		</div>
		<div class="cta"><a href="#" class="btn">Read All Posts</a></div>
	</section>
</div>
<?php get_footer(); ?>
