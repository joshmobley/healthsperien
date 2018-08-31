<section class="section--compact">

    <div class="wrapper">

        <div class="cards">

            <?php foreach($layout['card'] as $card): ?>

                <div class="card">

                    <div class="card__content">
                        <?php if($card['icon']): ?>
                            <div class="card__icon">
                                <img src="<?php echo esc_url($card['icon']); ?>" />
                            </div>
                        <?php endif; ?>

                        <h3 class="card__title"><?php echo esc_html($card['title']); ?></h3>

                        <a class="card__more" href="javascript:void(0);">More</a>
                    </div>

                    <div class="card__modal">
                        <div class="card__modal-bg"></div>
                        <div class="card__modal-content dynamic-content">
                            <a class="card__close" href="javascript:void(0);">Close</a>
                            <?php echo wp_kses($card['content'], get_allowed_html()); ?>
                        </div>
                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>

