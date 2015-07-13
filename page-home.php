<?php
/**
 * Template Name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package cisnt
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main wrap group" role="main">
			<div id="cisnt-carousel" class="carousel slide group" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="http://placehold.it/2400x1000" alt="...">
						<div class="carousel-caption">
							<h2>Top Schools in Texas<br />
							<span>Lorem Ipsum has been the industry's standard</span></h2>
						</div>
					</div>
					<div class="item">
						<img src="http://placehold.it/2400x1000" alt="...">
						<div class="carousel-caption">
							<h2>Independent Learning<br />
							<span>Lorem Ipsum has been the industry's standard</span></h2>
						</div>
					</div>
					<div class="item">
						<img src="http://placehold.it/2400x1000" alt="...">
						<div class="carousel-caption">
							<h2>2015 Graduation<br />
							<span>Lorem Ipsum has been the industry's standard</span></h2>
						</div>
					</div>
					<div class="item">
						<img src="http://placehold.it/2400x1000" alt="...">
						<div class="carousel-caption">
							<h2>Children Services<br />
							<span>Lorem Ipsum has been the industry's standard</span></h2>
						</div>
					</div>
				</div>
				<!-- Indicators -->
				<ul class="carousel-indicators group">
					<li class="active" data-target="#cisnt-carousel" data-slide-to="0">
						<img src="http://www.placehold.it/600x400" />
						<a href="#"><span>Top Schools in Texas</span></a>
					</li>
					<li data-target="#cisnt-carousel" data-slide-to="1">
						<img src="http://www.placehold.it/600x400" />
						<a href="#"><span>Independent Learning</span></a>
					</li>
					<li data-target="#cisnt-carousel" data-slide-to="2">
						<img src="http://www.placehold.it/600x400" />
						<a href="#"><span>2015 Graduation</span></a>
					</li>
					<li data-target="#cisnt-carousel" data-slide-to="3">
						<img src="http://www.placehold.it/600x400" />
						<a href="#"><span>Children Services</span></a>
					</li>
				</ul>
				<!-- Controls
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a> -->
			</div><!-- carousel -->
			<div class="cisnt-stats group">
				<h1>We believe in our kids and want to see them succeed, not only in school, <span>but in life.</span></h1>
				<div class="half first">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/_i/graduation-cap.png" />
					<h3>Our Kids Graduate</h3>
					<p>Of the 1,910 case managed students referred for attendance, behavior or academic problems 94.87% of seniors graduated.</p>
				</div>
				<div class="half">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/_i/bank.png" />
					<h3>We Give Back</h3>
					<p>Every dollar invested in Communities In Schools produces an average return of $11.60 in economic benefit to local communities.</p>
				</div>
				<div class="half first">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/_i/group.png" />
					<h3>Our Kids Graduate</h3>
					<p>Of the 1,910 case managed students referred for attendance, behavior or academic problems 94.87% of seniors graduated.</p>
				</div>
				<div class="half">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/_i/puzzle-piece.png" />
					<h3>We Give Back</h3>
					<p>Every dollar invested in Communities In Schools produces an average return of $11.60 in economic benefit to local communities.</p>
				</div>
			</div>
			<div class="volunteer-donate">
				<h1>Here's how you can help our kids <span>succeed.</span></h1>
				<a href="#" class="btn">Donate To The Kids</a>
				<a href="#" class="btn">Volunteer With Us</a>
			</div>
		</main><!-- #main -->
		<div class="blog-links">
			<div class="wrap group">
				<div class="blog-posts">
					<h2>From our blog</h2>
					<div class="single-post">
						<h3>Graduating with honors</h3>
						<a href="#">June 15, 2015</a>
						<p>Many North Texas students are ill equipped to pursue academic excellence. You can help! Below is a list of items that will go a long way in helping a child successfully learn.<br />
						<a href="#">Continue Reading <span>&raquo;</span></a>
						</p>
					</div>
					<div class="single-post">
						<h3>What our kids need</h3>
						<a href="#">June 8, 2015</a>
						<p>We deeply believe that programs don't change lives, relationships do.  In fact, that statement was originally made by Communities In Schools founder, Bill Milliken.<br />
						<a href="#">Continue Reading <span>&raquo;</span></a>
						</p>
					</div>
				</div>
				<div class="more-links">
					<h2>Additional Links</h2>
					<ul>
						<li>
							<a href="#"><span>&raquo;</span> About Us</a>
						</li>
						<li>
							<a href="#"><span>&raquo;</span> Our Programs</a>
						</li>
						<li>
							<a href="#"><span>&raquo;</span> Financial Transparency</a>
						</li>
						<li>
							<a href="#"><span>&raquo;</span> Our Staff</a>
						</li>
						<li>
							<a href="#"><span>&raquo;</span> Our Board</a>
						</li>
						<li>
							<a href="#"><span>&raquo;</span> Social Links</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>
