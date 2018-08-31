<!DOCTYPE html>
<html>
    <?php include('includes/head.php'); ?>
<body>
    <header
        class="banner
        <?php echo (is_front_page() ? 'banner--home': ''); ?>
        ">

        <?php
            $fields = get_fields();
            $text = $fields['banner_text'];
            $button = $fields['banner_button'];
        ?>

        <div class="wrapper">

            <?php if(is_front_page()): ?>
                <p class="logo">healthsperien</p>
            <?php else: ?>
                <h1 class="banner__title"><?php echo esc_html(the_title()); ?></h1>
            <?php endif; ?>

            <?php if($text): ?>
                <p class="slab"><?php echo esc_html($text); ?></p>
            <?php endif; ?>

            <?php if($button): ?>
                <a href="<?php echo esc_url($button['url']); ?>" class="button--white"><?php echo esc_html($button['title']); ?></a>
            <?php endif; ?>

        </div><!--.wrapper-->

        <?php include('includes/nav.php'); ?>

    </header>
