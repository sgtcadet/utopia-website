<!DOCTYPE html>

<html lang="en">
    <head>
	    <title>HOME | Universal Infinitus</title>
		<link rel="stylesheet" href="CSS/main.css" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script>
        
        
     if(navigator.userAgent.indexOf("Chrome") != -1 ) 
    {
        
    }
    else if(navigator.userAgent.indexOf("Opera") != -1 )
    {
    
    }
    else if(navigator.userAgent.indexOf("Firefox") != -1 ) 
    {
        
    }
    else if((navigator.userAgent.indexOf("MSIE") != -1 ) || (!!document.documentMode == true )) //IF IE > 10
    {
       alert("We do not use support this browser, Please use another browser.");
      
    }  
    else 
    {
      
    }
    
		</script>
	</head>
	
	<body >
		
		<!-- § Initial coding by Sanjay § -->

			
		
			<div id="entireSite" class="wrapper">
				
			<section class="header_section">
				<nav class="top_nav">
					 <!-- FROM:Shayn -I am trying to apply the flexible box model with this class "size" but i noticed no changes in the code and moved it to .top_nav ul-->
						
						 	<a href="index.php">HOME</a>
							<a href="#services">SERVICES</a>
							<a href="#">PORTFOLIO</a>
					    
					        
						<div>
							<a href="index.html"><img src="../image/logo.png" /></a> <!--what is the # for-->
							<h1 style="font-size:40px;text-align:center;color:white" id="L5">Universal <br /> Infinitus</h1> <!-- FROM-Shayn-I also removed the h1 and p tag that has Universal Infinitus and Enhancing the worl and it still did not resize when you made the page smaller -->
							<p style="font-size:28px;display:block;color:white">&quot;Enhancing the World&quot;</p>
					    </div>
						
						
							<a href="#price">PRICING</a>
							<a href="#">ABOUT</a>
							<a href="#">CONTACT</a>
						
					</ul>
				</nav>
				
				<div class="nap">
				    <div style="margin-left:auto;margin-right:auto;width:60px">
					<img id="scrollDown" style="position:relative;width:40px;padding:20px" src="image/arrow.png"></div>
			    </div>	

                <script>
                
                </script>
			</section>
                <script>
                
                    
                  $(document).ready(function() {
                        $(document).scroll(function() {
                            var count = $(document).scrollTop();
                            
                                switch(count){
                                case 100: 
                                    $("#scrollDown").animate({top:"5px"});
                                    $("#scrollDown").animate({top:"-5px"});
                                    $("#scrollDown").animate({top:"5px"});
                                    $("#scrollDown").animate({top:"-5px"});
                                    $("#scrollDown").animate({top:"5px"});
                                    $("#scrollDown").animate({top:"-5px"});
                                    $("#scrollDown").animate({top:"5px"});
                                    $("#scrollDown").animate({top:"-5px"});
                                    $("#scrollDown").animate({top:"0px"});
                                break;
                              
                                case 300:
                                    $("#scrollDown").animate({top:"5px"});
                                    $("#scrollDown").animate({top:"-5px"});
                                    $("#scrollDown").animate({top:"5px"});
                                    $("#scrollDown").animate({top:"-5px"});
                                    $("#scrollDown").animate({top:"5px"});
                                    $("#scrollDown").animate({top:"-5px"});
                                    $("#scrollDown").animate({top:"5px"});
                                    $("#scrollDown").animate({top:"-5px"});
                                    $("#scrollDown").animate({top:"0px"});
                                break;
                                
                                case 500:
                                    $("#scrollDown").animate({top:"5px"});
                                    $("#scrollDown").animate({top:"-5px"});
                                    $("#scrollDown").animate({top:"5px"});
                                    $("#scrollDown").animate({top:"-5px"});
                                    $("#scrollDown").animate({top:"5px"});
                                    $("#scrollDown").animate({top:"-5px"});
                                    $("#scrollDown").animate({top:"5px"});
                                    $("#scrollDown").animate({top:"-5px"});
                                    $("#scrollDown").animate({top:"0px"});
                                break;

                                default:
                                    $("#scrollDown").animate({top:"0px"});
                                }
                            
       
                        }); 
                  });
                  
                </script>
			
			<section class="visionSection">
			    <article>
			    
			            
                            <img src="image/idea_icon.png"/>
                            <h2 style="font-size:50px;margin:5px">OUR VISION</h2>
                            <hr width="90"/>
                        
                        <p style="font-size:20px;margin:0px">Enhancing the World<br />
                        We Design, We Develop, We Market...<br />
                        Catering for all your online application needs.</p>
                    
                        <div style="margin:10px"><img src="image/play.png"/></div>
                    
			    </article>
			    
			    
			</section>
			
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Middle -->
<div style="width:600px;margin-left:auto;margin-right:auto">
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-5056273040867679"
     data-ad-slot="7686618347"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
			
			<section>
			    <article class="service">
			        <div class="A-div">
                       <img src="image/book_icon.png" />
                       <header>
                           <a name="services"><h2>OUR SERVICE</h2><hr width="90"/></a>
                       </header>
                            <p class="fin">WE PASSIONATELY BELIEVE THAT GOOD DESIGN CAN BE IN EVERY SETTING<br />
                            AND WE ARE EXCITED TO SHARE IT WITH YOU.</p>
                     </div>
			    </article><br><br>
			    
			    <article class="service_explain">
			        <div><span><img style="padding:0;margin:0;width:26px;padding:4px;float:left" src="image/monitor_icon.png" /></span><h2 style="padding:4px">Design and develop</h2><br>
			        
                          <p>We create digital adventures for companies and brands by using originality & technology. Amazing designs and a website that works.</p></div>
                           

                              <div><span><img style="padding:0;margin:0;width:15px;padding:4px;float:left" src="image/phone.png" /></span> <h2 style="padding:4px">Mobile Development</h2><br>
                              
                              <p> We are in tune with the global force that mobile devices have become and we will tune mobile websites and applications to work synergistically with its hardware counterpart.</p></div>
                          
                          
                             <div><span><img style="padding:0;margin:0;width:26px;padding:4px;float:left" src="image/log.png" src="img/search.jpg" /></span><h2 style="padding:4px">Branding</h2><br>
                             <p>Your brand should enchant the hearts and minds of consumers. Connecting anyone and everyone to your brand’s allure is our aim. </p></div>
			    </article>
			</section>
		
		<section class="feature">
		    <article style="">
		         
            <img src="image/book.png" width="30" height="30">
            
                <header>
                    <h2>OUR FEATURE PRODUCTS</h2><hr width="100"/>
                </header>
                <p ID="min-p">WE PASSIONATELY BELIEVE THAT GOOD DESIGN CAN BE IN EVERY SETTING<br />
                            AND WE ARE EXCITED TO SHARE IT WITH YOU.</p>
        
		    </article>
		    
		    <article class="samples">
		        <div><div class="hoverSample"><h2>ECOMMERCE</h2><p>With an e-commerce website, it becomes possible to sell your product and services online. This service includes mobile commerce, electric funds transfer,
		         supply chain management, Internet marketing, online transaction processing, electronic data interchange (EDI), inventory management systems</p></div><img class="feature_image" src="image/E-commerce.jpg" style="width:100%" /></div>
		        <div><div class="hoverSample"><h2>Web Design and Development</h2><p>We take pride and dedication in our design and development process. With design quality of the highest standards, and making a website that works for you.
		        We also keep track of changes in technology to make sure you have the most up to date web technologies.</p></div><img src="image/development.jpg" style="width:100%" /></div>
		        <div><div class="hoverSample"><h2>App Development</h2><p>We know that apart of creating a great web service is creating an amazing app to go with it. More and more internet users today is going mobile and what better way to attract
		        these users than a mobile app. We currently support platforms for Android and IOS.</p></div><img src="image/app.png" style="width:100%" /></div>
		        <div style="overflow:hidden"><div class="hoverSample"><h2>Social Media</h2><p>Social Media??? Why not? Having a social media platform helps you build your appearance and also get your products out there. We help to make sure
		        that you can utilies this to increase your traffic and sales.</p></div><img src="image/social.jpg" style="height:100%;" /></div>
		        <div style="overflow:hidden"><div class="hoverSample"><h2>Internet Maketeting</h2><p>Everyone is doing some kind of internet markerting, and the intenret is a very powerful marketing tool. I are dedicated in helping you market and sell 
		        your goods or services online. We can also provide a chat center for your customers where your customer can get assistance right on your website.</p></div><img src="image/businesses.jpg" style="height:100%;" /></div>
		        <!--
		        <input type="button" value="View all projects"/>   
		        -->
		    </article>
		   
		    
		</section>
		
		<section class="feature">
		                <div style="width:100%;min-width:160px;text-align:center;margin-top:50px;color:white">
		                <img src="image/dollar_icon.png" style="padding:0;margin:0">
                           <h2 style="padding:0;margin:0;">Pricing Plan</h2><hr width="90"/></h2>
                       
                            <p class="fin">WE OFFER MULTIPLE PACKAGES, APPLICABLE OR DIFFERENT BUSINESS NEEDS AND BUDGETS./p>
                        </div>
                        
                       <article class="prices">
                        <div class="price_box" style="text-align:center;color:black;font-family:Arial, Helvetica, sans-serif">
                         <a name="price"><img src="image/birdtwitter_icon.png"></a>
                            <h1 style="line-height:107%;margin:0">Bronze Package<br><br> <em>$597 / $1,194</em></h1>
                            <h6 style="margin:0">3 month / 6 month base cost</h6>
                             <hr>
                             <ul class="listings">
                                <li><b>Custom Website Design</b> <br> One concept</li>
                                <li>5 Webpages</li>
                                <li><b>Each Additional Webpage</b> <br> $45</li>
                                <li>Design Revisions 3</li>
                                <li></li>
                                <li><b>Homepage Slideshow (6 slides)</b> </li>
                                <li><b>Photo Gallery (24 pictures)</b> <br> $119</li>
                                <li><b>Payment Processing setup </b><br> $180</li>
                                <li><b>Website Hosting </b><br> $25/per month</li>
                                <li>5 email accounts</li>
                                <li>1GB disc space</li>
                                <li><b>Website Maintenance</b> <br> $20/hour</li>
                                <li>Social Media Managment (coming soon)</li>
                                <li><strong>other features</strong><br> quote </li>
                             </ul>
                             <hr>
                             <form action='https://www.2checkout.com/checkout/purchase' method='post'>
  <input type='hidden' name='sid' value='202358567'>
  <input type='hidden' name='quantity' value='1'>
  <input type='hidden' name='product_id' value='2'>
  <input name='submit' type='submit' value='Buy from 2CO' >
</form>
<span>2Checkout.com Inc. (Ohio, USA) is a payment facilitator for goods and services provided by Uinversal Infinitus.</span>
                        </div>
                        <div class="price_box" style="text-align:center;color:black;font-family:Arial, Helvetica, sans-serif">
                              <img src="image/birdtwitter_icon.png">
                            <h1 style="line-height:107%;margin:0">BUSINESS WEBSITE <br><br> <em>$2600</em></h1>
                            <h6 style="margin:0">base cost</h6>
                             <hr>
                             <ul class="listings">
                                <li><b>Custom Website Design</b> <br> One concept Two Revisions</li>
                                <li>10 - 15 Webpages</li>
                                <li><b>Each Additional Webpage</b> <br> $70</li>
                                <li>Mobile Site</li>
                                <li><b>Homepage Slideshow (6 slides)</b> <br> FREE</li>
                                <li><b>Photo Gallery (40 pictures)</b> <br> $119</li>
                                <li><b>Payment Processing setup </b><br> $180</li>
                                <li><b>Website Hosting </b><br> $25/per month</li>
                                <li>20 email accounts</li>
                                <li>5GB disc space</li>
                                <li><b>Website Maintenance</b> <br> $20/hour</li>
                                <li>Social Media Managment (coming soon)</li>
                                <li><strong>other features</strong><br> quote </li>
                             </ul>
                             <hr>
                             <button class="getstarted">Get Started</button>
                        </div>
                        <div class="price_box" style="text-align:center;color:black;font-family:Arial, Helvetica, sans-serif">
                               <img src="image/birdtwitter_icon.png">
                            <h1 style="line-height:107%;margin:0">ADVANCED WEBSITE <br><br> <em>$8000</em></h1>
                            <h6 style="margin:0">base cost</h6>
                             <hr>
                             <ul class="listings">
                                <li><b>Custom Website Design</b> <br> One concept Two Revisions</li>
                                <li>up to 21 Webpages</li>
                                <li><b>Each Additional Webpage</b> <br> $70</li>
                                <li>Mobile Site also customized for tablets</li>
                                <li><b>Homepage Slideshow (6 slides)</b> <br> FREE</li>
                                <li><b>Photo Gallery (40 pictures)</b> <br> FREE</li>
                                <li><b>E-commerce Shopping Cart, Payment, and Shipping Integration included </b></li>
                                <li><b>Website Hosting </b><br> $27/per month</li>
                                <li>Unlimited email accounts</li>
                                <li>500GB disc space</li>
                                <li><b>Website Maintenance</b> <br> $20/hour</li>
                                <li>Social Media Managment (coming soon)</li>
                                <li><strong>other features</strong><br> quote </li>
                             </ul>
                             <hr>
                             <button class="getstarted">Get Started</button>
                        </div>
                        </article>
                        
		</section>
		
		<section class="contact">
		    <article class="feature">
		        <div style="width:100%;min-width:160px;text-align:center;margin:40px 0;color:white">
		         <img src="image/phone_icon.png" style="padding:0;margin:0">
                           <h2 style="padding:0;margin:0;">GET IN TOUCH</h2><hr width="90"/></h2>
                           
		             <p class="fin">FOR MORE INFORMATION RELATED TO OUR TEAM & OUR PRODUCTS, PLEASE CONTACT US BY<br>
PHONE, EMAIL OR VIA OUR SOCIAL NETWORK. THANK YOU.</p>
            </div>
		    </article>
		    
		    <article class="contact_message">
		        
		        <div class="letssocialize">
		            <h1>LETS SOCIALIZE</h1>
		            
		            <p>We are here to help you with any questions or queries that you may have. Please feel free to contact us by sending us a message below, 
		            we will get back to you by email as soon as possible. Also, we have experienced developers that can bring you on the right path with all your 
		            web experience needs.</p>
		            <ul class="contact_list">
		                <li>Bogue, Montego Bay, St. James, Jamaica</li>
		                <li>Phone:(876) 409-9106</li>
		                <li>Email:info@uigroupja.com</li>
		            </ul>
		        </div>
		        

		        
		        <div>
		        <script type="text/javascript">var $zoho= $zoho || {livedesk:{values:{},ready:function(){}}};var d=document;s=d.createElement("script");s.type="text/javascript";s.defer=true;s.src="https://salesiq.zoho.com/support.universalinfinitus/button.ls?embedname=universalinfinitus";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);document.write("<div id='zldbtnframe'></div>");</script>
		        </div>
		        <script>
		        $(document).ready(function() {
                    $("#sendmessage").click(function() {
                    
                     var suject = $("#name").val();
                    var message = $("#message").val();
                    var contact = $("#contact").val();
                    var email = $("#email").val();
                
                
                $.post("script/mailto.php",{
                    subject:suject,
                    message:message,
                    contact:contact,
                    email:email
                }, function(data,status) {
                    alert(status);
                });
                    
                    
                    });
                   
                    
		        });
                </script>
		    </article>
		</section>
	<footer  class="main-foot">
				 <section>
					 <div class="icons">
					     <li id="ho"><a href="#"><img src="image/social_linkedin.png" width="25"/></a></li>
						 <li id="ho"><a href="#"><img src="image/social_instagram.png" width="25"/></a></li>

						 <li id="ho"><a href="https://www.facebook.com/pages/UI/1038740786150827"><img src="image/social_facebook.png" width="25"/></a></li>
					     <li id="ho"><a href="#"><img src="image/social_twitter.png" width="25"/></a></li>	     
			 
					 </div>
				 </section>
				 <h4 style="text-align:center"><a style="text-decoration:none;color:white" href="terms.html">Terms and Agreements</a></h4>
			 </footer>
			 
	</div>
	<script type="text/javascript">var $zoho= $zoho || {livedesk:{values:{},ready:function(){}}};var d=document;s=d.createElement("script");s.type="text/javascript";s.defer=true;s.src="https://salesiq.zoho.com/support.universalinfinitus/float.ls?embedname=universalinfinitus";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);</script>
	</body>
</html> 