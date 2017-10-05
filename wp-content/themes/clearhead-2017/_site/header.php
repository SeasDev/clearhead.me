<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clearhead-2016
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="apple-touch-fullscreen" content="yes">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- <script src="//d3c3cq33003psk.cloudfront.net/opentag-128043-1821808.js" async defer></script> -->
	<script src="//cdn.optimizely.com/js/2448130542.js"></script>

	<script src="https://use.typekit.net/erk8dkx.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>

	<meta name="google-site-verification" content="rOVbTCkNzfmtGVaB3SNC3RQvDzAq88fhCv8fTG4mBbY" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<?php if ( !is_front_page() ): ?>
		<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'clearhead-2016' ); ?></a>
	<?php endif; ?>

	<?php if(is_front_page()): ?>
	<div class="top-group" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/hero.jpg');">
	<header class="site-header">
		<div class="fixed-area">
			<div class="container">
				<div class="flex-row">
					<div class="logo">
						<a href="{{ site.github.url }}/">
							<svg viewBox="0 0 212 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<defs>
									<polygon id="path-1" points="39.5675238 0.432380952 0 0.432380952 0 39.9998095 39.5675238 39.9998095 39.5675238 0.432380952"></polygon>
								</defs>
								<mask fill="currentColor">
									<use xlink:href="#path-1"></use>
								</mask>
								<path d="M28.8270476,22.1964762 C28.8270476,26.8926667 24.7865714,28.2302857 22.6827619,28.3974286 C22.278,28.3974286 21.9151429,28.0074286 21.9151429,27.6169524 C21.8727619,27.2126667 22.2213333,26.8507619 22.6122857,26.8507619 C22.8351429,26.8507619 27.3641905,26.6002857 27.3641905,22.1964762 L27.3641905,17.6255238 C27.3641905,17.5421905 27.3075238,16.3574286 26.6813333,15.1731429 C25.9275238,13.6545714 24.5775238,12.9021905 22.6122857,12.9021905 C22.2213333,12.9021905 21.9151429,12.6093333 21.9151429,12.1769524 C21.9151429,11.7169524 22.2213333,11.4107619 22.6122857,11.4107619 L22.6827619,11.4107619 C25.8584762,11.4107619 27.3499048,13.1107619 28.0608571,14.5179048 C28.8127619,16.0645714 28.8270476,17.5002857 28.8270476,17.6255238 L28.8270476,22.1964762 Z M19.4899048,12.8593333 C19.4065714,12.8593333 18.235619,12.9021905 17.0784762,13.5007619 C15.5889524,14.2679048 14.8637143,15.5493333 14.8637143,17.5002857 L14.8637143,17.5421905 L14.8070476,18.1974286 L14.8070476,20.1755238 L12.7175238,22.2379048 L14.8070476,22.2379048 L14.8070476,26.8645714 L19.2260952,26.8645714 C19.658,26.8645714 19.978,27.2126667 19.978,27.6169524 C19.978,28.0212381 19.658,28.3698095 19.2260952,28.3698095 L13.3437143,28.3698095 L13.3437143,23.7712381 L9.10847619,23.7712381 L13.3437143,19.5764762 L13.3437143,18.1555238 L13.3437143,17.5002857 C13.3437143,14.2812381 15.0865714,12.8879048 16.4522857,12.1493333 C17.9699048,11.3964762 19.3784762,11.3964762 19.4899048,11.3964762 C19.8932381,11.3964762 20.2275238,11.703619 20.2275238,12.093619 C20.2275238,12.5812381 19.8932381,12.8593333 19.4899048,12.8593333 L19.4899048,12.8593333 Z M-9.52380952e-05,39.9998095 L39.5675238,39.9998095 L39.5675238,0.432190476 L-9.52380952e-05,0.432190476 L-9.52380952e-05,39.9998095 Z" id="Fill-1" fill="currentColor" mask="url(#logo-mask-2)"></path>
								<path d="M202.405189,20.0534775 C200.101226,20.0534775 199.126621,20.9221323 199.126621,23.9628966 C199.126621,27.1766357 200.101226,27.9588031 202.405189,27.9588031 C204.353917,27.9588031 206.037063,26.6553483 206.037063,23.9628966 C206.037063,21.703827 204.796875,20.0534775 202.405189,20.0534775 L202.405189,20.0534775 Z M200.101226,15.3628362 C203.291106,15.3628362 204.796875,16.4918984 206.037063,18.0552879 L206.037063,7.80487805 L211.707317,7.80487805 L211.707317,32.6494443 L206.037063,32.6494443 L206.037063,30.13044 C204.796875,32.3890369 203.291106,33.1707317 200.101226,33.1707317 C195.406059,33.1707317 192.836514,29.69564 192.836514,23.9628966 C192.836514,18.4896153 195.937705,15.3628362 200.101226,15.3628362 L200.101226,15.3628362 Z M181.496487,20.0534775 C179.459071,20.0534775 178.218401,20.9221323 178.218401,23.9628966 C178.218401,27.1766357 179.459071,27.9588031 181.496487,27.9588031 C183.445215,27.9588031 184.242926,26.6553483 184.242926,23.9628966 C184.242926,21.703827 183.445215,20.0534775 181.496487,20.0534775 L181.496487,20.0534775 Z M192.304867,28.8269852 L192.836514,28.8269852 L191.862391,32.6494443 C191.153368,32.6494443 190.356139,33.1707317 189.115469,33.1707317 C187.6097,33.1707317 185.571801,32.3890369 184.242926,30.13044 C183.445215,32.3890369 181.850757,33.1707317 179.459071,33.1707317 C174.674733,33.1707317 171.750918,29.69564 171.750918,23.9628966 C171.750918,18.4896153 175.20638,15.3628362 179.459071,15.3628362 C182.382404,15.3628362 183.976862,16.4918984 184.242926,18.0552879 L184.242926,15.7102036 L190.799097,15.7102036 L190.799097,27.6979231 C190.799097,28.8269852 191.153368,29.0878652 191.862391,29.0878652 C192.304867,29.0878652 192.304867,29.0878652 192.304867,28.8269852 L192.304867,28.8269852 Z M161.562872,20.0534775 C159.967932,20.0534775 158.550369,20.4878049 157.841828,22.4855218 L165.195228,22.4855218 C164.486206,20.4878049 163.866353,20.0534775 161.562872,20.0534775 L161.562872,20.0534775 Z M165.815081,26.6553483 L171.042377,27.9588031 C169.359231,31.6938295 166.169351,33.1707317 161.562872,33.1707317 C156.335576,33.1707317 152.171574,30.13044 152.171574,24.4832388 C152.171574,18.4896153 156.335576,15.3628362 161.562872,15.3628362 C165.815081,15.3628362 171.042377,17.3605532 171.042377,23.9628966 L171.042377,25.6132461 L157.841828,25.6132461 C158.550369,27.6979231 159.967932,28.8269852 161.562872,28.8269852 C163.866353,28.8269852 164.486206,27.9588031 165.815081,26.6553483 L165.815081,26.6553483 Z M132.769606,7.80487805 L138.43986,7.80487805 L138.43986,18.4896153 C139.679565,16.4918984 141.717464,15.3628362 144.729967,15.3628362 C148.096259,15.3628362 150.577116,17.0131858 150.577116,20.9221323 L150.577116,32.6494443 L144.375697,32.6494443 L144.375697,22.9203218 C144.375697,21.703827 143.666674,20.0534775 142.426005,20.0534775 C139.679565,20.0534775 138.43986,21.703827 138.43986,25.2654061 L138.43986,32.6494443 L132.769606,32.6494443 L132.769606,7.80487805 Z M118.594452,15.7102036 L124.884559,15.7102036 L124.530288,18.0552879 C125.593099,16.4918984 127.277209,15.3628362 128.782979,15.3628362 C130.377437,15.3628362 131.175148,15.7102036 131.972377,16.4918984 L129.225456,21.703827 C128.782979,20.9221323 128.251333,20.4878049 127.277209,20.4878049 C125.593099,20.4878049 124.884559,21.703827 124.884559,23.9628966 L124.884559,32.6494443 L118.594452,32.6494443 L118.594452,15.7102036 Z M106.191132,20.0534775 C104.241921,20.0534775 103.001734,20.9221323 103.001734,23.9628966 C103.001734,27.1766357 104.241921,27.9588031 106.191132,27.9588031 C108.22903,27.9588031 109.7348,26.6553483 109.7348,23.9628966 C109.7348,21.703827 108.22903,20.0534775 106.191132,20.0534775 L106.191132,20.0534775 Z M117.885429,28.8269852 L116.733929,32.6494443 C116.290971,32.6494443 115.050784,33.1707317 114.164385,33.1707317 C112.569927,33.1707317 110.355134,32.3890369 109.7348,30.13044 C108.22903,32.3890369 106.63409,33.1707317 104.241921,33.1707317 C100.077919,33.1707317 97.3314795,29.69564 97.3314795,23.9628966 C97.3314795,18.4896153 100.077919,15.3628362 104.241921,15.3628362 C107.342631,15.3628362 108.937571,16.4918984 109.469217,18.0552879 L109.469217,15.7102036 L115.670636,15.7102036 L115.670636,27.6979231 C115.670636,28.8269852 116.290971,29.0878652 116.733929,29.0878652 C117.0882,29.0878652 117.0882,29.0878652 117.885429,28.8269852 L117.885429,28.8269852 Z M86.9660577,20.0534775 C84.9286414,20.0534775 83.687972,20.4878049 83.4223897,22.4855218 L90.0667672,22.4855218 C90.0667672,20.4878049 88.9152679,20.0534775 86.9660577,20.0534775 L86.9660577,20.0534775 Z M90.6871019,26.6553483 L95.7370217,27.9588031 C94.23077,31.6938295 91.2187485,33.1707317 86.9660577,33.1707317 C81.3844914,33.1707317 77.5747591,30.13044 77.5747591,24.4832388 C77.5747591,18.4896153 81.3844914,15.3628362 86.9660577,15.3628362 C90.6871019,15.3628362 95.7370217,17.3605532 95.7370217,23.9628966 L95.7370217,25.6132461 L83.4223897,25.6132461 C83.4223897,27.6979231 84.9286414,28.8269852 86.9660577,28.8269852 C88.6492036,28.8269852 90.0667672,27.9588031 90.6871019,26.6553483 L90.6871019,26.6553483 Z M69.2472356,32.6499169 L75.5373428,32.6499169 L75.5373428,7.80487805 L69.2472356,7.80487805 L69.2472356,32.6499169 Z M59.2360843,15.3628362 C63.6656693,15.3628362 66.057838,17.0131858 67.6522958,20.4878049 L63.1340227,22.9203218 C61.9825234,20.9221323 61.5395649,20.0534775 59.2360843,20.0534775 C57.1094979,20.0534775 56.312269,21.703827 56.312269,23.9628966 C56.312269,27.1766357 57.1094979,28.8269852 59.2360843,28.8269852 C60.8305421,28.8269852 62.4254819,27.6979231 63.1340227,25.6132461 L67.6522958,27.6979231 C66.5894846,31.0860548 63.6656693,33.1707317 59.2360843,33.1707317 C54.2748527,33.1707317 49.7560976,30.13044 49.7560976,24.4832388 C49.7560976,18.4896153 53.5658299,15.3628362 59.2360843,15.3628362 L59.2360843,15.3628362 Z" id="Fill-4" fill="currentColor"></path>
							</svg>
						</a>
					</div>
					<span class="detail">now part of Accenture Interactive</span>
					<nav>
						<button class="menu-toggle menu-toggle--close">
							<div class="icon">
								<svg width="25px" height="25px" viewBox="0 0 25 25" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<g id="CH.me-Design" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<g id="Ch.me-Home-Mobile-Nav" transform="translate(-325.000000, -28.000000)" fill="#FFFFFF">
											<g id="Group" transform="translate(325.000000, 28.000000)">
												<rect id="Rectangle-23" transform="translate(12.500000, 12.500000) rotate(45.000000) translate(-12.500000, -12.500000) " x="-3" y="11" width="31" height="3"></rect>
												<rect id="Rectangle-23" transform="translate(12.500000, 12.500000) scale(-1, 1) rotate(45.000000) translate(-12.500000, -12.500000) " x="-3" y="11" width="31" height="3"></rect>
											</g>
										</g>
									</g>
								</svg>
							</div>
						</button>
						<ul>
							<li class="">
								<a class="smooth-scroll" href="/#what-we-do">What We Do</a>
							</li>
							<li>
								<a class="smooth-scroll" href="/#partners">Partners</a>
							</li>
							<li>
								<a class="smooth-scroll" href="/#who-we-are">Who We Are</a>
							</li>
							<li>
								<a class="smooth-scroll" href="/#contact">Contact Us</a>
							</li>
							<li>
								<a href="/jobs">Jobs</a>
							</li>
							<li>
								<a href="/blog">Blog</a>
							</li>
						</ul>
					</nav>
				</div>
				<button class="menu-toggle menu-toggle--open">
					<div class="icon">
						<svg width="26px" height="17px" viewBox="0 0 26 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g id="CH.me-Design" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<g id="Ch.me-Home-Mobile" transform="translate(-329.000000, -33.000000)" fill="currentColor">
									<g id="Group" transform="translate(329.000000, 33.000000)">
										<rect id="Rectangle-21" x="0" y="0" width="26" height="3"></rect>
										<rect id="Rectangle-21" x="0" y="7" width="26" height="3"></rect>
										<rect id="Rectangle-21" x="0" y="14" width="26" height="3"></rect>
									</g>
								</g>
							</g>
						</svg>
					</div>
				</button>
			</div>
		</div>
	</header>
	<?php 
	else: ?>
	<header role="banner">
		<div class="main-header">
			<div class="container">
				<?php if ( is_front_page() ): ?>
					<a class="logo" href="#main" rel="home">
				<?php else: ?>
					<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php endif; ?>

					<figure>
						<div class="icon">
							<?php get_template_part( 'img/logo-icon.svg' ); ?>
						</div>
						<figcaption>
							<?php get_template_part( 'img/logo-type.svg' ); ?>
							<span>Clearhead</span>
						</figcaption>
					</figure>
				</a>
				<div class="menu-desktop">
					<nav role="navigation">
						<?php /*
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'clearhead-2016' ); ?></button>
						*/ ?>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav>
				</div>
				<a href="#show-menu" class="menu-toggle-mobile">
					<figure>
						<figcaption>Menu</figcaption>
						<div class="icon icon15">
							<div class="line-outer">
								<div class="line-inner"></div>
							</div>
							<div class="line-outer">
								<div class="line-inner"></div>
							</div>
							<div class="line-outer">
								<div class="line-inner"></div>
							</div>
						</div>

					</figure>
				</a>
			</div>
		</div>
		<div class="menu-mobile">
			<nav role="navigation">
		        <div class="menu-main-menu-container">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					<?php /*
					<ul class="menu">
		                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6">
		                    <a href="/#what">Services</a>
		                </li>
		                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8">
		                    <a href="/#with">Process</a>
		                </li>
		                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7">
		                    <a href="/#who">Team</a>
		                </li>
		                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11 menu-item-blog">
		                    <a href="/blog/">Blog</a>
		                </li>
		                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9">
		                    <a href="/#contact">Contact</a>
		                </li>
		            </ul>
					*/ ?>
		        </div>
		    </nav>
		</div>
	</header>
	<div id="content" class="site-content">
	<?php endif; ?>