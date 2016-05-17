<?php

use Carbon\Carbon;

$dateStr =get_post_time('c');
$ISO = 'Y-m-d\TH:i:sP';

$datetime = Carbon::createFromFormat($ISO, $dateStr);

$date = $datetime->diffForHumans();

?>

<p><i class="fa fa-clock-o"></i><span><?= $date ?></span> | <i class="fa fa-calendar"></i><time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time></p>