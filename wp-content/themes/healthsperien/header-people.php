<!DOCTYPE html>
<html>
    <?php include('includes/head.php'); ?>
<body>
    <header class="banner banner--people">

        <div class="wrapper">
                <h1 class="banner__title"><?php echo esc_html(the_title()); ?></h1>
                <?php
                    $fields = get_fields();
                ?>

                <p class="banner__sub-title"><?php echo $fields['job_title']; ?></p>

                <p class="banner__meta"><?php echo $fields['email_address']; ?></p>
                <p class="banner__meta"><?php echo $fields['phone_number']; ?></p>

        </div><!--.wrapper-->

        <?php include('includes/nav.php');?>

    </header>
