//////////////////////////////////////////////
/// license_module.js
///------------------
/// 
/// 


var LicenseModule = function() {

  //Required Paramaters
  this.LicenseForms = new Array();
  this.ActiveLicense = 0;
  this.SavedLicenses = new Array();
  this.LoadForms();
};

LicenseModule.prototype.LoadForms = function() {

  //This should be loaded in as json once backend is fixed up
  this.AddForm(1, "Realtors License", "", "", "", "", "");
  this.AddForm(2, "Insurance License", "", "", "", "", "");
  this.AddForm(3, "NOH License", "", "", "", "", "");
  this.AddForm(4, "ABC License", "", "", "", "", "");

}

LicenseModule.prototype.AddForm = function(FormID, LicenseName, CustField1, CustField2, CustField3, CustField4, CustField5) {

  this.LicenseForms[FormID] = new Array(LicenseName, CustField1, CustField2, CustField3, CustField4, CustField5);

}

LicenseModule.prototype.SaveLicense = function() {

  type = $("#inp_license_type").val();
  region = $("#inp_license_region").val();
  number = $("#inp_license_number").val();

  this.SavedLicenses[this.SavedLicenses.length] = Array(type, region, number);

  $("#inp_license_type").val("");
  $("#inp_license_region").val("");
  $("#inp_license_number").val("");

  htmlrow  = "<div class='col-md-4'>"+type+"</div>";
  htmlrow += "<div class='col-md-4'>"+region+"</div>";
  htmlrow += "<div class='col-md-4'>"+number+"</div>";

  html = $("#saved_license_table").html() + htmlrow;
  $("#saved_license_table").html(html)

  return true;

}

LicenseModule.prototype.RenderInput = function(InputType, ID, PreText, Options) {

  switch ( InputType ){
   case "dd":
    op = "";
    for  ( i in Options ) { op += "<option>"+Options[i]+"</option>"; }
    return "<select id='"+ID+"' name='"+ID+"' class='form-control'><option>--"+PreText+"--</option>"+op+"</select>";
   break;
   case "txt":
    return "<input id='"+ID+"' name='"+ID+"' class='form-control' type='text' placeholder='"+PreText+"'>";
   break;
   case "chk":
    return "<input id='"+ID+"' name='"+ID+"' class='' type='checkbox'>";
   break;
   case "sub":
    return "<button id='"+ID+"' name='"+ID+"' class='btn btn-default' style='width: 100%;' onclick='LM.SaveLicense();'>"+PreText+"</button>";
   break;
  }
  return "";

}


LicenseModule.prototype.BuildFormHTML = function(FormID) {

  html  = "<div class='row'>";
   html += "<div class='col-md-4'>Type</div>";
   html += "<div class='col-md-4'>Region</div>";
   html += "<div class='col-md-4'>Number</div>";
  html += "</div>";
  html += "<div class='row' style='margin-top: 10px;'>";
   html += "<div class='col-md-4'>"+this.RenderInput("dd", "inp_license_type", "Licenses", ["Realtors", "Insurance", "NOH Licenses"])+"</div>";
   html += "<div class='col-md-4'>"+this.RenderInput("dd", "inp_license_region", "Regions", ["CA", "AZ", "NV"])+"</div>";
   html += "<div class='col-md-4'>"+this.RenderInput("txt", "inp_license_number", "Lic. #")+"</div>";
  html += "</div>";
  html += "<div class='row' style='margin-top: 25px;'>";
   html += "<div class='col-md-8'><label class='checkbox-inline'>"+this.RenderInput("chk", "license_apply_all")+" Apply this license to all of my profiles</label></div>";
   html += "<div class='col-md-4'>"+this.RenderInput("sub", "inp_license_save", "Add License")+"</div>";
  html += "</div>";
  html += "<div class='row' style='margin-top: 25px;' id='saved_license_table'>";
    html += "<div class='col-md-12'>Saved Licenses</div>";
  html += "</div>";

  return html;

}




LM = new LicenseModule();
