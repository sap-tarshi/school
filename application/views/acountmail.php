<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!-- Define Charset -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<!-- Responsive Meta Tag -->
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">

    <title><?php echo $system_name ?></title><!-- Responsive Styles and Valid Styles -->

    <style type="text/css">
    	
	    body{
            width: 100%; 
            background-color: #4c4e4e; 
            margin:0; 
            padding:0; 
            -webkit-font-smoothing: antialiased;
        }
        
        html{
            width: 100%; 
        }
        
        table{
            font-size: 14px;
            border: 0;
        }
        
        /* ----------- responsivity ----------- */
        @media only screen and (max-width: 640px){
        
            /*------ top header ------ */
            .header-bg{width: 440px !important; height: 10px !important;}
            .main-header{line-height: 28px !important;}
            .main-subheader{line-height: 28px !important;}
            
            .container{width: 440px !important;}
            .container-middle{width: 420px !important;}
            .mainContent{width: 400px !important;}
            
            .main-image{width: 400px !important; height: auto !important;}
            .banner{width: 400px !important; height: auto !important;}
            /*------ sections ---------*/
            .section-item{width: 400px !important;}
            .section-img{width: 400px !important; height: auto !important;}
            /*------- prefooter ------*/
            .prefooter-header{padding: 0 10px !important; line-height: 24px !important;}
            .prefooter-subheader{padding: 0 10px !important; line-height: 24px !important;}
            /*------- footer ------*/
            .top-bottom-bg{width: 420px !important; height: auto !important;}
            
        }
        
        @media only screen and (max-width: 479px){
        
        	/*------ top header ------ */
            .header-bg{width: 280px !important; height: 10px !important;}
            .top-header-left{width: 260px !important; text-align: center !important;}
            .top-header-right{width: 260px !important;}
            .main-header{line-height: 28px !important; text-align: center !important;}
            .main-subheader{line-height: 28px !important; text-align: center !important;}
            
            /*------- header ----------*/
            .logo{width: 260px !important;}
            .nav{width: 260px !important;}
            
            .container{width: 280px !important;}
            .container-middle{width: 260px !important;}
            .mainContent{width: 240px !important;}
            
            .main-image{width: 240px !important; height: auto !important;}
            .banner{width: 240px !important; height: auto !important;}
            /*------ sections ---------*/
            .section-item{width: 240px !important;}
            .section-img{width: 240px !important; height: auto !important;}
            /*------- prefooter ------*/
            .prefooter-header{padding: 0 10px !important;line-height: 28px !important;}
            .prefooter-subheader{padding: 0 10px !important; line-height: 28px !important;}
            /*------- footer ------*/
            .top-bottom-bg{width: 260px !important; height: auto !important;}
            
	    }
	    
	    
    </style>
    
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
		<tr><td height="30"></td></tr>
        <tr bgcolor="#4c4e4e">
            <td width="100%" align="center" valign="top" bgcolor="#4c4e4e">
            	
                <!---------   top header   ------------>
                <table border="0" width="600" cellpadding="0" cellspacing="0" align="center" class="container">
                    <tr>
                        <td><img style="display: block;" src="<?php echo base_url(); ?>uploads/email/top-header-bg.png" alt="" class="header-bg" /></td>
                    </tr>
                    
                    <tr bgcolor="2780cb"><td height="5"></td></tr>
                    
                    <tr bgcolor="2780cb">
	                    <td align="center">
	                    	<table border="0" width="560" align="center" cellpadding="0" cellspacing="0" class="container-middle">
	                    		<tr>
	                    			<td>
					                    <table border="0" align="left" cellpadding="0" cellspacing="0" class="top-header-left">
					                    	<tr>
					                    		<td align="center">
					                    			<table border="0" cellpadding="0" cellspacing="0" class="date">
					                    				<tr>
								                    		<td>
									                    		<img editable="true" mc:edit="icon1" width="13" style="display: block;" src="<?php echo base_url(); ?>uploads/email/icon-cal.png" alt="icon 1" />
								                    		</td>
								                    		<td>&nbsp;&nbsp;</td>
								                    		<td mc:edit="date" style="color: #fefefe; font-size: 11px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;">
								                    			<singleline>
									                    			<?php echo date('l d F') ?>
								                    			</singleline>
								                    		</td>
								                    	</tr>
				
					                    			</table>
					                    		</td>
					                    	</tr>
					                    </table>
					                    
					                    <table border="0" align="left" cellpadding="0" cellspacing="0" align="center" class="top-header-right">
					                    	<tr><td width="30" height="20"></td></tr>
					                    </table>
					                    
					                    <table border="0" align="right" cellpadding="0" cellspacing="0" align="center" class="top-header-right">
					                    	<tr>
					                    		<td align="center">
					                    			<table border="0" cellpadding="0" cellspacing="0" align="center" class="tel">
					                    				<tr>
								                    		<td>
									                    		<img editable="true" mc:edit="icon2" width="17" style="display: block;" src="<?php echo base_url(); ?>uploads/email/icon-tel.png" alt="icon 2" />
								                    		</td>
								                    		<td>&nbsp;&nbsp;</td>
								                    		<td mc:edit="tel" style="color: #fefefe; font-size: 11px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;">
								                    			<singleline>
								                    				 <?php echo $phone; ?>
								                    			</singleline>
								                    		</td>
								                    	</tr>
					                    			</table>
					                    		</td>
					                    	</tr>					                    	
					                    </table>
	                    			</td>
	                    		</tr>
	                    	</table>
	                    </td>
                    </tr>
                    
                    <tr bgcolor="2780cb"><td height="10"></td></tr>
                    
                    <tr>
                    
                    	<td>
                        <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="container" bgcolor="ececec">
                	
                	
                	<!--------- Header  ---------->
                	<tr bgcolor="ececec"><td height="40"></td></tr>
                	
                	<tr>
	                	<td>
	                		<table border="0" width="560" align="center" cellpadding="0" cellspacing="0" class="container-middle">
	                			<tr>
	                				<td>
	                					<table border="0" align="center" cellpadding="0" cellspacing="0" class="logo">
				                			<tr>
				                				<td align="center">
				                					<a href="" style="display: block;"><img editable="true" mc:edit="logo" width="155" style="display: block;" src="http://tammanager.com/zeesms_cbse/uploads/logo.png" alt="logo" /></a>
				                				</td>
				                			</tr>
				                		</table>		
				                		
				                		
	                				</td>
	                			</tr>
	                		</table>
	                	</td>
                	</tr>
                	
                	<tr bgcolor="ececec"><td height="40"></td></tr>
                	<!---------- end header --------->
					
					
					<!--------- main section --------->                	
                	<tr>
                		<td>
                			<table border="0" width="560" align="center" cellpadding="0" cellspacing="0" class="container-middle">
                			
	                			<tr><td align="center"><img style="display: block;" width="560" height="auto" src="<?php echo base_url(); ?>uploads/email/top-rounded-bg.png" alt="" class="top-bottom-bg" /></td></tr>
	                				
	                			<tr bgcolor="ffffff"><td height="7"></td></tr>
	                			
	                			
	                			
	                			<tr bgcolor="ffffff"><td height="20"></td></tr>
	                			
	                			<tr bgcolor="ffffff">
	                				<td>
	                					<table width="528" border="0" align="center" cellpadding="0" cellspacing="0" class="mainContent">
	                						<tr>	
	                							<td mc:edit="title1" class="main-header" style="color: #484848; font-size: 16px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;">
				                					<multiline>
				                						Welcome To <?php echo $system_name ?>
				                					</multiline>
				                				</td>
				                			</tr>
                                            <tr><td height="20"></td></tr>
                                            <tr>
				                				<td mc:edit="subtitle1" class="main-subheader" style="color: #a4a4a4; font-size: 12px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;">
				                					<multiline>
				                						Please find your details bellow
				                					</multiline>
				                				</td>
				                			</tr>
                                            <tr><td height="20"></td></tr>	
                                            <tr>	
	                							<td mc:edit="title1" class="main-header" style="color: #484848; font-size: 16px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;">
				                					<multiline>
				                						UserName  :  <?php echo $account_email ?>
				                					</multiline>
				                				</td>
				                			</tr>
                                            <tr><td height="20"></td></tr>
                                            <tr>	
	                							<td mc:edit="title1" class="main-header" style="color: #484848; font-size: 16px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;">
				                					<multiline>
				                						Password  :  <?php echo $account_pwd ?>
				                					</multiline>
				                				</td>
				                			</tr>
                                            <tr><td height="20"></td></tr>
                                            <tr>	
	                							<td mc:edit="title1" class="main-header" style="color: #484848; font-size: 16px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;" align="center">
				                					<multiline>
				                						<div><a href="<?php echo base_url() ?>"
style="background-color:#382d80;border:1px solid #1e3650;border-radius:4px;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:13px;font-weight:bold;line-height:40px;text-align:center;text-decoration:none;width:200px;-webkit-text-size-adjust:none;mso-hide:all;">LOGIN HERE</a></div>
				                					</multiline>
				                				</td>
				                			</tr>
				                			<tr><td height="20"></td></tr>
				                			<tr>
				                				<td mc:edit="subtitle1" class="main-subheader" style="color: #a4a4a4; font-size: 12px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;">
				                					<multiline>
				                						Thank You for association with us
				                					</multiline>
				                				</td>
				                			</tr>			
	                						</tr>
	                					</table>
	                				</td>
	                			</tr>
	                			
	                			
	                			
	                			<tr><td align="center"><img style="display: block;" width="560" height="auto" src="<?php echo base_url(); ?>uploads/email/bottom-rounded-bg.png" alt="" class="top-bottom-bg" /></td></tr>	
	                			
                			</table>
                		</td>
                	</tr><!--------- end main section --------->
                	
                	
                	<tr bgcolor="ececec"><td height="35"></td></tr>

                	
                	
                	
                	<!---------- prefooter  --------->
                	
                	<tr bgcolor="ececec">
	                	<td>
	                		<table border="0" width="560" align="center" cellpadding="0" cellspacing="0" class="container-middle">
	                			<tr>
	                				<td>
	                					<table border="0" align="left" cellpadding="0" cellspacing="0" class="logo">
				                			<tr>
				                				<td align="center">
				                					<a href="" style="display: block;"><img editable="true" mc:edit="logo2" width="155" style="display: block;" src="http://tammanager.com/zeesms_cbse/uploads/logo.png" alt="logo" /></a>
				                				</td>
				                			</tr>
				                		</table>		
				                		<table border="0" align="left" cellpadding="0" cellspacing="0">
				                			<tr>
				                				<td height="20" width="20"></td>
				                			</tr>
				                		</table>
				                		<table border="0" align="right" cellpadding="0" cellspacing="0" class="nav">
				                			<tr><td height="10"></td></tr>
				                			<tr>
				                				<td align="center" mc:edit="socials" style="font-size: 13px; font-family: Helvetica, Arial, sans-serif;">
				                					<table border="0" align="center" cellpadding="0" cellspacing="0">
				                						<tr>
				                							<td>
				                								<a style="display: block; width: 16px;" href="#"><img editable="true" mc:edit="google" width="16" style="display: block;" src="<?php echo base_url(); ?>uploads/email/social-google.png" alt="google plus" /></a>		
				                							</td>
				                							<td>&nbsp;&nbsp;&nbsp;</td>
				                							<td>
				                								<a style="display: block; width: 16px;" href="#"><img editable="true" mc:edit="youtube" width="16" style="display: block;" src="<?php echo base_url(); ?>uploads/email/social-youtube.png" alt="youtube" /></a>
				                							</td>
				                							<td>&nbsp;&nbsp;&nbsp;</td>
				                							<td>
				                								<a style="display: block; width: 16px;" href="#"><img editable="true" mc:edit="facebook" width="16" style="display: block;" src="<?php echo base_url(); ?>uploads/email/social-facebook.png" alt="facebook" /></a>
				                							</td>
				                							<td>&nbsp;&nbsp;&nbsp;</td>
				                							<td>
				                								<a style="display: block; width: 16px;" href="#"><img editable="true" mc:edit="twitter" width="16" style="display: block;" src="<?php echo base_url(); ?>uploads/email/social-twitter.png" alt="twitter" /></a>
				                							</td>
				                							<td>&nbsp;&nbsp;&nbsp;</td>
				                							<td>
				                								<a style="display: block; width: 16px;" href="#"><img editable="true" mc:edit="linkedin" width="16" style="display: block;" src="<?php echo base_url(); ?>uploads/email/social-linkedin.png" alt="linkedin" /></a>
				                							</td>
				                						</tr>
				                					</table>
				                				</td>
				                			</tr>
				                		</table>
	                				</td>
	                			</tr>
	                		</table>
	                	</td>
                	</tr><!---------- end prefooter  --------->
                	
                	<tr bgcolor="ececec"><td height="35"></td></tr>	
                	<tr bgcolor="ffffff"><td height="25"></td></tr>
                	<tr bgcolor="ffffff"><td height="30"></td></tr>
                	
                	<tr bgcolor="ffffff">
                		<td align="center" mc:edit="copy2" style="color: #939393; font-size: 11px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;" class="prefooter-subheader">
	                		<multiline>
	                			<span style="color: #2f90e2">Adress :</span> <?php echo $address ?>  <br> <span style="color: #2f90e2">Tlf :</span> <?php echo $phone ?>     &nbsp;&nbsp;&nbsp;<span style="color: #2f90e2">Email :</span> <?php echo $system_email ?>
	                			
	                		</multiline>
                		</td>
                	</tr>
                	
                	<tr bgcolor="ffffff"><td height="30"></td></tr>
                    <table border="0" width="600" cellpadding="0" cellspacing="0" class="container">
                	<tr bgcolor="2780cb"><td height="14"></td></tr>
                	<tr bgcolor="2780cb">
                		<td mc:edit="copy3" align="center" style="color: #cecece; font-size: 10px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;">
                			<multiline>
                				<?php echo $system_name ?> © Copyright <?php echo date('Y');?> . All Rights Reserved
                			</multiline>
                		</td>
                	</tr>
                	
                	<tr>
                        <td><img style="display: block;" src="<?php echo base_url(); ?>uploads/email/bottom-footer-bg.png" alt="" class="header-bg" /></td>
                    </tr>
                </table>
               
                        </td>
                    	
                    </tr>
                    
                </table>
                
                <!----------    end top header    ------------>
                
                
                <!----------   main content----------->
                
                <!------------ end main Content ----------------->
                
                                
                <!---------- footer  --------->
                
                <!---------  end footer --------->
            </td>
        </tr>
        
        <tr><td height="30"></td></tr>
        
	</table>
	
	
</body>
</html>
	    