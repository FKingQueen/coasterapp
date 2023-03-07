@extends('layouts.dashboard')

@section('css')

@endsection

@section('content')
<!-- <div class="w-full flex justify-center ">
    <iframe src="https://silentnatexd.users.earthengine.app/view/coaster" title="W3Schools Free Online Web Tutorials"  width="100%" height="980" style="border:none;"></iframe>
</div> -->  

<div class="h-full">
  <div id="map" class="h-5/6"></div>
</div>
<script>
  var map;
  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: 16.0832, lng: 120.6200},
      zoom: 8
    });
  }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap" type="text/javascript"></script>
@endsection

@section('js')

@endsection