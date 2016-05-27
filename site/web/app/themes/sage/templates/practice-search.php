
<?php
    // All data from db
    global $wpdb;
    $wma = $wpdb->get_results("SELECT * FROM wp_wma;");

    $fp = fopen('wma.json', 'w');
    fwrite($fp, json_encode($wma));
    fclose($fp);
?>

<div class="search-panel">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist" data-tabs="tabs">
        <li role="presentation" class="active"><a href="#all" aria-controls="all" role="tab" data-toggle="tab">All</a></li>
        <li role="presentation"><a href="#specialties" aria-controls="specialties" role="tab" data-toggle="tab">Specialties</a></li>
    </ul>

    <!-- Tab panes -->
    <div id="practice-search" class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="all">
            <div class="search">
                <p>I am looking for a Winthrop Medical Affiliate:</p>
                <form>
                    <input type="text" class="form-control search-all" id="search-all" placeholder="Search by keywords">
                </form>
                <i class="fa fa-spinner fa-pulse fa-1x fa-fw margin-bottom"></i>
            </div>
        </div><!-- end #all -->

        <div role="tabpanel" class="tab-pane fade" id="specialties">
            <div class="search">
                <p>I am looking for a Winthrop Medical Affiliate that specializes in:</p>
                <select class="form-control specialties">
                    <option>All Specialties</option>
                </select>
                <i class="fa fa-spinner fa-pulse fa-1x fa-fw margin-bottom"></i>
            </div>
        </div><!-- end #specialties -->

        <div class="map">
            <div id="map"></div>
            <script type="text/javascript" src="/app/themes/sage/dist/scripts/pagination.js"></script>
            <script type="text/javascript" src="/app/themes/sage/dist/scripts/practice-search.js"></script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnc2mJFcaQ7MEM4j-jLDtjaV4PTaIApgc&callback=initMap" async defer></script>
        </div><!-- end .map -->

        <div class="results">
            <div class="wma-results">
                <p class="results-count"><span id="results-count">0</span> results</p>
                <div class="row"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="wma-pagination"></div>
                </div>
            </div>
        </div><!-- end .results -->

    </div> <!-- end .tab-content -->
</div><!-- end .search-panel -->