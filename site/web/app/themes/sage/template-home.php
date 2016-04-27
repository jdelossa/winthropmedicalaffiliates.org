<?php
/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>

    <!-- Slideshow -->
    <?php echo do_shortcode('[recent_post_slider limit="4" design="design-1" show_author="false" show_category_name="false" show_content="true" show_date="false" dots="false" arrows="true" autoplay="true" autoplay_interval="5000" speed="1000" content_words_limit="40"]'); ?>
    <!-- END Slideshow -->
    
    <!-- Search -->
    <div class="search-panel">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#all" aria-controls="all" role="tab" data-toggle="tab">All</a></li>
            <li role="presentation"><a href="#name" aria-controls="name" role="tab" data-toggle="tab">Name</a></li>
            <li role="presentation"><a href="#specialties" aria-controls="specialties" role="tab" data-toggle="tab">Specialties</a></li>
            <li role="presentation"><a href="#services" aria-controls="services" role="tab" data-toggle="tab">Services</a></li>
            <li role="presentation"><a href="#locations" aria-controls="locations" role="tab" data-toggle="tab">Locations</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="all">
                <div class="search">
                    <p>I am looking for a Winthrop Medical Affiliate:</p>
                    <i class="fa fa-spinner fa-pulse fa-2x fa-fw margin-bottom"></i>
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="map">
                    <div id="map"></div>
                    <script>
                        var map;
                        function initMap() {
                            map = new google.maps.Map(document.getElementById('map'), {
                                center: {lat: 40.8483063, lng: -73.1186585},
                                zoom: 9
                            });
                        }
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnc2mJFcaQ7MEM4j-jLDtjaV4PTaIApgc&callback=initMap" async defer></script>
                </div>

                <div class="results">
                    <p><span class="results-count">x</span> Results</p>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="name">
                <div class="search">
                    <p>I am looking for a Winthrop Medical Affiliate named:</p>
                    <i class="fa fa-spinner fa-pulse fa-2x fa-fw margin-bottom"></i>
                    <span class="sr-only">Loading...</span>
                </div>

            </div>
            <div role="tabpanel" class="tab-pane fade" id="specialties">
                <div class="search">
                    <p>I am looking for a Winthrop Medical Affiliate that specializes in:</p>
                    <i class="fa fa-spinner fa-pulse fa-2x fa-fw margin-bottom"></i>
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="services">
                <div class="search">
                    <p>I am looking for a Winthrop Medical Affiliate that provides the service:</p>
                    <i class="fa fa-spinner fa-pulse fa-2x fa-fw margin-bottom"></i>
                    <span class="sr-only">Loading...</span>
                </div>

            </div>
            <div role="tabpanel" class="tab-pane fade" id="locations">
                <div class="search">
                    <p>I am looking for a Winthrop Medical Affiliate in:</p>
                    <i class="fa fa-spinner fa-pulse fa-2x fa-fw margin-bottom"></i>
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>

    </div>
    <!-- END Search -->

  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
