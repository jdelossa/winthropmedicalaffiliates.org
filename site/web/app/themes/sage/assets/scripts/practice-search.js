// Init Google Map
function initMap() {
    var center = new google.maps.LatLng(40.8508500, -73.1186585);
    var mapOptions = {
        zoom: 9,
        center: center,
        scrollwheel: false,
        draggable: true,
    };
    markers = [];

    map = new google.maps.Map(document.getElementById('map'), mapOptions);
    infowindow = new google.maps.InfoWindow();

    map.addListener('click', function () {
        infowindow.close();
    });

}


// Pagination with Map
$(document).ready(function() {
    var container = $('.wma-pagination');
    container.pagination({
        dataSource:    function (done) {
            $.ajax({
                type: 'GET',
                url: '/wma.json',
                success: function(response){
                    // Init response
                    done(response);

                    // Specialties List
                    var specialty = [];

                    $.each(response,function(key,value){
                        $.unique(specialty.sort());
                        specialty.sort();
                        specialty.push(value.special);
                    });

                    $.each(specialty, function(key, value){
                        var option = $('<option />').text(value);
                        $(".specialties").append(option);
                    });
                }
            });
        },
        locator: '',
        totalNumber: 120,
        pageSize: 6,
        className: 'paginationjs-theme-blue paginationjs-big',

        callback: function(data, pagination) {
            var html = template(data);
            $('.wma-results > .row').html(html);

            // Maps - Add Marker
            function addMarker(location) {
                $.each(data, function (index, item) {
                    var latlng = new google.maps.LatLng(item.lat, item.lng);

                    var marker = new google.maps.Marker({
                        title: item.name,
                        position: latlng,
                        map: map,
                        animation: google.maps.Animation.DROP
                    });
                    markers.push(marker);

                    marker.addListener('click', function () {
                        infowindow.setContent("<a><h4>" + item.name + "</h4>" + "<p>" + item.address + "</p></a>");
                        infowindow.open(map, marker);
                    })

                });
            } addMarker();

            // Maps - Delete Marker
            function deleteMarker(location) {
                $.each(markers, function (index){
                    markers[index].setMap(null)
                });
                markers = [];
                addMarker();
            } deleteMarker();
        }
    });

    function template(data) {
        var html = "<ul class='pagination'>";

        $.each(data, function (index, item) {
            // Template
            html += '' +
                "<li class='result col-md-6 col-sm-12 clearfix'>"
                + "<img src='https://placehold.it/250x200' class='practice-thumbnail'>"
                + "<p><a class='name'" + 'href=' + "'" + item.link + "'" + ">" + item.name + "</a></p>"
                + "<p class='address'>" + item.address + "</p>"
                + "<p><a class='phone'" + 'href=' + "tel:" + item.phone.replace(/\D/g, '') + "" + ">" + item.phone + "</a></p>"
                + "<br><hr>"
                + "</li>";
        });

        html += "</ul>";
        return html;
    }
});