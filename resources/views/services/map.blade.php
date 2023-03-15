@extends('layouts.dashboard')

@section('css')

@endsection

@section('content')
<!-- <div class="w-full flex justify-center ">
    <iframe src="https://silentnatexd.users.earthengine.app/view/coaster" title="W3Schools Free Online Web Tutorials"  width="100%" height="980" style="border:none;"></iframe>
</div>   -->
<div id="map" class="h-screen"></div>
<script>
  // var region1 = @json($region1);

  // var map;
  // function initMap() {
  //   map = new google.maps.Map(document.getElementById('map'), {
  //     center: {lat: 16.549020362670005, lng: 121.17665325405989},
  //     mapTypeId: 'satellite',
  //     zoom: 8,
  //     mapTypeId: google.maps.MapTypeId.HYBRID,
  //   });

  //   for (let i = 0; i < region1.length; i++) {
      
  //   var marker = new google.maps.Marker({
  //   position: {lat: region1[i].latitude, lng: region1[i].longitude},
  //   map: map,
  //   animation:google.maps.Animation.BOUNCE,
  //   title: region1[i].name,
    
  //   });

  
  //   /*Google Map Marker Click Function*/
    
  //   google.maps.event.addListener(marker, 'click', (function(marker) {
  //     return function() {
  //       const modalToOpen =  document.getElementById("main-modal")
  //       modalToOpen.classList.remove('fadeOut');
  //       modalToOpen.classList.add('fadeIn');
  //       modalToOpen.style.display = 'flex';
  //       map.setZoom(9);
  //     }
  //   })(marker));
    
  //   }

    
  // }
  const PHILIPPINES= {
    north: 18.96935395317229,
    south: 13.848818938737832,
    west: 114.41419433784404,
    east: 129.79651855659404,
  };

  function initMap() {
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 8,
      mapTypeId: 'hybrid',
      center: { lat: 16.549020362670005, lng: 121.17665325405989},
      mapTypeControl: true,
      zoomControl: true,
      zoomControlOptions: {
        position: google.maps.ControlPosition.LEFT_CENTER,
      },
      scaleControl: true,
      streetViewControl: true,
      streetViewControlOptions: {
        position: google.maps.ControlPosition.LEFT_TOP,
      },
      fullscreenControl: true,
      restriction: {
      latLngBounds: PHILIPPINES,
      strictBounds: false,
    },
    });

    var region1 = @json($region1);

    // for (let i = 0; i < region1.length; i++) {
    //   const cityCircle = new google.maps.Circle({
    //     strokeColor: "#FF0000",
    //     strokeOpacity: 0.8,
    //     strokeWeight: 2,
    //     fillColor: "#FF0000",
    //     fillOpacity: 0.35,
    //     map,
    //     center: { lat: region1[i].latitude, lng: region1[i].longitude},
    //     radius: 39928.215253,
    //   });
    // }

  //   const svgMarker = {
  //   path: "M-1.547 12l6.563-6.609-1.406-1.406-5.156 5.203-2.063-2.109-1.406 1.406zM0 0q2.906 0 4.945 2.039t2.039 4.945q0 1.453-0.727 3.328t-1.758 3.516-2.039 3.070-1.711 2.273l-0.75 0.797q-0.281-0.328-0.75-0.867t-1.688-2.156-2.133-3.141-1.664-3.445-0.75-3.375q0-2.906 2.039-4.945t4.945-2.039z",
  //   fillColor: "blue",
  //   fillOpacity: 0.6,
  //   strokeWeight: 0,
  //   rotation: 0,
  //   scale: 2,
  //   anchor: new google.maps.Point(0, 20),
  // };
    // Create an info window to share between markers.
    const infoWindow = new google.maps.InfoWindow();

    for (let i = 0; i < region1.length; i++) {
      const marker = new google.maps.Marker({
        position: { lat: region1[i].latitude-.1, lng: region1[i].longitude},
        map,
        animation: google.maps.Animation.DROP,
        icon: "{{ asset('img/sample3.png') }}",
        title: region1[i].name,
        optimized: false,
      });


      const markerCenter = new google.maps.Marker({
        position: { lat: 16.545563, lng: 123.424705},
        map,
        optimized: false,
        visible: false,
      });

      marker.addListener("click", () => {
        // infoWindow.close();
        // infoWindow.setContent(marker.getTitle());
        // infoWindow.open(marker.getMap(), marker);
        map.panTo(markerCenter.getPosition());
        // map.setCenter(markerCenter.getPosition());
        // map.setCenter({ lat: 17.104225, lng: 124.229317});
      });



      // map.addListener("center_changed", () => {
      //   // 3 seconds after the center of the map has changed, pan back to the
      //   // marker.
      //   window.setTimeout(() => {
      //     map.panTo(markerCenter.getPosition());
      //   }, 3000);
      // });

    }

  }

  window.initMap = initMap;
  
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqrwTHtdIIy2XFwP3GkVGaMqtEfjjwJuY&callback=initMap" type="text/javascript"></script>

<!-- /Delete Article Modal -->


@endsection

@section('js')

@endsection