
<?php
    // All data from db
    global $wpdb;
    $wma = $wpdb->get_results("SELECT * FROM wp_wma;");

    $fp = fopen('wma.json', 'w');
    fwrite($fp, json_encode($wma));
    fclose($fp);
?>

<div class="search-panel">
    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="all">
            <div class="search">
                <div class="fuzzy-search">
                    <p>I am looking for a Winthrop Medical Affiliate:</p>
                    <form>
                        <input type="text" class="form-control search-all" id="search-all" placeholder="Search by keywords">
                    </form>
<!--                    <i class="fa fa-spinner fa-pulse fa-1x fa-fw margin-bottom"></i>-->
                </div>
                <div class="specialty">
                    <p>I am looking for a Winthrop Medical Affiliate that specializes in:</p>
                    <select class="form-control specialties">
                        <option>All Specialties</option>
                    </select>
<!--                    <i class="fa fa-spinner fa-pulse fa-1x fa-fw margin-bottom"></i>-->
                </div>
                <div class="wma-pagination"></div>

            </div>

        </div>

        <div class="map">
            <div id="map"></div>
            <script>

                function initMap() {

                var center = new google.maps.LatLng (40.8483063,-73.1186585);
                var mapOptions = {
                    zoom: 9,
                    center: center,
                    scrollwheel: false
                };
                map = new google.maps.Map(document.getElementById('map'), mapOptions);

                // Data in JSON Format
//                var data = "/wma.json";
//
//                for (var i in data) {
//                    var name = data[i].name;
//                    var link = data[i].link;
//                    var address = data[i].address;
//                    var phone = data[i].phone;
//                    var count = $('.result').length + 1;
//                    var lng = data[i].lng;
//                    var lat = data[i].lat;
//                    var latlng = new google.maps.LatLng(lat, lng);
//
//                    var marker = new google.maps.Marker({
//                        title: name,
//                        position: latlng,
//                        map: map
//                    });
//
//                    var infowindow = new google.maps.InfoWindow({
//                        content: '<h5>' + name + '</h5>' + '<p>' + address + '</p>'
//                    });
//
//                    marker.addListener('click', function() {
//                        infowindow.open(map, marker);
//                    });
//
//                    map.addListener('center_changed', function() {
//                        // 3 seconds after the center of the map has changed, pan back to the
//                        // marker.
//                        window.setTimeout(function() {
//                            map.panTo(marker.getPosition());
//                        }, 3000);
//                    });

                //}
            }
            </script>
            <script type="text/javascript">
                $(document).ready(function() {

                    $('#search-all').keyup(function () {
                        var yourtext = $(this).val();
                        var hidden = $("<li class='result' style='display: none'>");
                        console.log(hidden.length);
                        if (yourtext.length > 0) {
                            var abc = $('li').filter(function () {
                                var str = $(this).text();
                                var re = new RegExp(yourtext, "i");
                                var result = re.test(str);
                                if (!result) {
                                    return $(this);
                                    console.log(hidden.length);
                                    console.log(abc);
                                }

                            }).hide();
                        } else {
                            $("li").show();
                        }
                    });

                    $('.wma-pagination').pagination({
                        dataSource: function(done){
                            $.ajax({
                                type: 'GET',
                                url: '/wma.json',
                                success: function(response){
                                    done(response);
                                    $.each(response,function(key,value)
                                    {
                                        var option = $('<option />').val(value.id).text(value.special);
                                        $(".specialties").append(option);
                                    });
                                }
                            });
                        },
                        locator: 'name',
                        totalNumber: 120,
                        pageSize: 15,
                        className: 'paginationjs-theme-blue paginationjs-big',

                        callback: function(data, pagination) {
                            var html = template(data);
                            $('.wma-results').html(html);
                        }

                    })


                    function template(data) {

                        var html =
                        "<ul id='pagination' class='col-1'>";
                        $.each(data, function(index, item){
                            html += '' +
                            "<li class='result'>"
                                +"<img src='https://placehold.it/300x100'>"
                                +"<p><a class='name'" + 'href=' + "'" + item.link + "'" + ">" + item.name + "</a></p>"
                                +"<p>" + item.address + "</p>"
                                +"<p><a class='phone'" + 'href=' + "tel:" + item.phone.replace(/\D/g,'') + "" + ">" + item.phone + "</a></p>"

                            +"</li>" + "<hr>";
                        });
                        html += "</ul>";
                        return html;
                    }

                });
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnc2mJFcaQ7MEM4j-jLDtjaV4PTaIApgc&callback=initMap" async defer></script>
        </div>

        <div class="results">
            <div class="container">
                <div class="row">
                    <div class="col-md-11 border-top">
<!--                        <p class="results-count">Count</p>-->

                        <div class="wma-results"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>