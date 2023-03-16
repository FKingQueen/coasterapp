@extends('layouts.dashboard')

@section('css')

@endsection

@section('content')
<!-- <div class="w-full flex justify-center ">
    <iframe src="https://silentnatexd.users.earthengine.app/view/coaster" title="W3Schools Free Online Web Tutorials"  width="100%" height="980" style="border:none;"></iframe>
</div>   -->
<div id="map" class="h-screen"></div>
<script>
  
  const LUZON= {
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
      latLngBounds: LUZON,
      strictBounds: false,
    },
    });

    var region1 = @json($region1);

    const infoWindow = new google.maps.InfoWindow();

    var provices = document.getElementById("provice");

    const card = document.getElementById("pac-card");
    map.controls[google.maps.ControlPosition.RIGHT_TOP].push(card);
    card.style.display ="none";
    const description = document.getElementById("description");
    const graph = document.getElementById("graph");
    const video = document.getElementById("video");

    description.style.display ="none";
    graph.style.display ="none";
    video.style.display ="none";



    for (let i = 0; i < region1.length; i++) {
      const marker = new google.maps.Marker({
        position: { lat: region1[i].latitude-.1, lng: region1[i].longitude},
        map,
        animation: google.maps.Animation.DROP,
        icon: "{{ asset('img/sample3.png') }}",
        title: region1[i].name,
        optimized: false,
      });

      marker.myData = i;

      const markerCenter = new google.maps.Marker({
        position: { lat: 16.545563, lng: 123.424705},
        map,
        optimized: false,
        visible: false,
      });

      marker.addListener("click", () => {
        map.panTo(markerCenter.getPosition());

        // show card
        card.style.display ="block";

        console.log('Marker ' + marker.myData + ' has been clicked');
        console.log('Value: ' + provices.value );
        provices.value ="none"

        for(let k = 0; k < 4; k++){
          if(marker.myData == k){
            document.getElementById('title').innerHTML = region1[k].name;
          }
          if( marker.myData == ){

          }
        }

      });

      map.addListener("drag", () => {
        // hide card
        card.style.display ="none";
      });

    }

    }

  window.initMap = initMap;
  
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqrwTHtdIIy2XFwP3GkVGaMqtEfjjwJuY&callback=initMap" type="text/javascript"></script>

<style>

.pac-card {
  background-color: #fff;
  border: 0;
  width: 700px;
  border-radius: 2px;
  box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
  margin-right: 250px;
  padding: 0 0.5em;
  font: 400 18px Roboto, Arial, sans-serif;
  overflow: hidden;
  font-family: Roboto;
  padding: 0;
}

#pac-container {
  padding-bottom: 12px;
  margin-right: 12px;
}

.pac-controls {
  display: inline-block;
  padding: 5px 11px;
}

.pac-controls label {
  font-family: Roboto;
  font-size: 13px;
  font-weight: 300;
}

#pac-input {
  background-color: #fff;
  font-family: Roboto;
  font-size: 15px;
  font-weight: 300;
  margin-left: 12px;
  padding: 0 11px 0 13px;
  text-overflow: ellipsis;
  width: 400px;
}

#pac-input:focus {
  border-color: #4d90fe;
}

#title {
  color: #fff;
  background-color: #4d90fe;
  font-size: 25px;
  font-weight: 500;
  padding: 6px 12px;
}
</style>
<div class="pac-card" id="pac-card">
      <div>
        <div id="title" class="text-center"></div>
        <div id="type-selector" class="pac-controls w-full">
          <div class="text-center mb-2 mt-1">
            <h1 class="text-base">
              Height of Water Level during Typhoon
            </h1>
          </div>
          <div>
            <select id="provice" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-100 focus:border-blue-100 block w-full p-2.5">
                <option selected disabled value="none">Choose a Typhoon</option>
                <option value="0">Typhoon 1</option>
                <option value="1">Typhoon 2</option>
                <option value="2">Typhoon 3</option>
                <option value="3">Typhoon 4</option>
            </select>
          </div>
          <div id="description" class="mt-2">
            <h1>
                Description: 
            </h1>
          </div>
          <div id="graph">
            <h1>
                Graph: 
            </h1>
          </div>
          <div id="video">
            <h1>
                Video/Link: 
            </h1>
          </div>
      </div>
    </div>

@endsection

@section('js')

@endsection