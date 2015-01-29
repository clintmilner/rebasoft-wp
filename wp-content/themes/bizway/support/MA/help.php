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
				    $title = "Rebasoft - MAC Auditor V2.0 Help";
				    $description = "Rebasoft - MAC Auditor V2.0 help";
					$keywords = "Rebasoft - MAC Auditor V2.0 help";
                break;
				case "2.1":
				    $title = "Rebasoft Auditor V2.1 Help";
				    $description = "Rebasoft Auditor V2.1 help";
					$keywords = "Rebasoft MAC Auditor V2.1 help";
                break;
				case "2.2":
				    $title = "Rebasoft Auditor V2.2 Help";
				    $description = "Rebasoft Auditor V2.2 help";
					$keywords = "Rebasoft MAC Auditor V2.2 help";
                break;


}



require ('../inc/header.static.php');

?>
<div id="maincontent" >
<div class="module content">
 <a name="start-of-content" id="start-of-content"></a>
        
<?php       
       if ($section == "") { require('copyright.html'); }

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
       if ($section == "2.1") { 
		      switch ($submenu) {
				default:
        			require('copyright.html');
                   break;
				case "version=2.1&v2_1-new_features":
				   require ('2_1/v2_1-new_features.html'); 
				break;
				case "version=2.1&requirements":
				   require ('2_1/requirements.html'); 
				break;
				case "version=2.1&installation":
				   require ('2_1/installation.html'); 
				break;
				case "version=2.1&license":
				   require ('2_1/license.html');
				break;
				case "version=2.1&user-admin":
				   require ('2_1/user-admin.html'); 
				break;
				case "version=2.1&system-settings":
				   require ('2_1/system-settings.html'); 
				break;
				case "version=2.1&sites-admin":
				   require ('2_1/sites-admin.html'); 
				break;
				case "version=2.1&device-admin":
				   require ('2_1/device-admin.html'); 
				break;
				case "version=2.1&user-lookup-admin":
				   require ('2_1/user-lookup-admin.html'); 
				break;
				case "version=2.1&active-tests":
				   require ('2_1/active-tests.html'); 
				break;
				case "version=2.1&integration":
				   require ('2_1/integration.html'); 
				break;
				case "version=2.1&application-structure":
				   require ('2_1/application-structure.html'); 
				break;
				case "version=2.1&events":
				   require ('2_1/events.html'); 
				break;
				case "version=2.1&searches":
				   require ('2_1/searches.html'); 
				break;
				case "version=2.1&browsing":
				   require ('2_1/browsing.html'); 
				break;
				case "version=2.1&macforensics":
				   require ('2_1/macforensics.html'); 
				break;
				case "version=2.1&ip-forensics":
				   require ('2_1/ip-forensics.html'); 
				break;
				case "version=2.1&user-forensics":
				   require ('2_1/user-forensics.html'); 
				break;
				case "version=2.1&vlan-overview":
				   require ('2_1/vlan-overview.html');
				break;
				case "version=2.1&watchlist":
				   require ('2_1/watchlist.html');
				break;
				case "version=2.1&whitelist":
				   require ('2_1/whitelist.html');
				break;
				case "version=2.1&tagging":
				   require ('2_1/tagging.html');
				break;
			  }
		}


        if ($section == "2.0") { 
		      switch ($submenu) {
				default:
        			require('copyright-old.html');
                   break;
				case "version=2.0&v2_0-new_features":
				   require ('2_0/v2_0-new_features.html'); 
				break;
				case "version=2.0&requirements":
				   require ('2_0/requirements.html'); 
				break;
				case "version=2.0&installation":
				   require ('2_0/installation.html'); 
				break;
				case "version=2.0&license":
				   require ('2_0/license.html');
				break;
				case "version=2.0&user-admin":
				   require ('2_0/user-admin.html'); 
				break;
				case "version=2.0&system-settings":
				   require ('2_0/system-settings.html'); 
				break;
				case "version=2.0&sites-admin":
				   require ('2_0/sites-admin.html'); 
				break;
				case "version=2.0&device-admin":
				   require ('2_0/device-admin.html'); 
				break;
				case "version=2.0&user-lookup-admin":
				   require ('2_0/user-lookup-admin.html'); 
				break;
				case "version=2.0&active-tests":
				   require ('2_0/active-tests.html'); 
				break;
				case "version=2.0&integration":
				   require ('2_0/integration.html'); 
				break;
				case "version=2.0&application-structure":
				   require ('2_0/application-structure.html'); 
				break;
				case "version=2.0&events":
				   require ('2_0/events.html'); 
				break;
				case "version=2.0&searches":
				   require ('2_0/searches.html'); 
				break;
				case "version=2.0&browsing":
				   require ('2_0/browsing.html'); 
				break;
				case "version=2.0&macforensics":
				   require ('2_0/macforensics.html'); 
				break;
				case "version=2.0&ip-forensics":
				   require ('2_0/ip-forensics.html'); 
				break;
				case "version=2.0&user-forensics":
				   require ('2_0/user-forensics.html'); 
				break;
				case "version=2.0&vlan-overview":
				   require ('2_0/vlan-overview.html');
				break;
				case "version=2.0&watchlist":
				   require ('2_0/watchlist.html');
				break;
				case "version=2.0&whitelist":
				   require ('2_0/whitelist.html');
				break;
				
			  }
		}
if ($section == "1.7") {
	      	switch ($submenu) {
				default:
        			require('copyright-old.html');
                   break;
				case "version=1.7&requirements":
				    require ('1_72/requirements.html');
                   break;         
				case "version=1.7&installation":
				    require ('1_72/installation.html');
                   break;    
				case "version=1.7&license":
				    require ('1_72/license.html');
                   break; 
                case "version=1.7&system":
				    require ('1_72/system.html');
                   break; 
                case "version=1.7&device":
				    require ('1_72/device.html');
                   break; 
                case "version=1.7&site":
				    require ('1_72/sites.html');
                   break; 
                case "version=1.7&lookup":
				    require ('1_72/lookup.html');
                   break; 
                case "version=1.7&watchlist":
				    require ('1_72/watchlist.html');
                   break; 
                case "version=1.7&users":
				    require ('1_72/users.html');
                   break; 
                case "version=1.7&integration":
				    require ('1_72/integration.html');
                   break; 
                case "version=1.7&reports":
				    require ('1_72/reports.html');
                   break;
                case "version=1.7&operations":
				    require ('1_72/operations.html');
                   break; 
                case "version=1.7&searching":
				    require ('1_72/searching.html');
                   break; 
                }
            }
?>


</div>
</div>
<div id="sidebar">
  <div class="sidenav">
    	<h2><a href="help.php"><span class="purple">Auditor Core help</span></a></h2>
        <ul id="slider">
        		<?php 
	    		if ($section == "2.2") { ?>
           <li><a href="../auditor/help.php?version=2.2" class="current">V2.2</a>
        	<ul>
                <li><a href="help.php?version=2.2&v2_1-new_features"<?php if ($submenu == "version=2.2&v2_2-new_features") { echo " class=\"current\""; } ?>>New in V2.2</a></li>
<li><a href="../auditor/help.php?version=2.2&requirements"<?php if ($submenu == "version=2.2&requirements") { echo " class=\"current\""; } ?>>System requirements</a></li>
<li><a href="../auditor/help.php?version=2.2&installation"<?php if ($submenu == "version=2.2&installation") { echo " class=\"current\""; } ?>>Installation</a></li>
<li><a href="../auditor/help.php?version=2.2&license"<?php if ($submenu == "version=2.2&license") { echo " class=\"current\""; } ?>>License admin</a></li>
<li><a href="../auditor/help.php?version=2.2&user-admin"<?php if ($submenu == "version=2.2&user-admin") { echo " class=\"current\""; } ?>>User admin</a></li>
<li><a href="../auditor/help.php?version=2.2&system-settings"<?php if ($submenu == "version=2.2&system-settings") { echo " class=\"current\""; } ?>>System settings</a></li>
<li><a href="../auditor/help.php?version=2.2&sites-admin"<?php if ($submenu == "version=2.2&sites-admin") { echo " class=\"current\""; } ?>>Sites admin</a></li>
<li><a href="../auditor/help.php?version=2.2&device-admin"<?php if ($submenu == "version=2.2&device-admin") { echo " class=\"current\""; } ?>>Devices admin</a></li>
<li><a href="../auditor/help.php?version=2.2&tagging"<?php if ($submenu == "version=2.2&tagging") { echo " class=\"current\""; } ?>>Tagging</a></li>
<li><a href="../auditor/help.php?version=2.2&user-lookup-admin"<?php if ($submenu == "version=2.2&user-lookup-admin") { echo " class=\"current\""; } ?>>User Lookup admin</a></li>
<li><a href="../auditor/help.php?version=2.2&active-tests"<?php if ($submenu == "version=2.2&active-tests") { echo " class=\"current\""; } ?>>Active Tests</a></li>
<li><a href="../auditor/help.php?version=2.2&integration"<?php if ($submenu == "version=2.2&integration") { echo " class=\"current\""; } ?>>Integration</a></li>
<li><a href="../auditor/help.php?version=2.2&application-structure"<?php if ($submenu == "version=2.2&application-structure") { echo " class=\"current\""; } ?>>Application structure</a></li>
<li><a href="../auditor/help.php?version=2.2&events"<?php if ($submenu == "version=2.2&events") { echo " class=\"current\""; } ?>>Events system</a></li>
<li><a href="../auditor/help.php?version=2.2&searches"<?php if ($submenu == "version=2.2&searches") { echo " class=\"current\""; } ?>>Searching</a></li>
<li><a href="../auditor/help.php?version=2.2&browsing"<?php if ($submenu == "version=2.2&browsing") { echo " class=\"current\""; } ?>>Browsing</a></li>
<li><a href="../auditor/help.php?version=2.2&macforensics"<?php if ($submenu == "version=2.2&macforensics") { echo " class=\"current\""; } ?>>MAC Forensics</a></li>
<li><a href="../auditor/help.php?version=2.2&ip-forensics"<?php if ($submenu == "version=2.2&ip-forensics") { echo " class=\"current\""; } ?>>IP Forensics</a></li>
<li><a href="../auditor/help.php?version=2.2&user-forensics"<?php if ($submenu == "version=2.2&user-forensics") { echo " class=\"current\""; } ?>>User Forensics</a></li>
<li><a href="../auditor/help.php?version=2.2&vlan-overview"<?php if ($submenu == "version=2.2&vlan-overview") { echo " class=\"current\""; } ?>>VLANS</a></li>
<li><a href="../auditor/help.php?version=2.2&watchlist"<?php if ($submenu == "version=2.2&watchlist") { echo " class=\"current\""; } ?>>Watch list</a></li>
<li><a href="../auditor/help.php?version=2.2&whitelist"<?php if ($submenu == "version=2.2&whitelist") { echo " class=\"current\""; } ?>>White list</a></li>
<li><a href="http://www.rebasoft.net/docs/support/RA_admin-guide_2.2.pdf" target="_blank">Download manual</a></li>
    		</ul>
            <?php } else {
               echo "<li><a href=\"../auditor/help.php?version=2.2\" >V2.2</a>";			
			   } 

				
		if ($section == "2.1") { ?>
           <li><a href="help.php?version=2.1" class="current">V2.1</a>
        	<ul>
                <li><a href="help.php?version=2.1&amp;v2_1-new_features"<?php if ($submenu == "version=2.1&v2_2-new_features") { echo " class=\"current\""; } ?>>New in V2.1</a></li>
<li><a href="help.php?version=2.1&amp;requirements"<?php if ($submenu == "version=2.1&requirements") { echo " class=\"current\""; } ?>>System requirements</a></li>
<li><a href="help.php?version=2.1&amp;installation"<?php if ($submenu == "version=2.1&installation") { echo " class=\"current\""; } ?>>Installation</a></li>
<li><a href="help.php?version=2.1&amp;license"<?php if ($submenu == "version=2.1&license") { echo " class=\"current\""; } ?>>License admin</a></li>
<li><a href="help.php?version=2.1&amp;user-admin"<?php if ($submenu == "version=2.1&user-admin") { echo " class=\"current\""; } ?>>User admin</a></li>
<li><a href="help.php?version=2.1&amp;system-settings"<?php if ($submenu == "version=2.1&system-settings") { echo " class=\"current\""; } ?>>System settings</a></li>
<li><a href="help.php?version=2.1&amp;sites-admin"<?php if ($submenu == "version=2.1&sites-admin") { echo " class=\"current\""; } ?>>Sites admin</a></li>
<li><a href="help.php?version=2.1&amp;device-admin"<?php if ($submenu == "version=2.1&device-admin") { echo " class=\"current\""; } ?>>Devices admin</a></li>
<li><a href="help.php?version=2.1&amp;tagging"<?php if ($submenu == "version=2.1&tagging") { echo " class=\"current\""; } ?>>Tagging</a></li>
<li><a href="help.php?version=2.1&amp;user-lookup-admin"<?php if ($submenu == "version=2.1&user-lookup-admin") { echo " class=\"current\""; } ?>>User Lookup admin</a></li>
<li><a href="help.php?version=2.1&amp;active-tests"<?php if ($submenu == "version=2.1&active-tests") { echo " class=\"current\""; } ?>>Active Tests</a></li>
<li><a href="help.php?version=2.1&amp;integration"<?php if ($submenu == "version=2.1&integration") { echo " class=\"current\""; } ?>>Integration</a></li>
<li><a href="help.php?version=2.1&amp;application-structure"<?php if ($submenu == "version=2.1&application-structure") { echo " class=\"current\""; } ?>>Application structure</a></li>
<li><a href="help.php?version=2.1&amp;events"<?php if ($submenu == "version=2.1&events") { echo " class=\"current\""; } ?>>Events system</a></li>
<li><a href="help.php?version=2.1&amp;searches"<?php if ($submenu == "version=2.1&searches") { echo " class=\"current\""; } ?>>Searching</a></li>
<li><a href="help.php?version=2.1&amp;browsing"<?php if ($submenu == "version=2.1&browsing") { echo " class=\"current\""; } ?>>Browsing</a></li>
<li><a href="help.php?version=2.1&amp;macforensics"<?php if ($submenu == "version=2.1&macforensics") { echo " class=\"current\""; } ?>>MAC Forensics</a></li>
<li><a href="help.php?version=2.1&amp;ip-forensics"<?php if ($submenu == "version=2.1&ip-forensics") { echo " class=\"current\""; } ?>>IP Forensics</a></li>
<li><a href="help.php?version=2.1&amp;user-forensics"<?php if ($submenu == "version=2.1&user-forensics") { echo " class=\"current\""; } ?>>User Forensics</a></li>
<li><a href="help.php?version=2.1&amp;vlan-overview"<?php if ($submenu == "version=2.1&vlan-overview") { echo " class=\"current\""; } ?>>VLANS</a></li>
<li><a href="help.php?version=2.1&amp;watchlist"<?php if ($submenu == "version=2.1&watchlist") { echo " class=\"current\""; } ?>>Watch list</a></li>
<li><a href="help.php?version=2.1&amp;whitelist"<?php if ($submenu == "version=2.1&whitelist") { echo " class=\"current\""; } ?>>White list</a></li>
<li><a href="http://www.rebasoft.net/docs/support/RA_admin-guide_2.1.pdf" target="_blank">Download manual</a></li>
    		</ul>
            <?php } else {
               echo "<li><a href=\"../MA/help.php?version=2.1\" >V2.1</a>";			
			   } 
			   
		if ($section == "2.0") { ?>
           <li><a href="help.php?version=2.0" class="current">V2.0</a>
        	<ul>
                <li><a href="help.php?version=2.0&amp;v2_0-new_features"<?php if ($submenu == "version=2.0&v2_0-new_features") { echo " class=\"current\""; } ?>>New in V2</a></li>
<li><a href="help.php?version=2.0&amp;requirements"<?php if ($submenu == "version=2.0&requirements") { echo " class=\"current\""; } ?>>System requirements</a></li>
<li><a href="help.php?version=2.0&amp;installation"<?php if ($submenu == "version=2.0&installation") { echo " class=\"current\""; } ?>>Installation</a></li>
<li><a href="help.php?version=2.0&amp;license"<?php if ($submenu == "version=2.0&license") { echo " class=\"current\""; } ?>>License admin</a></li>
<li><a href="help.php?version=2.0&amp;user-admin"<?php if ($submenu == "version=2.0&user-admin") { echo " class=\"current\""; } ?>>User admin</a></li>
<li><a href="help.php?version=2.0&amp;system-settings"<?php if ($submenu == "version=2.0&system-settings") { echo " class=\"current\""; } ?>>System settings</a></li>
<li><a href="help.php?version=2.0&amp;sites-admin"<?php if ($submenu == "version=2.0&sites-admin") { echo " class=\"current\""; } ?>>Sites admin</a></li>
<li><a href="help.php?version=2.0&amp;device-admin"<?php if ($submenu == "version=2.0&device-admin") { echo " class=\"current\""; } ?>>Devices admin</a></li>
<li><a href="help.php?version=2.0&amp;user-lookup-admin"<?php if ($submenu == "version=2.0&user-lookup-admin") { echo " class=\"current\""; } ?>>User Lookup admin</a></li>
<li><a href="help.php?version=2.0&amp;active-tests"<?php if ($submenu == "version=2.0&active-tests") { echo " class=\"current\""; } ?>>Active Tests</a></li>
<li><a href="help.php?version=2.0&amp;integration"<?php if ($submenu == "version=2.0&integration") { echo " class=\"current\""; } ?>>Integration</a></li>
<li><a href="help.php?version=2.0&amp;application-structure"<?php if ($submenu == "version=2.0&application-structure") { echo " class=\"current\""; } ?>>Application structure</a></li>
<li><a href="help.php?version=2.0&amp;events"<?php if ($submenu == "version=2.0&events") { echo " class=\"current\""; } ?>>Events system</a></li>
<li><a href="help.php?version=2.0&amp;searches"<?php if ($submenu == "version=2.0&searches") { echo " class=\"current\""; } ?>>Searching</a></li>
<li><a href="help.php?version=2.0&amp;browsing"<?php if ($submenu == "version=2.0&browsing") { echo " class=\"current\""; } ?>>Browsing</a></li>
<li><a href="help.php?version=2.0&amp;macforensics"<?php if ($submenu == "version=2.0&macforensics") { echo " class=\"current\""; } ?>>MAC Forensics</a></li>
<li><a href="help.php?version=2.0&amp;ip-forensics"<?php if ($submenu == "version=2.0&ip-forensics") { echo " class=\"current\""; } ?>>IP Forensics</a></li>
<li><a href="help.php?version=2.0&amp;user-forensics"<?php if ($submenu == "version=2.0&user-forensics") { echo " class=\"current\""; } ?>>User Forensics</a></li>
<li><a href="help.php?version=2.0&amp;vlan-overview"<?php if ($submenu == "version=2.0&vlan-overview") { echo " class=\"current\""; } ?>>VLANS</a></li>
<li><a href="help.php?version=2.0&amp;watchlist"<?php if ($submenu == "version=2.0&watchlist") { echo " class=\"current\""; } ?>>Watch list</a></li>
<li><a href="help.php?version=2.0&amp;whitelist"<?php if ($submenu == "version=2.0&whitelist") { echo " class=\"current\""; } ?>>White list</a></li>
<li><a href="http://www.rebasoft.net/docs/support/MA_admin-guide_2.0.pdf" target="_blank">Download manual</a></li>
    		</ul>
            <?php } else {
               echo "<li><a href=\"../MA/help.php?version=2.0\" >V2.0</a>";			
			   } ?>

		<?php 
		if ($section == "1.7") { ?>
           <li><a href="help.php?version=1.7" class="current">V1.7/1.73</a>
        	<ul>
                <li><a href="help.php?version=1.7&amp;requirements"<?php if ($submenu == "version=1.7&requirements") { echo " class=\"current\""; } ?>>System requirements</a></li>
                <li><a href="help.php?version=1.7&amp;installation"<?php if ($submenu == "version=1.7&installation") { echo " class=\"current\""; } ?>>Installation</a></li>
                <li><a href="help.php?version=1.7&amp;license"<?php if ($submenu == "version=1.7&license") { echo " class=\"current\""; } ?>>Licensing</a></li>
                <li><a href="help.php?version=1.7&amp;system"<?php if ($submenu == "version=1.7&system") { echo " class=\"current\""; } ?>>System settings</a></li>
                <li><a href="help.php?version=1.7&amp;device"<?php if ($submenu == "version=1.7&device") { echo " class=\"current\""; } ?>>Device Admin</a></li>
                <li><a href="help.php?version=1.7&amp;site"<?php if ($submenu == "version=1.7&site") { echo " class=\"current\""; } ?>>Site Admin</a></li>
                <li><a href="help.php?version=1.7&amp;lookup"<?php if ($submenu == "version=1.7&lookup") { echo " class=\"current\""; } ?>>User Lookup</a></li>
                <li><a href="help.php?version=1.7&amp;watchlist"<?php if ($submenu == "version=1.7&watchlist") { echo " class=\"current\""; } ?>>Watch list</a></li>
                <li><a href="help.php?version=1.7&amp;users"<?php if ($submenu == "version=1.7&users") { echo " class=\"current\""; } ?>>User Admin</a></li>
                <li><a href="help.php?version=1.7&amp;integration"<?php if ($submenu == "version=1.7&integration") { echo " class=\"current\""; } ?>>Integration</a></li>
                <li><a href="help.php?version=1.7&amp;reports"<?php if ($submenu == "version=1.7&reports") { echo " class=\"current\""; } ?>>Using - reports</a></li>
                <li><a href="help.php?version=1.7&amp;operations"<?php if ($submenu == "version=1.7&operations") { echo " class=\"current\""; } ?>>Using - operations</a></li>
                <li><a href="help.php?version=1.7&amp;searching"<?php if ($submenu == "version=1.7&searching") { echo " class=\"current\""; } ?>>Using - searches</a></li>
    			<li><a href="http://www.rebasoft.net/docs/support/MA_admin-guide_1.7.pdf" target="_blank">Download manual</a></li>
    		</ul>
            <?php } else {
               echo "<li><a href=\"../MA/help.php?version=1.7\" >V1.7/1.73</a>";			
			   } ?>
        </li>
        <li><a href="../knowledgebase.php?category=6">Knowledgebase</a></li>

    </ul>
    </div>
    </div>
<?php require ('../inc/footer.inc.static.php'); ?>
