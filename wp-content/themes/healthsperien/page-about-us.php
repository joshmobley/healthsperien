<?php
    $fields = get_fields();
?>

<?php get_header(); ?>

<?php include('includes/content/parser.php'); ?>

<div class="section section--grey">
    <div class="wrapper">
        <h2 class="section__title">Our Team</h2>

        <?php include('includes/content/people-content.php'); ?>

    </div>
</div>

<?php get_footer(); ?>
