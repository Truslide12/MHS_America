<?php 

$sidebar = false;

function headerinclude() {
?>
<style type="text/css">
#mainBody a{text-decoration:none;}
#mainBody a:hover{text-decoration:underline;}
#mainBody img {border:none}
#mainBody div.clearing {clear: both; height: 0; line-height:0;}
#mainBody div.customClearing {clear: both; height: 0; line-height:0; margin-top:-4px;}
#mainBody .bold{font-weight:bold;}

/*new design for buying/selling/mortgage/..*/
.newStyle{font-weight:bold; color:#FF0000; text-transform:uppercase; display:inline;}
#mainBody{border:none; width:820px; margin:0 auto; background-color:#fff; position:relative; font-size:11px; font-family:Arial, Verdana , Helvetica, sans-serif;}
/*fixed for FF*/
#mainBody img{border:none;}
#mainBody div#pageInfo{border-bottom:1px solid #DBD7A2;}
#mainBody div#pageInfo p{margin:0;padding:0; font-weight:bold;}
#mainBody div#pageInfo p.message{margin-bottom:.2em; font-size:1.8em;}
#mainBody div#pageInfo p.message2{font-size:1.2em;}
#mainBody p.message2{font-size:1.1em;}
#mainBody h4 {font-size:16px;}
#mainBody ul {margin-left:2em; list-style-type:none;}
#mainBody h5 {font-size:18px;}
</style>
<?php
}

function content() {
global $langquery, $language;

?>
<div class="buyingHP" id="mainBody">
<div id="pageInfo">
	<p class="message">Guide to Selling a Home</p>
	<p class="message2">Residential Owner-Occupied Real Estate</p>
</div>
<?php if(!$_GET['subpage'] || !file_exists("./modules/frontend/sell/".$_GET['subpage'].".pagehandler.php")){ ?>
<p class="message3">If you are thinking of selling your home, chances are you're caught up in a mass of emotions. You may be looking forward to moving up to a new home or facing the uncertainty of a major move across country. You may be reluctant to leave your memories behind or eager to start new and exciting adventures.   Remember, I am here to help you with any of your needs.  Call or e-mail me today!</p>
<br style="clear:both;"/><?php } ?>
<div>
<?php if($_GET['subpage'] > 0 && file_exists("./modules/frontend/sell/".$_GET['subpage'].".pagehandler.php")){ include "./modules/frontend/sell/".$_GET['subpage'].".pagehandler.php"; }else{
?><h4>Getting Your House Ready to Sell</h4>

	<ul>
    <li><a href="/sell/document-1/">Introduction: Emotion vs. Reason</a></li>
    <li><a href="/sell/document-2/">De-Personalizing the House</a></li>
    <li><a href="/sell/document-3/">Remoing Clutter, Though You May Not Think of it as Clutter</a></li>
    <li><a href="/sell/document-4/">Fixing Up the House Interior</a></li>
    <li><a href="/sell/document-5/">Fixing up Outside the House</a></li>
	</ul>

<h4>Want to Start Off With a High Sales Price?  Beware!</h4>

	<ul>
    <li><a href="/sell/document-6/">Meeting with Real Estate Professionals</a></li>
    <li><a href="/sell/document-7/">Which Real Estate Professional Do You Choose?</a></li>
    <li><a href="/sell/document-8/">What Happens Behind the Scenes</a></li>
    <li><a href="/sell/document-9/">Dropping Your Price...Too Late?</a></li>
	</ul>

<h4>Types of Listing Contracts</h4>

	<ul>
    <li><a href="/sell/document-10/">Open Listings</a></li>
    <li><a href="/sell/document-11/">One-Time Show</a></li>
    <li><a href="/sell/document-12/">Exclusive Agency Listings</a></li>
    <li><a href="/sell/document-13/">Exclusive Right to Sell</a></li>
	</ul>

<h4>Details of a Listing Contract</h4>

	<ul>
    <li><a href="/sell/document-14/">Price and Terms of Sale</a></li>
    <li><a href="/sell/document-15/">Lockbox - Yes or No?</a></li>
	<li><a href="/sell/document-16/">Real Estate Commission</a></li>
    <li><a href="/sell/document-17/">Multiple Listing Service</a></li>
    <li><a href="/sell/document-18/">Agency Duties of a Listing Agent</a></li>
    <li><a href="/sell/document-19/">Resolution of Disputes</a></li>
	</ul>

<h4>Listing Commissions and Related Issues</h4>

	<ul>
    <li><a href="/sell/document-20/">Is the Commission Negotiable?</a></li>
	<li><a href="/sell/document-21/">Cut-Rate Listing Commissions</a></li>
    <li><a href="/sell/document-22/">How and When the Commission is Earned</a></li>
    <li><a href="/sell/document-23/">"Hot" Market Under-Pricing Strategy - Commission Issues</a></li>
	</ul>

<h4>The Listing Agent & Marketing Your Home</h4>

	<ul>
    <li><a href="/sell/document-24/">The "Real" Role of a Listing Agent</a></li>
    <li><a href="/sell/document-25/">Preliminary Marketing - the "For Sale" Sign</a></li>
    <li><a href="/sell/document-26/">Preliminary Marketing - Flyers and the Brochure Box</a></li>
	</ul>

<h4>The Listing Agent - Marketing Your House to Other Agents</a></h4>

	<ul>
    <li><a href="/sell/document-27/">The Multiple Listing Service</a></li>
    <li><a href="/sell/document-28/">Office Preview</a></li>
    <li><a href="/sell/document-29/">Broker Previews and Culinary Delights</a></li>
    <li><a href="/sell/document-30/">Office Flyers</a></li>
    <li><a href="/sell/document-31/">Marketing Sessions</a></li>
	</ul>

<h4>The Listing Agent - Marketing Your House to Homebuyers</h4>

	<ul>
    <li><a href="/sell/document-32/">The Purpose of Advertising in General</a></li>
    <li><a href="/sell/document-33/">Real Estate Company Advertising</a></li>
    <li><a href="/sell/document-34/">Individual Agent Advertising</a></li>
    <li><a href="/sell/document-35/">Neighborhood Announcements</a></li>
    <li><a href="/sell/document-36/">Open Houses</a></li>
	</ul>

<h4>Showing Your House to Home Buyers</h4>

    <ul>
    <li><a href="/sell/document-37/">Convenience and Availability</a></li>
    <li><a href="/sell/document-38/">Why You Should Not Be Home</a></li>
    <li><a href="/sell/document-39/">Lighting, Fragrances, Pet Control and More</a></li>
    <li><a href="/sell/document-40/">Keeping the House Tidy and Neat</a></li>
	</ul>

</div><?php } ?>
</div>
</div>
<?php
}
 ?>
