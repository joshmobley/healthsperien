<?php
    $title      = $layout['title'];
    $featured   = $layout['featured'];
    $link       = $layout['link'];
?>

<section class="section section--grey">

    <div class="wrapper">

        <?php if($title): ?>
            <h2 class="section__title"><?php echo esc_html($title); ?></h2>
        <?php endif; ?>

        <div class="two-wide">

            <?php
                foreach($featured as $feature) :

                    $catArr = get_the_category($feature->ID);
                    $catList;

                    foreach($catArr as $i => $cat) {
                        if( $i == 0) {
                            $catList = $cat->name;
                        } else {
                            $catList = $catList . ', ' . $cat->name;
                        }
                    }

                    $date = new DateTime($feature->post_date);
            ?>


            <article class="article">
                <div class="article__meta"><?php echo date_format($date, "F j, Y"); ?> | <?php echo esc_html($catList); ?></div>
                <h3 class="article__title"><?php echo esc_html($feature->post_title); ?></h3>
                <p class="article__author"><?php echo esc_html(get_author_name($feature->post_author)); ?></p>
                <div class="article__content">
                    <?php echo $feature->post_content; ?>
                </div>
            </article>

            <?php
                endforeach;
            ?>

        </div>

        <?php if($link): ?>
            <a href="<?php echo esc_url($link['url']); ?>" class="button"><?php echo esc_html($link['title']); ?></a>
        <?php endif; ?>

    </div>

</section>
