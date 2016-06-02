<?php
/**
 * Template Name: Template Medical Practice
 */
?>
<?php use Roots\Sage\Titles; ?>

<script>
    function initMap() {
        var center = new google.maps.LatLng(40.7402148,-73.6447529);
        var mapOptions = {
            zoom: 11,
            center: center,
            scrollwheel: false,
            draggable: true
        };

        map = new google.maps.Map(document.getElementById('map'), mapOptions);
        infowindow = new google.maps.InfoWindow();

        var marker = new google.maps.Marker({
            title: "Winthrop-University Hospital",
            position: center,
            map: map,
            animation: google.maps.Animation.DROP
        });

        marker.addListener('click', function () {
            infowindow.setContent("<a><h4>" + "Winthrop-University Hospital" + "</h4>" + "<p>" + "259 First Street, Mineola, New York 11501" + "</p></a>");
            infowindow.open(map, marker);
        })

        map.addListener('click', function () {
            infowindow.close();
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnc2mJFcaQ7MEM4j-jLDtjaV4PTaIApgc&callback=initMap" async defer></script>

<div id='map'></div>
<div class='custom-page-header'>
    <h3><?= Titles\title(); ?></h3>
    <p class='address'>259 First Street, Mineola, New York 11501</p>
    <p class='phone-number'><a href='tel:5166631000'>(516) 663-1000</a></p>
</div>
<div class='container'>
    <div class='col-sm-9'>
        <div class='entry-content'>
            <h4>Specialities</h4>
            <?php if (types_render_field("specialty", array('raw' => 'true'))){ ?>
                <p><?= types_render_field("specialty", array('raw' => 'true')); ?></p>
                <br>
            <?php } ?>

            <h4>Physicians</h4>
            <?php if (types_render_field("physician", array('raw' => 'true'))){ ?>
                <p><?= types_render_field("physician", array('raw' => 'true')); ?></p>
                <br>
            <?php } ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        </div>
    </div>
    <div class='col-sm-3'>
        <?php if (types_render_field("monday", array('raw' => 'true'))){ ?>
            <div class='entry-content'><h4>Hours of Operation</h4>
                <ul>
                    <li>Monday: <?= types_render_field("monday", array('raw' => 'true')); ?></li>
                    <li>Tuesday: <?= types_render_field("tuesday", array('raw' => 'true')); ?></li>
                    <li>Wednesday: <?= types_render_field("wednesday", array('raw' => 'true')); ?></li>
                    <li>Thursday: <?= types_render_field("thursday", array('raw' => 'true')); ?></li>
                    <li>Friday: <?= types_render_field("friday", array('raw' => 'true')); ?></li>
                    <li>Saturday: <?= types_render_field("saturday", array('raw' => 'true')); ?></li>
                    <li>Sunday: <?= types_render_field("sunday", array('raw' => 'true')); ?></li>
                </ul>
            </div>
        <?php } ?>
    </div>
</div>
