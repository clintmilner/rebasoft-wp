<?php // product license

$base = $_SERVER['HTTP_HOST'];
$submenu = $_SERVER['QUERY_STRING'];
$section = substr($submenu,8,4);
$title = "Rebasoft - Product License";
$description = "Rebasoft - Product End User License Afreement";
$keywords = "";
require ('inc/header.inc.php');

?>
<div id="central" class="threecol">
<div id="sidebarleft" >
<div class="module">
<div>
	<ul id="leftnav">
    	<li class="first"><a href="resources.php?default"><strong>Product License</strong></a></li>
        <li><a href="license.php?rebasoft" <?php if ($submenu == "rebasoft") { echo " class=\"current\""; } ?>>Rebasoft License</a></li>
        <li><a href="license.php?MA3rdparty"<?php if ($submenu == "MA3rdparty") { echo " class=\"current\""; } ?>>MAC Auditor 3rd Party</a></li>
    </ul>
    </div>

     <div class="btmcurve"></div>
     </div>
</div>
<div id="maincontent" >
	
        <a name="start-of-content" id="start-of-content"></a>
        
<?php         switch ($submenu) {
				default:
        			require('license.html');
                   break;
				case "MA3rdparty":
				    require ('MA3rdparty.html');
                   break;         

}

?>
</div>
</div>
</div>
<div>
<?php require ('inc/footer.inc.php'); ?>
