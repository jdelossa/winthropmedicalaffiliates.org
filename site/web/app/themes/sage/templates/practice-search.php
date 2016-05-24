
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
                <div class="fuzzy-search">
                    <p>I am looking for a Winthrop Medical Affiliate:</p>
                    <form>
                        <input type="text" class="form-control search-all" id="search-all" placeholder="Search by keywords">
                    </form>
                    <i class="fa fa-spinner fa-pulse fa-1x fa-fw margin-bottom"></i>
                </div>
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
            <script type="text/javascript">
                var markers = [];
                function initMap() {
                    var center = new google.maps.LatLng(40.8483063, -73.1186585);
                    var mapOptions = {
                        zoom: 9,
                        center: center,
                        scrollwheel: false
                    };
                    map = new google.maps.Map(document.getElementById('map'), mapOptions);
                }

                $(document).ready(function() {
                    var container = $('.wma-pagination');
                    container.pagination({
                        dataSource:    function (done) {
                            $.ajax({
                                type: 'GET',
                                url: '/wma.json',
                                success: function(response){
                                    done(response);
                                    var specialty = [];
                                    var count = $('#results-count').html(response.length);
                                    $.each(response,function(key,response){
                                        $.unique(specialty.sort());
                                        specialty.sort();
                                        specialty.push(response.special);
                                    });

                                    $.each(specialty, function(index, value){
                                        var option = $('<option />').text(value);
                                        $(".specialties").append(option);
                                    });

                                    $('#search-all').keyup(function () {
                                        var yourtext = $(this).val();

                                        if (yourtext.length > 0) {

                                                $.each(response, function(k, v){
                                                    var abc = $(v).filter(function () {
                                                        var str = $(this).text();
                                                        var re = new RegExp(yourtext, "i");
                                                        var result = re.test(str);
                                                        if (!result) {
                                                            return $(this);

                                                        }
                                                        console.log(response)
                                                    }).hide("li");
                                                })


                                        } else {
                                            $("li").show();
                                        }
                                    });
                                }
                            });
                        },
                        locator: '',
                        totalNumber: 120,
                        pageSize: 10,
                        className: 'paginationjs-theme-blue paginationjs-big',

                        callback: function(data, pagination) {
                            var html = template(data);
                            $('.wma-results > .row').html(html);
                            $.each(data, function (index, data){
                                var latlng = new google.maps.LatLng(data.lat, data.lng);

                                var marker = new google.maps.Marker({
                                    title: data.name,
                                    position: latlng,
                                    map: map
                                });

                                markers.push(marker);

                                var infowindow = new google.maps.InfoWindow({
                                    content: '<h5>' + data.name + '</h5>' + '<p>' + data.address + '</p>'
                                });

                                marker.addListener('click', function() {
                                    infowindow.open(map, marker);
                                });

                            })
                        }
                    });

                    container.addHook('afterPaging', function(){
                        // destroy map markers

                    });

                    function template(data) {
                        var html =
                            "<ul class='pagination'>";
                        $.each(data, function (index, item) {
                            html += '' +
                                "<li class='result col-md-6 col-sm-12 clearfix'>"
                                + "<img src='https://placehold.it/100x100'>"
                                + "<p><a class='name'" + 'href=' + "'" + item.link + "'" + ">" + item.name + "</a></p>"
                                + "<p class='address'>" + item.address + "</p>"
                                + "<p><a class='phone'" + 'href=' + "tel:" + item.phone.replace(/\D/g, '') + "" + ">" + item.phone + "</a></p>"
                                + "<hr>"
                                + "</li>";
                        });
                        html += "</ul>";
                        return html;

                    }

                });

            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnc2mJFcaQ7MEM4j-jLDtjaV4PTaIApgc&callback=initMap" async defer></script>
        </div><!-- end .map -->

        <div class="results">
            <div class="wma-results">
                <p class="results-count"><span id="results-count"></span> results</p>
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