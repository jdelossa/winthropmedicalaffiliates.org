<?php
/**
 * Template Name: Medical Practice Page Template
 */
?>


<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/medical-practice/page', 'header'); ?>
    <?php get_template_part('templates/medical-practice/content', 'page'); ?>
    <script>

        // Data in JSON Format
//        var data = <?php //echo wp_json_encode($wma); ?>//;
//
//        for (var i in data) {
//            var name = data[i].name;
//            var address = data[i].address;
//            var phone = data[i].phone;

//            if $('.page-header > h3') == name {
//                console.log(name);
//            }

            console.log($('h3').val());
        }
    </script>
<?php endwhile; ?>
