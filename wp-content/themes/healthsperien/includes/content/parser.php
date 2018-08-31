<?php
        foreach($fields['layout'] as $layout) {

            switch($layout['acf_fc_layout']) {

                case 'tabbed_content':
                    include('tabs-content.php');
                    break;

                case 'card_content':
                    include('card-content.php');
                    break;

                case 'featured_content':
                    include('featured-content.php');
                    break;

                default:
                    include('text-content.php');
            }
        }
    ?>
