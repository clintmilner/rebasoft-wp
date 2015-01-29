<?php //Header include - contains header + navigation 

$main = $_SERVER['SCRIPT_NAME'];

$base = $_SERVER['HTTP_HOST'];

$specific_script ="";
$add_style ="";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title>
<meta name="Description" content="<?php echo $description; ?>" />
<meta name="Keywords" content="<?php echo $keywords; ?>" />
<meta name="TRANSLATION" content="English" /> 
<meta name="revisit-after" content="10 days" />
<meta name="robots" content="index,follow" />
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<link href="../css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../../scripts/jquery-1.4.2.min.js"></script>
<script type="text/javascript"><!-- 
$(function() {
    $('img[data-hover]').hover(function() {
        $(this).attr('tmp', $(this).attr('src')).attr('src', $(this).attr('data-hover')).attr('data-hover', $(this).attr('tmp')).removeAttr('tmp');
    }).each(function() {
        $('<img />').attr('src', $(this).attr('data-hover'));
    });;
}); 
//--></script>
<?php 
 if ($specific_script !="") {
  echo $specific_script; 
  }
 if ($add_style !="") {
  echo $add_style;
  }
 ?>
</head>
<body onload="prettyPrint()">
<a id="top-of-page"></a>
<div id="page">
<div id="display_area">
<div id="header" style="margin-top:-12px;">
<table><tr><td>
 <div id="topnav">
         <ol id="menu">
	     <li><a href="http://<?php echo $base; ?>/support/index.php"<?php if ($main=="/support/index.php") { echo " class=\"current\""; } ?>>SUPPORT HOME</a></li>
	     <li><a href="http://<?php echo $base; ?>/contact-details.php" <?php if ($main=="/contact-details.php") { echo " class=\"current\""; } ?>>CONTACT</a></li>
         <li><a href="https://ssl.rebasoft.net/support" target="_blank">REMOTE SUPPORT</a></li>        
         <li><a href="http://<?php echo $base; ?>/download.php"<?php if ($main=="/download.php") { echo " class=\"current\""; } ?>>DOWNLOADS</a></li>
	    </ol>
  </div></td>
  <td width="450" align="right">
  <div id="logo">
     <a href="http://<?php echo $base; ?>/index.php" title="Return to homepage"><img src="http://<?php echo $base; ?>/images/logo.png" alt="Rebasoft. Revealing your network" width="234" height="72" /></a>
  </div>
  </td></tr>
</table>
</div>
<div id="topbar"></div>
