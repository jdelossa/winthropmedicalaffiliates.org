<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
 <!-- <script>
    var myMarkers = [];
    var practices =[];
    //var infowindow = new google.maps.InfoWindow({ content: '' });

    practices = [
      ['Garden City Primary Medical Care', 40.729937,-73.636067, '2', '3', null],
      ['South Shore Cardiovascular Medicine', 40.7163424,-73.5513939, '4', null, null],
      ['Winthrop University', 40.7163424,-73.70, '5', null, null],
      ['South Shore Heart', 40.729937,-73.40, '2', null, null]
    ];

    function initMap() {
      var center = new google.maps.LatLng (40.8483063,-73.1186585);
      var mapOptions = {
        zoom: 9,
        center: center
      };
      map = new google.maps.Map(document.getElementById('map'), mapOptions);

      for (i = 0; i < practices.length; i++) {
        addMarker(practices[i]);
      }
    }

    /* Add Markers to map */
    function addMarker(marker) {
      var title = marker[1];
      var content = marker[1]
      var position = new google.maps.LatLng(practices[i][2], practices[i][3]);
      var category = marker[4];

      practices = new google.maps.Marker({
        title: title,
        content: content,
        position: position,
        category: category,
        map: map
      });
      myMarkers.push(practices);

      /* Marker click listener */
      map.addListner(practices, 'click', (function(practices, content){
        return function () {
          console.log('MyMarker gets pushed');
          infowindow.setContent(content);
          infowindow.opegin(map, practices);
          map.panTo(this.getPosition());
          map.setZoom(10);
        }
      }) (practices, content));
    }
    /* Function to filter markers */
    filterMarkers = function (category) {
      for (i = 0; i < practices.length; i++) {
        marker = myMarkers[i];
        // If is same category or category not picked
        if (marker.category == category || category.length === 0) {
          marker.setVisible(true);
        }
        // Categories don't match
        else {
          marker.setVisible(false);
        }
      }
    }
    /* Initialize Map */
    initMap();
  </script>-->
</head>
