<?php
/**
 * Displays the header content
 *
 * @package Theme Freesia
 * @subpackage Excellent
 * @since Excellent 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php
$excellent_settings = excellent_get_theme_options(); ?>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif;
wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php 
	if ( function_exists( 'wp_body_open' ) ) {

		wp_body_open();

	} ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#site-content-contain"><?php esc_html_e('Skip to content','excellent');?></a>
<!-- Masthead ============================================= -->
<header id="masthead" class="site-header" role="banner">
	<div class="custom-header">
		<div class="custom-header-media">
		</div>
	</div>
	<div class="top-bar">
		<div class="wrap">
			<aside id="text-2" class="widget widget_contact">			
				<div class="textwidget">
					<ul>
						<li><a title="Call Us" href="tel:+1234567890"><i class="fa fa-phone-square"></i> 07 81 94 97 88</a></li>
						<li><a title="Mail Us" href="mailto:vo.mytt@gmail.com"><i class="fa fa-envelope-o"></i> vo.mytt@gmail.com</a></li>
						<!-- <li><a title="Live chat" href="mailto:vo.mytt@gmail.com"><i class="fa fa-skype"></i> themefreesia</a></li> -->
					</ul>
				</div>
			</aside>
			<!-- end .top-bar-menu -->		
		</div>
		<!-- end .wrap -->
	</div>
	<!-- end .top-bar -->
	<!-- Top Header============================================= -->
	<div class="top-header">
		<div class="wrap">
			<div id="site-branding">			
				<h1 id="site-title"> 			
					<a href="#" title="Thi The My VO" rel="home"> Thi The My VO </a>
				</h1>  
				<!-- end .site-title -->
				<div id="site-description"> Bonjour ! Bienvenue sur mon site web personnel !
				</div> 
				<!-- end #site-description -->
			</div>				
			<button id="search-toggle" class="header-search" type="button"></button>
			<div id="search-box" class="clearfix">
					<form class="search-form" action="https://demo.themefreesia.com/excellent-cv/" method="get">
						<input type="search" name="s" class="search-field" placeholder="Search …" autocomplete="off">
						<button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
					</form> 
					<!-- end .search-form -->				
			</div>  
			<!-- end #search-box -->
		</div>
	</div>
	<!-- end .top-header -->
	<!-- Main Header============================================= -->
	<div id="sticky-header-sticky-wrapper" class="sticky-wrapper" style="height: 46px;"><div id="sticky-header" class="clearfix" style="width: 1038px;">
		<div class="wrap">
			<div class="header-navigation-wrap">
				<div class="header-social-block">	
					<div class="social-links clearfix">
						<ul>
							<li id="menu-item-63" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-63"><a href="https://www.linkedin.com/in/mytt-vo/"><span class="screen-reader-text">Linkedin</span></a></li>
							<li id="menu-item-64" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-64"><a href="https://github.com/My-VO/"><i style="font-size:16px" class="fa">&#xf09b;</i><span class="screen-reader-text">Github</span></a></li>
						</ul>	
					</div>
					<!-- end .social-links -->
				</div>
				<!-- end .header-social-block -->			
				<!-- Main Nav ============================================= -->
				<h3 class="nav-site-title">
					<a href="#" title="Excellent CV">Excellent CV</a>
				</h3>
				<nav id="site-navigation" class="main-navigation clearfix" role="navigation" aria-label="Main Menu">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<span class="line-one"></span>
						<span class="line-two"></span>
						<span class="line-three"></span>
					</button>
					<!-- end .menu-toggle -->
					<ul id="primary-menu" class="menu nav-menu" aria-expanded="false"><li id="menu-item-15" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7 current_page_item menu-item-15"><a href="#" aria-current="page">My Page</a></li>
						<li id="menu-item-49" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-49"><a href="#">Compétences</a></li>
						<li id="menu-item-47" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-47"><a href="#">Formations</a></li>
						<li id="menu-item-27" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-27"><a href="#">Expériences</a></li>
						<li id="menu-item-13" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13"><a href="#">Loisirs</a></li>
						<li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48"><a href="/contact-template">Contact</a></li>
						<li id="menu-item-191" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-191"><a target="_blank" rel="noopener noreferrer" href="./wp-content/themes/excellent-enfant/CV_Thi_The_My_VO.pdf" download>Télécharger mon CV</a></li>
					</ul>				
				</nav> 
				<!-- end #site-navigation -->
			</div> 
			<!-- end .header-navigation-wrap -->
		</div> 
		<!-- end .wrap -->
	</div>
</div>
<!-- end #sticky-header -->
<!-- Main Slider ============================================= -->
</header> <!-- end #masthead -->
<?php
$excellent_display_page_single_featured_image = $excellent_settings['excellent_display_page_single_featured_image'];
if(is_single() || is_page()){
		if(has_post_thumbnail() && $excellent_display_page_single_featured_image == 0 ){?>
<!-- Single post and Page image ============================================= -->
		<div class="single-featured-image-header"><?php the_post_thumbnail(); ?></div>
		<?php }
} ?>
<!-- Main Page Start ============================================= -->
<div id="site-content-contain" class="site-content-contain">
	<div id="content" class="site-content">
	<main id="main" class="site-main" role="main">
		<!-- About Box ============================================= -->
		<div class="about-box">
			<div class="wrap">
				<div class="inner-wrap">
						<div class="two-column-full-width freesia-animation fadeInLeft" data-wow-delay="0.7s">
							<div class="about-img">
								<a title="Je suis Thi The My VO" href="#"><img width="768" height="800" src="./wp-content/themes/excellent-enfant/Portrait.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="./wp-content/themes/excellent-enfant/Portrait.jpg 768w, ./wp-content/themes/excellent-enfant/Portrait.jpg 288w" sizes="(max-width: 768px) 100vw, 768px"></a>
							</div>
						</div>
						<!-- end .two-column-full-width -->
						<div class="two-column-full-width freesia-animation fadeInRight" data-wow-delay="0.7s">	
							<div class="about-content">
								<div class="about-text">
									<h2 class="about-title">
										<a title="Je suis Thi The My VO" href="#">Je suis Thi The My VO</a>
									</h2>
									<p><strong><em>Développeur Web full-stack JS</em></strong></p>
									<p><strong>Nom:</strong> Thi The My VO</p>
									<p><strong>Téléphone:</strong> 07 81 94 97 88</p>
									<p><strong>Email:</strong> vo.mytt@gmail.com</p>
									<p>Recherche un stage d'un mois du 31/08/20 au 25/09/20</p>
							</div>
							<!-- end .about-text -->
						</div>
						<!-- end .about-content -->
					</div>
					<!-- end .two-column-full-width -->
				</div>
				<!-- end .inner-wrap -->
			</div>
			<!-- end .wrap -->
		</div>
		<!-- end .about-box -->
		<!-- Our Feature Box ============================================= -->			<div class="our-feature-box">
				<div class="wrap">
					<div class="inner-wrap">
						<h2>Mes projets</h2>
						<p class="feature-sub-title"></p>
						<div class="column clearfix">
							<div class="three-column freesia-animation fadeInLeft" data-wow-delay="0.5s">
								<div class="feature-content">
									<a class="feature-icon" href="https://demo.themefreesia.com/excellent-cv/front-page-feature/creative/" title="Creative" alt="Creative"><img width="768" height="480" src="https://demo.themefreesia.com/excellent-cv/wp-content/uploads/sites/19/2017/03/skill-1.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://demo.themefreesia.com/excellent-cv/wp-content/uploads/sites/19/2017/03/skill-1.jpg 768w, https://demo.themefreesia.com/excellent-cv/wp-content/uploads/sites/19/2017/03/skill-1-300x188.jpg 300w" sizes="(max-width: 768px) 100vw, 768px"></a>
									<article id="post-56" class="post-56 page type-page status-publish has-post-thumbnail hentry">
										<h3 class="feature-title"><a href="https://demo.themefreesia.com/excellent-cv/front-page-feature/creative/" title="Creative" rel="bookmark">Creative</a></h3>
										<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
									</article>
									<a title="Creative" href="https://demo.themefreesia.com/excellent-cv/front-page-feature/creative/" class="more-link">Continue Reading</a>
								</div> <!-- end .feature-content -->
							</div><!-- end .three-column -->
							<div class="three-column freesia-animation fadeInLeft" data-wow-delay="0.6s">
								<div class="feature-content">
									<a class="feature-icon" href="https://demo.themefreesia.com/excellent-cv/front-page-feature/motivated/" title="Motivated" alt="Motivated"><img width="768" height="480" src="https://demo.themefreesia.com/excellent-cv/wp-content/uploads/sites/19/2017/03/skill-4.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://demo.themefreesia.com/excellent-cv/wp-content/uploads/sites/19/2017/03/skill-4.jpg 768w, https://demo.themefreesia.com/excellent-cv/wp-content/uploads/sites/19/2017/03/skill-4-300x188.jpg 300w" sizes="(max-width: 768px) 100vw, 768px"></a>
									<article id="post-58" class="post-58 page type-page status-publish has-post-thumbnail hentry">
										<h3 class="feature-title"><a href="https://demo.themefreesia.com/excellent-cv/front-page-feature/motivated/" title="Motivated" rel="bookmark">Motivated</a></h3>
										<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
									</article>
									<a title="Motivated" href="https://demo.themefreesia.com/excellent-cv/front-page-feature/motivated/" class="more-link">Continue Reading</a>
								</div> 
								<!-- end .feature-content -->
							</div>
							<!-- end .three-column -->
							<div class="three-column freesia-animation fadeInLeft" data-wow-delay="0.7s">
								<div class="feature-content">
									<a class="feature-icon" href="https://demo.themefreesia.com/excellent-cv/front-page-feature/punctual/" title="Punctual" alt="Punctual"><img width="768" height="480" src="https://demo.themefreesia.com/excellent-cv/wp-content/uploads/sites/19/2017/03/feature-image-5.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://demo.themefreesia.com/excellent-cv/wp-content/uploads/sites/19/2017/03/feature-image-5.jpg 768w, https://demo.themefreesia.com/excellent-cv/wp-content/uploads/sites/19/2017/03/feature-image-5-300x188.jpg 300w" sizes="(max-width: 768px) 100vw, 768px"></a>
									<article id="post-60" class="post-60 page type-page status-publish has-post-thumbnail hentry">
										<h3 class="feature-title"><a href="https://demo.themefreesia.com/excellent-cv/front-page-feature/punctual/" title="Punctual" rel="bookmark">Punctual</a></h3>
										<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
									</article>
									<a title="Punctual" href="https://demo.themefreesia.com/excellent-cv/front-page-feature/punctual/" class="more-link">Continue Reading</a>
								</div> 
								<!-- end .feature-content -->
							</div>
							<!-- end .three-column -->
						</div>
						<!-- .end column-->
					</div>
					<!-- end .inner-wrap -->
				</div>
				<!-- end .wrap -->
			</div>
			<!-- end .our-feature-box -->
		<!-- Testimonial Box============================================= -->			
	<div class="testimonial-box">
		<div class="testimonial-bg">
			<div class="wrap">
				<div class="inner-wrap">
					<p class="box-title">
						Actuellement, en reconversion professionnelle en informatique, je suis ouverte d’esprit, 
						j’ai envie de découvrir différents langages et architectures en informatique en constante évolution.
						Je suis rigoureuse et m’investis pleinement afin d’atteindre mes objectifs.
					</p>
					<div class="testimonials">
						<div class="testimonial-slider">
							<!-- end .slides -->
							<div class="flex-viewport" style="overflow: hidden; position: relative;">
								<ul class="slides" style="width: 600%; transition-duration: 0s; transform: translate3d(-978px, 0px, 0px);">
									<li class="clone" aria-hidden="true" style="width: 978px; margin-right: 0px; float: left; display: block;">
										<div class="testimonial-quote">
											<h2 class="qualite">Rigueur</h2>
										</div>
										<div>
										</div>
										<cite>Mes qualités</cite>
									</li>
									<li class="flex-active-slide" style="width: 978px; margin-right: 0px; float: left; display: block;">
										<div class="testimonial-quote">
											<h2 class="qualite">Autonomie</h2>										
										</div>
										<div>
										</div>
										<cite>Mes qualités</cite>
									</li>
									<li class="clone" aria-hidden="true" style="width: 978px; margin-right: 0px; float: left; display: block;">
										<div class="testimonial-quote">
											<h2 class="qualite">Ouvert</h2>										
										</div>
										<div>
										</div>
										<cite>Mes qualités</cite>
									</li>
								</ul>
							</div>
							<ol class="flex-control-nav flex-control-paging"></ol>
						</div>
						<!-- end .testimonials -->
					</div>
					<!-- end .testimonials -->
				</div> 
				<!-- end .inner-wrap -->
			</div>
			<!-- end .wrap -->
		</div>
		<!-- end .testimonial_bg -->
	</div>
	<!-- end .testimonial-box -->
</main>
