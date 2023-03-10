	<!-- Modal -->
	<div class="modal fade" id="welcomebox" tabindex="-1" role="dialog" aria-labelledby="welcomeboxLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	        <h4 class="modal-title" id="welcomeboxLabel">Welcome to MHS America!</h4>
	      </div>
	      <div class="modal-body">
	        We'd like to take a moment to point you in the right direction. The menu at the top of the page will allow you to search for mobile home communities, mobile homes, vacant spaces and professional services. You can also use the map to browse the national MHS community.
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Thanks!</button>
	      </div>
	    </div>
	  </div>
	</div>

		<script type="text/javascript">
		$('#map').vectorMap({
			map: 'usa_en',
			backgroundColor: 'transparent',
			zoomOnScroll: false,
			enableZoom: false,
			regionStyle: {
				initial: {fill: '#7f8efe', stroke: '#cccccc', 'stroke-width': 1},
				hover: {fill: '#2233aa'},
				selected: {fill: '#00b7ea'}
			},
			onRegionClick: function(element, code, region)
				{
					$('body').append($('<form>').attr('method',"GET").attr('id','link-'+code).attr('action','{{ URL::route('welcome') }}/explore/' + code + '/'));
					$('#link-'+code).append($("#srcinput")).submit();
				}
		}).hide();

		@if($welcomebox == true)
		$('#welcomebox').modal();
		</script>