<?php
    $fields = get_fields();
    get_header('people');
?>

<section class="section">
    <div class="wrapper dynamic-content">
        <img class="u-float-left" src="<?php echo esc_url($fields['headshot']['url']); ?>">
        <?php echo wp_kses($fields['biography'], get_allowed_html()); ?>
        <a class="button" href="<?php echo esc_url(bloginfo('url')); ?>/about">Back to About Us</a>
    </div>
</section>

<?php get_footer(); ?>
