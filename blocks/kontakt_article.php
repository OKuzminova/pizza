<!--
<div id="container"> 
			<div class="center">
				<div class="page-wrapper">
					<div class="main">
											
							<div id="post-14" class="post-14 page type-page status-publish hentry">
								<div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid maps-on-contact vc_row-no-padding"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="wpb_content_element vc_steweys_google_maps"><style>  .mapStyleClass { height: 500px; }  </style> 
				<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script>
				<script>
				
				function initialize() {
					  var mapOptions = {
						zoom: 15,
						center: new google.maps.LatLng(44.5749475, 33.5168110),
						scrollwheel: false,
						}
					  var map = new google.maps.Map(document.getElementById('map_canvas'),
													mapOptions);

					  setMarkers(map, places);
					}

					/**
					 * Data for the markers consisting of a name, a LatLng and a zIndex for
					 * the order in which these markers should display on top of each
					 * other.
					 */
					var places = [ [ "Place1", 44.5749475,33.5168110, 1] ] ;


					function setMarkers(map, locations) {
					  // Add markers to the map

					  // Marker sizes are expressed as a Size of X,Y
					  // where the origin of the image (0,0) is located
					  // in the top left of the image.

					  // Origins, anchor positions and coordinates of the marker
					  // increase in the X direction to the right and in
					  // the Y direction down.
					  var image = {
						url: 'http://seva-svs.com/wp-content/uploads/2015/12/location_map-e1460716829726.png',
						// This marker is 20 pixels wide by 32 pixels tall.
						//size: new google.maps.Size(20, 32),
						// The origin for this image is 0,0.
						origin: new google.maps.Point(0,0),
						// The anchor for this image is the base of the flagpole at 0,32.
						anchor: new google.maps.Point(0, 32)
					  };
					  // Shapes define the clickable region of the icon.
					  // The type defines an HTML &lt;area&gt; element 'poly' which
					  // traces out a polygon as a series of X,Y points. The final
					  // coordinate closes the poly by connecting to the first
					  // coordinate.
					  var shape = {
						  coords: [1, 1, 1, 20, 18, 20, 18 , 1],
						  type: 'poly'
					  };
					  for (var i = 0; i < locations.length; i++) {
						var beach = locations[i];
						var myLatLng = new google.maps.LatLng(beach[1], beach[2]);
						var marker = new google.maps.Marker({
							position: myLatLng,
							map: map,
							icon: image,
							shape: shape,
							title: beach[0],
							zIndex: beach[3]
						});
					  }
					}

					google.maps.event.addDomListener(window, 'load', initialize);
									</script> <div id="map_canvas" class="mapStyleClass"></div><div class="center"><div class="contact-text-phone"><div class="contact-icon-wrap"><i class="contact-icon icon-phone"></i></div><div class="contact-text">Заказать</div><div class="contact-phone">8(978)148-48-68</div></div><div class="contact-shadow"></div></div></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<h4 style="text-align: center;">Адрес</h4>
<p style="text-align: center;">ул. Павла Силаева, 8<br />
Севастополь, Россия</p>
<p style="text-align: center;"><a href="http://seva-svs.com/">seva-svs.com</a></p>
<p style="text-align: center;"><a href="https://vk.com/seva.vsemogushy">vk.com/seva.vsemogushy</a></p>

		</div>
	</div>
</div></div></div>-->