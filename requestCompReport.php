<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->
<head>
<!-- Define Header and Footer Vars -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PZ477NF');</script>
<!-- End Google Tag Manager -->
						
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->
    <title>Requesting a Comprehensive Analysis</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

	<!-- Google Fonts -->
 	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,700" rel="stylesheet"> 

	<!-- Custom & Default Styles -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/carousel.css">
	<link rel="stylesheet" href="style.css">

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
	<![endif]-->
<script data-ad-client="ca-pub-4312482482091772" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<meta property="og:url"           content="https://datalyticsbi.com/requestCompReport.php" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Request A Comprehensive Analysis" />
  <meta property="og:description"   content="Get Your Free No Obligation No Credit Card Needed Comprehensive Analysis" />
  <meta property="og:image"         content="https://datalyticsbi.com/images/reportF.jpg" />


</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PZ477NF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0"></script>
	
<?php @$biheader = include 'biheader.php'; ?>
		
		<section class="section ldp">
			<div class="container">
				<div class="row">
                <div class="col-md-6 col-sm-6 text-center">
                    <h1>Request A Free Comprehensive Analysis</h1>
                     <img src="/images/logo.png" alt="DatalyticsBI Business Analytics"><br />
                </div>
                <div class="col-md-6 col-sm-6">
                   
					<h1> Complete the Form Below</h1>
                    <p><b>Phone: </b>931-266-4732<br /><b>Email: </b><a href="mailto:sales@datalyticsbi.com">sales@datalyticsbi.com</a></p>
				</div>
								 <div class="col-md-6 col-sm-6">
								<p><b>***</b><font color="blue">Would you Recommend Our Comprehensive Analysis to your Friends or Family? Click the recommend button below..</font></p><div class="fb-like" 
    data-href="https://datalyticsbi.com/requestCompReport.php" 
    data-layout="button_count" 
    data-action="recommend" 
    data-show-faces="true">
								</div></div>
								 <div class="col-md-6 col-sm-6">
								 </div>
  
			</div>
			</div>
		</section>
		
			
  <div class="row">
            <div class="col-md-12 col-sm-12 ">
              
                <?php
                
                
								
								
								?>
                
                
               
						</div>
					
               
  </div>
             
             
  <div class="row">
          <div class="col-md-6 col-sm-6">
		       <p><b>Please answer a few basic questions so that your assigned Business Analyst can contact you to complete your Comprehensive Analysis.</b> <a href="compReport.php">Learn More about the Comprehensive Analysis</a></p>
					     
							 <p><font color="blue">***We will Determine which Analytics (</font><a href="marketingAnalytics.php"><b><font color="black"><u>Marketing Analytics</u></font></b></a>, <a href="businessAnalytics.php"><b><font color="black"><u>Business Analytics</u></font></b></a><br/>, <a href="dataAnalytics.php"><b><font color="black"><u>Data Analytics</u></font></b></a><font color="blue">) You Qualify for to Increase Your Business Revenue</font></p>
							 <h3>**All communication is secure and non-disclosed to any third-party</h3>
               
                  <?php
                       // define variables and set to empty values
                       $nameErr = $compNameErr = $compTitleErr = $bizAddressErr = $websiteErr = $emailErr =  "";
                       $name = $compName = $compTitle = $bizAddress = $website =$email = $websitedetails =  "";
                       
                       
                       if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        
                         if (empty($_POST["name"])) {
                           $nameErr = "Name is required";
                         } else {
                           $name = test_input($_POST["name"]);
                           // check if name only contains letters and whitespace
                           if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                             $nameErr = "Only letters and white space allowed";
                           }
                         }
												 
												 if (empty($_POST["compName"])) {
                           $compNameErr = "Company Name is required";
                         } else {
                           $compName = test_input($_POST["compName"]);
                           // check if name only contains letters and whitespace
                           if (!preg_match("/^[a-zA-Z ]*$/",$compName)) {
                             $compNameErr = "Only letters and white space allowed";
                           }
                         }
												 
												 if (empty($_POST["compTitle"])) {
                           $compTitleErr = "Company Title is required";
                         } else {
                           $compTitle = test_input($_POST["compTitle"]);
                           // check if name only contains letters and whitespace
                           if (!preg_match("/^[a-zA-Z ]*$/",$compTitle)) {
                             $compTitleErr = "Only letters and white space allowed";
                           }
                         }
                         
												  if (empty($_POST["bizAddressStreet"])) {
                           $bizAddressStreetErr = "Company Street Address is required";
                         } else {
                           $bizAddressStreet = test_input($_POST["bizAddressStreet"]);
                           // check if name only contains letters and whitespace
                           if (!preg_match("/^[a-z0-9 .\-]+$/i",$bizAddressStreet)) {
                             $bizAddressStreetErr = "Only letters, numbers, dashes, periods and white space allowed";
                           }
                         }
                         
                         
                           if (empty($_POST["bizAddressCity"])) {
                           $bizAddressCityErr = "Company City is required";
                         } else {
                           $bizAddressCity = test_input($_POST["bizAddressCity"]);
                           // check if name only contains letters and whitespace
                           if (!preg_match("/^[a-zA-Z ]*$/",$bizAddressCity)) {
                             $bizAddressCityErr = "Only letters and white space allowed";
                           }
                         }
                         
                             if (empty($_POST["bizAddressState"])) {
                           $bizAddressStateErr = "Company State is required";
                         } else {
                           $bizAddressState = $_POST["bizAddressState"];
                           $us_state_abbrevs = array('AL', 'AK', 'AS', 'AZ', 'AR', 'CA', 'CO', 'CT', 'DE', 'DC', 'FM', 'FL', 'GA', 'GU', 'HI', 'ID', 'IL', 'IN', 'IA', 'KS', 'KY', 'LA', 'ME', 'MH', 'MD', 'MA', 'MI', 'MN', 'MS', 'MO', 'MT', 'NE', 'NV', 'NH', 'NJ', 'NM', 'NY', 'NC', 'ND', 'MP', 'OH', 'OK', 'OR', 'PW', 'PA', 'PR', 'RI', 'SC', 'SD', 'TN', 'TX', 'UT', 'VT', 'VI', 'VA', 'WA', 'WV', 'WI', 'WY', 'AE', 'AA', 'AP');
                          
                          
                           // check if state abbreviations in array
                               if (!in_array($bizAddressState, $us_state_abbrevs)) {
                                $bizAddressStateErr =  "Invalid State Abbreviation";
                            }
                         }
                         
                           if (empty($_POST["bizAddressZip"])) {
                           $bizAddressZipErr = "Company Zip is required";
                         } else {
                           $bizAddressZip = test_input($_POST["bizAddressZip"]);
                           // check if name only contains letters and whitespace
                           if (!preg_match("#[0-9]{5}#",$bizAddressZip)) {
                             $bizAddressZipErr = "Only 5 Digits allowed";
                           }
                         }
                         
                         
                            if (empty($_POST["phone"])) {
                           $phoneErr = "Phone is required";
                         } else {
                           $phone = test_input($_POST["phone"]);
                           // check if name only contains letters and whitespace
                           if (!preg_match("/^[1-9][0-9]{9}$/",$phone)) {
                             $phoneErr = "Invalid Phone Number. Only Digits are allowed";
                           }
                         }
                         
                             if (empty($_POST["bizPhone"])) {
                           $bizPhoneErr = "Business Phone is required";
                         } else {
                           $bizPhone = test_input($_POST["bizPhone"]);
                           // check if name only contains letters and whitespace
                           if (!preg_match("/^[1-9][0-9]{9}$/",$bizPhone)) {
                             $bizPhoneErr = "Only 10 Digits Are Allowed, No dashes or spaces";
                           }
                         }
                         
                         
                         
                         
                         
												 
												 if (empty($_POST["website"])) {
                           $websiteErr = "Company Website is required";
                         } else {
                           $website = test_input($_POST["website"]);
                           // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
                           if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                             $websiteErr = "Invalid URL";
                           }
                         }
												 
                         if (empty($_POST["email"])) {
                           $emailErr = "Email is required";
                         } else {
                           $email = test_input($_POST["email"]);
                           // check if e-mail address is well-formed
                           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                             $emailErr = "Invalid email format";
                           }
                         }
                           
                         
                       
                       
                  
								 if (!empty($_POST["name"])) {
                    if (!empty($_POST["email"])) {
                  if(empty($bizAddressStateErr)){
                    
                    
                    
                  
								 echo ("<h3><font color='blue'>Thank you for your Request for a Free Comprehensive Analysis! <br>Please check your email for an introductory email from your Business Consultant. Someone will contact you shortly. <br>The following Information has been emailed:</font></h3>");
								echo ("<b>Name: </b>" . $_POST["name"]);
								echo ("<br>");
								echo "<b>Company Name: </b>" . $_POST["compName"];
								echo "<br>";
								echo "<b>Your Title: </b>" . $_POST["compTitle"];
								echo "<br>";
								echo "<b>Is This a Home Business: </b>" . $_POST["homebusiness"];
								echo "<br>";
								echo "<b>Business Street Address is: </b>" . $_POST["bizAddressStreet"];
								echo "<br>";
								echo "<b>Business City: </b>" . $_POST["bizAddressCity"];
								echo "<br>";
								echo "<b>Business State: </b>" . $_POST["bizAddressState"];
								echo "<br>";
								echo "<b>Business ZipCode: </b>" . $_POST["bizAddressZip"];
								echo "<br>";
								echo "<b>Phone #: </b>" . $_POST["phone"];
								echo "<br>";
								echo "<b>Business Phone #: </b>" . $_POST["bizPhone"];
								echo "<br>";
								echo "<b>Business Email: </b>" . $_POST["bizEmail"];
								echo "<br>";
								echo "<b>Primary Email: </b>" . $_POST["email"];
								echo "<br>";
							
								$aContactMethod = $_POST["contactMethod"];
								if (empty($aContactMethod))
								{
									echo ("<b>No Preferred Contact Methods were Selected</b>");
									
								}
								else
								{
									$N = count($aContactMethod);
									echo("<b>You selected $N contact method(s): </b>");
									for($i=0; $i < $N; $i++)
									{
										echo($aContactMethod[$i] . ", ");
										
									}

									
									
								}
								
								echo ("<br>");
								echo "<b>Prefer English?: </b>" . $_POST["preferEnglish"];
								
								echo "<br>";
								echo "<b>Years in Business: </b>" . $_POST["businessLength"];
								
								echo "<br>";
								$aKPM = $_POST["kpm"];
								if (empty($aKPM))
								{
									echo ("<b>No Key Perfomance Metrics were Specified</b>");
									
								}
								else
								{
									$Y = count($aKPM);
									echo("<b>You selected $Y Key Perfomance Metric(s): </b>");
									for($i=0; $i < $Y; $i++)
									{
										echo($aKPM[$i] . ", ");
										
									}

									
									
								}
								
								
								
								echo "<br>";
								echo "<b>Do you have a Deadline that's less than two weeks: </b>" . $_POST["deadlines"];
								
								
								echo "<br>";
								
								echo "<b>Questions/Comments: </b>" . $_POST["websitedetails"];
								echo "<br>";
								echo "<br>";
								echo "<br>";
								echo "<----------END OF REQUEST------------------->";
								echo "<br>";
								echo "<br>";
								$name = $_POST["name"];
								
								$compName = $_POST["compName"];
								$compTitle = $_POST["compTitle"];
								$homebusiness = $_POST["homebusiness"];
								$bizAddressStreet  = $_POST["bizAddressStreet"];
								$bizAddressCity = $_POST["bizAddressCity"];
								$bizAddressState = $_POST["bizAddressState"];
								$bizAddressZip = $_POST["bizAddressZip"];
								$website = $_POST["website"];
								$phone = $_POST["phone"];
								$bizPhone = $_POST["bizPhone"];
								$bizEmail = $_POST["bizEmail"];
								$email = $_POST["email"];
								
								$preferEnglish = $_POST["preferEnglish"];
								
								$deadlines = $_POST["deadlines"];
								$websitedetails = $_POST["websitedetails"];
								
								$metric1 = $aKPM[0] ;
								$metric2 = $aKPM[1];
								$metric3 = $aKPM[2]; 
								
								$metric4 = $aKPM[3];
								$metric5 = $aKPM[4];
								
								$metric6 = $aKPM[5] ;
								$metric7 = $aKPM[6];
								$metric8 = $aKPM[7]; 
								
								$metric9 = $aKPM[8];
								$metric10 = $aKPM[9];
								
								$metric11 = $aKPM[10] ;
								$metric12 = $aKPM[11];
								$metric13 = $aKPM[12]; 
								
								$metric14 = $aKPM[13];
								$metric15 = $aKPM[14];
								$metric16 = $aKPM[15] ;
								$metric17 = $aKPM[16];
								$metric18 = $aKPM[17]; 
								
								$metric19 = $aKPM[18];
								$metric20 = $aKPM[19];
								$metric21 = $aKPM[20] ;
								$metric22 = $aKPM[21];
								$metric23 = $aKPM[22]; 
								
								$metric24 = $aKPM[23];
								$metric25 = $aKPM[24];
								$metric26 = $aKPM[25] ;
								$metric27 = $aKPM[26];
								$metric28 = $aKPM[27]; 
								
								$metric29 = $aKPM[28];
								$metric30 = $aKPM[29]; 
								
								$contactMethod0 = $aContactMethod[0];
								$contactMethod1 = $aContactMethod[1];
								$contactMethod2 = $aContactMethod[2];
								$contactMethod3 = $aContactMethod[3];
								$contactMethod4 = $aContactMethod[4];
								
								$message = "Hello Lawrence \r\n This is A Request For A Free Comprehensive Analysis . The  Details are below: \r\n Name: $name
								\r\n Company Name: $compName
								\r\n  Title: $compTitle
								\r\n Home Business: $homebusiness
								\r\n Business Address: 
								\r\n$bizAddressStreet 
								\r\n$bizAddressCity, $bizAddressState $bizAddressZip
								
								
								\r\n Website Address: $website
								\r\n Contact Information: Phone Numbers and Emails
								\r\n Phone #: $phone
								\r\n Business Phone #: $bizPhone
								\r\n Business Email: $bizEmail
								\r\n Primary Email: $email
								
								\r\n These are the Metrics they Are Most Interested In:
								\r\n$metric1
							  \r\n$metric2
								\r\n$metric3
								\r\n$metric4
								\r\n$metric5
								\r\n$metric6
								\r\n$metric7
								\r\n$metric8
								\r\n$metric9
								\r\n$metric10
								\r\n$metric11
								\r\n$metric12
								\r\n$metric13
								\r\n$metric14
								\r\n$metric15
								\r\n$metric16
								\r\n$metric17
								\r\n$metric18
								\r\n$metric19
								\r\n$metric20
								\r\n$metric21
								\r\n$metric22
								\r\n$metric23
								\r\n$metric24 
								\r\n$metric25
								\r\n$metric26
								\r\n$metric27
								\r\n$metric28
								 \r\n$metric29
								\r\n$metric30
						
								
								
													
								\r\n Preferred Contact Method(s) 
								\r\n$contactMethod0
								\r\n$contactMethod1
								\r\n$contactMethod2
								\r\n$contactMethod3
								\r\n $contactMethod4
								
								\r\n Is English their Preferred Language: $preferEnglish
								\r\n Do They have a Deadline in less than Two Weeks: $deadlines
								
								\r\n Questions or Comments: \r\n
								$websitedetails					
								";
								// In case any of our lines are larger than 70 characters, we should use wordwrap()
								$message = wordwrap($message, 70, "\r\n");
								
								// Send
								mail('sales@datalyticsbi.com', 'Free Comprehensive Analysis Request', $message);
                        
                        
                        
                        
                        }
                        }
                      }//if nameEmpty
								 
								 
								}
 
                       
                       function test_input($data) {
                         $data = trim($data);
                         $data = stripslashes($data);
                         $data = htmlspecialchars($data);
                         return $data;
                       }
                       
                       
                       
                       
                       ?>     
            
						<div class = "row">
											<div class="col-md-6 col-sm-6 col-xs-6 text-right">
                       <p><span class="error">&nbsp;&nbsp;&nbsp;* required field</span></p>
                       
											</div>
											
											<div class="col-md-6 col-sm-6 col-xs-6 text-left"> 
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
											</div>
											</div>
											 
											 
											  <div class = "row">
												<div class="col-md-6 col-sm-6 col-xs-6 text-right">
													
													<p> Name: </p>
											
											 </div>
											<div class="col-md-6 col-sm-6 col-xs-6 text-left"> 
                        <input type="text" name="name" value="<?php echo $name;?>">
                         <span class="error"><font color="red">*<?php echo $nameErr;?></font> </span>
											</div>
											</div>
											 
                       <div class = "row">
														<div class="col-md-6 col-sm-6 col-xs-6 text-right">
														<p>Company Name:</p>
														</div>
														
														<div class="col-md-6 col-sm-6 col-xs-6 text-left">
															<input type="text" name="compName" value="<?php echo $compName;?>">
                         <span class="error"><font color="red">*<?php echo $compNameErr;?></font></span>
														</div>
											 </div>
												
												 <div class = "row">
														<div class="col-md-6 col-sm-6 col-xs-6 text-right">
														<p>Title:</p>
														</div>
														
														<div class="col-md-6 col-sm-6 col-xs-6 text-left">
															<input type="text" name="compTitle" value="<?php echo $compTitle;?>">
                         <span class="error"><font color="red">*<?php echo $compTitleErr;?></font></span>
														</div>
											 </div>
												 
												  <div class = "row">
														<div class="col-md-6 col-sm-6 col-xs-6 text-right">
														<p>Is your Home address the same as your business address?</p>
														</div>
														
														<div class="col-md-6 col-sm-6 col-xs-6 text-left">
															<label class="radio-inline"><input type="radio" name="homebusiness"  value="No" checked>No</label>
												<label class="radio-inline"><input type="radio" name="homebusiness" value="Yes">Yes</label>
														</div><!-- $_Post["homebusiness"]; returns No or Yes -->
											 </div>
												 
												  <div class = "row">
														<div class="col-md-6 col-sm-6 col-xs-6 text-right">
														<p>Business Physical Street Address:</p>
														</div>
														
														<div class="col-md-6 col-sm-6 col-xs-6 text-left">
															 <input type="text" size="20" name="bizAddressStreet" value="<?php echo $bizAddressStreet;?>">
                         <span class="error"><font color="red">*<?php echo $bizAddressStreetErr;?></font></span>
														</div>
											 </div>
													
													 <div class = "row">
														<div class="col-md-6 col-sm-6 col-xs-6 text-right">
														<p>Business Physical Address City:</p>
														</div>
														
														<div class="col-md-6 col-sm-6 col-xs-6 text-left">
															 <input type="text" name="bizAddressCity" value="<?php echo $bizAddressCity;?>">
                         <span class="error"><font color="red">*<?php echo $bizAddressCityErr;?></font></span>
														</div>
											 </div>
													 
													 
													  <div class = "row">
														<div class="col-md-6 col-sm-6 col-xs-6 text-right">
														<p>Business Physical Address State:</p>
														</div>
														
														<div class="col-md-6 col-sm-6 col-xs-6 text-left">
															 <input type="text" size="2" maxlength="2" name="bizAddressState" value="<?php echo $bizAddressState;?>">
                         <span class="error"><font color="red">*<?php echo $bizAddressStateErr;?></font></span>
														</div>
											 </div>
														
														<div class = "row">
														<div class="col-md-6 col-sm-6 col-xs-6 text-right">
														<p>Business Physical Address Zipcode:</p>
														</div>
														
														<div class="col-md-6 col-sm-6 col-xs-6 text-left">
															 <input type="text" size="5" maxlength="5" name="bizAddressZip" value="<?php echo $bizAddressZip;?>">
                         <span class="error"><font color="red">*<?php echo $bizAddressZipErr;?></font></span>
														</div>
											 </div>
													
													
													
													
													 <div class = "row">
														<div class="col-md-6 col-sm-6 col-xs-6 text-right">
														<p>Website:</p>
														</div>
														
														<div class="col-md-6 col-sm-6 col-xs-6 text-left">
															 <input type="text" name="website" value="<?php echo $website;?>">
                         <span class="error"><font color="red">*<?php echo $websiteErr;?></font></span>
												 <h6><font color="red">Format: www.example.com<br />Must include www.</font></h6>
														</div>
											 </div>
													 
													  <div class = "row">
														<div class="col-md-6 col-sm-6 col-xs-6 text-right">
														<p>Cell Phone:</p>
														</div>
														
														<div class="col-md-6 col-sm-6 col-xs-6 text-left">
															<input type="text" name="phone" value="<?php echo $phone;?>">
                              <span class="error"><font color="red">*<?php echo $phoneErr;?>
                              </font> </span><h6><font color="red">Format: 5555551212<br />No dashes or Spaces.</font></h6>
                              
														</div>
											 </div>
														
														 <div class = "row">
														<div class="col-md-6 col-sm-6 col-xs-6 text-right">
														<p>Business Phone:</p>
														</div>
														
														<div class="col-md-6 col-sm-6 col-xs-6 text-left">
															 <input type="text" name="bizPhone" value="<?php echo $bizPhone;?>">
                               <span class="error"><font color="red">*<?php echo $bizPhoneErr;?></font> </span>
                               <h6><font color="red">Format: 5555551212<br />No dashes or Spaces.</font></h6>
                               
                               
														</div>
											 </div>
														 
														  <div class = "row">
														<div class="col-md-6 col-sm-6 col-xs-6 text-right">
														<p>Business E-mail:</p>
														</div>
														
														<div class="col-md-6 col-sm-6 col-xs-6 text-left">
															 <input type="text" name="bizEmail" value="<?php echo $bizEmail;?>">
														</div>
											 </div>
															
															 <div class = "row">
														<div class="col-md-6 col-sm-6 col-xs-6 text-right">
														<p>Primary E-mail:</p>
														</div>
														
														<div class="col-md-6 col-sm-6 col-xs-6 text-left">
															<input type="text" name="email" value="<?php echo $email;?>">
                         <span class="error"><font color="red">* <?php echo $emailErr;?></font></span>
														</div>
											 </div>
															 
															 <div class = "row">
														<div class="col-md-6 col-sm-6 col-xs-6 text-right">
															 <p>How do you prefer us to contact you...</p>
														</div>
														<div class="col-md-6 col-sm-6 col-xs-6 text-left">	 
																	<div class="checkbox">
																		<label><input type="checkbox" name = "contactMethod[]" value="Cell Phone">Cell Phone</label>
																	</div>
																	
																	<div class="checkbox">
																		<label><input type="checkbox" name = "contactMethod[]" value="Business Phone">Business Phone</label>
																	</div>
																	
																	<div class="checkbox">
																		 <label><input type="checkbox" name = "contactMethod[]" value="Business Email">Business Email</label>
																	</div>
																	
																		<div class="checkbox">
																		<label><input type="checkbox" name = "contactMethod[]" value="Primary Email">Primary Email</label>
																	</div>
														</div>
														
														
															 </div>
												<div class = "row">
														<div class="col-md-6 col-sm-6 col-xs-6 text-right">
													<p>Is English your preferred language? </p>
														</div>
														<div class="col-md-6 col-sm-6 col-xs-6 text-left">
													<label class="radio-inline"><input type="radio" name="preferEnglish"  value="Yes" checked>Yes</label>
												<label class="radio-inline"><input type="radio" name="preferEnglish" value="No">No</label>
														</div>
												</div>
						           
					</div>
                       
   
  
    <div class="col-md-6 col-sm-6 ">
      
															<br />									 
												 How long have you been in business: <input type="text" name="businessLength" value="<?php echo $businessLength;?>">
													<span class="error"><font color="red">* <?php echo $businessLength;?></font></span>
																								 <br><br>
												
												
												 <div class = "col-md-12 col-sm-12">
												
												What key performance metrics are you most interested in:<br />
												<font color="blue">Learn More about:</font> (<a href="marketingAnalytics.php"><b><font color="black"><u>Marketing Analytics</u></font></b></a>, <a href="businessAnalytics.php"><b><font color="black"><u>Business Analytics</u></font></b></a><br/>, <a href="dataAnalytics.php"><b><font color="black"><u>Data Analytics</u></font></b></a>)<br />
												<div class = "col-md-6 col-sm-6">
												
												<div class="checkbox">
													<label><input type="checkbox" name="kpm[]" value="Competitive Analysis">Competitive Analysis</label>
												</div>
												
												<div class="checkbox">
													<label><input type="checkbox" name="kpm[]" value="Distribution Analytics">Distribution Analytics</label>
												</div>
												
												<div class="checkbox">
													 <label><input type="checkbox" name="kpm[]" value="Ad Promotion Analytics">Ad Promotion Analytics</label>
												</div>
												
													<div class="checkbox">
													<label><input type="checkbox" name="kpm[]" value="Pricing Analytics">Pricing Analytics</label>
													</div>
												
													<div class="checkbox">
													<label><input type="checkbox" name="kpm[]" value="Brand Awareness">Brand Awareness</label>
												</div>
												
												<div class="checkbox">
													<label><input type="checkbox" name="kpm[]" value="Test Drive">Test Drive</label>
												</div>
												
												<div class="checkbox">
													 <label><input type="checkbox" name="kpm[]" value="Churn Analysis">Churn Analysis</label>
												</div>
												
													<div class="checkbox">
													<label><input type="checkbox" name="kpm[]" value="CSAT">Customer Satisfaction Metric</label>
													</div>
												
													<div class="checkbox">
													<label><input type="checkbox" name="kpm[]" value="TakeRate">Take Rate</label>
												</div>
												
												<div class="checkbox">
													<label><input type="checkbox" name="kpm[]" value="Profit">Profit</label>
												</div>
												
												<div class="checkbox">
													<label><input type="checkbox" name="kpm[]" value="InsightfulBI">Insightful Business Intelligence</label>
													</div>
												
													<div class="checkbox">
													<label><input type="checkbox" name="kpm[]" value="Descriptive Summary Statistics">Descriptive/Summary Statistics</label>
												</div>
												
												
													
												</div>
													<div class = "col-md-6 col-sm-6">
												
												<div class="checkbox">
													 <label><input type="checkbox" name="kpm[]" value="NPV">NPV or Net Present Value</label>
												</div>
												
													<div class="checkbox">
													<label><input type="checkbox" name="kpm[]" value="IRR">IRR or Internal Rate of Return</label>
													</div>
												
													<div class="checkbox">
													<label><input type="checkbox" name="kpm[]" value="Payback">Payback</label>
												</div>
												
												<div class="checkbox">
													<label><input type="checkbox" name="kpm[]" value="Customer Value">Customer Value</label>
												</div>
												
												<div class="checkbox">
													 <label><input type="checkbox" name="kpm[]" value="CPC">CPC or Cost Per Click</label>
												</div>
												
													<div class="checkbox">
													<label><input type="checkbox" name="kpm[]" value="TCR">TCR or Transaction Conversion Rate</label>
													</div>
												
													<div class="checkbox">
													<label><input type="checkbox" name="kpm[]" value="ROA">ROA or Return on Ad Dollars spent</label>
												</div>
												
												<div class="checkbox">
													<label><input type="checkbox" name="kpm[]" value="Bounce Rate">Bounce Rate</label>
												</div>
												
												<div class="checkbox">
													<label><input type="checkbox" name="kpm[]" value="Hypothesis Testing">Hypothesis Testing</label>
													</div>
												
													<div class="checkbox">
													<label><input type="checkbox" name="kpm[]" value="Regression Analysis">Regression Analysis</label>
												</div>
												
												<div class="checkbox">
													<label><input type="checkbox" name="kpm[]" value="Fine Tune Analytical Processing">Fine Tuning Analytical Processes</label>
												</div>
													
													<div class="checkbox">
													<label><input type="checkbox" name="kpm[]" value="Sampling Estimation">Sampling and Estimation</label>
												</div>
																								
													</div>
												
																								 <br><br>
												
												
												 </div>
												
												
												A Comprehensive Analysis can take up to two weeks. Do you have a deadline that’s less than two weeks to have this Analysis completed? <label class="radio-inline"><input type="radio" name="deadlines"  value="No" checked>No</label>
												<label class="radio-inline"><input type="radio" name="deadlines" value="Yes">Yes</label>
																								 
																								 <br><br>		
												 
												 
												 
                         Questions/Comments: <textarea name="websitedetails" rows="5" cols="40"><?php echo $websitedetails;?></textarea>
                         <br><br>
                         
                         <br><br>
                         <input type="submit" name="submit" value="Submit">  
                       </form>
                       <br><br>

				</div>
	</div>
	</div>
      
			<br /><br />

                   
                      
                      <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">"We are Extremely Satisfied"</h3>
        <p class="card-text">"We are extremely satisfied. If I need to I will definitely use DatalyticsBI again, DatalyticsBI VALUED CLIENT</p>
        <a href="compReport.php" class="btn btn-primary">Get Your FREE- Comprehensive Analysis</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">"You Benefited us Tremendously"</h3>
        <p class="card-text">"We believe that your consultation will benefit us tremendously, Thanks! DatalyticsBI VALUED CLIENT</p>
        <a href="compReport.php" class="btn btn-primary">Get Your FREE- Comprehensive Analysis</a>
      </div>
    </div>
  </div>
</div><!-- End Cards -->
                  
              
                         <br /><br />
        <?php @$bifooter3 = include 'bifooter3.php'; ?>