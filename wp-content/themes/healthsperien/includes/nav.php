

        <nav class="banner__nav <?php echo(!is_front_page() ? 'banner__nav--small' : ''); ?>">
            <a class="logo--small" href="<?php echo esc_url(bloginfo('url')); ?>">healthsperien</a>
            <ul>
                <li><a class="<?php echo (is_page('about-us') ? 'is-current' : ''); ?>" href="<?php echo esc_url(bloginfo('url')); ?>/about-us">About</a></li>
                <li><a class="<?php echo (is_page('practice-areas') ? 'is-current' : ''); ?>" href="<?php echo esc_url(bloginfo('url')); ?>/practice-areas">Practice Areas</a></li>
                <li><a class="<?php echo (is_page('capabilities') ? 'is-current' : ''); ?>" href="<?php echo esc_url(bloginfo('url')); ?>/capabilities">Capabilities</a></li>
                <li><a class="<?php echo (is_home() ? 'is-current' : ''); ?>" href="<?php echo esc_url(bloginfo('url')); ?>/insights">Insights</a></li>
                <li><a class="<?php echo (is_page('contact') ? 'is-current' : ''); ?>" href="<?php echo esc_url(bloginfo('url')); ?>/contact">Contact</a></li>
            </ul>
        </nav>
