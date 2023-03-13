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
    east: 127.79651855659404,
  };

  function initMap() {
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 8,
      mapTypeId: 'hybrid',
      center: { lat: 16.549020362670005, lng: 121.17665325405989},
      mapTypeControl: true,
      mapTypeControlOptions: {
        style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
        position: google.maps.ControlPosition.TOP_CENTER,
      },
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
    console.log(region1);


    const contentString = [];
    for (let i = 0; i < region1.length; i++) {

      contentString[i] ='<div class="w-1/2">' +
        '<div id="siteNotice">' +
        "</div>" +
          '<h1 id="firstHeading" class="firstHeading">' +
          region1[i].name
          '</h1>' +
      "</div>";

    }
    for (let i = 0; i < region1.length; i++) {
      const infowindow = new google.maps.InfoWindow({
        content: contentString[i],
        ariaLabel: "Sample",
      });

      const marker = new google.maps.Marker({
        position: { lat: region1[i].latitude, lng: region1[i].longitude},
        map,
        title: "Uluru (Ayers Rock)",
      });

      infowindow.open({
        anchor: marker,
        map,
      });
    }
  

  }

  window.initMap = initMap;
  
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqrwTHtdIIy2XFwP3GkVGaMqtEfjjwJuY&callback=initMap" type="text/javascript"></script>

  <!-- Delete Article Modal -->
  <div x-data="{ modalDelete: false }" class="grid grid-cols-1 gap-4 place-content-center">
    <button @click="modalDelete =!modalDelete" class="block flex justify-center pr-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 stroke-rose-700 transition ease-in-out hover:-translate-y-1 hover:scale-125  duration-500">
        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
        </svg>
    </button>

    <div x-show="modalDelete" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
            <div x-cloak @click="modalDelete = false" x-show="modalDelete" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0" 
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100" 
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
            ></div>

            <div x-cloak x-show="modalDelete" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl"
            >

                <!-- Delete Article -->
                <form action="" method="POST">
                    @csrf
                        <!--body-->
                        <div class="text-center p-5 flex-auto justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 -m-1 flex items-center text-red-500 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 flex items-center text-red-500 mx-auto" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                                        <h2 class="text-xl font-bold py-4 ">Are you sure?</h3>
                                        <p class="text-sm text-gray-500 px-8">Do you really want to delete this article?
                                This process cannot be undone</p>    
                        </div>
                        <!--footer-->
                        <div class="p-3  mt-2 text-center space-x-4 md:block">
                            <button @click="modalDelete = false" type="button" class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">
                                Cancel
                            </button>
                            <button class="mb-2 md:mb-0 bg-red-500 border border-red-500 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-red-600">Delete</button>
                        </div>
                </form>
                <!-- Delete Article -->
            </div>
        </div>
    </div>
</div>
<!-- /Delete Article Modal -->


@endsection

@section('js')

@endsection