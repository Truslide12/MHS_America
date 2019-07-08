//////////////////////////////////////////////
/// HomeEditorIO.js
///------------------
/// This JavaScript Library is used for building
/// the data model of a home

var HomeEditorIO = function (id) {

 //Define the home object
 this.home = {};
 this.home.home_id = null;
 this.home.title = null;
 this.home.price = null;
 this.home.sale_type = null;
 this.home.bedrooms = null;
 this.home.bathrooms = null; //.5
 this.home.dimensions = {length: null, width:null, square_footage:null, offsets: 0, json: null },
 this.home.size = null;
 this.home.headline = null;
 this.home.description = null;
 this.home.specs = { siding: 0, skirting: 0, roof_angle: 0, roof_mat: 0, windows: 0, wall_thickness: 0, kitchen_floor: 0, floor: 0, setup: 0, strap: 0 }
 this.home.decal = new Array(null, null, null);
 this.home.serial = new Array(null, null, null);
 this.home.hud = new Array(null, null, null);
 this.home.home_options = { features: [], appliances: [] };
 this.home.photos = new Array(null, null, null, null, null, null);
 this.home.year = null;
 this.home.make = null;
 this.home.model = null;
 this.home.address = null;
 this.home.city = null;
 this.home.state = null;
 this.home.city_id = null;
 this.home.state_id = 1;
 this.home.zipcode = null;
 this.home.space = null;
 this.home.must_move = 0;
 this.home.can_move = 0;
 this.home.status = 1;
 this.home.sold_price = null;
 this.home.exp_date = null;
 this.settings = { steps: {} }
 this.settings.wizard = true;
 this.settings.preValidation = false;
 //Setup some settings..
 this.settings.steps = new Array( "home-intro",
                                  "home-details",
                                  "home-info",
                                  "home-loc",
                                  "home-specs",
                                  "home-opts",
                                  "home-adinfo",
                                  "home-photos",
                                  "home-review");
  if ( id != null ) {
    console.log("Starting Editor with Loaded Obj");
    this.LoadHomeProfile(id);
  } else {
    console.log("Starting Editor with New Obj");
  }
};

HomeEditorIO.prototype.MoveNext = function(step) {
  if ( ! step ) {
    var v = this.CollectValues();
    if ( v ) {
      this.SaveChanges( $("#current_step").val() );
      newPony(this.GetNextPage( $("#current_step").val() ));
    }
  } else {
    newPony(step);
  }
}

HomeEditorIO.prototype.MoveBack = function(step) {
  if ( ! step ) {
    var v = this.CollectValues();
    if ( v ) {
      this.SaveChanges( $("#current_step").val() );
      newPony(this.GetPrevPage( $("#current_step").val() ));
    }
  } else {
    newPony(step);
  }
}

HomeEditorIO.prototype.CollectValues = function() {
  var input_step = $("#current_step").val();
  var is_valid = false;
  switch ( input_step ) {
    case "home-intro":
    //this.home.home_id = 27;
    //this.home.status = 0;
    /*
    $("#details-list > li, #list-process > li").each(function(){
      $(this).removeClass("disabled");
    });
    */
    $("#details-list > li").each(function(){
      $(this).fadeIn();
    });
    this.updateStatus();
      newPony(this.GetNextPage(input_step));
      return;
    break;
    case "home-info":
      is_valid = this.ValidateHomeInfo();
    break;
    case "home-specs":
      is_valid = this.ValidateHomeSpecs();
    break;
    case "home-details":
      is_valid = this.ValidateHomeDetails();
    break;
    case "home-opts":
      is_valid = this.ValidateHomeOptions();
    break;
    case "home-photos":
      is_valid = true;
    break;
    case "home-adinfo":
      is_valid = this.ValidateAdInfo();
    break;
    case "home-review":
      is_valid = this.ValidateOverview();
    break;
    case "home-payment":
      is_valid = true;
    break;
    case "home-loc":
      is_valid = this.ValidateLocation();
    break;
    case "home-finish":
    break;
    default:
    break;
  }

  return is_valid;


}

HomeEditorIO.prototype.SaveToServer = function() {
  this.SaveChanges();
  alert("Saved to Server..");
  console.log("not really tho.. AJAX->REST_API (soon)");
}

HomeEditorIO.prototype.ValidateHomeInfo = function() {
  var rejected = 0;

  if ( $("#make").val() != null && $("#make").val() != '' ) {
    this.home.make = $("#make").val();
    this.AcceptInput("#make");
  } else {
    //this.RejectInput("#make", "empty");
    //rejected++;
  }

  if ( $("#model").val() != null && $("#model").val() != '' ) {
    this.home.model = $("#model").val();
    this.AcceptInput("#model");
  } else {
    //this.RejectInput("#model", "empty");
    //rejected++;
  }

  if ( $("#year").val() != null && $("#year").val() != '' ) {
    if ( isNaN($("#year").val()) )
    {
      this.RejectInput("#year", "nan");
      rejected++
    } else {
      this.home.year = $("#year").val();
      this.AcceptInput("#year");
    }
  } else {
    //this.RejectInput("#year", "empty");
    //rejected++;
  }

  //First Decal is required, subsequent decal is not!
  if ( $("#decal1").val() != null && $("#decal1").val() != '' ) {
    this.home.decal[0] = $("#decal1").val();
    this.AcceptInput("#decal1");
    if ( $("#decal2").val() != null && $("#decal2").val() != '' ) { this.home.decal[1] = $("#decal2").val(); this.AcceptInput("#decal2");}
    if ( $("#decal3").val() != null && $("#decal3").val() != '' ) { this.home.decal[2] = $("#decal3").val(); this.AcceptInput("#decal3");}
  } else {
    //this.RejectInput("#decal1", "empty");
    //rejected++;
  }

  //First Serial is required, subsequent serial is not!
  if ( $("#serial1").val() != null && $("#serial1").val() != '' ) {
    this.home.serial[0] = $("#serial1").val();
    this.AcceptInput("#serial1");
    if ( $("#serial2").val() != null && $("#serial2").val() != '' ) { this.home.serial[1] = $("#serial2").val(); this.AcceptInput("#serial2");}
    if ( $("#serial3").val() != null && $("#serial3").val() != '' ) { this.home.serial[2] = $("#serial3").val(); this.AcceptInput("#serial3");}
  } else {
    this.RejectInput("#serial1", "empty");
    rejected++;
  }

  //First hud is required, subsequent hud is not!
  if ( $("#hud1").val() != null && $("#hud1").val() != '' ) {
    this.home.hud[0] = $("#hud1").val();
    this.AcceptInput("#hud1");
    if ( $("#hud2").val() != null && $("#hud2").val() != '' ) { this.home.hud[1] = $("#hud2").val(); this.AcceptInput("#hud2");}
    if ( $("#hud3").val() != null && $("#hud3").val() != '' ) { this.home.hud[2] = $("#hud3").val(); this.AcceptInput("#hud3");}
  } else {
    //this.RejectInput("#hud1", "empty");
    //rejected++;
  }

  if ( $("#price").val() != null && $("#price").val() != '' ) {
    if ( isNaN($("#price").val()) )
    {
      this.RejectInput("#price", "nan");
      rejected++
    } else {
      this.home.price = $("#price").val();
      this.AcceptInput("#price");
    }
  } else {
    this.RejectInput("#price", "empty");
    rejected++;
  }

  if ( $("#type").val() != null && $("#type").val() != '' ) {
    this.home.sale_type    = $("#type").val();
    //this.AcceptInput("#type");
  } else {
    //this.RejectInput("#type", "empty");
    //rejected++;
  }

  if ( $("#beds").val() != null && $("#beds").val() != '' ) {
    this.home.bedrooms     = $("#beds").val();
    this.AcceptInput("#beds");
  } else {
    this.RejectInput("#beds", "empty");
    rejected++;
  }

  if ( $("#baths").val() != null && $("#baths").val() != '' ) {
    this.home.bathrooms    = $("#baths").val();
    this.AcceptInput("#baths");
  } else {
    this.RejectInput("#baths", "empty");
    rejected++;
  }

  if ( $("#homeSize").val() != null && $("#homeSize").val() != '' ) {
    this.home.size      = $("#homeSize").val();
    this.AcceptInput("#homeSize");
  } else {
    this.RejectInput("#homeSize", "empty");
    rejected++;
  }





  if ( rejected > 0 ) {
    //console.log("Missing "+rejected+" Fields..");
    //$("#count-info").html((8-rejected)+"/8");
    return false;
  } else {
    //$("#count-info").html("8/8");
    //console.log(this);
    return true;
  }

}

HomeEditorIO.prototype.ValidateHomeSpecs = function() {
  var entered = 0;
  var rejected = 0;
  if ( $("#siding").val() > 0 ) {
    this.home.specs.siding = $("#siding").val();
    this.AcceptInput("#siding");
    entered++;
  }

  if ( $("#skirting").val() > 0 ) {
    this.home.specs.skirting = $("#skirting").val();
    this.AcceptInput("#skirting");
    entered++;
  }

  if ( $("#roof_angle").val() > 0 ) {
    this.home.specs.roof_angle = $("#roof_angle").val();
    this.AcceptInput("#roof_angle");
    entered++;
  }

  if ( $("#roof_mat").val() > 0 ) {
    this.home.specs.roof_mat = $("#roof_mat").val();
    this.AcceptInput("#roof_mat");
    entered++;
  }

  if ( $("#windows").val() > 0 ) {
    this.home.specs.windows = $("#windows").val();
    this.AcceptInput("#windows");
    entered++;
  }

  if ( $("#wall_thickness").val() > 0 ) {
    this.home.specs.wall_thickness = $("#wall_thickness").val();
    this.AcceptInput("#wall_thickness");
    entered++;
  }

  if ( $("#kitchen_floor").val() > 0 ) {
    this.home.specs.kitchen_floor = $("#kitchen_floor").val();
    this.AcceptInput("#kitchen_floor");
    entered++;
  }

  if ( $("#floor").val() > 0 ) {
    this.home.specs.floor = $("#floor").val();
    this.AcceptInput("#floor");
    entered++;
  }

  if ( $("#setup").val() > 0 ) {
    this.home.specs.setup = $("#setup").val();
    this.AcceptInput("#setup");
    entered++;
  }

  if ( $("#strap").val() > 0 ) {
    this.home.specs.strap = $("#strap").val();
    this.AcceptInput("#strap");
    entered++;
  }

  if ( true ) {
    this.home.specs.strap = $("#num_of_offsets").val();
    this.AcceptInput("#num_of_offsets");
    entered++;
  }

  /////////////////////////////////////////////////////////
  /// Complex sizing stuffs...

  var complex_dims = new Array();
      complex_dims[1] = {length: null, width:null, square_footage:null };
      complex_dims[2] = {length: null, width:null, square_footage:null };
      complex_dims[3] = {length: null, width:null, square_footage:null };
  var total_sqft = 0;

  for ( i=1; i<=3; i++ ) {
    if ( $("#width"+i).val() != null && $("#width"+i).val() != '' ) {
      if ( isNaN($("#width"+i).val()) )
      {
        this.RejectInput("#width"+i, "nan");
        rejected++;
      } else {
        complex_dims[i].width = parseInt($("#width"+i).val());
        this.AcceptInput("#width"+i);
      }
    }

    if ( $("#length"+i).val() != null && $("#length"+i).val() != '' ) {
      if ( isNaN($("#length"+i).val()) )
      {
        this.RejectInput("#length"+i, "nan");
        rejected++;
      } else {
        complex_dims[i].length = parseInt($("#length"+i).val());
        this.AcceptInput("#length"+i);
      }
    }

    if ( $("#sqft"+i).val() != null && $("#sqft"+i).val() != '' ) {
      if ( isNaN($("#sqft"+i).val()) )
      {
        this.RejectInput("#sqft"+i, "nan");
        rejected++;
      } else {
        total_sqft += $("#sqft"+i).val();
        complex_dims[i].square_footage = parseInt($("#sqft"+i).val());
        this.AcceptInput("#sqft"+i);
      }
    }

  }

  n = parseInt( $("#num_of_offsets").val() );
  if ( isNaN(n) ) { n = 0; }
  switch(n) {
    case -1:
      this.home.dimensions.width = 0;
      this.home.dimensions.length = 0;
      this.home.dimensions.square_footage = complex_dims[1].square_footage;
      this.home.dimensions.json = null;
    break;
    case 0:
      this.home.dimensions.width = complex_dims[1].width;
      this.home.dimensions.length = complex_dims[1].length;
      this.home.dimensions.square_footage = complex_dims[1].square_footage;
      this.home.dimensions.json = null;
    break;
    default:
      this.home.dimensions.width = 0;
      this.home.dimensions.length = 0;
      this.home.dimensions.square_footage = total_sqft;
      this.home.dimensions.json = complex_dims;
    break;
  }

  this.home.dimensions.offsets = n;

  //////////////////////////////////////////
  //$("#count-specs").html(entered+"/10");
  return true;

}

HomeEditorIO.prototype.ValidateHomeDetails = function() {
  var rejected = 0;



  if ( rejected > 0 ) {
    //console.log("Missing "+rejected+" Fields..");
    //$("#count-details").html((6-rejected)+"/6");
    return false;
  } else {
    //$("#count-details").html("6/6");
    //console.log(this);
    return true;
  }
}


HomeEditorIO.prototype.ValidateOverview = function() {
  var rejected = 0;

  if ( $("#sold_price").val() != null && $("#sold_price").val() != '' ) {
    this.home.sold_price = parseFloat($("#sold_price").val());
    this.AcceptInput("#sold_price");
  } else {
    //this.RejectInput("#model", "empty");
    //rejected++;
  }

  if ( $("#exp_date").val() != null && $("#exp_date").val() != '' ) {
    this.home.exp_date = $("#exp_date").val();
    this.AcceptInput("#exp_date");
  } else {
    //this.RejectInput("#model", "empty");
    //rejected++;
  }


  if ( rejected > 0 ) {
    return false;
  } else {;
    return true;
  }
}


HomeEditorIO.prototype.ValidateAdInfo = function() {
  var rejected = 0;

  if ( $("#snazzy_title").val() != null && $("#snazzy_title").val() != '' ) {
    this.home.headline = $("#snazzy_title").val();
    this.AcceptInput("#snazzy_title");
  } else {
    //this.RejectInput("#model", "empty");
    //rejected++;
  }

  if ( $("#description").val() != null && $("#description").val() != '' ) {
    this.home.description = $("#description").val();
    this.AcceptInput("#description");
  } else {
    //this.RejectInput("#model", "empty");
    //rejected++;
  }

  if ( rejected > 0 ) {
    //console.log("Missing "+rejected+" Fields..");
    //$("#count-details").html((6-rejected)+"/6");
    return false;
  } else {
    //$("#count-details").html("6/6");
    //console.log(this);
    return true;
  }
}

HomeEditorIO.prototype.ValidateLocation = function() {
  var rejected = 0;

  if ( $("#address").val() != null && $("#address").val() != '' ) {
    this.home.address = $("#address").val();
    this.AcceptInput("#address");
  } else {
    //this.RejectInput("#model", "empty");
    //rejected++;
  }

  if ( $("#zipcode").val() != null && $("#zipcode").val() != '' ) {
    if ( isNaN($("#zipcode").val()) )
    {
      this.RejectInput("#zipcode", "nan");
      rejected++;
    } else {
      this.home.zipcode = $("#zipcode").val();
      this.AcceptInput("#zipcode");
    }
  }

  if ( $("#space").val() != null && $("#space").val() != '' ) {
    if ( isNaN($("#space").val()) )
    {
      this.RejectInput("#space", "nan");
      rejected++;
    } else {
      this.home.space = $("#space").val();
      this.AcceptInput("#space");
    }
  }


  if ( $("#city").val() != null && $("#city").val() != '' ) {
    this.home.city = $("#city").val();
    this.AcceptInput("#city");
  } else {
    //this.RejectInput("#model", "empty");
    //rejected++;
  }

  if ( $("#state").val() != null && $("#state").val() != '' ) {
    this.home.state = $("#state").val();
    this.AcceptInput("#state");
  } else {
    //this.RejectInput("#model", "empty");
    //rejected++;
  }


  if ( rejected > 0 ) {
    //console.log("Missing "+rejected+" Fields..");
    //$("#count-details").html((6-rejected)+"/6");
    return false;
  } else {
    //$("#count-details").html("6/6");
    //console.log(this);
    return true;
  }
}

HomeEditorIO.prototype.ValidateHomeOptions = function() {
  var rejected = 0;
  var features = new Array();
  var appliances = new Array();
  $(".features input:checkbox:checked").each(function(){
    features.push( this.value );
  });

  this.home.home_options.features = features;

  $(".appliances input:checkbox:checked, .utilities input:checkbox:checked").each(function(){
    appliances.push( this.value );
  });
  this.home.home_options.appliances = appliances;

  if ( rejected > 0 ) {
    console.log("Missing "+rejected+" Fields..");
    //$("#count-opts").html((2-rejected)+"/2");
    return false;
  } else {
    //$("#count-opts").html("2/2");
    //console.log(this);
    return true;
  }
}

HomeEditorIO.prototype.RejectInput = function(field_id) {
  if ( this.settings.preValidation === true ) {
    return;
  }
  $(field_id).css({
    "background": "#ffe0e0",
    "outline": "none",
    "border-color": "#f9c0c0",
    "box-shadow": "0 0 3px #f9c0c0",
  });
}

HomeEditorIO.prototype.AcceptInput = function(field_id) {
  $(field_id).css({
    "background": "#f4fcf4",
    "outline": "none",
    "border-color": "green",
    "box-shadow": "0 0 3px #fff",
  });
}

HomeEditorIO.prototype.GetNextPage = function(page) {
  if ( page == this.settings.steps[this.settings.steps.length-1] ) {
    return this.settings.steps[0];
  } else {
    return this.settings.steps[ (this.settings.steps.indexOf(page)+1) ];
  }
}

HomeEditorIO.prototype.GetPrevPage = function(page) {
  if ( page == this.settings.steps[0] ) {
    return this.settings.steps[this.settings.steps.length-1];
  } else {
    return this.settings.steps[ (this.settings.steps.indexOf(page)-1) ];
  }
}

HomeEditorIO.prototype.BuildReview = function() {
    //Need to build data obj validator..

    if ( Editor.home.headline ) {
      $("#cfrm_title").html(Editor.home.headline);
    } else {
      $("#cfrm_title").html("Not Entered");
    }
    
    if ( Editor.home.price !== null ) {
      $("#cfrm_price").html(Editor.home.price);
    } else {
      $("#cfrm_price").html("Not Entered");
    }
    
    if ( Editor.home.sale_type !== null ) {
     $("#cfrm_type").html(trans_type(Editor.home.sale_type));
    } else {
      $("#cfrm_type").html("Not Entered");
    }
    
    
    if ( Editor.home.bedrooms !== null ) {
     $("#cfrm_beds").html(Editor.home.bedrooms);
    } else {
      $("#cfrm_beds").html("Not Entered");
    }

    if ( Editor.home.bathrooms !== null ) {
     $("#cfrm_baths").html(Editor.home.bathrooms);
    } else {
      $("#cfrm_baths").html("Not Entered");
    }

    if ( Editor.home.size !== null ) {
     $("#cfrm_size").html(trans_scale(Editor.home.size));
    } else {
      $("#cfrm_size").html("Not Entered");
    }
    
    if ( Editor.home.dimensions !== null ) {
     $("#cfrm_dimensions").html(Editor.home.dimensions);
    } else {
      $("#cfrm_dimensions").html("Not Entered");
    }

    if ( Editor.home.description !== null ) {
      desc = Editor.home.description;
      desc = desc.substring(0,75);
     $("#cfrm_desc").html(desc);
    } else {
      $("#cfrm_desc").html("Not Entered");
    } 
    
    if ( Editor.home.home_options !== null ) {
     $("#cfrm_opts").html(Editor.home.home_options);
    } else {
      $("#cfrm_opts").html("Not Entered");
    } 

    if ( Editor.home.year !== null ) {
     $("#cfrm_year").html(Editor.home.year);
    } else {
      $("#cfrm_year").html("Not Entered");
    } 

    if ( Editor.home.make !== null ) {
     $("#cfrm_make").html(Editor.home.make);
    } else {
      $("#cfrm_make").html("Not Entered");
    } 

    if ( Editor.home.model !== null ) {
     $("#cfrm_model").html(Editor.home.model);
    } else {
      $("#cfrm_model").html("Not Entered");
    }

    if ( Editor.home.status > 0 ) {
      $("#cfrm_payment").html("<strong style='color:green;'>Paid</strong>");
      $("#listing_status").val(Editor.home.status)
    } else {
      $("#cfrm_payment").html("<strong style='color:red;'>Unpaid</strong>");
      $("#listing_status").val(Editor.home.status)
    }


    if ( Editor.home.dimensions.length !== null && Editor.home.dimensions.width !== null ) {
      //$("#cfrm_size").html(Editor.home.dimensions.length+"x"+Editor.home.dimensions.width+" (approx. "+(Editor.home.dimensions.length*Editor.home.dimensions.width)+"sqft)");
      $("#cfrm_size").html("approx. "+(Editor.home.dimensions.square_footage)+"sqft");
    } else {
      $("#cfrm_size").html("Not Entered");
    }


    console.log("ph", Editor.home.photos);
    if ( Editor.home.photos !== null ) {
      if ( Editor.home.photos.length > 0 ) {
        $("#photo-preview").attr('src', Editor.home.photos[1].url);
      }
    } else {

    }

    

    var selected_opts = "<strong>Features:</strong><br>";
    for( f in Editor.home.home_options.features ) { selected_opts += Editor.home.home_options.features[f] + "<br>"; }
    selected_opts += "<strong>Appliances:</strong><br>";
    for( f in Editor.home.home_options.appliances ) { selected_opts += Editor.home.home_options.appliances[f] + "<br>"; }
    $("#cfrm_opts").html(selected_opts);


}

HomeEditorIO.prototype.updateStatus = function() {
  $("#id-field").html(this.home.home_id);
  switch(this.home.status){
    case 0:
      var s = "New Profile";
    break;
    case 1:
      var s = "Unlisted";
    break;
    case 2:
      var s = "Expired";
    break;
    case 2:
      var s = "Sold";
    break;
    case 4:
      var s = "Active";
    break;
    case 5:
      var s = "Pending";
    break;
    default:
      var s = "Unknown";
    break;
  }

  $("#status-field").html(s);
}

HomeEditorIO.prototype.SaveChanges = function(input_step) {


            //Save Data..
            $("#save_status").fadeIn(500).html("<b>Saving Data..</b>");

            $.ajaxSetup({
               headers: { 'X-CSRF-Token' : $('meta[name=formtoken]').attr('content') }
            });
            data = this.home;
            that = this;
            console.log("sending:", that);
            var str = document.location.toString();
            //console.log(str);
            str = str.split("/").slice(0, -1).join("/").toString() + "/new/dataio";
            $.post(str,data,function(e) {
                console.log(e);
                e = JSON.parse(e);

                if( e.status === true ) {
                  //new home was created.. as temp..
                  that.home.home_id = e.home_id;
                  //that.home.status = e.status;
                  setTimeout(function(){
                    $("#save_status").html("<b>Data Saved..</b>").delay(1000).fadeOut();
                    
                    /*
                    $("#list-process > li").each(function(){
                      $(this).removeClass("disabled");
                    });
                    $("#details-list > li").each(function(){
                      $(this).removeClass("disabled");
                      $(this).fadeIn();
                    });
                    */

                    that.updateStatus();
                  }, 500);
                } else if ( e.status === false ) {
                  //error occured
                  setTimeout(function(){
                  $("#save_status").html("<b>Data Save Failed..</b>").delay(1000).fadeOut();
                  }, 500);
                }

            });


}


HomeEditorIO.prototype.UnlockMenu = function(id) {
  this.settings.wizard = false;
  $( "#list-process > li:not(.menu-head)" ).each(function( index ) {
    $( this ).removeClass("disabled");
  });
}


HomeEditorIO.prototype.LoadHomeProfile = function(id) {


            //Save Data..
            $("#save_status").fadeIn(500).html("<b>Loading Data..</b>");

            $.ajaxSetup({
               headers: { 'X-CSRF-Token' : $('meta[name=formtoken]').attr('content') }
            });
            data = this.home;
            that = this;
            var str = document.location.pathname;
            //console.log(str);
            str = str.split("/").slice(0, -1).join("/").toString() + "/new/dataio/"+id;
            //console.log(str);

            $.get(str,function(e) {
              console.log(e);
              e = JSON.parse(e);
                if( e.status == false) {
                  console.log("Failed to load data.. no access!");
                  $("#save_status").html("<b>Failed to load data.. no access!</b>");
                  return false;
                } else {
                  e = e.data;
                }
                  //new home was LOADED..
                  that.home.home_id = e.id;
                  that.home.status = e.status;
                   that.home.headline = e.title;
                   that.home.price = e.price;
                   that.home.sale_type = e.type;
                   that.home.bedrooms = e.beds;
                   that.home.bathrooms = e.baths; //.5
                   that.home.dimensions = {length: e.length, width:e.width, offsets: e.offsets, json: JSON.parse(e.dims_json) },
                   that.home.size = e.shape;
                   that.home.description = e.description;
                   that.home.specs = JSON.parse(e.specs) || {};
                   that.home.decal = JSON.parse(e.decal) || {};
                   that.home.serial = JSON.parse(e.serial) || {};
                   that.home.hud = JSON.parse(e.hud) || {};
                   that.home.home_options = { features: JSON.parse(e.features), appliances: JSON.parse(e.appliances) };
                   that.home.photos = JSON.parse(e.photos);
                   that.home.year = e.year;
                   that.home.make = e.brand;
                   that.home.model = e.model;

                   that.home.address = e.address;
                   that.home.city = e.city;
                   that.home.city_id = e.city_id;
                   that.home.state = e.state;
                   that.home.state_id = e.state_id;
                   that.home.zipcode = e.zipcode;
                   that.home.space = e.space_number;

                   that.home.dimensions.square_footage = e.square_footage;
                   that.home.photos = JSON.parse(e.photos) || {};

                   that.home.sold_price = parseFloat(e.sold_price);
                   that.home.exp_date = that.SetupExpDate(e.exp_date);

                   that.UnlockMenu();
                   newPony("home-review");

                  setTimeout(function(){
                    $("#save_status").html("<b>Data Loaded..</b>").delay(1000).fadeOut();

                    that.updateStatus();
                  }, 500);


            });


}

HomeEditorIO.prototype.SetupExpDate = function(str) {

var createdDate = new Date(str);
var date = createdDate.toLocaleDateString();

var day = createdDate.getDate();
var month = createdDate.getMonth() + 1; //months are zero based
var year = createdDate.getFullYear();

var time = createdDate.toLocaleTimeString().replace(/(.*)\D\d+/, '$1');

return month.pad() + '/' + day.pad() + '/' + year;

}

Number.prototype.pad = function(size) {
  var s = String(this);
  while (s.length < (size || 2)) {s = "0" + s;}
  return s;
}