<?php
/**
 * Template Name: Medical Practice Page Template
 */
?>

<script>
    $.ajax({
        type: 'GET',
        url: '/wma.json',
        success: function(response){
            var specialty = [];
            $.each(response,function(key,response){
                $.unique(specialty.sort());
                specialty.sort();
                specialty.push(response.special);
            });
            console.log(specialty);
        }
    });
</script>

<?php get_template_part('templates/medical-practice/page', 'header'); ?>
<?php get_template_part('templates/medical-practice/content', 'page'); ?>
