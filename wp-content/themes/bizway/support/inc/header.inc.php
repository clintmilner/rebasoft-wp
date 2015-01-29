<?php
/*******************************************************************************
*  Title: Helpdesk software Hesk
*  Version: 2.0 from 24th January 2009
*  Author: Klemen Stirn
*  Website: http://www.phpjunkyard.com
********************************************************************************
*  COPYRIGHT NOTICE
*  Copyright 2005-2009 Klemen Stirn. All Rights Reserved.

*  The Hesk may be used and modified free of charge by anyone
*  AS LONG AS COPYRIGHT NOTICES AND ALL THE COMMENTS REMAIN INTACT.
*  By using this code you agree to indemnify Klemen Stirn from any
*  liability that might arise from it's use.

*  Selling the code for this program, in part or full, without prior
*  written consent is expressly forbidden.

*  Using this code, in part or full, to create derivate work,
*  new scripts or products is expressly forbidden. Obtain permission
*  before redistributing this software over the Internet or in
*  any other medium. In all cases copyright and header must remain intact.
*  This Copyright is in full effect in any country that has International
*  Trade Agreements with the United States of America or
*  with the European Union.

*  Removing any of the copyright notices without purchasing a license
*  is illegal! To remove PHPJunkyard copyright notice you must purchase
*  a license for this script. For more information on how to obtain
*  a license please visit the site below:
*  http://www.phpjunkyard.com/copyright-removal.php
*******************************************************************************/

?>
<?php //Header include - contains header + navigation 


$base = $_SERVER['HTTP_HOST'];
$main = substr($_SERVER['SCRIPT_NAME'], 0,9);


?>
<?php //Header include - contains header + navigation 

$main = $_SERVER['SCRIPT_NAME'];

$base = $_SERVER['HTTP_HOST'];

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
<link href="/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../../scripts/jquery-1.4.2.min.js"></script>
<script type="text/javascript"><!-- 
$(function() {
    $('img[data-hover]').hover(function() {
        $(this).attr('tmp', $(this).attr('src')).attr('src', $(this).attr('data-hover')).attr('data-hover', $(this).attr('tmp')).removeAttr('tmp');
    }).each(function() {
        $('<img />').attr('src', $(this).attr('data-hover'));
    });;
}); 
//--></script><?php 
 if ($specific_script !='') {
  echo $specific_script; 
  }
 if ($add_style !='') {
  echo $add_style;
  }
 ?>
</head>
<body onload="prettyPrint()">
<div class="invisible"><a href="#start-of-content" >Skip main navigation to content</a></div>
<div id="page">
<div id="display_area">
<div id="header" style="margin-top:-11px;">
<table><tr><td>
 <div id="topnav">
         <ol id="menu">
	     <li><a href="http://<?php echo $base; ?>/support/index.php"<?php if ($main=="/support/index.php") { echo " class=\"current\""; } ?>>SUPPORT HOME</a></li>
	     <li><a href="http://<?php echo $base; ?>/contact-details.php" <?php if ($main=="/contact-details.php") { echo " class=\"current\""; } ?>>CONTACT</a></li>
         <li><a href="https://ssl.rebasoft.net/support" target="_blank">REMOTE SUPPORT</a></li>        
         <li><a href="http://<?php echo $base; ?>/download.php">DOWNLOADS</a></li>
	    </ol>
  </div></td>
  <td width="443" align="right">
  <div id="logo">
     <a href="http://<?php echo $base; ?>/index.php" title="Return to homepage"><img src="http://<?php echo $base; ?>/images/logo.png" alt="Rebasoft. Revealing your network" width="234" height="72" /></a>
  </div>
  </td></tr>
</table>
</div>
<div id="topbar"></div>

 
 <?php /*
 
 <div id="headernav">
	<ul>
        <li><a href="https://ssl.rebasoft.net/support" target="_blank">Remote support link</a></li>        
        <li><a href="http://<?php echo $base; ?>/download.php">Downloads</a></li>
	</ul>
  </div>
 </div>
</div>
<div id="topnav">
	<ul>
        <li class="first"><a href="http://<?php echo $base; ?>/products.php"<?php if ($main=="/products.php") { echo " class=\"current\""; } ?>>Home page</a></li>
        
        <li><a href="http://<?php echo $base; ?>/solutions.php"<?php if ($main=="/solutions.php") { echo " class=\"current\""; } ?>>Solutions</a></li>
        <li><a href="http://<?php echo $base; ?>/partners.php"<?php if ($main=="/partners.php") { echo " class=\"current\""; } ?>>Partners</a></li>
        <li><a href="http://<?php echo $base; ?>/support/index.php"<?php if ($main=="/support.php") { echo " class=\"current\""; } ?>>Support</a></li>
        <li><a href="http://<?php echo $base; ?>/company.php"<?php if ($main=="/company.php") { echo " class=\"current\""; } ?>>Company</a></li>
        <li class="last"><a href="http://<?php echo $base; ?>/contact-us.php" <?php if ($main=="/contact-us.php") { echo " class=\"current\""; } ?>>Contact</a></li>

	</ul>
</div>
*/?>
<div id="central">
