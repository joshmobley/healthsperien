<section class="section">

    <div class="wrapper dynamic-content">

        <?php echo wp_kses($layout['content'], get_allowed_html()); ?>

        <?php if($layout['button']): ?>

            <a
                class="button"
                href="<?php echo esc_url($layout['button']['url']); ?>"
                target="<?php echo esc_html($layout['button']['target']); ?>">
                <?php echo esc_html($layout['button']['title']); ?>
            </a>


        <?php endif; ?>

    </div>

</section>
