<?php
/**
 * Template Name: Home Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>
<section id="body_wrapper">

<section id="welcome">
	<h2>We build rockets... er rather websites</h2>
	<script type="text/javascript">
		$('#welcome h2').fitText(0.899);
	</script>
	<img src="<?php echo get_bloginfo('template_directory');?>/images/fig_welcome.png" alt="" />
	<p><em>Design Lift-Off</em> is just a fancy store front for my design services. My name is <em>Aaron Neville</em> and I produce web sites and graphics. Yah, I know that the rocket analogy is a little corny, but all business analogies are. Besides, rockets are cool.</p>
</section>

<section id="about" class="section_box">
	<div class="section_header">
		<h2>Our Work</h2>
		<p>We strive to build quality designs</p>
	</div>
	
	<div class="section_body">
		<p><img src="<?php echo get_bloginfo('template_directory');?>/images/fig_sample.png" alt="" class="figure" /></p>
	</div>
</section>

<section id="process" class="section_box">
	<div class="section_header">
		<h2>Our Process</h2>
		<p>Standard outline for our web design process</p>
	</div>
	<div class="section_body">
		<ul>
			<li class="process_step">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/fig_process-1.png" alt="" class="figure" />
				<h3>Plan</h3>
				<p>Work with client to determine goals. Research audience, software, and resources. Document project, roles, copyright, and financial points.</p>
			</li>
			<li class="process_step">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/fig_process-2.png" alt="" class="figure" />
				<h3>Design</h3>
				<p>Mock-up project elements and begin review and approval cycle. Prepare pages for development by implementing graphic designs with HTML and CSS.</p>
			</li>
			<li class="process_step">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/fig_process-3.png" alt="" class="figure" />
				<h3>Develop</h3>
				<p>Implement content</p>
			</li>
			<li class="process_step">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/fig_process-4.png" alt="" class="figure" />
				<h3>Launch</h3>
				<p>Work with client to determine goals. Research audience, software, and resources. Document project, roles, copyright, and financial points.</p>
			</li>
		</ul>
	</div>
	
</section>

</section><!-- end body_wrapper -->


<?php get_footer(); ?>