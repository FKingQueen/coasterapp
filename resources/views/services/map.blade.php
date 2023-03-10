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
      mapTypeId: 'satellite',
      zoom: 8
    });
    var marker = new google.maps.Marker({
    position: {lat: 16.549020362670005, lng: 121.17665325405989},
    map: map,
    title: 'Hello World!'
  });
  
  var infowindow = new google.maps.InfoWindow();
  /*Google Map Marker Click Function*/
  google.maps.event.addListener(marker, 'click', (function(marker) {
  return function() {
    const modalToOpen =  document.getElementById("main-modal")
    modalToOpen.classList.remove('fadeOut');
    modalToOpen.classList.add('fadeIn');
    modalToOpen.style.display = 'flex';
  }
  })(marker));
  }
  
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqrwTHtdIIy2XFwP3GkVGaMqtEfjjwJuY&callback=initMap" type="text/javascript"></script>
<!-- component -->

	<div id="main-modal" class="main-modal fixed w-full inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7);">
		<div class="border border-blue-500 shadow-lg modal-container bg-white w-4/12 md:max-w-11/12 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
			<div class="modal-content py-4 text-left px-6">
				<!--Title-->
				<div class="flex justify-between items-center pb-3">
					<p class="text-2xl font-bold text-gray-500">Add Caretaker</p>
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
                        <div class="">
                            <div class="">
                                <label for="names" class="text-md text-gray-600">Full Names</label>
                            </div>
                            <div class="">
                                <input type="text" id="names" autocomplete="off" name="names" class="h-3 p-6 w-full border-2 border-gray-300 mb-5 rounded-md" placeholder="Example. John Doe">
                            </div>
                            <div class="">
                                <label for="phone" class="text-md text-gray-600">Phone Number</label>
                            </div>
                            <div class="">
                                <input type="text" id="phone" autocomplete="off" name="phone" class="h-3 p-6 w-full border-2 border-gray-300 mb-5 rounded-md" placeholder="Example. 0729400426">
                            </div>
                            <div class="">
                                <label for="id_number" class="text-md text-gray-600">ID Number</label>
                            </div>
                            <div class="">
                                <input type="number" id="id_number" autocomplete="off" name="id_number" class="h-3 p-6 w-full border-2 border-gray-300 mb-5 rounded-md" placeholder="Caretaker's ID number">
                            </div>
                        </div>
                    </form>
				</div>
				<!--Footer-->
				<div class="flex justify-end pt-2 space-x-14">
					<button
						class="px-4 bg-gray-200 p-3 rounded text-black hover:bg-gray-300 font-semibold" onclick="closeModal()">Cancel</button>
					<button
						class="px-4 bg-blue-500 p-3 ml-3 rounded-lg text-white hover:bg-teal-400" >Confirm</button>
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