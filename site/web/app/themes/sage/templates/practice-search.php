<div class="search-panel">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#all" aria-controls="all" role="tab" data-toggle="tab">All</a></li>
        <li role="presentation"><a href="#name" aria-controls="name" role="tab" data-toggle="tab">Name</a></li>
        <li role="presentation"><a href="#specialties" aria-controls="specialties" role="tab" data-toggle="tab">Specialties</a></li>
        <li role="presentation"><a href="#services" aria-controls="services" role="tab" data-toggle="tab">Services</a></li>
        <li role="presentation"><a href="#practices" aria-controls="practices" role="tab" data-toggle="tab">Locations</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="all">
            <div class="search">
                <p>I am looking for a Winthrop Medical Affiliate:</p>
                <form>
                    <input type="text" class="form-control search-all" id="search-all" placeholder="Search by keywords">
                </form>
                <i class="fa fa-spinner fa-pulse fa-1x fa-fw margin-bottom"></i>
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="name">
            <div class="search">
                <p>I am looking for a Winthrop Medical Affiliate named:</p>
                <form>
                    <input type="text" class="form-control search-name" id="search-name" placeholder="Search by name of Winthrop Medical Affiliate">
                </form>
                <i class="fa fa-spinner fa-pulse fa-1x fa-fw margin-bottom"></i>
                <span class="sr-only">Loading...</span>
            </div>

        </div>
        <div role="tabpanel" class="tab-pane fade" id="specialties">
            <div class="search">
                <p>I am looking for a Winthrop Medical Affiliate that specializes in:</p>
                <select class="form-control specialties">
                    <option>All Specialties</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                <i class="fa fa-spinner fa-pulse fa-1x fa-fw margin-bottom"></i>
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="services">
            <div class="search">
                <p>I am looking for a Winthrop Medical Affiliate that provides the service:</p>
                <select class="form-control services">
                    <option>All Specialties</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                <i class="fa fa-spinner fa-pulse fa-1x fa-fw margin-bottom"></i>
                <span class="sr-only">Loading...</span>
            </div>

        </div>
        <div role="tabpanel" class="tab-pane fade" id="practices">
            <div class="search">
                <p>I am looking for a Winthrop Medical Affiliate in:</p>
                <form class="form-inline">
                    <div class="form-group">
                        <input type="text" class="form-control search-location" id="search-location" placeholder="Location">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control search-specific-location" id="search-specific-location" placeholder="Address, city, zip code">
                    </div>
                </form>
                <i class="fa fa-spinner fa-pulse fa-1x fa-fw margin-bottom"></i>
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <div class="map">
            <div id="map"></div>
            <script>
                var myMarkers = [];

                // JSON Format
                var data = [
                    {title: 'Garden City Primary Medical Care'},
                    {title: 'South Shore Cardiovascular Medicine'},
                    {title: 'Winthrop University'},
                    {title: 'South Shore Heart'}
                ];

                function initMap() {
                    var center = new google.maps.LatLng (40.8483063,-73.1186585);
                    var mapOptions = {
                        zoom: 9,
                        center: center
                    };
                    map = new google.maps.Map(document.getElementById('map'), mapOptions);

                    var marker = new google.maps.Marker({
                        position: center,
                        map: map,
                        title: 'Click to zoom'
                    });

                    map.addListener('center_changed', function() {
                        // 3 seconds after the center of the map has changed, pan back to the
                        // marker.
                        window.setTimeout(function() {
                            map.panTo(marker.getPosition());
                        }, 3000);
                    });
                }









            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnc2mJFcaQ7MEM4j-jLDtjaV4PTaIApgc&callback=initMap" async defer></script>
        </div>

        <div class="results">
            <p><span class="results-count">x</span> Results</p>
        </div>
    </div>

</div>