active_mode = 1;


function setMode(mode) {
	deselectCompany();
	$("#name-warning").parent().hide();
	$("#desc_a, #desc_b, #desc_c, #codebox").hide();
	clearForm();
	lockForm();
	switch(parseInt(mode)) {
		case 0:
		 $(".companybtn").attr('disabled', true).css("display", "none");
		 $("#desc_a").show();
		 $("#auth_text").html("I am Authorized to Promote this Community");
		 fromAbove();
		 $("#submitbtn").attr('disabled', false);
		break;
		case 1:
		 $("#business-name").attr("readonly", false);
		 $(".companybtn").html("Create").attr('readonly', false);
		 $("#desc_b").show();
		 $("#auth_text").html("I am Authorized to Create this Company");
		 $("#submitbtn").attr('disabled', true);
		 $(".companybtn").attr('disabled', false).css("display", "initial");
		break;
		case 2:
		 $("#business-name").attr("readonly", false);
		 $(".companybtn").attr('readonly', false);
		 $("#desc_c").show();
		 $("#auth_text").html("I am Authorized to Join this Company");
		 $("#submitbtn").attr('disabled', true);
		 $(".companybtn").html("Create").attr('disabled', false).css("display", "initial");
		break;
	}
	active_mode = mode;
}






	//Allow user to enter in new data
	//to create a new company.
	/*
		Sets up the Company portion of the form
		to create a new company..
	*/
	function createCompany() {
		if ( selected_company ) {
			//
		} else {
			b = $("#business-name").val();
			if ( b.length < 3 ) {
				switch ( user_warnings )
				{
					case 0:
					    console.log("too short!");
					case 1:
					    $("#name-warning").html("Name too short");
					    $("#name-warning").parent().removeClass("alert-success").addClass("alert-danger").show();
					break;
					case 2:
					    $("#popup-modal .modal-title").html("Name to short!");
					    $("#popup-modal .modal-body").html("Please enter longer name!");
					    $("#popup-modal").modal();
					break;
				}
				return false;
			}
			if ( getCompanyMode() == 2 ) {
				switch ( user_warnings )
				{
					case 0:
					    console.log("suggest to your owner/manager");
					case 1:
					    $("#name-warning").html("Thank you for letting us know about <strong>"+b+"</strong>. We'd appreciate you telling us more and <a href=''>sharing us</a> with a manager!");
					    $("#name-warning").parent().removeClass("alert-danger").addClass("alert-success").show();
					break;
					case 2:
					    $("#popup-modal .modal-title").html("Please let your manager know!");
					    $("#popup-modal .modal-body").html("Thank you for using MHSAmerica. Please recommend us to your manager!");
					    $("#popup-modal").modal();
					break;
				}
			} else {
				switch ( user_warnings )
				{
					case 0:
					    console.log("suggest to your owner/manager");
					case 1:
					    $("#name-warning").html("Glad to have you aboard, <strong>"+b+"</strong>. Please let us know a bit more about your company.");
					    $("#name-warning").parent().removeClass("alert-danger").addClass("alert-success").show();
					break;
					case 2:
					    $("#popup-modal .modal-title").html("");
					    $("#popup-modal .modal-body").html("");
					    $("#popup-modal").modal();
					break;
				}	
			}
		}
		unlockForm();
	}



/*
	Expands the "Create Account" form
*/
function create() {
	//$("#loginform").slideUp();
	$("#createform").slideDown();
}



//BASIC ROOT FUNCTIONS

function showBusinessSelectMessage(level, message, title)
{
	switch ( user_warnings )
	{
		case 0:
		  console.log(title+"|"+message);
		case 1:
		  $("#name-warning").html("Please enter longer name!", "Name too short");
		  setBusinessMessageStatus("danger");
		break;
		case 2:
		  $("#popup-modal .modal-title").html("Name to short!");
		  $("#popup-modal .modal-body").html("Please enter longer name!");
		  $("#popup-modal").modal();
		break;
	}
}

function setBusinessMessageStatus(level) {
	$("#name-warning").parent().removeClass("alert-success, alert-danger, alert-warning, alert-info");
	switch ( user_warnings )
	{
		case "success":
		  $("#name-warning").parent().addClass("alert-success");
		break;
		case "danger":
		  $("#name-warning").parent().addClass("alert-danger");
		break;
		case "warning":
		  $("#name-warning").parent().addClass("alert-warning");
		break;
		case "info":
		  $("#name-warning").parent().addClass("alert-info");
		break;
	}
}