<?php
/* The template for displaying front page pages. */
?>
<?php get_header(); ?> 
<div class="slider-wrapper-container">
            <div class="slider-wrapper">
                <?php if (bizway_get_option('bizway_first_head') != '') { ?>
                    <h1><?php echo stripslashes(bizway_get_option('bizway_first_head')); ?></h1>
                <?php } else { ?>
                <?php } ?>    
                <?php if (bizway_get_option('bizway_second_head') != '') { ?>
                    <h2><?php echo stripslashes(bizway_get_option('bizway_second_head')); ?></h2>
                <?php } else { ?>
                <?php } ?>
                <div class="flexslider loading" style="overflow-x: hidden; overflow-y: hidden; ">
                    <ul class="slides" align="center">
<?php
                        $mystring2 = bizway_get_option('bizway_slideimage3');
                        $value_img = array('.jpg', '.png', '.jpeg', '.gif', '.bmp', '.tiff', '.tif');
                        $check_img_ofset = 0;
                        foreach ($value_img as $get_value) {
                            if (preg_match("/$get_value/", $mystring2)) {
                                $check_img_ofset = 1;
                            }
                        }
                        ?>
                        <?php if ($check_img_ofset == 0 && bizway_get_option('bizway_slideimage3') != '') { ?>
                            <li><?php echo bizway_get_option('bizway_slideimage3'); ?></li>
                        <?php } else { ?> 
                            <li style="list-style-type:none;">
                                <?php if (bizway_get_option('bizway_slideimage3') != '') { ?>
                                    <a href="<?php echo bizway_get_option('bizway_slidelink3'); ?>"><img  src="<?php echo bizway_get_option('bizway_slideimage3'); ?>" width="960" height="400" alt=""/></a>
                                <?php } else { ?>
                                <div id="page2">
                                    <a href="<?php echo home_url(); ?>/insider_threat.php"><img src="/images/shellshock-banner.jpg" class="background-image" alt=""/>
                                    <div align="left" class="overlay-text" style="-webkit-text-stroke: 1.5px white;margin-left:50px;color:white !important;text-shadow:none;">Shellshock Bash Bug
                                   <p style="color:white !important; font-size:20px;"></br>The latest in a long line of</br>high profile security threats.</br></br>Rebasoft provides a simple solution.</br>
                                   <div style="font-size:20px" align="left">Learn More >></div></div></div></a>
                                 <?php } ?></li>

                        <?php } ?>

                    <?php
                        $mystring2 = bizway_get_option('bizway_slideimage3');
                        $value_img = array('.jpg', '.png', '.jpeg', '.gif', '.bmp', '.tiff', '.tif');
                        $check_img_ofset = 0;
                        foreach ($value_img as $get_value) {
                            if (preg_match("/$get_value/", $mystring2)) {
                                $check_img_ofset = 1;
                            }
                        }
                        ?>
                        <?php if ($check_img_ofset == 0 && bizway_get_option('bizway_slideimage3') != '') { ?>
                            <li><?php echo bizway_get_option('bizway_slideimage3'); ?></li>
                        <?php } else { ?> 
                            <li style="list-style-type:none;">
                                <?php if (bizway_get_option('bizway_slideimage3') != '') { ?>
                                    <a href="<?php echo bizway_get_option('bizway_slidelink3'); ?>"><img  src="<?php echo bizway_get_option('bizway_slideimage3'); ?>" width="960" height="400" alt=""/></a>
                                <?php } else { ?>
                                <div id="page2">
                                    <a href="<?php echo home_url(); ?>/insider_threat.php"><img src="/images/insider_banner.png" class="background-image" alt=""/>
                                    <div align="left" class="overlay-text" style="-webkit-text-stroke: 1.5px black;margin-left:90px;color:black !important;text-shadow:none;">Combatting the insider threat
                                   <p style="color:black !important; font-size:20px;"></br>The most difficult threats to detect.</br>See how Rebasoft can defend your business
                                   <div style="font-size:20px" align="left">Learn More >></div></div></div></a>
                                 <?php } ?></li>

                        <?php } ?>

                    <?php
                        $mystring2 = bizway_get_option('bizway_slideimage3');
                        $value_img = array('.jpg', '.png', '.jpeg', '.gif', '.bmp', '.tiff', '.tif');
                        $check_img_ofset = 0;
                        foreach ($value_img as $get_value) {
                            if (preg_match("/$get_value/", $mystring2)) {
                                $check_img_ofset = 1;
                            }
                        }
                        ?>
                        <?php if ($check_img_ofset == 0 && bizway_get_option('bizway_slideimage3') != '') { ?>
                            <li><?php echo bizway_get_option('bizway_slideimage3'); ?></li>
                        <?php } else { ?> 
                            <li>
                                <?php if (bizway_get_option('bizway_slideimage3') != '') { ?>
                                    <a href="<?php echo bizway_get_option('bizway_slidelink3'); ?>"><img  src="<?php echo bizway_get_option('bizway_slideimage3'); ?>" width="960" height="400" alt=""/></a>
                                <?php } else { ?>
                                <div id="page2">
                                    <a href="<?php echo home_url(); ?>/endpoint_security.php"><img src="/images/endpoint_banner.jpg" class="background-image" alt=""/>
                                    <div align="left" class="overlay-text" style="-webkit-text-stroke: 1.5px white;margin-left:90px;color:white !important;text-shadow:none;">Endpoint Security
                                    <p style="-webkit-text-stroke: 1.5px white; font-size:20px;"></br>Improve Endpoint Security without Agent Software
                                    <div style="font-size:20px" align="left">Learn More >></div></div></div></a>
                                 <?php } ?></li>

                        <?php } ?>  
                      <?php
                        $mystring2 = bizway_get_option('bizway_slideimage3');
                        $value_img = array('.jpg', '.png', '.jpeg', '.gif', '.bmp', '.tiff', '.tif');
                        $check_img_ofset = 0;
                        foreach ($value_img as $get_value) {
                            if (preg_match("/$get_value/", $mystring2)) {
                                $check_img_ofset = 1;
                            }
                        }
                        ?>
                        <?php if ($check_img_ofset == 0 && bizway_get_option('bizway_slideimage3') != '') { ?>
                            <li><?php echo bizway_get_option('bizway_slideimage3'); ?></li>
                        <?php } else { ?> 
                            <li>
                                <?php if (bizway_get_option('bizway_slideimage3') != '') { ?>
                                    <a href="<?php echo bizway_get_option('bizway_slidelink3'); ?>"><img  src="<?php echo bizway_get_option('bizway_slideimage3'); ?>" width="960" height="400" alt=""/></a>
                                <?php } else { ?>
                                <div id="page2">
                                    <a href="<?php echo home_url(); ?>/datacentre_security.php"><img src="/images/data_centre_banner.jpg" class="background-image" alt=""/>
                                    <div align="left" class="overlay-text" style="-webkit-text-stroke-width: 1px; color:black !important;margin-left:70px;text-shadow:none;">Data Centre Security
                                    <p style="color:black; font-size:20px;"></br>The Vital Role of Access Control in a </br>Data Centre Security Strategy
                                    <div style="font-size:20px" align="left">Learn More >></div></div></div></a>
                                 <?php } ?></li>

                        <?php } ?> 
                        
                        <?php
                        $mystring2 = bizway_get_option('bizway_slideimage3');
                        $value_img = array('.jpg', '.png', '.jpeg', '.gif', '.bmp', '.tiff', '.tif');
                        $check_img_ofset = 0;
                        foreach ($value_img as $get_value) {
                            if (preg_match("/$get_value/", $mystring2)) {
                                $check_img_ofset = 1;
                            }
                        }
                        ?>
                        <?php if ($check_img_ofset == 0 && bizway_get_option('bizway_slideimage3') != '') { ?>
                            <li><?php echo bizway_get_option('bizway_slideimage3'); ?></li>
                        <?php } else { ?> 
                            <li>
                                <?php if (bizway_get_option('bizway_slideimage3') != '') { ?>
                                    <a href="<?php echo bizway_get_option('bizway_slidelink3'); ?>"><img  src="<?php echo bizway_get_option('bizway_slideimage3'); ?>" width="960" height="400" alt=""/></a>
                                <?php } else { ?>
                                <div id="page2">
                                    <a href="<?php echo home_url(); ?>/RPA.php"><img src="/images/spidersweb_banner.jpg" class="background-image" alt=""/>
                                    <div align="left" class="overlay-text" style="-webkit-text-stroke: 1.5px white;margin-left:30px;text-shadow:none;">Improving Firewall<br/> Effectiveness
                                    <p style="font-size:20px;"></br>Securing Dynamic Address Objects </br> with Rebasoft and </br> Palo Alto Networks, Inc.
                                    <div style="font-size:20px" align="left">Learn More >></div></div></div></a>
                                 <?php } ?></li>

                        <?php } ?> 
                           <?php
                        $mystring2 = bizway_get_option('bizway_slideimage3');
                        $value_img = array('.jpg', '.png', '.jpeg', '.gif', '.bmp', '.tiff', '.tif');
                        $check_img_ofset = 0;
                        foreach ($value_img as $get_value) {
                            if (preg_match("/$get_value/", $mystring2)) {
                                $check_img_ofset = 1;
                            }
                        }
                        ?>
                        <?php if ($check_img_ofset == 0 && bizway_get_option('bizway_slideimage3') != '') { ?>
                            <li><?php echo bizway_get_option('bizway_slideimage3'); ?></li>
                        <?php } else { ?> 
                            <li style="list-style-type:none;">
                                <?php if (bizway_get_option('bizway_slideimage3') != '') { ?>
                                    <a href="<?php echo bizway_get_option('bizway_slidelink3'); ?>"><img  src="<?php echo bizway_get_option('bizway_slideimage3'); ?>" width="960" height="400" alt=""/></a>
                                <?php } else { ?>
                                <div id="page2">
                                    <a href="<?php echo home_url(); ?>/black_screen.php"><img src="/images/blackscreen_banner.jpg" class="background-image" alt=""/>
                                    <div align="left" class="overlay-text" style="-webkit-text-stroke: 1.5px white;margin-left:0px;color:white !important;text-shadow:none;">C:\Telnet > exit
                                    <p style="-webkit-text-stroke: 1.5px white;color:white !important;font-size:20px;"></br>How Rebasoft can change the way you<br/> troubleshoot your networks
                                   <div style="font-size:20px" align="left"><br />Learn More >></div></div></div></a>
                                 <?php } ?></li>

                        <?php } ?>
                                                <?php
                        $mystring2 = bizway_get_option('bizway_slideimage3');
                        $value_img = array('.jpg', '.png', '.jpeg', '.gif', '.bmp', '.tiff', '.tif');
                        $check_img_ofset = 0;
                        foreach ($value_img as $get_value) {
                            if (preg_match("/$get_value/", $mystring2)) {
                                $check_img_ofset = 1;
                            }
                        }
                        ?>
                        <?php if ($check_img_ofset == 0 && bizway_get_option('bizway_slideimage3') != '') { ?>
                            <li><?php echo bizway_get_option('bizway_slideimage3'); ?></li>
                        <?php } else { ?> 
                            <li style="list-style-type:none;">
                                <?php if (bizway_get_option('bizway_slideimage3') != '') { ?>
                                    <a href="<?php echo bizway_get_option('bizway_slidelink3'); ?>"><img  src="<?php echo bizway_get_option('bizway_slideimage3'); ?>" width="960" height="400" alt=""/></a>
                                <?php } else { ?>
                                <div id="page2">
                                    <a href="<?php echo home_url(); ?>/CIO.php"><img src="/images/CIO_banner.jpg" class="background-image" alt=""/>
                                    <div align="left" class="overlay-text" style="-webkit-text-stroke: 1.5px white;margin-left:90px;color:white !important;text-shadow:none;">Revolving Door of the CIO
                                    <p style="-webkit-text-stroke: 1.5px white;color:white !important;font-size:20px;"></br>See how Rebasoft can protect your infrastructure
                                    <div style="font-size:20px" align="left">Learn More >></div></div></div></a>
                                 <?php } ?></li>

                        <?php } ?>
                        
                        <?php
                        $mystring2 = bizway_get_option('bizway_slideimage3');
                        $value_img = array('.jpg', '.png', '.jpeg', '.gif', '.bmp', '.tiff', '.tif');
                        $check_img_ofset = 0;
                        foreach ($value_img as $get_value) {
                            if (preg_match("/$get_value/", $mystring2)) {
                                $check_img_ofset = 1;
                            }
                        }
                        ?>
                        <?php if ($check_img_ofset == 0 && bizway_get_option('bizway_slideimage3') != '') { ?>
                            <li><?php echo bizway_get_option('bizway_slideimage3'); ?></li>
                        <?php } else { ?> 
                            <li style="list-style-type:none;">
                                <?php if (bizway_get_option('bizway_slideimage3') != '') { ?>
                                    <a href="<?php echo bizway_get_option('bizway_slidelink3'); ?>"><img  src="<?php echo bizway_get_option('bizway_slideimage3'); ?>" width="960" height="400" alt=""/></a>
                                <?php } else { ?>
                                <div id="page2">
                                    <a href="<?php echo home_url(); ?>/VoIP.php"><img src="/images/voip_banner.jpg" class="background-image" alt=""/>
                                    <div align="left" class="overlay-text" style="-webkit-text-stroke: 1.5px black;margin-left:0px;color:black !important;margin-left:20px;text-shadow:none;">Rogue Device causes <br/>Network Outage
                                    <p style="-webkit-text-stroke: 1.5px black;color:black !important;font-size:20px;"></br>See how Rebasoft Threat Auditor helped find and fix</br> a rogue device causing network outages
                                    <div style="font-size:20px" align="left">Learn More >></div></div></div></a>
                                 <?php } ?></li>

                        <?php } ?>
                          <?php
                        $mystring2 = bizway_get_option('bizway_slideimage3');
                        $value_img = array('.jpg', '.png', '.jpeg', '.gif', '.bmp', '.tiff', '.tif');
                        $check_img_ofset = 0;
                        foreach ($value_img as $get_value) {
                            if (preg_match("/$get_value/", $mystring2)) {
                                $check_img_ofset = 1;
                            }
                        }
                        ?>
                        <?php if ($check_img_ofset == 0 && bizway_get_option('bizway_slideimage3') != '') { ?>
                            <li><?php echo bizway_get_option('bizway_slideimage3'); ?></li>
                        <?php } else { ?> 
                            <li style="list-style-type:none;">
                                <?php if (bizway_get_option('bizway_slideimage3') != '') { ?>
                                    <a href="<?php echo bizway_get_option('bizway_slidelink3'); ?>"><img  src="<?php echo bizway_get_option('bizway_slideimage3'); ?>" width="960" height="400" alt=""/></a>
                                <?php } else { ?>
                                <div id="page2">
                                    <a href="<?php echo home_url(); ?>/zero_day.php"><img src="/images/zero_day_banner.jpg" class="background-image" alt=""/>
                                    <div align="left" class="overlay-text" style="-webkit-text-stroke: 1.5px white;margin-left:90px;color:white !important;text-shadow:none;">Zero Day Attacks
                                    <p style="-webkit-text-stroke: 1.5px white;color:white !important;font-size:20px;"></br>Find & Foil Network Based Zero-Day Attacks.
                                    <div style="font-size:20px" align="left">Learn More >></div></div></div></a>
                                 <?php } ?></li>

                        <?php } ?>
					  <?php
                        $mystring1 = bizway_get_option('bizway_slideimage1');
                        $value_img = array('.jpg', '.png', '.jpeg', '.gif', '.bmp', '.tiff', '.tif');
                        $check_img_ofset = 0;
                        foreach ($value_img as $get_value) {
                            if (preg_match("/$get_value/", $mystring1)) {
                                $check_img_ofset = 1;
                            }
                        }                         
                        ?>
                        <?php if ($check_img_ofset == 0 && bizway_get_option('bizway_slideimage1') != '') { ?>
                            <li><?php echo bizway_get_option('bizway_slideimage1'); ?></li>
                        <?php } else { ?> 
                            <li>
                                <?php if (bizway_get_option('bizway_slideimage1') != '') { ?>
                                    <a href="<?php echo bizway_get_option('bizway_slidelink1'); ?>"><img  src="<?php echo bizway_get_option('bizway_slideimage1'); ?>" alt=""/></a>
                                <?php } else { ?>
                                   <div id="page2">
                                <a href="<?php echo home_url(); ?>/network-access-control"><img src="/images/padlock_banner.jpg" class="background-image" alt=""/>
                                <div class="overlay-text" style="-webkit-text-stroke: 1.5px white;color:white !important;text-shadow:none;">Simplifying Access Control (NAC)<br/>
                                <p style="-webkit-text-stroke: 1.5px white;font-size:20px;"><br/>Quick & easy to deploy<br/>More cost effective than other NAC vendors<br/>Probeless<br/>Agentless<br/><br/>Learn More >></div></div></p></a>
                                <?php } ?></li>
                        <?php } ?>  

                         <?php
                        $mystring1 = bizway_get_option('bizway_slideimage1');
                        $value_img = array('.jpg', '.png', '.jpeg', '.gif', '.bmp', '.tiff', '.tif');
                        $check_img_ofset = 0;
                        foreach ($value_img as $get_value) {
                            if (preg_match("/$get_value/", $mystring1)) {
                                $check_img_ofset = 1;
                            }
                        }
                        ?>
                        <?php if ($check_img_ofset == 0 && bizway_get_option('bizway_slideimage1') != '') { ?>
                            <li><?php echo bizway_get_option('bizway_slideimage1'); ?></li>
                        <?php } else { ?> 
                            <li style="list-style-type:none;">
                                <?php if (bizway_get_option('bizway_slideimage1') != '') { ?>
                                    <a href="<?php echo bizway_get_option('bizway_slidelink1'); ?>"><img  src="<?php echo bizway_get_option('bizway_slideimage1'); ?>" alt=""/></a>
                                <?php } else { ?>
                                    <div id="page2">
                                    <a href="<?php echo home_url(); ?>/risk-management"><img src="/images/climber_banner.jpg" width="1300" height="400" class="background-image" alt=""/>
                                    <div align="left" class="overlay-text" style="-webkit-text-stroke: 1.5px white;color:white !important;margin-left:30px;text-shadow:none;">Continuous Security<br/> Risk Management
                                    <p style="-webkit-text-stroke: 1.5px white;color:white; font-size:20px;"></br>Real Time Device & User Intelligence<br/>
                                    <div align="left" style="font-size:20px">Learn More >></div></p></p></div></div></a>
                                <?php } ?></li>
                        <?php } ?>  
                         <?php
                        $mystring2 = bizway_get_option('bizway_slideimage2');
                        $value_img = array('.jpg', '.png', '.jpeg', '.gif', '.bmp', '.tiff', '.tif');
                        $check_img_ofset = 0;
                        foreach ($value_img as $get_value) {
                            if (preg_match("/$get_value/", $mystring2)) {
                                $check_img_ofset = 1;
                            }
                        }
                        ?>
                        <?php if ($check_img_ofset == 0 && bizway_get_option('bizway_slideimage2') != '') { ?>
                            <li><?php echo bizway_get_option('bizway_slideimage2'); ?></li>
                        <?php } else { ?> 
                            <li style="list-style-type:none;">
                                <?php if (bizway_get_option('bizway_slideimage2') != '') { ?>
                                    <a href="<?php echo bizway_get_option('bizway_slidelink2'); ?>"><img  src="<?php echo bizway_get_option('bizway_slideimage2'); ?>" width="960" height="400" alt=""/></a>
                                <?php } else { ?>
                                <div id="page2">
                                    <a href="<?php echo home_url(); ?>/threat-auditor"><img  src="/images/volcano_banner.jpg" class="background-image" alt=""/>
                                    <div align="left" class="overlay-text" style="-webkit-text-stroke: 1.5px white;color:white !important;text-shadow:none;">Could You Better Cope With Threats?
                                    <p style="-webkit-text-stroke: 1.5px white;color:white; font-size:20px;"></br>Complete networks & application visibility
                                    <div style="font-size:20px">Learn More >></div></p></p></div></div></a>
                                    
                                <?php } ?></li>
                       <?php } ?>  
                       <?php
                        $mystring2 = bizway_get_option('bizway_slideimage3');
                        $value_img = array('.jpg', '.png', '.jpeg', '.gif', '.bmp', '.tiff', '.tif');
                        $check_img_ofset = 0;
                        foreach ($value_img as $get_value) {
                            if (preg_match("/$get_value/", $mystring2)) {
                                $check_img_ofset = 1;
                            }
                        }
                        ?>
                        <?php if ($check_img_ofset == 0 && bizway_get_option('bizway_slideimage3') != '') { ?>
                            <li><?php echo bizway_get_option('bizway_slideimage3'); ?></li>
                        <?php } else { ?> 
                            <li style="list-style-type:none;">
                                <?php if (bizway_get_option('bizway_slideimage3') != '') { ?>
                                    <a href="<?php echo bizway_get_option('bizway_slidelink3'); ?>"><img  src="<?php echo bizway_get_option('bizway_slideimage3'); ?>" width="960" height="400" alt=""/></a>
                                <?php } else { ?>
                                <div id="page2">
                                    <a href="<?php echo home_url(); ?>/byod"><img src="/images/byod_banner.jpg" class="background-image" alt=""/>
                                    <div align="left" class="overlay-text" style="-webkit-text-stroke: 1.5px black;margin-left:100px;color:black !important;text-shadow:none;">Bring Your Own Device
                                    <p style="-webkit-text-stroke: 1.5px black;font-size:20px;"></br>Better Managed BYODs projects
                                    <div style="font-size:20px" align="left">Learn More >></div></div></div></a>
                                 <?php } ?></li>

                        <?php } ?>
                     
                     
                                                                   </ul>
                </div>             
            </div>
        <div class="clear"></div>
</div>
</table></div></a>
<div class="main-content-container">
    <div class="container_24">
            <div class="main-content"> 
                <div class="grid_sub_8 sub_alpha">
                    <div class="page-item first-item view view-ninth">
                        <?php if (bizway_get_option('bizway_firsthead') != '') { ?>
                            <h1><a href="<?php echo bizway_get_option('bizway_link1'); ?>"><?php echo stripslashes(bizway_get_option('bizway_firsthead')); ?></a></h1>
                        <?php } else { ?>
                            <h4><a href="<?php echo home_url(); ?>/request-demo"><?php _e("Request a Demo","bizway"); ?></a></h4>
                        <?php } ?>
                        <?php if (bizway_get_option('bizway_featureimg1') != '') { ?>
                            <a href="<?php echo bizway_get_option('bizway_link1'); ?>"><img class="effect" src="<?php echo bizway_get_option('bizway_featureimg1'); ?>"/></a>
                            <div class="mask mask-1"></div>
                            <div class="mask mask-2"></div>
                        <?php } else { ?>
                            <a href="<?php echo home_url(); ?>/request-demo"><img class="effect" src="/images/request-demo.jpg" /></a>
                        <?php } ?> 
                        <?php if (bizway_get_option('bizway_firstdesc') != '') { ?>
                            <p><?php echo stripslashes(bizway_get_option('bizway_firstdesc')); ?></p>
                        <?php } else { ?>
                            <div style="font-size:12px;"><?php _e('','bizway'); ?></div>
                        <?php } ?> 
                        
                    </div>
                </div>
                <div class="grid_sub_8 sub_middle">
<div>
<h4>Featured Customers</h4>
<div class="banner" style="margin-top:-10px">
    <ul>
<li style="margin-left:0"><a href="/case-studies/csanalog"><img src="/logos/featured_analog.jpg"></a></li>
<li style="margin-left:0"><a href="/case-studies/csfcom"><img src="/logos/featured_fastcom.jpg"></a></li>
<li style="margin-left:0"><a href="/case-studies/csindexis"><img src="/logos/featured_indexis.jpg"></a></li>
<li style="margin-left:0"><a href="/case-studies/csifg"><img src="/logos/featured_ifg.jpg"></a></li>
<li style="margin-left:0"><a href="/case-studies/cslinx"><img src="/logos/featured_linx.jpg"></a></li>
<li style="margin-left:0"><a href="/case-studies/csncc"><img src="/logos/featured_ncc.jpg"></a></li>
<li style="margin-left:0"><a href="/case-studies/csrds"><img src="/logos/featured_rds.jpg"></a></li>
<li style="margin-left:0"><a href="/case-studies/csdmu"><img src="/logos/featured_demont_uni.jpg"></a></li>
<li style="margin-left:0"><a href="/case-studies/csuog"><img src="/logos/featured_uog.jpg"></a></li>
</ul>
</div>
</div></div>                               
<div class="grid_sub_8 sub_omega">
                    <div class="page-item last-item view view-ninth">
                        <?php if (bizway_get_option('bizway_thirdhead') != '') { ?>
                           <h1><a href="<?php echo bizway_get_option('bizway_link3'); ?>"><?php echo stripslashes(bizway_get_option('bizway_thirdhead')); ?></a></h1>
                        <?php } else { ?>
                            <h4><a href="<?php echo home_url(); ?>/news"><?php _e("Rebasoft News","bizway"); ?></a></h4>
                        <?php } ?> 
                        <?php if (bizway_get_option('bizway_thirddesc') != '') { ?>
                            <p><?php echo stripslashes(bizway_get_option('bizway_thirddesc')); ?></p>
                        <?php } else { ?>
                            <?php if (function_exists (spe_show)) spe_show(); ?>
                        <?php } ?> 
                        
                    </div>
                </div>     
        </div>
        <div class="clear"></div>
    </div>
</div></div>
<?php get_footer(); ?>