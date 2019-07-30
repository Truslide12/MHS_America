      <div class="well" id="preform" style="padding: 0px 100px;text-align: center;display: none">
         <h2>A picture is worth 1,000 words. Write an essay.</h2>
      </div>

      <div class="well" id="frmcontainer" style="display: none;">
      @if(Session::has('success'))
      <div class="alert alert-success"><span class="fa fa-check-circle"></span> {{ Session::get('success') }}</div>
      @elseif($errors->any())
      @foreach($errors->all() as $error)
      <div class="alert alert-danger"><span class="fa fa-warning"></span> {{ $error }}</div>
      @endforeach
      @endif

		<!-- wrap below line in curly.. not sure why it is broken all of a sudden.. worked before.. it's the form action!
		 URL::route('editor-edithome-photos-post', ['profile' => $profile['id'], 'home' => $home->id])  
		-->
		<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">

			<div class="panel ">
				<!-- <div class="panel-heading" style="position: relative;">Photos:</div> -->
				<div class="panel-body">


	            <div class="col-xs-12 col-sm-12 text-left" style="border-bottom: 2px solid #eee;padding: 10px;padding-top: 0px;margin-bottom: 10px;">
	               <h4 style="margin-bottom: -.1em;font-weight: bold;font-size: 1.5em;"> <i class="fa fa-camera"></i> Photos</h4>
	            </div>

				<div class="col-xs-12 col-sm-8 text-left" style="border-bottom: 2px solid #eee;padding: 10px;padding-top: 0px;margin-bottom: 10px;">
					<div id="photo-demo" style="width: 100%;height: 300px;background: silver;display: flex;">
						<h4 style="margin: auto auto;" id="photo_slot_text">Loading..</h4>
					</div>

					<div style="display:flex;width: 20%;height: 50px;float: right;border-right: 1px solid silver;background: rgb(227, 229, 232);cursor: pointer;" onclick="ready_photo_slot(this.id);" id="5"><p style="margin: auto auto;" id="tab-5"></p></div>
					<div style="display:flex;width: 20%;height: 50px;float: right;border-right: 1px solid silver;background: rgb(227, 229, 232);cursor: pointer;" onclick="ready_photo_slot(this.id);" id="4"><p style="margin: auto auto;" id="tab-4"></p></div>
					<div style="display:flex;width: 20%;height: 50px;float: right;border-right: 1px solid silver;background: rgb(227, 229, 232);cursor: pointer;" onclick="ready_photo_slot(this.id);" id="3"><p style="margin: auto auto;" id="tab-3"></p></div>
					<div style="display:flex;width: 20%;height: 50px;float: right;border-right: 1px solid silver;background: rgb(227, 229, 232);cursor: pointer;" onclick="ready_photo_slot(this.id);" id="2"><p style="margin: auto auto;" id="tab-2"></p></div>
					<div style="display:flex;width: 20%;height: 50px;float: right;border-right: 1px solid silver;border-left: 1px solid silver;background: rgb(227, 229, 232);cursor: pointer;" onclick="ready_photo_slot(this.id);" id="1" class="activeslot"><p style="margin: auto auto;" id="tab-1"></p></div>

	            </div>

	            <div class="col-xs-12 col-sm-4 text-left" style="border-bottom: 2px solid #eee;padding: 10px;padding-top: 0px;margin-bottom: 10px;">
	            <h4 style="font-weight: bold;">Make your photos count!</h4>
	            You are limited to 5 photos per home. But want to hear some great news? 5 is all you'll ever need! Let us help you find the 
	            best photos for your profile.

	            <hr>

		        <select id="photo-tag" class="form-control" onchange="change_slot_label(this.value);">
		        	<option value="1">Outside Home</option>
		            <option value="2">Kitchen</option>
		            <option value="3">Living Room</option>
		            <option value="4">Dining Room</option>
		            <option value="5">Bedroom</option>
		            <option value="6">Bathroom</option>
		            <option value="7">Master Bedroom</option>
		            <option value="8">Master Bath</option>
		            <option value="9">Car Port / Garage / Shed</option>
		            <option value="10">Deck / Patio / Porch</option>
		            <option value="11">Front Yard</option>
		            <option value="12">Back Yard</option>
		            <option value="100">Other</option> 	
	            </select>
	            <button type="button" class="btn btn-primary" id="photoCropButton" style="margin-top: 3px;">Select Image</button>
	            <!-- <a href="#" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#coverEditorBox">Add a photo</a> -->
	            <hr>

	            <strong>Tip:</strong><br>
	            <p>
	            	Take a picture of your home from an angle. It's nice to have 1 photo show 2 faces of the home.
	            </p>

	            </div>

				<!-- <a href="#" class="btn btn-lg btn-primary">Upload file...</a> -->

				</div>
			</div>

			<div class="form-group margin-y">
				<div class="col-md-12">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" id="current_step" value="home-photos">
					<button type="submit" class="btn btn-lg btn-primary cta pull-left" onclick="Editor.MoveBack();"> <i class="fa fa-angle-left"></i> Back</button>
					<button type="button" id="opts-step" class="btn btn-lg btn-primary cta pull-right" onclick="Editor.MoveNext();">Finish <i class="fa fa-angle-right"></i></button>
				</div>
			</div>
		</form>	
	</div>


<div class="modal fade" id="coverEditorBox" role="modal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Upload Cover Photo</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-8">
						<div id="photoUpload"></div>
					</div>
					<div class="col-sm-4">
						<button type="button" class="btn btn-primary" id="photoCropButton">Select Image</button>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<style type="text/css">
	.photo-button{border:2px dashed #428bca;background:#efefef;display:inline-block;width:150px;height:150px;}
	.photo-button:hover,.photo-button:focus{border-color:#2a6496;}
	.photo-button .fa{font-size:200%;width:20px;height:20px;margin:65px;}
	.photo-button:hover .fa,.photo-button:focus .fa,.photo-button .fa.hover{display:none;}
	.photo-button:hover .fa.hover,.photo-button:focus .fa.hover{display:inline-block;}

	.modal-content { margin-top: 20%; }
	.modal-header .close { float: right; }
	}

</style>


<script type="text/javascript">
			function init(){
				if ( Editor.settings.wizard == false ) {
	                $("#preform").hide();
	                $("#frmcontainer").show();
	                ready_photo_manager();
	            } else {
               		$("#preform").fadeIn(1600, function(){
               			showfrm();
               		});
	            }
				
			}

         function showfrm(){
            $("#preform").fadeOut(500, function(){
               $("#frmcontainer").fadeIn(500);
               ready_photo_manager();
            });

         }

			function ready_photo_manager() {
				for ( i=0; i<=5; i++ ) {
					if ( typeof Editor.home.photos[i] === 'object' && Editor.home.photos[i] !== null ) {
						if ( Editor.home.photos[i].hasOwnProperty("id") ) {
							photodata.photos[i] = Editor.home.photos[i].url;
							photodata.slots[i] = parseFloat(Editor.home.photos[i].id);
						}
					}
				}
				ready_photo_slot(1);
				
				//setTimeout(function(){ ready_photo_slot(1); }, 500);
			}
//var imageCrop=function(e,t,i){function o(){H.onload=function(){return H.width<t||H.height<i?(console.log("Image Crop error: The required dimensions are larger than the target image."),!1):($(e).wrap('<div class="ic-container"></div>').before('                <div class="ic-overlay-n" id="icOverlayN"></div>                <div class="ic-overlay-e" id="icOverlayE"></div>                <div class="ic-overlay-s" id="icOverlayS"></div>                <div class="ic-overlay-w" id="icOverlayW"></div>                <div class="ic-crop-marker" id="icCropMarker">                    <div class="ic-resize-handle-nw" id="icResizeHandleNW"></div>                    <div class="ic-resize-handle-ne" id="icResizeHandleNE"></div>                    <div class="ic-resize-handle-sw" id="icResizeHandleSW"></div>                    <div class="ic-resize-handle-se" id="icResizeHandleSE"></div>                    <div class="ic-move-handle" id="icMoveHandle"></div>                </div>            '),l=$("#icCropMarker"),u=$(e),f=H.width/u.width(),g=H.width/H.height,v=t/i,p=t/f,w=i/f,z(),s(),l.on("mousedown touchstart",n),l.on("mousedown touchstart","#icMoveHandle",d),void R.resolve())},H.src=e.src}function n(e){e.preventDefault(),e.stopPropagation(),C(e),m.on("mousemove touchmove",c),m.on("mouseup touchend",r)}function r(e){e.preventDefault(),m.off("mouseup touchend",r),m.off("mousemove touchmove",c)}function c(e){var o,n,r,c,d={},h=l.outerWidth(),a=l.outerHeight(),f=l.position();d.x=(e.clientX||e.pageX||e.originalEvent.touches[0].clientX)+$(window).scrollLeft(),d.y=(e.clientY||e.pageY||e.originalEvent.touches[0].clientY)+$(window).scrollTop();var g=!1,v=!1,m=!1,H=!1;$(y.evnt.target).is("#icResizeHandleSE")?g=!0:$(y.evnt.target).is("#icResizeHandleSW")?v=!0:$(y.evnt.target).is("#icResizeHandleNW")?m=!0:$(y.evnt.target).is("#icResizeHandleNE")&&(H=!0),g?(o=d.x-y.containerLeft-u.offset().left,n=o/t*i,r=y.containerLeft,c=y.containerTop):v?(o=y.containerWidth-(d.x-y.containerLeft-u.offset().left),n=o/t*i,r=d.x-u.offset().left,c=y.containerTop):m?(o=y.containerWidth-(d.x-y.containerLeft-u.offset().left),n=o/t*i,r=d.x-u.offset().left,c=f.top+a-n):H&&(o=d.x-y.containerLeft-u.offset().left,n=o/t*i,r=y.containerLeft,c=f.top+a-n),c>=0&&r>=0&&Math.round(c+n)<=Math.round(u.height())&&Math.round(r+o)<=Math.round(u.width())&&(W=!0),W&&(0>c?(n=a+f.top,o=n/i*t,c=0,m&&(r=f.left-(o-h)),W=!1):0>r?(o=h+f.left,n=o/t*i,r=0,g&&(c=f.top-(n-a)),W=!1):Math.round(c+n)>Math.round(u.height())?(n=u.height()-c,o=n/i*t,v&&(r=f.left-(o-h)),W=!1):Math.round(r+o)>Math.round(u.width())&&(o=u.width()-r,n=o/t*i,H&&(c=f.top-(n-a)),W=!1),o>p&&n>w?(l.outerWidth(o).outerHeight(n),l.css({left:r,top:c})):((v||m)&&(r-=p-o),(m||H)&&(c-=w-n),l.outerWidth(p).outerHeight(w),l.css({left:r,top:c}))),s()}function d(e){e.preventDefault(),e.stopPropagation(),C(e),m.on("mousemove touchmove",a),m.on("mouseup touchend",h)}function h(e){e.preventDefault(),m.off("mouseup touchend",h),m.off("mousemove touchmove",a)}function a(e){var t,i,o,n={};e.preventDefault(),e.stopPropagation(),o=e.originalEvent.touches,n.x=(e.clientX||e.pageX||o[0].clientX)+$(window).scrollLeft(),n.y=(e.clientY||e.pageY||o[0].clientY)+$(window).scrollTop(),t=n.y-(y.mouseY-y.containerTop),i=n.x-(y.mouseX-y.containerLeft),0>t&&(t=0),t+l.outerHeight()>u.height()&&(t=u.height()-l[0].getBoundingClientRect().height),0>i&&(i=0),i+l.outerWidth()>u.width()&&(i=u.width()-l[0].getBoundingClientRect().width),l.css({top:t,left:i}),s()}function s(){var e=u[0].getBoundingClientRect().width,t=(u[0].getBoundingClientRect().height,l.position().top),i=l.position().left,o=l[0].getBoundingClientRect().width,n=l[0].getBoundingClientRect().height;parseFloat(l.css("border-top-width"));$("#icOverlayN").css({right:e-i-o,height:t,left:i}),$("#icOverlayE").css({left:i+o}),$("#icOverlayS").css({right:e-i-o,top:t+n,left:i}),$("#icOverlayW").css({width:i})}var l,u,f,g,v,p,w,m=$(document),H=new Image,e=$(e).get(0),y={},W=!0,M=!1,R=new $.Deferred;H.crossOrigin="Anonymous",document.addEventListener("keydown",function(e){var t,i,o,t=l.position().top,i=l.position().left;o=e.shiftKey?10:1,37===e.keyCode?i-=o:38===e.keyCode?t-=o:39===e.keyCode?i+=o:40===e.keyCode&&(t+=o),0>t&&(t=0),t+l.outerHeight()>u.height()&&(t=u.height()-l[0].getBoundingClientRect().width),0>i&&(i=0),i+l.outerWidth()>u.width()&&(i=u.width()-l[0].getBoundingClientRect().width),M&&(l.css({top:t,left:i}),s())}),m.click(function(e){M=$(e.target).closest(".ic-container").length?!0:!1});var C=function(e){y.containerWidth=l.outerWidth(),y.containerHeight=l.outerHeight(),y.containerLeft=l.position().left,y.containerTop=l.position().top,y.mouseX=(e.clientX||e.pageX||e.originalEvent.touches[0].clientX)+$(window).scrollLeft(),y.mouseY=(e.clientY||e.pageY||e.originalEvent.touches[0].clientY)+$(window).scrollTop(),y.evnt=e},z=function(){v>g?(l.outerWidth(u.width()),l.outerHeight(l.outerWidth()/t*i),l.css({top:(u.height()-l.height())/2+"px",left:0})):(l.outerHeight(u.height()),l.outerWidth(l.outerHeight()/i*t),l.css({left:(u.width()-l.width())/2+"px",top:0}))};this.crop=function(){var e,o=new Image,n=H.width/u.width(),r=Math.round(l.position().left*n),c=Math.round(l.position().top*n),d=Math.round(l.outerWidth()*n),h=Math.round(l.outerHeight()*n);e=document.createElement("canvas"),e.width=t,e.height=i,e.getContext("2d").drawImage(H,r,c,d,h,0,0,t,i),o.src=e.toDataURL();var a={img:o,left:r,top:c,width:d,height:h,requiredWidth:t,requiredHeight:i};return a},this.position=function(e,t,i,o){$.when(R).done(function(){var n=H.width/u.width();e=Math.round(e/n),t=Math.round(t/n),i=Math.round(i/n),o=Math.round(o/n),l.outerWidth(i).outerHeight(o),l.css({left:e,top:t}),s()})},this.cropReset=function(){z(),s()},$(window).resize(function(){f=H.width/u.width(),p=t/f,w=i/f,z(),s()}),o()};


		var croppicHeaderOptions = {
			uploadData:{
				"from_company": 0,
				"_token": $('meta[name=formtoken]').attr('content'),
			},
			uploadUrl:'edit/photos/upload',
			cropUrl:'edit/photos/crop',
			customUploadButtonId:'photoCropButton',
			modal:false,
			loaderHtml:'<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> ',
			onAfterImgUpload: function(){ $('#cropNote').show(); bindUpload(window.response); },
			onAfterImgCrop: function(){ $('#cropNote').hide(); $('#cropSuccessNote').show(); }
			/* onBeforeImgUpload: function(){ console.log('onBeforeImgUpload') },
			onImgDrag: function(){ console.log('onImgDrag') },
			onImgZoom: function(){ console.log('onImgZoom') },
			onBeforeImgCrop: function(){ console.log('onBeforeImgCrop') }, */
		}

			var croppic = new Croppic('photoUpload', croppicHeaderOptions);
			var photo_labels = new Array;
			photo_labels[1] = { id: 1, name: "Outside Home" };
			photo_labels[2] = { id: 2, name: "Kitchen" };
			photo_labels[3] = { id: 3, name: "Living Room" };
			photo_labels[4] = { id: 4, name: "Dining Room" };
			photo_labels[5] = { id: 5, name: "Bedroom" };

			photo_labels[6] = { id: 6, name: "Bathroom" };
			photo_labels[7] = { id: 7, name: "Master Bedroom" };
			photo_labels[8] = { id: 8, name: "Master Bath" };
			photo_labels[9] = { id: 9, name: "Exterior" };
			photo_labels[11] = { id: 10, name: "Porch" };
			photo_labels[12] = { id: 11, name: "Front Yard" };
			photo_labels[13] = { id: 12, name: "Back Yard" };
			photo_labels[14] = { id: 100, name: "Other" };

			var photodata = {};
			photodata.slots = new Array();
			photodata.slots[1] = null;
			photodata.slots[2] = null;
			photodata.slots[3] = null;
			photodata.slots[4] = null;
			photodata.slots[5] = null;
			active_slot = 1;

			photodata.photos = new Array(6);


			function ready_photo_slot(i) {

				$("#tab-"+active_slot).parent().removeClass("activeslot");
				$("#tab-"+i).parent().addClass("activeslot");
				active_slot = i;

				if ( photodata.slots[i] === null ) { 

				} else {
					$("#tab-"+i).html(photo_labels[photodata.slots[i]].id);
					$("#photo_slot_text").html("Photo "+i+" of 5: "+photo_labels[photodata.slots[i]].name);
					$("#photo-tag").val(photo_labels[photodata.slots[i]].id);
				}

				update_photo_tabs();
				paint_photo_demo();

			}

			function update_photo_tabs() {

				for ( i=1; i<= 5; i++) {
					//console.log(photo_labels[photodata.slots[i]].name)
					if ( photodata.slots[i] === null ) { 
						$("#tab-"+i).html("Add Photo");
						if ( i == 1 ) {
							$("#photo_slot_text").html("Please Select a Photo")
						}
					} else {
						$("#tab-"+i).html(photo_labels[photodata.slots[i]].name);
					}
				}
				
			}
			

			function update_select(i) {
				photodata.slots[active_slot] = i;
				//$("#photo-tag").val(i);
				update_photo_tabs();
			}

			function change_slot_label(id) {
				photodata.slots[active_slot] = parseFloat(id);
				ready_photo_slot(active_slot);
			}

			function bindUpload(r) {
				croppic.reset();
				if ( r.status == "success" ) {
					photodata.photos[active_slot] = r.url;
				}
				update_select( $("#photo-tag").val() );
				paint_photo_demo(active_slot);

				for ( i = 1; i<= 5;i++ ) {
					Editor.home.photos[i] = {id: i, tag: photo_labels[photodata.slots[i]].name, url: photodata.photos[i] };
				}

				

			}

			function paint_photo_demo() {
					console.log("emer", typeof photodata.photos[active_slot])
				if ( typeof photodata.photos[active_slot] == "undefined" ) {
					console.log("switch2empy")
					$("#photo-demo").css({
						"background": "silver",
					});	
				} else {
					$("#photo_slot_text").html("");
					$("#photo-demo").css({
						"background": "url("+photodata.photos[active_slot]+")",
						"background-size": "100% 100%",
						"background-position": "center"
					});	
				}
			}
		</script>