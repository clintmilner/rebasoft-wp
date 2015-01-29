<?php // about us 

$base = $_SERVER['HTTP_HOST'];
$submenu = $_SERVER['QUERY_STRING'];
$section = substr($submenu,8,3);
        switch ($section) {
				default:
        			$title = "Rebasoft - Application Auditor help";
					$description = "Rebasoft - MAC Auditor Help";
					$keywords = "Rebasoft - MAC Auditor help";
                   break;
				case "2.0":
				    $title = "Rebasoft - Application Auditor V2.0 Help";
				    $description = "Rebasoft - Application Auditor V2.0 help";
					$keywords = "Rebasoft - Application Auditor V2.0 help";
                   break;
				


}

$specific_style = "";

require ('../inc/header.static.php');

?>
<div id="maincontent" >
<div class="module content">
 <a name="start-of-content" id="start-of-content"></a>
        
<?php       
	   
	   if ($section == "2.0") { 
		      switch ($submenu) {
				default:
        			require('copyright.html');
                   break;
				case "version=2.0&2_0_features":
				   require ('2_0/2_0_features.html'); 
				break;
				case "version=2.0&requirements":
				   require ('2_0/requierments.html'); 
				break;
				case "version=2.0&installation":
				   require ('2_0/installation.html'); 
				break;
				case "version=2.0&application-structure":
				   require ('2_0/application-structure.html'); 
				break;
				case "version=2.0&using-aa":
				   require ('2_0/usingaa.html'); 
				break;
				case "version=2.0&forensics":
				   require ('2_0/forensics.html'); 
				break;
				case "version=2.0&reports":
				   require ('2_0/reports.html'); 
				break;
				case "version=2.0&subnet":
				   require ('2_0/subnet-reports.html'); 
				break;
                case "version=2.0&receivers":
				   require ('2_0/receivers-admin.html');
				break;
                case "version=2.0&applications":
				   require ('2_0/applications-admin.html');
				break;
                case "version=2.0&device":
				   require ('2_0/device-admin.html');
				break;
                case "version=2.0&subnets":
				   require ('2_0/subnet-admin.html');
				break;
                case "version=2.0&syslog":
				   require ('2_0/syslog-processors-admin.html');
				break;
                case "version=2.0&performance":
				   require ('2_0/performance.html');
				break;
                case "version=2.0&license":
				   require ('2_0/license-admin.html');
				break;
                case "version=2.0&system":
				   require ('2_0/system-admin.html');
				break;
                case "version=2.0&users":
				   require ('2_0/user-admin.html');
				break;
                case "version=2.0&dbbackup":
				   require ('2_0/App Auditor Appendix 5.html');
				break;
                case "version=2.0&reportindex":
				   require ('2_0/App Auditor Appendix 2.html');
				break;
			  }
		}
		 else { require('copyright.html'); }
		 ?>
</div>
</div>
<div id="sidebar">
  <div class="sidenav">
	
    	<h2><a href="help.php"><span class="purple">Application Auditor help</span></a></h2>
        
        <ul id="slider">
        		<?php 
	    		if ($section == "2.0") { ?>
           
           <li><a href="help.php?version=2.0" class="current">V2.0</a>
        	<ul>
                <li><a href="help.php?version=2.0&2_0_features"<?php if ($submenu == "version=2.0&2_0_features") { echo " class=\"current\""; } ?>>New in V2.0</a></li>
<li><a href="help.php?version=2.0&requirements"<?php if ($submenu == "version=2.0&requirements") { echo " class=\"current\""; } ?>>System requirements</a></li>
<li><a href="help.php?version=2.0&installation"<?php if ($submenu == "version=2.0&installation") { echo " class=\"current\""; } ?>>Installation</a></li>
<li><a href="help.php?version=2.0&using-aa"<?php if ($submenu == "version=2.0&using-aa") { echo " class=\"current\""; } ?>>Using Application Auditor</a></li>
<li><a href="help.php?version=2.0&application-structure"<?php if ($submenu == "version=2.0&application-structure") { echo " class=\"current\""; } ?>>Application structure</a></li>
<li><a href="help.php?version=2.0&reports"<?php if ($submenu == "version=2.0&reports") { echo " class=\"current\""; } ?>>Overview Reports</a></li>
<li><a href="help.php?version=2.0&subnet"<?php if ($submenu == "version=2.0&subnet") { echo " class=\"current\""; } ?>>Subnet Reports</a></li>
<li><a href="help.php?version=2.0&forensics"<?php if ($submenu == "version=2.0&forensics") { echo " class=\"current\""; } ?>>Forensics</a></li>
<li><a href="help.php?version=2.0&applications"<?php if ($submenu == "version=2.0&applications") { echo " class=\"current\""; } ?>>Applications set-up</a></li>
<li><a href="help.php?version=2.0&device"<?php if ($submenu == "version=2.0&device") { echo " class=\"current\""; } ?>>Device set-up</a></li>
<li><a href="help.php?version=2.0&license"<?php if ($submenu == "version=2.0&license") { echo " class=\"current\""; } ?>>License admin</a></li>
<li><a href="help.php?version=2.0&performance"<?php if ($submenu == "version=2.0&performance") { echo " class=\"current\""; } ?>>Performance</a></li>
<li><a href="help.php?version=2.0&receivers"<?php if ($submenu == "version=2.0&receivers") { echo " class=\"current\""; } ?>>Receivers set-up</a></li>
<li><a href="help.php?version=2.0&subnets"<?php if ($submenu == "version=2.0&subnets") { echo " class=\"current\""; } ?>>Subnets setup</a></li>
<li><a href="help.php?version=2.0&syslog"<?php if ($submenu == "version=2.0&syslog") { echo " class=\"current\""; } ?>>Syslog Processors</a></li>
<li><a href="help.php?version=2.0&system"<?php if ($submenu == "version=2.0&system") { echo " class=\"current\""; } ?>>System settings</a></li>
<li><a href="help.php?version=2.0&users"<?php if ($submenu == "version=2.0&users") { echo " class=\"current\""; } ?>>User settings</a></li>
<li><a href="help.php?version=2.0&dbbackup"<?php if ($submenu == "version=2.0&dbbackup") { echo " class=\"current\""; } ?>>Appendix - DB Backup</a></li>
<li><a href="help.php?version=2.0&reportindex"<?php if ($submenu == "version=2.0&reportindex") { echo " class=\"current\""; } ?>>Appendix - Report index</a></li>
<li><a href="http://www.rebasoft.net/docs/support/AppAuditor_Admin-and-Configuration_V2.0.pdf" target="_blank">Download manual</a></li>
    		</ul>
            <?php } else {
               echo '<li><a href="help.php?version=2.0" class="closed">V2.0 &raquo;</a>';			
			   } 
 
	    	?>
        </li>
        <li><a href="../knowledgebase.php?category=6"><b>Knowledgebase</b></a></li>

    </ul>
    </div>
    </div>
	
       
<?php require ('../inc/footer.inc.static.php'); ?>