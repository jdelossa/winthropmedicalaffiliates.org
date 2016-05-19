<?php use Roots\Sage\Titles; ?>

<?php
// All data from db
global $wpdb;
$title = Titles\title();
$wma = $wpdb->get_results("SELECT * FROM wp_wma WHERE name == 'Winthrop");
var_dump($wma);
?>


<div class="page-header">
    <h3><?= Titles\title(); ?></h3>
    <p class="address">Address</p>
    <p class="phone-number"><a href="#">516-xxx-xxxx</a></p>
    <?php print_r ($wma) ?>
</div>

