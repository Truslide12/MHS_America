home = function() {
 this.title = null;
 this.price = null;
 this.sale_type = null;
 this.bedrooms = null;
 this.bathrooms = null; //.5
 this.scale = null;
 this.dimensions = {length: null, width:null},
 this.size = null;
 this.description = null;
 this.home_options = { features: {}, applicances: {} }
 this.photos = null;
 this.year = null;
 this.make = null;
 this.model = null;

}

home.prototype.collect_values = function(state) {

	if ( $("#snazzy_title").length ) 			{ this.title 			= $("#snazzy_title").val(); }
	if ( $("#price").length ) 					{ this.price 			= $("#price").val(); }
	if ( $("#type").length ) 					{ this.sale_type 		= $("#type").val(); }
	if ( $("#beds").length ) 					{ this.bedrooms 		= $("#beds").val(); }
	if ( $("#baths").length ) 					{ this.bathrooms 		= $("#baths").val(); }
	if ( $("#homeSize").length ) 				{ this.scale 			= $("#homeSize").val(); }
	if ( $("#length").length ) 				{ this.dimensions 		= {length: $("#length").val(), width:$("#width").val()}; }
	if ( $("#width").length && $("#height").length ) 	{ this.size 			= $("#width").val()*$("#length").val(); }
	if ( $("#description").length ) 			{ this.description 		= $("#description").val(); }
	if ( $("#home_opts").length ) 				{ this.home_options 	= { features: {}, applicances: {} } }
	if ( $("#photos").length ) 				{ this.photos 			= $("#").val(); }
	if ( $("#year").length ) 					{ this.year 			= $("#year").val(); }
	if ( $("#make").length ) 					{ this.make 			= $("#make").val(); }
	if ( $("#model").length ) 					{ this.model 			= $("#model").val(); }

}

var home = new home;