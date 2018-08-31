
<div class="people">
<?php


$people = new WP_Query([
    'post_type' => 'people'
]);

if ( $people->have_posts() ) : ?>

    <?php while ( $people->have_posts() ) : $people->the_post(); ?>

        <a
            class="people__tile"
            style="background-image: url(<?php echo esc_url(get_field('headshot')['url']); ?>);"
            href="<?php esc_url(the_permalink()); ?>">
            <div class="people__content">
                <h3 class="people__name"><?php the_title(); ?></h2>
                <p class="people__title"><?php echo esc_html(get_field('job_title')); ?></p>
            </div>
        </a>

    <?php endwhile; ?>

<?php wp_reset_postdata(); ?>

<?php endif; ?>

</div>
