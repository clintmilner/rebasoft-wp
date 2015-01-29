<?php // about us 

$base = $_SERVER['HTTP_HOST'];
$submenu = $_SERVER['QUERY_STRING'];
$section = substr($submenu,8,3);
        switch ($section) {
				default:
        			$title = "Rebasoft - Auditor help";
					$description = "Rebasoft - MAC Auditor Help";
					$keywords = "Rebasoft - MAC Auditor help";
                   break;
				case "1.7":
				    $title = "Rebasoft - MAC Auditor V1.73 Help";
				    $description = "Rebasoft - MAC Auditor V1.73 help";
					$keywords = "Rebasoft - MAC Auditor V1.73 help";
                   break;
				case "2.0":
				    $title = "Rebasoft - Auditor V2.0 Help";
				    $description = "Rebasoft - Auditor V2.0 help";
					$keywords = "Rebasoft - Auditor V2.0 help";
                break;
				case "2.1":
				    $title = "Rebasoft Auditor V2.1 Help";
				    $description = "Rebasoft Auditor V2.1 help";
					$keywords = "Rebasoft Auditor V2.1 help";
                break;
				case "2.2":
				    $title = "Rebasoft Auditor V2.2 Help";
				    $description = "Rebasoft Auditor V2.2 help";
					$keywords = "Rebasoft Auditor V2.2 help";
                break;
				case "2.4":
				    $title = "Rebasoft Auditor V2.4 On-line Help";
				    $description = "Rebasoft Auditor V2.4 On-line Help";
					$keywords = "Rebasoft Auditor V2.4 On-line Help";
                break;
				case "2.5":
				    $title = "Rebasoft Auditor V2.5 On-line Help";
				    $description = "Rebasoft Auditor V2.5 On-line Help";
					$keywords = "Rebasoft Auditor V2.5 On-line Help";
                break;
				case "2.6":
				    $title = "Rebasoft Auditor V2.6 On-line Help";
				    $description = "Rebasoft Auditor V2.6 On-line Help";
					$keywords = "Rebasoft Auditor V2.6 On-line Help";
                break;


}

$specific_style = "<style>
#twocolumns ol li img {
    vertical-align: top;
}

#twocolumns ol li {
	padding-bottom:20px;
}


</style>";

require ('../inc/header.static.php');

?>
<div id="maincontent" >
<div class="module content">
 <a name="start-of-content" id="start-of-content"></a>
        
<?php       
              if ($section == "") { require('copyright.html'); }

	   
	   if ($section == "2.6") { 
		      switch ($submenu) {
				default:
        			require('copyright.html');
                   break;
				case "version=2.6&v2_6-new_features":
				   require ('2_6/2_6-newfeatures.html'); 
				break;
				case "version=2.6&requirements":
				   require ('2_6/requirements.html'); 
				break;
				case "version=2.6&installation":
				   require ('2_6/installation.html'); 
				break;
				case "version=2.6&license":
				   require ('2_6/license.html');
				break;
				case "version=2.6&user-admin":
				   require ('2_6/user-admin.html'); 
				break;
				case "version=2.6&subnets":
				   require ('2_6/subnets.html'); 
				break;
				case "version=2.6&system-settings":
				   require ('2_6/system.html'); 
				break;
				case "version=2.6&sites-admin":
				   require ('2_6/sites.html'); 
				break;
				case "version=2.6&device-admin":
				   require ('2_6/device.html'); 
				break;
				case "version=2.6&user-lookup-admin":
				   require ('2_6/userlookup.html'); 
				break;
				case "version=2.6&active-tests":
				   require ('2_6/active-test.html'); 
				break;
				case "version=2.6&integration":
				   require ('2_6/integration.html'); 
				break;
				case "version=2.6&application-structure":
				   require ('2_6/application-structure.html'); 
				break;
				case "version=2.6&events":
				   require ('2_6/events.html'); 
				break;
				case "version=2.6&searches":
				   require ('2_6/searches.html'); 
				break;
				case "version=2.6&browsing":
				   require ('2_6/nav.html'); 
				break;
				case "version=2.6&macforensics":
				   require ('2_6/macforensics.html'); 
				break;
				case "version=2.6&ip-forensics":
				   require ('2_6/ipforensics.html'); 
				break;
				case "version=2.6&services":
				   require ('2_6/services.html'); 
				break;
				case "version=2.6&dnsforensics":
				   require ('2_6/hostnameforensics.html'); 
				break;
				case "version=2.6&wireless":
				   require ('2_6/wireless-ap.html'); 
				break;
				case "version=2.6&user-forensics":
				   require ('2_6/userforensics.html'); 
				break;
				case "version=2.6&vlan-overview":
				   require ('2_6/vlanoverview.html');
				break;
				case "version=2.6&watchlist":
				   require ('2_6/watchlist.html');
				break;
				case "version=2.6&whitelist":
				   require ('2_6/whitelist.html');
				break;
				case "version=2.6&tagging":
				   require ('2_6/tagging.html');
				break;
				case "version=2.6&capacity":
				   require ('2_6/capacity.html');
				break;
				case "version=2.6&security":
				   require ('2_6/security.html');
				break;
			  }
		}
	   if ($section == "2.5") { 
		      switch ($submenu) {
				default:
        			require('copyright.html');
                   break;
				case "version=2.5&v2_5-new_features":
				   require ('2_5/2_5-newfeatures.html'); 
				break;
				case "version=2.5&requirements":
				   require ('2_5/requirements.html'); 
				break;
				case "version=2.5&installation":
				   require ('2_5/installation.html'); 
				break;
				case "version=2.5&license":
				   require ('2_5/license.html');
				break;
				case "version=2.5&user-admin":
				   require ('2_5/user-admin.html'); 
				break;
				case "version=2.5&subnets":
				   require ('2_5/subnets.html'); 
				break;
				case "version=2.5&system-settings":
				   require ('2_5/system.html'); 
				break;
				case "version=2.5&sites-admin":
				   require ('2_5/sites.html'); 
				break;
				case "version=2.5&device-admin":
				   require ('2_5/device.html'); 
				break;
				case "version=2.5&user-lookup-admin":
				   require ('2_5/userlookup.html'); 
				break;
				case "version=2.5&active-tests":
				   require ('2_5/active-test.html'); 
				break;
				case "version=2.5&integration":
				   require ('2_5/integration.html'); 
				break;
				case "version=2.5&application-structure":
				   require ('2_5/application-structure.html'); 
				break;
				case "version=2.5&events":
				   require ('2_5/events.html'); 
				break;
				case "version=2.5&searches":
				   require ('2_5/searches.html'); 
				break;
				case "version=2.5&browsing":
				   require ('2_5/nav.html'); 
				break;
				case "version=2.5&macforensics":
				   require ('2_5/macforensics.html'); 
				break;
				case "version=2.5&ip-forensics":
				   require ('2_5/ipforensics.html'); 
				break;
				case "version=2.5&dnsforensics":
				   require ('2_5/hostnameforensics.html'); 
				break;
				case "version=2.5&wireless":
				   require ('2_5/wireless-ap.html'); 
				break;
				case "version=2.5&user-forensics":
				   require ('2_5/userforensics.html'); 
				break;
				case "version=2.5&vlan-overview":
				   require ('2_5/vlanoverview.html');
				break;
				case "version=2.5&watchlist":
				   require ('2_5/watchlist.html');
				break;
				case "version=2.5&whitelist":
				   require ('2_5/whitelist.html');
				break;
				case "version=2.5&tagging":
				   require ('2_5/tagging.html');
				break;
				case "version=2.5&capacity":
				   require ('2_5/capacity.html');
				break;
			  }
		}
	   if ($section == "2.4") { 
		      switch ($submenu) {
				default:
        			require('copyright.html');
                   break;
				case "version=2.41&v2_4-new_features":
				   require ('2_4/2_4-newfeatures.html'); 
				break;
				case "version=2.41&requirements":
				   require ('2_4/requirements.html'); 
				break;
				case "version=2.41&installation":
				   require ('2_4/installation.html'); 
				break;
				case "version=2.41&license":
				   require ('2_4/license.html');
				break;
				case "version=2.41&user-admin":
				   require ('2_4/user-admin.html'); 
				break;
				case "version=2.41&subnets":
				   require ('2_4/subnets.html'); 
				break;
				case "version=2.41&system-settings":
				   require ('2_4/system.html'); 
				break;
				case "version=2.41&sites-admin":
				   require ('2_4/sites.html'); 
				break;
				case "version=2.41&device-admin":
				   require ('2_4/device.html'); 
				break;
				case "version=2.41&user-lookup-admin":
				   require ('2_4/userlookup.html'); 
				break;
				case "version=2.41&active-tests":
				   require ('2_4/active-test.html'); 
				break;
				case "version=2.41&integration":
				   require ('2_4/integration.html'); 
				break;
				case "version=2.41&application-structure":
				   require ('2_4/application-structure.html'); 
				break;
				case "version=2.41&events":
				   require ('2_4/events.html'); 
				break;
				case "version=2.41&searches":
				   require ('2_4/searches.html'); 
				break;
				case "version=2.41&browsing":
				   require ('2_4/nav.html'); 
				break;
				case "version=2.41&macforensics":
				   require ('2_4/macforensics.html'); 
				break;
				case "version=2.41&ip-forensics":
				   require ('2_4/ipforensics.html'); 
				break;
				case "version=2.41&dnsforensics":
				   require ('2_4/hostnameforensics.html'); 
				break;
				case "version=2.41&user-forensics":
				   require ('2_4/userforensics.html'); 
				break;
				case "version=2.41&vlan-overview":
				   require ('2_4/vlanoverview.html');
				break;
				case "version=2.41&watchlist":
				   require ('2_4/watchlist.html');
				break;
				case "version=2.41&whitelist":
				   require ('2_4/whitelist.html');
				break;
				case "version=2.41&tagging":
				   require ('2_4/tagging.html');
				break;
				case "version=2.41&capacity":
				   require ('2_4/capacity.html');
				break;
			  }
		}
       if ($section == "2.2") { 
		      switch ($submenu) {
				default:
        			require('copyright.html');
                   break;
				case "version=2.2&v2_2-new_features":
				   require ('2_2/v2_2-new_features.html'); 
				break;
				case "version=2.2&requirements":
				   require ('2_2/requirements.html'); 
				break;
				case "version=2.2&installation":
				   require ('2_2/installation.html'); 
				break;
				case "version=2.2&license":
				   require ('2_2/license.html');
				break;
				case "version=2.2&user-admin":
				   require ('2_2/user-admin.html'); 
				break;
				case "version=2.2&subnets":
				   require ('2_2/subnets.html'); 
				break;
				case "version=2.2&system-settings":
				   require ('2_2/system-settings.html'); 
				break;
				case "version=2.2&sites-admin":
				   require ('2_2/sites-admin.html'); 
				break;
				case "version=2.2&device-admin":
				   require ('2_2/device-admin.html'); 
				break;
				case "version=2.2&user-lookup-admin":
				   require ('2_2/user-lookup-admin.html'); 
				break;
				case "version=2.2&active-tests":
				   require ('2_2/active-tests.html'); 
				break;
				case "version=2.2&integration":
				   require ('2_2/integration.html'); 
				break;
				case "version=2.2&application-structure":
				   require ('2_2/application-structure.html'); 
				break;
				case "version=2.2&events":
				   require ('2_2/events.html'); 
				break;
				case "version=2.2&searches":
				   require ('2_2/searches.html'); 
				break;
				case "version=2.2&browsing":
				   require ('2_2/browsing.html'); 
				break;
				case "version=2.2&macforensics":
				   require ('2_2/macforensics.html'); 
				break;
				case "version=2.2&ip-forensics":
				   require ('2_2/ip-forensics.html'); 
				break;
				case "version=2.2&dnsforensics":
				   require ('2_2/dnsforensics.html'); 
				break;
				case "version=2.2&user-forensics":
				   require ('2_2/user-forensics.html'); 
				break;
				case "version=2.2&vlan-overview":
				   require ('2_2/vlan-overview.html');
				break;
				case "version=2.2&watchlist":
				   require ('2_2/watchlist.html');
				break;
				case "version=2.2&whitelist":
				   require ('2_2/whitelist.html');
				break;
				case "version=2.2&tagging":
				   require ('2_2/tagging.html');
				break;
			  }
		}
?>
</div>
</div>
<div id="sidebar">
  <div class="sidenav">
    	<h2 align="center"><a href="help.php"><span class="purple">Auditor Core help</span></a></h2>
        <ul id="slider">
        		<?php 
	    		if ($section == "2.6") { ?>
           <li><a href="help.php?version=2.6" class="current">V2.6</a>
        	<ul>
                <li><a href="help.php?version=2.6&v2_6-new_features"<?php if ($submenu == "version=2.6&v2_6-new_features") { echo " class=\"current\""; } ?>>New in V2.6</a></li>
<li><a href="help.php?version=2.6&requirements"<?php if ($submenu == "version=2.6&requirements") { echo " class=\"current\""; } ?>>System requirements</a></li>
<li><a href="help.php?version=2.6&installation"<?php if ($submenu == "version=2.6&installation") { echo " class=\"current\""; } ?>>Installation</a></li>
<li><a href="help.php?version=2.6&license"<?php if ($submenu == "version=2.6&license") { echo " class=\"current\""; } ?>>License admin</a></li>
<li><a href="help.php?version=2.6&application-structure"<?php if ($submenu == "version=2.6&application-structure") { echo " class=\"current\""; } ?>>Application structure</a></li>
<li><a href="help.php?version=2.6&security"<?php if ($submenu == "version=2.6&security") { echo " class=\"current\""; } ?>>Security - risk management</a></li>
<li><a href="help.php?version=2.6&capacity"<?php if ($submenu == "version=2.6&capacity") { echo " class=\"current\""; } ?>>Capacity/change plans</a></li>
<li><a href="help.php?version=2.6&browsing"<?php if ($submenu == "version=2.6&browsing") { echo " class=\"current\""; } ?>>Browsing</a></li>
<li><a href="help.php?version=2.6&searches"<?php if ($submenu == "version=2.6&searches") { echo " class=\"current\""; } ?>>Searching</a></li>
<li><a href="help.php?version=2.6&events"<?php if ($submenu == "version=2.6&events") { echo " class=\"current\""; } ?>>Event handling</a></li>
<li><a href="help.php?version=2.6&user-forensics"<?php if ($submenu == "version=2.6&user-forensics") { echo " class=\"current\""; } ?>>User Forensics</a></li>
<li><a href="help.php?version=2.6&dnsforensics"<?php if ($submenu == "version=2.6&dnsforensics") { echo " class=\"current\""; } ?>>Hostname Forensics</a></li>
<li><a href="help.php?version=2.6&ip-forensics"<?php if ($submenu == "version=2.6&ip-forensics") { echo " class=\"current\""; } ?>>IP Forensics</a></li>
<li><a href="help.php?version=2.6&vlan-overview"<?php if ($submenu == "version=2.6&vlan-overview") { echo " class=\"current\""; } ?>>VLANS</a></li>
<li><a href="help.php?version=2.6&macforensics"<?php if ($submenu == "version=2.6&macforensics") { echo " class=\"current\""; } ?>>MAC Forensics</a></li>
<li><a href="help.php?version=2.6&wireless"<?php if ($submenu == "version=2.6&wireless") { echo " class=\"current\""; } ?>>Wireless</a></li>
<li><a href="help.php?version=2.6&watchlist"<?php if ($submenu == "version=2.6&watchlist") { echo " class=\"current\""; } ?>>Watch list</a></li>
<li><a href="help.php?version=2.6&whitelist"<?php if ($submenu == "version=2.6&whitelist") { echo " class=\"current\""; } ?>>White list</a></li>
<li><a href="help.php?version=2.6&user-admin"<?php if ($submenu == "version=2.6&user-admin") { echo " class=\"current\""; } ?>>User admin</a></li>
<li><a href="help.php?version=2.6&subnets"<?php if ($submenu == "version=2.6&subnets") { echo " class=\"current\""; } ?>>Subnets admin</a></li>
<li><a href="help.php?version=2.6&services"<?php if ($submenu == "version=2.6&services") { echo " class=\"current\""; } ?>>Services admin</a></li>
<li><a href="help.php?version=2.6&system-settings"<?php if ($submenu == "version=2.6&system-settings") { echo " class=\"current\""; } ?>>System settings</a></li>
<li><a href="help.php?version=2.6&sites-admin"<?php if ($submenu == "version=2.6&sites-admin") { echo " class=\"current\""; } ?>>Sites admin</a></li>
<li><a href="help.php?version=2.6&device-admin"<?php if ($submenu == "version=2.6&device-admin") { echo " class=\"current\""; } ?>>Devices admin</a></li>
<li><a href="help.php?version=2.6&tagging"<?php if ($submenu == "version=2.6&tagging") { echo " class=\"current\""; } ?>>Tagging</a></li>
<li><a href="help.php?version=2.6&user-lookup-admin"<?php if ($submenu == "version=2.6&user-lookup-admin") { echo " class=\"current\""; } ?>>User Lookup admin</a></li>
<li><a href="help.php?version=2.6&active-tests"<?php if ($submenu == "version=2.6&active-tests") { echo " class=\"current\""; } ?>>Active Tests</a></li>
<li><a href="help.php?version=2.6&integration"<?php if ($submenu == "version=2.6&integration") { echo " class=\"current\""; } ?>>Integration</a></li>
<li><a href="http://www.rebasoft.net/docs/support/RA_admin-guide_2.4.pdf" target="_blank">Download manual</a></li>
    		</ul>
            <?php } else {
               echo "<li><a href=\"help.php?version=2.6\" class=\"closed\">V2.6  &raquo;</a>";			
			   } 
	    		if ($section == "2.5") { ?>
           <li><a href="help.php?version=2.5" class="current">V2.5</a>
        	<ul>
                <li><a href="help.php?version=2.5&v2_5-new_features"<?php if ($submenu == "version=2.5&v2_5-new_features") { echo " class=\"current\""; } ?>>New in V2.5</a></li>
<li><a href="help.php?version=2.5&requirements"<?php if ($submenu == "version=2.5&requirements") { echo " class=\"current\""; } ?>>System requirements</a></li>
<li><a href="help.php?version=2.5&installation"<?php if ($submenu == "version=2.5&installation") { echo " class=\"current\""; } ?>>Installation</a></li>
<li><a href="help.php?version=2.5&license"<?php if ($submenu == "version=2.5&license") { echo " class=\"current\""; } ?>>License admin</a></li>
<li><a href="help.php?version=2.5&application-structure"<?php if ($submenu == "version=2.5&application-structure") { echo " class=\"current\""; } ?>>Application structure</a></li>
<li><a href="help.php?version=2.5&capacity"<?php if ($submenu == "version=2.5&capacity") { echo " class=\"current\""; } ?>>Capacity/change plans</a></li>
<li><a href="help.php?version=2.5&browsing"<?php if ($submenu == "version=2.5&browsing") { echo " class=\"current\""; } ?>>Browsing</a></li>
<li><a href="help.php?version=2.5&searches"<?php if ($submenu == "version=2.5&searches") { echo " class=\"current\""; } ?>>Searching</a></li>
<li><a href="help.php?version=2.5&events"<?php if ($submenu == "version=2.5&events") { echo " class=\"current\""; } ?>>Event handling</a></li>
<li><a href="help.php?version=2.5&user-forensics"<?php if ($submenu == "version=2.5&user-forensics") { echo " class=\"current\""; } ?>>User Forensics</a></li>
<li><a href="help.php?version=2.5&dnsforensics"<?php if ($submenu == "version=2.5&dnsforensics") { echo " class=\"current\""; } ?>>Hostname Forensics</a></li>
<li><a href="help.php?version=2.5&ip-forensics"<?php if ($submenu == "version=2.5&ip-forensics") { echo " class=\"current\""; } ?>>IP Forensics</a></li>
<li><a href="help.php?version=2.5&vlan-overview"<?php if ($submenu == "version=2.5&vlan-overview") { echo " class=\"current\""; } ?>>VLANS</a></li>
<li><a href="help.php?version=2.5&macforensics"<?php if ($submenu == "version=2.5&macforensics") { echo " class=\"current\""; } ?>>MAC Forensics</a></li>
<li><a href="help.php?version=2.5&wireless"<?php if ($submenu == "version=2.5&wireless") { echo " class=\"current\""; } ?>>Wireless</a></li>
<li><a href="help.php?version=2.5&watchlist"<?php if ($submenu == "version=2.5&watchlist") { echo " class=\"current\""; } ?>>Watch list</a></li>
<li><a href="help.php?version=2.5&whitelist"<?php if ($submenu == "version=2.5&whitelist") { echo " class=\"current\""; } ?>>White list</a></li>
<li><a href="help.php?version=2.5&user-admin"<?php if ($submenu == "version=2.5&user-admin") { echo " class=\"current\""; } ?>>User admin</a></li>
<li><a href="help.php?version=2.5&subnets"<?php if ($submenu == "version=2.5&subnets") { echo " class=\"current\""; } ?>>Subnets admin</a></li>
<li><a href="help.php?version=2.5&system-settings"<?php if ($submenu == "version=2.5&system-settings") { echo " class=\"current\""; } ?>>System settings</a></li>
<li><a href="help.php?version=2.5&sites-admin"<?php if ($submenu == "version=2.5&sites-admin") { echo " class=\"current\""; } ?>>Sites admin</a></li>
<li><a href="help.php?version=2.5&device-admin"<?php if ($submenu == "version=2.5&device-admin") { echo " class=\"current\""; } ?>>Devices admin</a></li>
<li><a href="help.php?version=2.5&tagging"<?php if ($submenu == "version=2.5&tagging") { echo " class=\"current\""; } ?>>Tagging</a></li>
<li><a href="help.php?version=2.5&user-lookup-admin"<?php if ($submenu == "version=2.5&user-lookup-admin") { echo " class=\"current\""; } ?>>User Lookup admin</a></li>
<li><a href="help.php?version=2.5&active-tests"<?php if ($submenu == "version=2.5&active-tests") { echo " class=\"current\""; } ?>>Active Tests</a></li>
<li><a href="help.php?version=2.5&integration"<?php if ($submenu == "version=2.5&integration") { echo " class=\"current\""; } ?>>Integration</a></li>
<li><a href="http://www.rebasoft.net/docs/support/RA_admin-guide_2.4.pdf" target="_blank">Download manual</a></li>
    		</ul>
            <?php } else {
               echo "<li><a href=\"help.php?version=2.5\" class=\"closed\">V2.5  &raquo;</a>";			
			   } 
	    		if ($section == "2.4") { ?>
           <li><a href="help.php?version=2.4" class="current">V2.4</a>
        	<ul>
                <li><a href="help.php?version=2.41&v2_4-new_features"<?php if ($submenu == "version=2.41&v2_4-new_features") { echo " class=\"current\""; } ?>>New in V2.4</a></li>
<li><a href="help.php?version=2.41&requirements"<?php if ($submenu == "version=2.41&requirements") { echo " class=\"current\""; } ?>>System requirements</a></li>
<li><a href="help.php?version=2.41&installation"<?php if ($submenu == "version=2.41&installation") { echo " class=\"current\""; } ?>>Installation</a></li>
<li><a href="help.php?version=2.41&license"<?php if ($submenu == "version=2.41&license") { echo " class=\"current\""; } ?>>License admin</a></li>
<li><a href="help.php?version=2.41&application-structure"<?php if ($submenu == "version=2.41&application-structure") { echo " class=\"current\""; } ?>>Application structure</a></li>
<li><a href="help.php?version=2.41&capacity"<?php if ($submenu == "version=2.41&capacity") { echo " class=\"current\""; } ?>>Capacity/change plans</a></li>
<li><a href="help.php?version=2.41&browsing"<?php if ($submenu == "version=2.41&browsing") { echo " class=\"current\""; } ?>>Browsing</a></li>
<li><a href="help.php?version=2.41&searches"<?php if ($submenu == "version=2.41&searches") { echo " class=\"current\""; } ?>>Searching</a></li>
<li><a href="help.php?version=2.41&events"<?php if ($submenu == "version=2.41&events") { echo " class=\"current\""; } ?>>Event handling</a></li>
<li><a href="help.php?version=2.41&user-forensics"<?php if ($submenu == "version=2.41&user-forensics") { echo " class=\"current\""; } ?>>User Forensics</a></li>
<li><a href="help.php?version=2.41&dnsforensics"<?php if ($submenu == "version=2.41&dnsforensics") { echo " class=\"current\""; } ?>>Hostname Forensics</a></li>
<li><a href="help.php?version=2.41&ip-forensics"<?php if ($submenu == "version=2.41&ip-forensics") { echo " class=\"current\""; } ?>>IP Forensics</a></li>
<li><a href="help.php?version=2.41&vlan-overview"<?php if ($submenu == "version=2.41&vlan-overview") { echo " class=\"current\""; } ?>>VLANS</a></li>
<li><a href="help.php?version=2.41&macforensics"<?php if ($submenu == "version=2.41&macforensics") { echo " class=\"current\""; } ?>>MAC Forensics</a></li>
<li><a href="help.php?version=2.41&watchlist"<?php if ($submenu == "version=2.41&watchlist") { echo " class=\"current\""; } ?>>Watch list</a></li>
<li><a href="help.php?version=2.41&whitelist"<?php if ($submenu == "version=2.41&whitelist") { echo " class=\"current\""; } ?>>White list</a></li>
<li><a href="help.php?version=2.41&user-admin"<?php if ($submenu == "version=2.41&user-admin") { echo " class=\"current\""; } ?>>User admin</a></li>
<li><a href="help.php?version=2.41&subnets"<?php if ($submenu == "version=2.41&subnets") { echo " class=\"current\""; } ?>>Subnets admin</a></li>
<li><a href="help.php?version=2.41&system-settings"<?php if ($submenu == "version=2.41&system-settings") { echo " class=\"current\""; } ?>>System settings</a></li>
<li><a href="help.php?version=2.41&sites-admin"<?php if ($submenu == "version=2.41&sites-admin") { echo " class=\"current\""; } ?>>Sites admin</a></li>
<li><a href="help.php?version=2.41&device-admin"<?php if ($submenu == "version=2.41&device-admin") { echo " class=\"current\""; } ?>>Devices admin</a></li>
<li><a href="help.php?version=2.41&tagging"<?php if ($submenu == "version=2.41&tagging") { echo " class=\"current\""; } ?>>Tagging</a></li>
<li><a href="help.php?version=2.41&user-lookup-admin"<?php if ($submenu == "version=2.41&user-lookup-admin") { echo " class=\"current\""; } ?>>User Lookup admin</a></li>
<li><a href="help.php?version=2.41&active-tests"<?php if ($submenu == "version=2.41&active-tests") { echo " class=\"current\""; } ?>>Active Tests</a></li>
<li><a href="help.php?version=2.41&integration"<?php if ($submenu == "version=2.41&integration") { echo " class=\"current\""; } ?>>Integration</a></li>
<li><a href="http://www.rebasoft.net/docs/support/RA_admin-guide_2.4.pdf" target="_blank">Download manual</a></li>
    		</ul>
            <?php } else {
               echo "<li><a href=\"help.php?version=2.4\" class=\"closed\">V2.4  &raquo;</a>";			
			   } 
 
	    		if ($section == "2.2") { ?>
           <li><a href="help.php?version=2.2" class="current">V2.2</a>
        	<ul>
                <li><a href="help.php?version=2.2&v2_2-new_features"<?php if ($submenu == "version=2.2&v2_2-new_features") { echo " class=\"current\""; } ?>>New in V2.2</a></li>
<li><a href="help.php?version=2.2&requirements"<?php if ($submenu == "version=2.2&requirements") { echo " class=\"current\""; } ?>>System requirements</a></li>
<li><a href="help.php?version=2.2&installation"<?php if ($submenu == "version=2.2&installation") { echo " class=\"current\""; } ?>>Installation</a></li>
<li><a href="help.php?version=2.2&license"<?php if ($submenu == "version=2.2&license") { echo " class=\"current\""; } ?>>License admin</a></li>
<li><a href="help.php?version=2.2&user-admin"<?php if ($submenu == "version=2.2&user-admin") { echo " class=\"current\""; } ?>>User admin</a></li>
<li><a href="help.php?version=2.2&subnets"<?php if ($submenu == "version=2.2&subnets") { echo " class=\"current\""; } ?>>Subnets admin</a></li>
<li><a href="help.php?version=2.2&system-settings"<?php if ($submenu == "version=2.2&system-settings") { echo " class=\"current\""; } ?>>System settings</a></li>
<li><a href="help.php?version=2.2&sites-admin"<?php if ($submenu == "version=2.2&sites-admin") { echo " class=\"current\""; } ?>>Sites admin</a></li>
<li><a href="help.php?version=2.2&device-admin"<?php if ($submenu == "version=2.2&device-admin") { echo " class=\"current\""; } ?>>Devices admin</a></li>
<li><a href="help.php?version=2.2&tagging"<?php if ($submenu == "version=2.2&tagging") { echo " class=\"current\""; } ?>>Tagging</a></li>
<li><a href="help.php?version=2.2&user-lookup-admin"<?php if ($submenu == "version=2.2&user-lookup-admin") { echo " class=\"current\""; } ?>>User Lookup admin</a></li>
<li><a href="help.php?version=2.2&active-tests"<?php if ($submenu == "version=2.2&active-tests") { echo " class=\"current\""; } ?>>Active Tests</a></li>
<li><a href="help.php?version=2.2&integration"<?php if ($submenu == "version=2.2&integration") { echo " class=\"current\""; } ?>>Integration</a></li>
<li><a href="help.php?version=2.2&application-structure"<?php if ($submenu == "version=2.2&application-structure") { echo " class=\"current\""; } ?>>Application structure</a></li>
<li><a href="help.php?version=2.2&events"<?php if ($submenu == "version=2.2&events") { echo " class=\"current\""; } ?>>Event handling</a></li>
<li><a href="help.php?version=2.2&searches"<?php if ($submenu == "version=2.2&searches") { echo " class=\"current\""; } ?>>Searching</a></li>
<li><a href="help.php?version=2.2&browsing"<?php if ($submenu == "version=2.2&browsing") { echo " class=\"current\""; } ?>>Browsing</a></li>
<li><a href="help.php?version=2.2&user-forensics"<?php if ($submenu == "version=2.2&user-forensics") { echo " class=\"current\""; } ?>>User Forensics</a></li>
<li><a href="help.php?version=2.2&dnsforensics"<?php if ($submenu == "version=2.2&dnsforensics") { echo " class=\"current\""; } ?>>Hostname Forensics</a></li>
<li><a href="help.php?version=2.2&ip-forensics"<?php if ($submenu == "version=2.2&ip-forensics") { echo " class=\"current\""; } ?>>IP Forensics</a></li>
<li><a href="help.php?version=2.2&vlan-overview"<?php if ($submenu == "version=2.2&vlan-overview") { echo " class=\"current\""; } ?>>VLANS</a></li>
<li><a href="help.php?version=2.2&macforensics"<?php if ($submenu == "version=2.2&macforensics") { echo " class=\"current\""; } ?>>MAC Forensics</a></li>
<li><a href="help.php?version=2.2&watchlist"<?php if ($submenu == "version=2.2&watchlist") { echo " class=\"current\""; } ?>>Watch list</a></li>
<li><a href="help.php?version=2.2&whitelist"<?php if ($submenu == "version=2.2&whitelist") { echo " class=\"current\""; } ?>>White list</a></li>
<li><a href="http://www.rebasoft.net/docs/support/RA_admin-guide_2.2.pdf" target="_blank">Download manual</a></li>
    		</ul>
            <?php } else {
               echo "<li><a href=\"help.php?version=2.2\" class=\"closed\">V2.2  &raquo;</a>";			
			   } 

				
		if ($section == "2.1") { ?>
           <li><a href="../MA/help.php?version=2.1" class="current">V2.1</a>
        	<ul>
                <li><a href="../MA/help.php?version=2.1&v2_2-new_features"<?php if ($submenu == "version=2.1&v2_2-new_features") { echo " class=\"current\""; } ?>>New in V2.1</a></li>
<li><a href="../MA/help.php?version=2.1&requirements"<?php if ($submenu == "version=2.1&requirements") { echo " class=\"current\""; } ?>>System requirements</a></li>
<li><a href="../MA/help.php?version=2.1&installation"<?php if ($submenu == "version=2.1&installation") { echo " class=\"current\""; } ?>>Installation</a></li>
<li><a href="../MA/help.php?version=2.1&license"<?php if ($submenu == "version=2.1&license") { echo " class=\"current\""; } ?>>License admin</a></li>
<li><a href="../MA/help.php?version=2.1&user-admin"<?php if ($submenu == "version=2.1&user-admin") { echo " class=\"current\""; } ?>>User admin</a></li>
<li><a href="../MA/help.php?version=2.1&system-settings"<?php if ($submenu == "version=2.1&system-settings") { echo " class=\"current\""; } ?>>System settings</a></li>
<li><a href="../MA/help.php?version=2.1&sites-admin"<?php if ($submenu == "version=2.1&sites-admin") { echo " class=\"current\""; } ?>>Sites admin</a></li>
<li><a href="../MA/help.php?version=2.1&device-admin"<?php if ($submenu == "version=2.1&device-admin") { echo " class=\"current\""; } ?>>Devices admin</a></li>
<li><a href="../MA/help.php?version=2.1&tagging"<?php if ($submenu == "version=2.1&tagging") { echo " class=\"current\""; } ?>>Tagging</a></li>
<li><a href="../MA/help.php?version=2.1&user-lookup-admin"<?php if ($submenu == "version=2.1&user-lookup-admin") { echo " class=\"current\""; } ?>>User Lookup admin</a></li>
<li><a href="../MA/help.php?version=2.1&active-tests"<?php if ($submenu == "version=2.1&active-tests") { echo " class=\"current\""; } ?>>Active Tests</a></li>
<li><a href="../MA/help.php?version=2.1&integration"<?php if ($submenu == "version=2.1&integration") { echo " class=\"current\""; } ?>>Integration</a></li>
<li><a href="../MA/help.php?version=2.1&application-structure"<?php if ($submenu == "version=2.1&application-structure") { echo " class=\"current\""; } ?>>Application structure</a></li>
<li><a href="../MA/help.php?version=2.1&events"<?php if ($submenu == "version=2.1&events") { echo " class=\"current\""; } ?>>Events system</a></li>
<li><a href="../MA/help.php?version=2.1&searches"<?php if ($submenu == "version=2.1&searches") { echo " class=\"current\""; } ?>>Searching</a></li>
<li><a href="../MA/help.php?version=2.1&browsing"<?php if ($submenu == "version=2.1&browsing") { echo " class=\"current\""; } ?>>Browsing</a></li>
<li><a href="../MA/help.php?version=2.1&macforensics"<?php if ($submenu == "version=2.1&macforensics") { echo " class=\"current\""; } ?>>MAC Forensics</a></li>
<li><a href="../MA/help.php?version=2.1&ip-forensics"<?php if ($submenu == "version=2.1&ip-forensics") { echo " class=\"current\""; } ?>>IP Forensics</a></li>
<li><a href="../MA/help.php?version=2.1&user-forensics"<?php if ($submenu == "version=2.1&user-forensics") { echo " class=\"current\""; } ?>>User Forensics</a></li>
<li><a href="../MA/help.php?version=2.1&vlan-overview"<?php if ($submenu == "version=2.1&vlan-overview") { echo " class=\"current\""; } ?>>VLANS</a></li>
<li><a href="../MA/help.php?version=2.1&watchlist"<?php if ($submenu == "version=2.1&watchlist") { echo " class=\"current\""; } ?>>Watch list</a></li>
<li><a href="../MA/help.php?version=2.1&whitelist"<?php if ($submenu == "version=2.1&whitelist") { echo " class=\"current\""; } ?>>White list</a></li>
<li><a href="http://www.rebasoft.net/docs/support/RA_admin-guide_2.1.pdf" target="_blank">Download manual</a></li>
    		</ul>
            <?php } else {
               echo "<li><a href=\"../MA/help.php?version=2.1\" class=\"closed\">V2.1  &raquo;</a>";			
			   } 
			   
		if ($section == "2.0") { ?>
           <li><a href="../MA/help.php?version=2.0" class="current">V2.0</a>
        	<ul>
                <li><a href="../MA/help.php?version=2.0&v2_0-new_features"<?php if ($submenu == "version=2.0&v2_0-new_features") { echo " class=\"current\""; } ?>>New in V2</a></li>
<li><a href="../MA/help.php?version=2.0&requirements"<?php if ($submenu == "version=2.0&requirements") { echo " class=\"current\""; } ?>>System requirements</a></li>
<li><a href="../MA/help.php?version=2.0&installation"<?php if ($submenu == "version=2.0&installation") { echo " class=\"current\""; } ?>>Installation</a></li>
<li><a href="../MA/help.php?version=2.0&license"<?php if ($submenu == "version=2.0&license") { echo " class=\"current\""; } ?>>License admin</a></li>
<li><a href="../MA/help.php?version=2.0&user-admin"<?php if ($submenu == "version=2.0&user-admin") { echo " class=\"current\""; } ?>>User admin</a></li>
<li><a href="../MA/help.php?version=2.0&system-settings"<?php if ($submenu == "version=2.0&system-settings") { echo " class=\"current\""; } ?>>System settings</a></li>
<li><a href="../MA/help.php?version=2.0&sites-admin"<?php if ($submenu == "version=2.0&sites-admin") { echo " class=\"current\""; } ?>>Sites admin</a></li>
<li><a href="../MA/help.php?version=2.0&device-admin"<?php if ($submenu == "version=2.0&device-admin") { echo " class=\"current\""; } ?>>Devices admin</a></li>
<li><a href="../MA/help.php?version=2.0&user-lookup-admin"<?php if ($submenu == "version=2.0&user-lookup-admin") { echo " class=\"current\""; } ?>>User Lookup admin</a></li>
<li><a href="../MA/help.php?version=2.0&active-tests"<?php if ($submenu == "version=2.0&active-tests") { echo " class=\"current\""; } ?>>Active Tests</a></li>
<li><a href="../MA/help.php?version=2.0&integration"<?php if ($submenu == "version=2.0&integration") { echo " class=\"current\""; } ?>>Integration</a></li>
<li><a href="../MA/help.php?version=2.0&application-structure"<?php if ($submenu == "version=2.0&application-structure") { echo " class=\"current\""; } ?>>Application structure</a></li>
<li><a href="../MA/help.php?version=2.0&events"<?php if ($submenu == "version=2.0&events") { echo " class=\"current\""; } ?>>Events system</a></li>
<li><a href="../MA/help.php?version=2.0&searches"<?php if ($submenu == "version=2.0&searches") { echo " class=\"current\""; } ?>>Searching</a></li>
<li><a href="../MA/help.php?version=2.0&browsing"<?php if ($submenu == "version=2.0&browsing") { echo " class=\"current\""; } ?>>Browsing</a></li>
<li><a href="../MA/help.php?version=2.0&macforensics"<?php if ($submenu == "version=2.0&macforensics") { echo " class=\"current\""; } ?>>MAC Forensics</a></li>
<li><a href="../MA/help.php?version=2.0&ip-forensics"<?php if ($submenu == "version=2.0&ip-forensics") { echo " class=\"current\""; } ?>>IP Forensics</a></li>
<li><a href="../MA/help.php?version=2.0&user-forensics"<?php if ($submenu == "version=2.0&user-forensics") { echo " class=\"current\""; } ?>>User Forensics</a></li>
<li><a href="../MA/help.php?version=2.0&vlan-overview"<?php if ($submenu == "version=2.0&vlan-overview") { echo " class=\"current\""; } ?>>VLANS</a></li>
<li><a href="../MA/help.php?version=2.0&watchlist"<?php if ($submenu == "version=2.0&watchlist") { echo " class=\"current\""; } ?>>Watch list</a></li>
<li><a href="../MA/help.php?version=2.0&whitelist"<?php if ($submenu == "version=2.0&whitelist") { echo " class=\"current\""; } ?>>White list</a></li>
<li><a href="http://www.rebasoft.net/docs/support/MA_admin-guide_2.0.pdf" target="_blank">Download manual</a></li>
    		</ul>
            <?php } else {
               echo "<li><a href=\"../MA/help.php?version=2.0\" class=\"closed\">V2.0  &raquo;</a>";			
			   } ?>

		<?php 
		if ($section == "1.7") { ?>
           <li><a href="../MA/help.php?version=1.7" class="current">V1.7/1.73</a>
        	<ul>
                <li><a href="../MA/help.php?version=1.7&requirements"<?php if ($submenu == "version=1.7&requirements") { echo " class=\"current\""; } ?>>System requirements</a></li>
                <li><a href="../MA/help.php?version=1.7&installation"<?php if ($submenu == "version=1.7&installation") { echo " class=\"current\""; } ?>>Installation</a></li>
                <li><a href="../MA/help.php?version=1.7&license"<?php if ($submenu == "version=1.7&license") { echo " class=\"current\""; } ?>>Licensing</a></li>
                <li><a href="../MA/help.php?version=1.7&system"<?php if ($submenu == "version=1.7&system") { echo " class=\"current\""; } ?>>System settings</a></li>
                <li><a href="../MA/help.php?version=1.7&device"<?php if ($submenu == "version=1.7&device") { echo " class=\"current\""; } ?>>Device Admin</a></li>
                <li><a href="../MA/help.php?version=1.7&site"<?php if ($submenu == "version=1.7&site") { echo " class=\"current\""; } ?>>Site Admin</a></li>
                <li><a href="../MA/help.php?version=1.7&lookup"<?php if ($submenu == "version=1.7&lookup") { echo " class=\"current\""; } ?>>User Lookup</a></li>
                <li><a href="../MA/help.php?version=1.7&watchlist"<?php if ($submenu == "version=1.7&watchlist") { echo " class=\"current\""; } ?>>Watch list</a></li>
                <li><a href="../MA/help.php?version=1.7&users"<?php if ($submenu == "version=1.7&users") { echo " class=\"current\""; } ?>>User Admin</a></li>
                <li><a href="../MA/help.php?version=1.7&integration"<?php if ($submenu == "version=1.7&integration") { echo " class=\"current\""; } ?>>Integration</a></li>
                <li><a href="../MA/help.php?version=1.7&reports"<?php if ($submenu == "version=1.7&reports") { echo " class=\"current\""; } ?>>Using - reports</a></li>
                <li><a href="../MA/help.php?version=1.7&operations"<?php if ($submenu == "version=1.7&operations") { echo " class=\"current\""; } ?>>Using - operations</a></li>
                <li><a href="../MA/help.php?version=1.7&searching"<?php if ($submenu == "version=1.7&searching") { echo " class=\"current\""; } ?>>Using - searches</a></li>
    			<li><a href="http://www.rebasoft.net/docs/support/MA_admin-guide_1.7.pdf" target="_blank">Download manual</a></li>
    		</ul>
            <?php } else {
               echo "<li><a href=\"../MA/help.php?version=1.7\" class=\"closed\">V1.7/1.73 &raquo;</a>";			
			   } ?>
        </li>
        <li><a href="../knowledgebase.php?category=6" class="closed">Knowledgebase</a></li>
    </ul>
    </div>
    </div>
	
       
<?php require ('../inc/footer.inc.static.php'); ?>