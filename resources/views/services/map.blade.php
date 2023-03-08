@extends('layouts.dashboard')

@section('css')

@endsection

@section('content')
<!-- <div class="w-full flex justify-center ">
    <iframe src="https://silentnatexd.users.earthengine.app/view/coaster" title="W3Schools Free Online Web Tutorials"  width="100%" height="980" style="border:none;"></iframe>
</div> -->  
<div id="map" class="h-screen"></div>
<script>
  var map;
  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: 16.549020362670005, lng: 121.17665325405989},
      zoom: 8
    });
  }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqrwTHtdIIy2XFwP3GkVGaMqtEfjjwJuY&callback=initMap" type="text/javascript"></script>
@endsection

@section('js')

@endsection