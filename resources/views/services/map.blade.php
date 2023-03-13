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
      mapTypeId: 'satellite',
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
  }

  window.initMap = initMap;
  
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqrwTHtdIIy2XFwP3GkVGaMqtEfjjwJuY&callback=initMap" type="text/javascript"></script>


	<div id="main-modal" class="main-modal fixed w-full inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7);">
		<div class="border border-blue-500 shadow-lg modal-container bg-white w-4/12 md:max-w-11/12 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
			<div class="modal-content py-4 text-left px-6">
				<!--Title-->
				<div class="flex justify-between items-center pb-3">
					<p class="text-2xl font-bold text-gray-500">PROVICE</p>
					<div class="modal-close cursor-pointer z-50" onclick="closeModal()">
						<svg class="fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
							viewBox="0 0 18 18">
							<path
								d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
							</path>
						</svg>
					</div>
				</div>
				<!--Body-->
				<div class="my-5 mr-5 ml-5 flex justify-center">
                    <form action="" method="POST" id="add_caretaker_form"  class="w-full">
                    </form>
				</div>
				<!--Footer-->
				<div class="flex justify-end pt-2 space-x-14">
					<!-- <button class="px-4 bg-blue-500 p-3 ml-3 rounded-lg text-white hover:bg-teal-400" >Exit</button> -->
				</div>
			</div>
		</div>
	</div>

<script>

    all_modals = ['main-modal']
    all_modals.forEach((modal)=>{
        const modalSelected = document.querySelector('.'+modal);
        modalSelected.classList.remove('fadeIn');
        modalSelected.classList.add('fadeOut');
        modalSelected.style.display = 'none';
    })

    function closeModal(){
        const modalToClose =  document.getElementById("main-modal")
        modalToClose.classList.remove('fadeIn');
        modalToClose.classList.add('fadeOut');
        setTimeout(() => {
            modalToClose.style.display = 'none';
        }, 500);
    }
</script> 

@endsection

@section('js')

@endsection