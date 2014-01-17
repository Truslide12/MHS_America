<?php 

$prev_exists = file_exists("./modules/frontend/buy/".($_GET['subpage']-1).".pagehandler.php");
$next_exists = file_exists("./modules/frontend/buy/".($_GET['subpage']+1).".pagehandler.php");

?><h3>Selecting Service Providers</h3>
<h4>&raquo; Escrow and Settlement</h4>
<div>
<br style="clear:both;"/>
<div><a href="/buy/">Table of Contents</a><span style="float:right;"><?php if($prev_exists){echo("<a href=\"/buy/document-".($_GET['subpage']-1)."/\">");}else{echo("<span style=\"color:#dedede;\">");} ?>&larr; Previous<?php if($prev_exists){echo("</a>");}else{echo("</span>");} ?> | <?php if($next_exists){echo("<a href=\"/buy/document-".($_GET['subpage']+1)."/\">");}else{echo("<span style=\"color:#dedede;\">");} ?>Next &rarr;<?php if($next_exists){echo("</a>");}else{echo("</span>");} ?></span></div>
<br style="clear:both;"/>
<p style="font-size:14px;">
Most buyers do not have enough cash available to buy a home, so they need to obtain a mortgage to finance the purchase. Since you will probably make your purchase contingent upon obtaining a mortgage, the seller has the right to be informed of your financing plans in order to evaluate them. That is one of the major reasons that financing details are included in your offer.
</p><br/> <br/>
<h4>Down Payment</h4>
<br/> <br/>
<p style="font-size:14px;">
As part of your offer, you will need to disclose the size of your down payment. Once again, this allows the seller to evaluate your likelihood of obtaining a home loan. It is easier to get approved for a mortgage when you make a larger down payment. The underwriting guidelines are less strict. 
</p> 
<br style="clear:both;"/> 
<div><a href="/buy/">Table of Contents</a><span style="float:right;"><?php if($prev_exists){echo("<a href=\"/buy/document-".($_GET['subpage']-1)."/\">");}else{echo("<span style=\"color:#dedede;\">");} ?>&larr; Previous<?php if($prev_exists){echo("</a>");}else{echo("</span>");} ?> | <?php if($next_exists){echo("<a href=\"/buy/document-".($_GET['subpage']+1)."/\">");}else{echo("<span style=\"color:#dedede;\">");} ?>Next &rarr;<?php if($next_exists){echo("</a>");}else{echo("</span>");} ?></span></div>
</div>
