<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php wp_title( '' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1">
    <meta name="theme-color" content="#ffffff"/>
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="/favicon.ico">
    
    <!-- WP HEAD HOOK -->
	  <?php do_action('wp_head'); 
    
    $mrGlobal = $GLOBALS['light_header'];
    
    ?>


    
  </head>

  <body style="opacity: 0; transition: all 1s ease-in-out;" <?php body_class(); ?>>

    <div class="main-wrapper <?php if ($mrGlobal == true) { echo 'light-header'; }; ?>">

      <button href="#site-content" class="button skip">Skip to Main Content</button>

      <header id="site-header" class="header-container">
        
        <div class="mr-row">

          <?php if ($mrGlobal == true) : ?>

              <a href="<?php echo get_site_url(); ?>" class="custom-logo" rel="home"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/11/dogma-logo-2x-dark.png" alt="Dogma Logo dark"></a>

          <?php else : ?>

            <?php echo get_custom_logo(); ?>

          <?php endif; ?>

          <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'mr-primary-menu for-desktop' ) );?>

          <a class="menu-instagram" href="<?php echo get_site_url(); ?>/instagram-feed/">

             <?php if ($mrGlobal == true) : ?>

              <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/instagram-dark-violet.svg" alt="instagram"/>

            <?php else : ?>

              <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/instagram-white.svg" alt="instagram"/>

            <?php endif; ?>

          </a><!-- .menu-instagram -->

            <div id="nav-bugher" class="menu-bar-icon for-mobile">

                <span></span>
                <span></span>
                <span></span>

            </div><!--.menu-bar-icon -->

        </div><!--.mr-row -->

          <div class="mr-header-menu for-mobile">

            <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'mr-inner-menu-container' ) );?>

                <?php $header_phone_num = get_field('header_phone_number','option');

                  $info_text_no = $header_phone_num['info_text_number'];

                  $info_link_no = $header_phone_num['info_link_number'];

                  if ( $info_text_no ) : ?>

                    <a class="cta-link mr-phone" href="tel:<?php echo $info_link_no; ?>">

                      <img class="phone-icon" src="<?php echo get_template_directory_uri(); ?>/assets/svg/phone-white.svg" alt="phone"/>

                      <span><?php echo $info_text_no; ?></span>

                    </a>

                <?php endif; ?>

            <?php get_template_part( 'template-parts/footer-social', 'icons' ); ?>

          </div>

      </header><!-- #site-header -->

      <div id="scroll-cta" class="bottom-cta-wrapper">

        <div class="mr-row">

          <div class="scroll-cta-body">

            <?php $header_phone_num = get_field('header_phone_number','option');

              $info_text_no = $header_phone_num['info_text_number'];

              $info_link_no = $header_phone_num['info_link_number'];
     
              if ( $info_text_no ) : ?>

                <a class="cta-link mr-phone" href="tel:<?php echo $info_link_no; ?>">

                  <img class="phone-icon" src="<?php echo get_template_directory_uri(); ?>/assets/svg/phone-alt-solid.svg" alt="phone"/>
                  <span class="for-mobile">Call</span><span class="for-desktop"><?php echo $info_text_no; ?></span>

                </a>

            <?php endif; ?>

            <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'mr-inner-menu-container' ) );?>

            <a class="cta-link mr-button" href="https://secure.petexec.net/newOwner.php?x=p5sMZiFHVy8=" class="cta-btn inquiry-btn">Get started</a>

          </div><!--.scroll-cta-body -->

        </div><!--.mr-row -->

      </div>

      <main id="site-content" role="main">