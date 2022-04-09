<ul class="footer-icons">

    <?php $fw_one_group = get_field('widget_1','option'); 

    $fw_google_link = $fw_one_group['google_link'];
    $fw_google_link_url = $fw_google_link['url'];
    $fw_google_link_title = $fw_google_link['title'];
    $fw_google_link_target = $fw_google_link['target'] ? $fw_google_link['target'] : '_self';
    
    $fw_instagram_link = $fw_one_group['instagram_link'];
    $fw_instagram_link_url = $fw_instagram_link['url'];
    $fw_instagram_link_title = $fw_instagram_link['title'];
    $fw_instagram_link_target = $fw_instagram_link['target'] ? $fw_instagram_link['target'] : '_self'; ?>

    <?php if( $fw_google_link ): ?>

        <li class="footer-icons-item">

            <a aria-label="Google" href="<?php echo esc_url( $fw_google_link_url ); ?>" target="<?php echo esc_attr( $fw_google_link_target ); ?>" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/google.svg" alt="instagram"/></a>

        </li>

    <?php endif; ?>

    <?php if( $fw_instagram_link ): ?>

        <li class="footer-icons-item">

            <a aria-label="Google" href="<?php echo esc_url( $fw_instagram_link_url ); ?>" target="<?php echo esc_attr( $fw_instagram_link_target ); ?>" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/instagram.svg" alt="instagram"/></a>

        </li>

    <?php endif; ?>

</ul>