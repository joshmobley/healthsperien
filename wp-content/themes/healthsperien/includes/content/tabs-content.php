<section class="tabs">

        <div class="tabs__control">

            <div class="wrapper">

                <?php foreach($layout['tab'] as $i => $tab): ?>

                    <div class="tabs__link <?php echo ($i == 0 ? 'is-active' : ''); ?>" data-child="tab_<?php echo $i; ?>"><?php echo esc_html($tab['label']); ?></div>

                <?php endforeach; ?>

            </div>

        </div>

        <div class="tabs__container dynamic-content">

            <div class="wrapper">

                <?php foreach($layout['tab'] as $i => $tab): ?>

                    <div class="tabs__content <?php echo ($i == 0 ? 'is-active' : ''); ?>" id="tab_<?php echo $i; ?>">
                        <?php echo wp_kses($tab['content'], get_allowed_html()); ?>
                    </div>

                <?php endforeach; ?>

            </div>
        </div>
</section>
