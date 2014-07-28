<link rel="stylesheet" href="css/nav.css" type="text/css" media="screen" /><!-- Menu -->
<link rel="stylesheet" href="css/print_styles.css" type="text/css" media="print" /> <!-- styles for print -->
<link rel="stylesheet" href="css/iphone_Portrait.css" type="text/css" media="screen" /> <!-- styles for iphone portrait-->
<link rel="stylesheet" href="css/iphone_Landscape.css" type="text/css" media="screen" /> <!-- styles for iphone Landscape-->
<link rel="stylesheet" href="css/ipad_Portrait.css" type="text/css" media="screen" /> <!-- styles for ipad Portrait-->
<link rel="stylesheet" href="css/ipad_Landscape.css" type="text/css" media="screen" /> <!-- styles for ipad Landscape-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/megamenu.js"></script>
<script>
$(document).ready(function($){
    $('.megamenu').megaMenuMobile();
    megaMenuContactForm(); 
});
</script>

<header class="BlackBorder">
</header>
<div class="LogoWrapper">
<a href="index"><img src="images/Feil-Logo-.png" alt="Feil Organization Logo" class="logoWrapperIMG"></a>
		
        <div class="wp_alerts"><iframe src="http://www.feilorg.com/notice/?page_id=62" allowTransparency="true" scrolling="no" frameBorder="0" class="myIframe"></iframe></div>

</div>
<div class="megamenu_wrapper_full megamenu_light_theme"><!-- BEGIN MENU WRAPPER -->



    <div class="megamenu_container megamenu_black"><!-- BEGIN MENU CONTAINER -->



        <ul class="megamenu"><!-- BEGIN MENU -->
           


            <li class="megamenu_button"><a href="#_">Menu</a></li>

        
            <li><a href="index" class="menuitem_drop">Home</a><!-- Begin Home Item -->
            </li><!-- End Home Item -->
            
 
 
 
 <li><a href="#_" class="menuitem_drop">About</a><!-- Begin Drop Down Item -->
            
            
                <div class="dropdown_1column dropdown_flyout"><!-- Begin columns container -->
                
                    
                    <ul class="levels">
                    
                    	<li><a href="overview">Overview</a></li>
                        <li><a href="expertise">Expertise</a></li>
                        <li><a href="history">Company History</a></li>
                    
                     </ul>   
                    
                
                </div><!-- End columns container -->
            
</li><!-- End Drop Down Item -->

 <li><a href="#_" class="menuitem_drop">Departments</a><!-- Begin Drop Down Item -->
            
            
                <div class="dropdown_1column dropdown_flyout"><!-- Begin columns container -->
                
                    
                    <ul class="levels">
                    
                    	<li><a href="management">Management</a></li>
                        <li><a href="leasing">Leasing</a></li>
                        <li><a href="development">Development</a></li>
                        <li><a href="sale_leaseback">Sale-Leaseback</a></li>
                        <li><a href="lending">Lending</a></li>
                        <li><a href="aquisitions">Acquisitions</a></li>
                    
                     </ul>   
                    
                
                </div><!-- End columns container -->
            
</li><!-- End Drop Down Item -->

 <li><a href="#_" class="menuitem_drop">Properties</a><!-- Begin Drop Down Item -->
            
            
                <div class="dropdown_1column dropdown_flyout"><!-- Begin columns container -->
                
                    
                    <ul class="levels">
                    
                    	
                        <li><a href="all_properties">All Properties</a></li>
                        <li><a href="retail">Retail</a></li>
                        <li><a href="office">Office</a></li>
                        <li><a href="residential">Residential</a></li>
                        <li><a href="industrial">Industrial</a></li>
                        <li><a href="land">Land</a></li>
                        <li><a href="current_projects-488">Current Projects</a></li>
                        <li><a href="net_leased">Net Leased</a></li>
                        
                    
                     </ul>   
                    
                
                </div><!-- End columns container -->
            
</li><!-- End Drop Down Item -->
            




<li><a href="news" class="menuitem_drop">News</a><!-- Begin Home Item -->

            
            
            
         
            <li><a href="#_" class="menuitem_drop">Tenant Services</a><!-- Begin Drop Down Item -->
            	<div class="dropdown_1column dropdown_flyout"><!-- Begin columns container -->
                
                    
                    <ul class="levels">
                    	<li><a href="tenant_services">Service Requests</a></li>
                        <li><a href="#">Notice Board</a></li>
                        <!-- <li><a href="tenant_retail">Retail Service Form</a></li>-->
                        
                        
                    </ul>   
                  </div><!-- End columns container -->
            </li><!-- End Drop Down Item -->
            
            <li><a href="#_" class="menuitem_drop noShow">Contact</a><!-- Begin Drop Down Item -->
            	<div class="dropdown_1column dropdown_flyout"><!-- Begin columns container -->
                
                    
                    <ul class="levels">
                    	<li><a href="contact_offices">Offices</a></li>
                        <li><a href="contact_executive_team">Executive Team</a></li>
                        
                        
                    </ul>   
                  </div><!-- End columns container -->
            </li><!-- End Drop Down Item -->
                
                
                
                
                
        	
            <li class="menuitem_right"><a href="#_" class="menuitem_drop noShow">Sign Up <span class="SignUP_arrowDown">&#8595;</span></a><!-- Begin Contact Item -->
                
                
                <div class="dropdown_3columns dropdown_right"><!-- Begin right aligned columns container -->
            
                    
                    <h2 class="h2SignUp">sign up for availability reports</h2>

                    <p class="requiredFields">Required Fields<span class="required"> *</span></p>

                    <div class="contact_form"><!-- Begin Contact Form -->

                        <form method="POST" id="megamenu_form" action="contact.php">

                            
                            <label for="name">First Name<span class="required"> *</span></label>
                            <input class="form_element" type="text" name="name" id="name" />
                            
                            <label for="last_name">Last Name<span class="required"> *</span></label>
                            <input class="form_element" type="text" name="last_name" id="last_name" />

                            <label for="email">Email<span class="required"> *</span></label>
                            <input class="form_element" type="text" name="email" id="email" />
                            
                            <label for="company">Company<span class="required"> *</span></label>
                            <input class="form_element" type="text" name="company" id="company" />
                             
                            
                            
                            <label for="nycRetail"  id="nycretailLabel" class="checkRightCopy">NYC Retail Space</label>
                            <input type="checkbox" name="NYC_Retail" value="Yes" id="nycRetail" class="checkLeft">
                            
							
                            <label for="liRetail"  id="liRetailLabel"class="checkRightCopy">Long Island Retail Space</label><br/>
                            <input type="checkbox" name="LI_Retail" value="Yes" id="liRetail" class="checkLeft">
                            
                            
                             <label for="nycOffice"  id="nycOfficeLabel"class="checkRightCopy">NYC Office Space</label><br/>
                            <input type="checkbox" name="NYC_Office" value="Yes" id="nycOffice" class="checkLeft">
                           
                            
                            <label for="liOffice"  id="liOfficeLabel" class="checkRightCopy">Long Island Office Space</label><br/>
                            <input type="checkbox" name="LI_Office" value="Yes" id="liOffice" class="checkLeft">
                            
                            
                       
                            <div class="clearFloats"></div>

                            <div class="form_buttons">
                                <input type="submit" class="button" id="submit" value="Submit" />
                                
                            </div>

                        </form>

                    </div><!-- End Contact Form -->
                    
                    

                    
                
                
                </div><!-- End right aligned columns container -->
                  
                  
            </li><!-- End Contact Item -->
    
    

        </ul><!-- END MENU -->



    </div><!-- END MENU CONTAINER -->



</div><!-- END MENU WRAPPER -->




<div class="pagecontentclear"></div>
