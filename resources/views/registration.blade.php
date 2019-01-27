<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

	<meta charset="utf-8">

	<title>Register</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:image" content="path/to/image.jpg">

	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,600,700,700i" rel="stylesheet">
	<!-- Header CSS (First Sections of Website: paste after release from header.min.css here) -->
	<style></style>

	<!-- Load CSS, CSS Localstorage & WebFonts Main Function -->
	<script>!function(e){"use strict";function t(e,t,n){e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent&&e.attachEvent("on"+t,n)}function n(t,n){return e.localStorage&&localStorage[t+"_content"]&&localStorage[t+"_file"]===n}function a(t,a){if(e.localStorage&&e.XMLHttpRequest)n(t,a)?o(localStorage[t+"_content"]):l(t,a);else{var s=r.createElement("link");s.href=a,s.id=t,s.rel="stylesheet",s.type="text/css",r.getElementsByTagName("head")[0].appendChild(s),r.cookie=t}}function l(e,t){var n=new XMLHttpRequest;n.open("GET",t,!0),n.onreadystatechange=function(){4===n.readyState&&200===n.status&&(o(n.responseText),localStorage[e+"_content"]=n.responseText,localStorage[e+"_file"]=t)},n.send()}function o(e){var t=r.createElement("style");t.setAttribute("type","text/css"),r.getElementsByTagName("head")[0].appendChild(t),t.styleSheet?t.styleSheet.cssText=e:t.innerHTML=e}var r=e.document;e.loadCSS=function(e,t,n){var a,l=r.createElement("link");if(t)a=t;else{var o;o=r.querySelectorAll?r.querySelectorAll("style,link[rel=stylesheet],script"):(r.body||r.getElementsByTagName("head")[0]).childNodes,a=o[o.length-1]}var s=r.styleSheets;l.rel="stylesheet",l.href=e,l.media="only x",a.parentNode.insertBefore(l,t?a:a.nextSibling);var c=function(e){for(var t=l.href,n=s.length;n--;)if(s[n].href===t)return e();setTimeout(function(){c(e)})};return l.onloadcssdefined=c,c(function(){l.media=n||"all"}),l},e.loadLocalStorageCSS=function(l,o){n(l,o)||r.cookie.indexOf(l)>-1?a(l,o):t(e,"load",function(){a(l,o)})}}(this);</script>

	<!-- Load CSS Start -->
	<script>loadLocalStorageCSS( "webfonts", "css/fonts.min.css?ver=1.0.0" );</script>
	<script>loadCSS( "css/header.min.css?ver=1.0.0", false, "all" );</script>
	<script>loadCSS( "css/main.min.css?ver=1.0.0", false, "all" );</script>
	<!-- Load CSS End -->

	<!-- Load CSS Compiled without JS -->
	<noscript>
		<link rel="stylesheet" href="css/fonts.min.css">
		<link rel="stylesheet" href="css/main.min.css">
	</noscript>

</head>

<body class="register">
<a href="#" class="btn" data-toggle="modal" data-target="#registerModal">Register modal client</a>
<a href="#" class="btn" data-toggle="modal" data-target="#registerModal2">Register modal coach</a>
<!-- Here our code  -->
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<!-- modal register -->
			<div class="modal fade show" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-body">
					  <form action="{{ url('/register') }}" method="POST" id="registration">
					  	@csrf
					  	<input type="hidden" name="user_type" value="1">
				        <div class="row">
				        	<div class="col-md-8 left">
				        		<h2>Register with sportme</h2>
				        		<button type="button" class="close d-block d-md-none" data-dismiss="modal" aria-label="Close">
				        		</button>
				        		<div class="row">
				        			<div class="col-md-6">
				        				<div class="form-group">
				        				    <label for="first_name">First Name</label>
				        				    <input type="text" class="form-control" name="first_name">
				        				</div>
				        			</div>
				        			<div class="col-md-6">
				        				<div class="form-group">
				        				    <label for="last_name">Last Name</label>
				        				    <input type="text" class="form-control" name="last_name">
				        				</div>
				        			</div>
				        		</div>
				        		<div class="row">
				        			<div class="col-md-12">
				        				<div class="form-group">
				        				    <label for="email">Email</label>
				        				    <input type="text" class="form-control" name="email">
				        				</div>
				        			</div>
				        		</div>
				        		<div class="row">
				        			<div class="col-md-6">
				        				<div class="form-group">
				        				    <label for="password">Choose a password</label>
				        				    <input type="password" class="form-control" name="password">
				        				</div>
				        			</div>
				        			<div class="col-md-6">
				        				<div class="form-group">
				        				    <label for="password_confirm">Re-confirm password</label>
				        				    <input type="password" class="form-control" name="password_confirm">
				        				</div>
				        			</div>
				        		</div>
				        		<div class="row">
				        			<div class="col-md-6">
				        				<div class="form-group">
				        				    <label for="birthday">Birthday</label>
				        				    <input type="text" class="form-control" name="birthday" placeholder="DD/MM/YYYY">
				        				</div>
				        			</div>
				        			<div class="col-md-6">
				        				<div class="form-group">
				        				    <label for="phone">Phone number</label>
				        				    <input type="tel" class="form-control" name="phone">
				        				</div>
				        			</div>
				        		</div>
				        		<div class="row">
				        			<div class="col-md-6">
				        				<div class="form-group">
				        				    <label for="interest">Sports of interest</label>
				        				    <div class="dropdown">
			    		        	    	  <button class="dropdown-toggle custom-select" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    		        	    	   Choose one or more
			    		        	    	  </button>
			    		        	    	  <div class="dropdown-menu" aria-labelledby="dropdownMenu">
			    		        	    	  	<div class="dropdown-item">
			    	        	    	  			<input class="radio" id="radio" type="radio" name="radio" >
			    	        	    	  			<label for="radio">
			    	        	    	  				Bodybilding
			    	        	    	  		  	</label>
			    		        	    	  	</div>
			    		        	    	  	<div class="dropdown-divider"></div>
			    		        	    	  	<div class="dropdown-item">
			    	        	    	  			<input class="radio" id="radio-2" type="radio" name="radio2" >
			    	        	    	  			<label for="radio-2">
			    	        	    	  				Aerobic
			    	        	    	  		  	</label>
			    		        	    	  	</div>
			    		        	    	  	<div class="dropdown-divider"></div>
			    		        	    	  	<div class="dropdown-item">
			    	        	    	  			<input class="radio" id="radio-3" type="radio" name="radio3" >
			    	        	    	  			<label for="radio-3">
			    	        	    	  				Yoga
			    	        	    	  		  	</label>
			    		        	    	  	</div>
			    		        	    	  	<div class="dropdown-divider"></div>
			    		        	    	  	<div class="dropdown-item">
			    	        	    	  			<input class="radio" id="radio-4" type="radio" name="radio4" >
			    	        	    	  			<label for="radio-4">
			    	        	    	  				Flexibility
			    	        	    	  		  	</label>
			    		        	    	  	</div>
			    		        	    	  	<div class="dropdown-divider"></div>
			    		        	    	  	<div class="dropdown-item">
			    	        	    	  			<input class="radio" id="radio-5" type="radio" name="radio5" >
			    	        	    	  			<label for="radio-5">
			    	        	    	  				All
			    	        	    	  		  	</label>
			    		        	    	  	</div>
			    		        	    	  </div>
			    		        	    	</div>
				        				</div>
				        			</div>
				        			<div class="col-md-6">
				        				<div class="form-group">
				        				    <label for="birthday">Location</label>
				        				    <div class="dropdown">
			    		        	    	  <button class="dropdown-toggle custom-select" type="button" id="dropdownMenuCity" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    		        	    	   Choose one or more
			    		        	    	  </button>
			    		        	    	  <div class="dropdown-menu" aria-labelledby="dropdownMenuCity">
			    		        	    	  	<div class="dropdown-item">
			    	        	    	  			<input class="radio" id="radioCity" type="radio" name="radioCity" >
			    	        	    	  			<label for="radioCity">
			    	        	    	  				UK 1
			    	        	    	  		  	</label>
			    		        	    	  	</div>
			    		        	    	  	<div class="dropdown-divider"></div>
			    		        	    	  	<div class="dropdown-item">
			    	        	    	  			<input class="radio" id="radioCity-2" type="radio" name="radioCity2" >
			    	        	    	  			<label for="radioCity-2">
			    	        	    	  				UK 2
			    	        	    	  		  	</label>
			    		        	    	  	</div>
			    		        	    	  	<div class="dropdown-divider"></div>
			    		        	    	  	<div class="dropdown-item">
			    	        	    	  			<input class="radio" id="radioCity-3" type="radio" name="radioCity3" >
			    	        	    	  			<label for="radioCity-3">
			    	        	    	  				UK 3
			    	        	    	  		  	</label>
			    		        	    	  	</div>
			    		        	    	  	<div class="dropdown-divider"></div>
			    		        	    	  	<div class="dropdown-item">
			    	        	    	  			<input class="radio" id="radioCity-4" type="radio" name="radioCity4" >
			    	        	    	  			<label for="radioCity-4">
			    	        	    	  				UK 4
			    	        	    	  		  	</label>
			    		        	    	  	</div>
			    		        	    	  	<div class="dropdown-divider"></div>
			    		        	    	  	<div class="dropdown-item">
			    	        	    	  			<input class="radio" id="radioCity-5" type="radio" name="radioCity5" >
			    	        	    	  			<label for="radioCity-5">
			    	        	    	  				All
			    	        	    	  		  	</label>
			    		        	    	  	</div>
			    		        	    	  </div>
			    		        	    	</div>
				        				</div>
				        			</div>
				        		</div>
				        	</div>
				        	<div class="col-md-4 register">
				        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				        		</button>
				        		<button type="submit" class="button">Register</button>
				        	</div>
				        </div>
			        </form>
			      </div>
			    </div>
			  </div>
			</div>

			<!-- Modal register coach -->
			<div class="modal fade" id="registerModal2" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel2" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-body">
				        <div class="nav nav-tabs" id="nav-tab" role="tablist">
				          <a class="nav-item nav-link active" id="nav-step1-tab" data-toggle="tab" href="#nav-step1" role="tab" aria-controls="nav-step1" aria-selected="true">1 Step</a>
				          <a class="nav-item nav-link" id="nav-step2-tab" data-toggle="tab" href="#nav-step2" role="tab" aria-controls="nav-step2" aria-selected="false">2 Step</a>
				          <a class="nav-item nav-link" id="nav-step3-tab" data-toggle="tab" href="#nav-step3" role="tab" aria-controls="nav-step3" aria-selected="false">3 Step</a>
				          <a class="nav-item nav-link" id="nav-step4-tab" data-toggle="tab" href="#nav-step4" role="tab" aria-controls="nav-step4" aria-selected="false">4 Step</a>
				        </div>
				        <div class="tab-content" id="nav-tabContent">
							<div class="tab-pane fade show active" id="nav-step1" role="tabpanel" aria-labelledby="nav-step1-tab">
								<div class="row">
									<form action="{{ url('register') }}" method="POST">
										@csrf
									<input type="hidden" name="user_type" value="2">
									<div class="col-md-8 left">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="first_name_coach">First Name</label>
													<input type="text" class="form-control" name="first_name" value="@if(isset($user)) $user->first_name @endif">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="second_name">Second Name</label>
													<input type="text" class="form-control" name="last_name" value="@if(isset($user)) $user->last_name @endif">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label for="email_coach">Email</label>
													<input type="text" class="form-control" name="email" value="@if(isset($user)) $user->email @endif">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="password_coach">Choose a password</label>
													<input type="password" class="form-control" name="password" value="@if(isset($user)) $user->password @endif">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="password_confirm_coach">Re-confirm password</label>
													<input type="password" class="form-control" name="password_confirm" value="@if(isset($user)) $user->password @endif">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="birthday_coach">Birthday</label>
													<input type="text" class="form-control" name="birthday" placeholder="DD/MM/YYYY" value="@if(isset($user)) $user->birthday @endif">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="phone_number">Phone number</label>
													<input type="tel" class="form-control" name="phone" value="@if(isset($user)) $user->phone_number @endif">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 register coach">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
										<button type="submit" class="button">Next</button>
									</div>
									</form>		
								</div>
								
							</div>
							<div class="tab-pane fade" id="nav-step2" role="tabpanel" aria-labelledby="nav-step2-tab">
								<div class="row">
									<div class="col-md-8 left">
										<div class="row">
											<div class="col-12">
												<h3>Verify Account with Phone Number</h3>
												<p>When you press button “Send Me Code” you wil receive an message on your phone with 4 digit code.</p>
												<p>Just put this code in field below.</p>
												<a href="#" class="btn">Send me code</a>

												<p>Just put this code in field below.</p>
											</div>
										</div>
										<form action="{{ url('checkAuthCode') }}" method="POST">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control" name = "code" id="code">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<button type= "submit" class="button">Check</button>
												</div>
											</div>
										</div>
										</form>
										<div class="row">
											<div class="col-12">
												<h3>Verify Account with Email</h3>
												<p>When you press button “Send Me Email” you wil receive an email, just go and click on link in email.</p>
												<a href="javascript:sendVerificationEmail()" class="btn">Send me email</a>
											</div>
										</div>
										
									</div>
									<div class="col-md-4 register coach">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
										<button class="button">Next</button>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="nav-step3" role="tabpanel" aria-labelledby="nav-step3-tab">
								<div class="row">
									<div class="col-md-8 left">
										<div class="row">
											<div class="col-12">
												<h3>Bank Details</h3>
												<p>You can get paid after completing a session</p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="account_name">Account Holder Name</label>
													<input type="text" class="form-control" id="account_name">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="account_number">Account Number</label>
													<input type="text" class="form-control" id="account_number">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="sort_code">Sort / Code</label>
													<input type="text" class="form-control" id="sort_code">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-12">	
												<p>First payment will only be taken after your first session takes place.</p>
												<p>We will then take a monthly payment as part of your subscription with us.</p>
												<h3>Choose Payment Method</h3>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="">&nbsp;</label>
													<div class="dropdown">
														<button class="dropdown-toggle custom-select" type="button" id="cardType" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														Mastercard/Visa
														</button>
														<div class="dropdown-menu" aria-labelledby="cardType">
														<div class="dropdown-item">
															<input class="radio" id="mastercard" type="radio" name="mastercard" >
															<label for="mastercard">
																Mastercard
															</label>
														</div>
														<div class="dropdown-divider"></div>
														<div class="dropdown-item">
															<input class="radio" id="visa" type="radio" name="visa" >
															<label for="visa">
																Visa
															</label>
														</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="card_number">Card Number</label>
													<input type="text" class="form-control" id="card_number">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="name_on_card">Name On Card</label>
													<input type="text" class="form-control" id="name_on_card">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="billing_address">Billing Address</label>
													<input type="text" class="form-control" id="billing_address">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="expire_date">Expire Date</label>
													<input type="text" class="form-control" id="expire_date">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="cvc">CVC</label>
													<input type="text" class="form-control" id="cvc">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 register coach">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
										<button class="button">Next</button>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="nav-step4" role="tabpanel" aria-labelledby="nav-step4-tab">
								<div class="row">
									<form action="{{ url('updateAccountInfo') }}" method="POST" enctype="multipart/form-data">
									@csrf
									<input type="hidden" name="user_id"  value="@if(isset($user)) $user->id @endif">
									<div class="col-md-8 left">
										<div class="row">
											<div class="col-md-12">
												<h3>I'm A Coach In</h3>
											</div>
				        			<div class="col-md-6">
				        				<div class="form-group">
				        				    <label for="interest">Sports of interest</label>
				        				    <div class="dropdown">
			    		        	    	  <button class="dropdown-toggle custom-select" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    		        	    	   Choose one or more
			    		        	    	  </button>
			    		        	    	  <div class="dropdown-menu" aria-labelledby="dropdownMenu">
			    		        	    	  	<div class="dropdown-item">
			    	        	    	  			<input class="radio" id="radio" type="radio" name="radio" required="">
			    	        	    	  			<label for="radio">
			    	        	    	  				Bodybilding
			    	        	    	  		  	</label>
			    		        	    	  	</div>
			    		        	    	  	<div class="dropdown-divider"></div>
			    		        	    	  	<div class="dropdown-item">
			    	        	    	  			<input class="radio" id="radio-2" type="radio" name="radio2" required="">
			    	        	    	  			<label for="radio-2">
			    	        	    	  				Aerobic
			    	        	    	  		  	</label>
			    		        	    	  	</div>
			    		        	    	  	<div class="dropdown-divider"></div>
			    		        	    	  	<div class="dropdown-item">
			    	        	    	  			<input class="radio" id="radio-3" type="radio" name="radio3" required="">
			    	        	    	  			<label for="radio-3">
			    	        	    	  				Yoga
			    	        	    	  		  	</label>
			    		        	    	  	</div>
			    		        	    	  	<div class="dropdown-divider"></div>
			    		        	    	  	<div class="dropdown-item">
			    	        	    	  			<input class="radio" id="radio-4" type="radio" name="radio4" required="">
			    	        	    	  			<label for="radio-4">
			    	        	    	  				Flexibility
			    	        	    	  		  	</label>
			    		        	    	  	</div>
			    		        	    	  	<div class="dropdown-divider"></div>
			    		        	    	  	<div class="dropdown-item">
			    	        	    	  			<input class="radio" id="radio-5" type="radio" name="radio5" required="">
			    	        	    	  			<label for="radio-5">
			    	        	    	  				All
			    	        	    	  		  	</label>
			    		        	    	  	</div>
			    		        	    	  </div>
			    		        	    	</div>
				        				</div>
				        			</div>
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control" name="coach_in" placeholder="Write here" value="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<h3>Upload Your Photo</h3>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="file-upload">
													<div class="image-upload-wrap">
														<input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" name="profile_photo"/>
													</div>
													<button class="file-upload-btn btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Upload photo</button>
												</div>
											</div>
											<div class="col-md-8">
												<span class="text">* If you upload a photo you’re more likely to get noticed</span>
												<span class="text">JPEG, PNG format only</span>
												<span class="text">Minimum image resolution is 2MP</span>
												<span class="text">Maximum image resolution is 100MP</span>
												<span class="text">Maximum file size is 15MB</span>
											</div>
										</div>
									</div>
									<div class="col-md-4 register coach">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
										<button type="submit" class="button">Register</button>
									</div>
									</form>
								</div>
							</div>
				        </div>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	</div>
</div>

	<div class="hidden"></div>

	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->

	<!-- Load Scripts Start -->
	<script>var scr = {"scripts":[
		{"src" : "js/libs.js", "async" : false},
		{"src" : "js/jquery-ui.min.js", "async" : false},
		{"src" : "js/common.js", "async" : false}
		]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
	</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script>
    $(document).ready(function(){
        $('#interested').selectpicker();
        $('#lcation').selectpicker();
        $('#coaching').selectpicker();
    });
	function submitForm(){
		alert('asdfasdfasdf');
		var interested = $( "button[data-id='interested']" ).next().attr( "title" );
		$('#interested_val').val(interested);
		alert(interested);
		var location = $( "button[data-id='location']" ).next().attr( "title" );
		$('#location_val').val(location);
		alert(location);
		//$('#customerForm').submit();

	}
	function sendVerificationEmail(){
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.post('/sendVerificationEmail', {},
			function(data){
				alert("Verification email is sent to your email.")
			}
		);
	}
	function sendVerificationSMS(){
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.post('/sendVerificationSMS', {},
			function(data){
				alert("Verification SMS is sent to your phone number.")
			}
		);
	}
</script>
	<!-- Load Scripts End -->

</body>
</html>
