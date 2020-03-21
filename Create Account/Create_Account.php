
<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Transtional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html>

<head>            
       <title> 
                Create Account
       </title>
	   
      <link rel="stylesheet" type ="text/css" href="Create_Account.css">
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
       <!-- new -->
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


</head>

<body >
     <div id="Main_container">
		 
	                <!-- Logo, Search Box, Create Account Link, Login Button, Cart Button Starts From Below -->	 
		            <div class="navigation-bar">
								 
										<!-- Logo Starts-->
										<div class="logo">
										
										     <img src="za.jpg" alt="logo">
											 
										</div>
										<!-- Logo Ends -->	

										
										<!-- search box -->
										<div class="search_area">
										
											    <form action="" method="post">
														<input type="text" name="search-box" class="search_box" placeholder="Search for your products...">
														
														<button class="search_btn">
														<i class="fas fa-search"> </i>
														</button>
												
											    </form>
										</div>
										<!-- search box Ends -->		
												
												
									<!-- Create Account Link -->
									<div class="Create_Account">
									
													<ul>
														  <li>
                                                                <a href="http://localhost/Home%20Page/Create%20Account/Create_Account.php">
															    <i class="fas fa-address-book"></i> &nbspCreate Account
															    </a>
														  </li>
														
													</ul>												
									</div>
									<!-- Create Account Link Ends-->

									
								    <!-- Login Button & Cart Button -->
													   <a href="http://localhost/Home%20Page/Login%20Page/Login_page.php">
													<input type= "image" id= "Login_Button" src="log.png" />
													</a>
													<a href= "http://localhost/Home%20Page/Home_Page/Cart_Details.php">
													<input type= "image" id= "Cart_Button" src="image.png" />
	                                                     </a>
	                </div>
				    <!-- Logo, Search Box, Create Account Link, Login Button, Cart Button Ends Here -->
	
	
	
	                 <!-- Home,Fashion,Electronics,Food Starts From Below -->
	                <div class="navigation">
		
				         <ul> 
						         <li> <a href="http://localhost/Home%20Page/Home_Page/Home.php"> Home</a> </li>
							     <li> <a> Fashion</a>
							   
										   <ul>
												 <li>  <a href="http://localhost/Home%20Page/Fashion/Male/Male_Fashion.php"> Men Fashion</a>    </li>
												 <li>  <a href="http://localhost/Home%20Page/Fashion/Female/Female_Fashion.php"> Women Fashion</a>  </li>
												 <li>  <a href="http://localhost/Home%20Page/Fashion/KId/kids.php?action=add&id=%202"> Kids Fashion</a>   </li>												 
										   </ul>
						        </li>
							   
							     <li> <a> Electronics </a>
							   
							                 <ul>
												   <li>  <a href="http://localhost/Home%20Page/Electronics/mobile/Mobile.php"> Mobile</a> </li>
												   <li>  <a href="http://localhost/Home%20Page/Electronics/TV/TV.php"> TV</a>     </li>
												   <li>  <a href="http://localhost/Home%20Page/Electronics/Laptop/Laptop.php"> Laptop</a>   </li>							   
							                 </ul>
							     </li>
							   
							   
							    <li> <a> Foods</a>
							   
							               <ul>
												  <li>  <a href="http://localhost/Home%20Page/Food/Biriyani/Biriyani.php"> Biriyani</a> </li>
                                                  <li>  <a href="http://localhost/Home%20Page/Food/burger/Burger.php"> Burger</a> </li>											  
							               </ul>
							    </li>
							   							   
				        </ul>
		
	                </div>
					
					
					
					
					
					
					
					

	<!-- Account Box starts -->					
    <div id= "Create_Account_div">
              
              <form>
                                   
                          <center> 
                          <input type="text" id="Create_Account_Box" placeholder= "First Name"> 
                                                <br><br> 
                          <input type="text" id="Create_Account_Box" placeholder= "Last Name"> 
                                                <br><br> 
                          <input type="text" id="Create_Account_Box" placeholder= "Email">
											    <br><br>
						  <input type="text" id="Create_Account_Box" placeholder= "Phone Number"> 
                                                <br><br> 

                          <input type= "password" id= "Create_Account_Box" placeholder= "New Password" /> 
						       <br> <br>
                          <input type= "password" id= "Create_Account_Box" placeholder= "Confirm Password" /> 
						         <br><br>
                            <div>
								 <p> <b>Date of Birth<b> </p>
								  <select  Name="Month"> 
											   <option value="Month"> Month</option>   <option value="jan" >jan </option>
											   <option value="feb" >feb</option>       <option value="Mar">Mar</option>  <option value="Apr">Apr</option> 
											   <option value="May">May</option>        <option value="jun">jun</option> 
											   <option value="july">july</option>      <option value="Aug"> Aug</option> 
											   <option value="Sept">Sept</option>      <option value="Oct">Oct</option> 
											   <option value="Nov">Nov</option>        <option value="Dec">Dec</option> 								  
        						  </select>
									
									
									<select  Name="Days"> 
												<option value="Days"> Days</option>   <option value="1" >1 </option>
												<option value="2" >2 </option>   <option value="3" >3 </option>   <option value="4" >4 </option>
												<option value="5" >5 </option>   <option value="6" >6 </option>   <option value="7" >7 </option>
												<option value="8" >8 </option>   <option value="9" >9 </option>   <option value="10" >10 </option>
												<option value="11" >11 </option> <option value="12" >12 </option> <option value="13" >13 </option>
											    <option value="14" >14 </option> <option value="15" >15 </option> <option value="16" >16 </option>
												<option value="17" >17 </option> <option value="18" >18 </option> <option value="19" >19 </option>
												<option value="20" >20 </option> <option value="21" >21 </option> <option value="22" >22 </option> 
												<option value="23" >23 </option> <option value="24" >24 </option> <option value="25" >25 </option>
												<option value="26" >26 </option> <option value="27" >27 </option> <option value="28" >28 </option>
												<option value="29" >29 </option> <option value="30" >30 </option> <option value="31" >31 </option>					
        							</select>
									
									
									
									<select  Name="Years"> 
												<option value="Years"> Year</option>   <option value="1988" >1988 </option>
											    <option value="1989" >1989 </option>   <option value="1990" >1990 </option> <option value="1991" >1991</option>
												<option value="1992" >1992 </option>   <option value="1993" >1993 </option> <option value="1994" >1994 </option>
												<option value="1995" >1995 </option>   <option value="1996" >1996 </option> <option value="1997" >1997 </option>
												<option value="1998" >1998 </option>   <option value="1999" >1999 </option> <option value="2000" >2000 </option>
											    <option value="2001" >2002 </option>   <option value="2003" >2003 </option> <option value="2004" >2004 </option>
												<option value="2005" >2005 </option>   <option value="2006" >2006 </option> <option value="2007" >2007 </option>
												<option value="2008" >2008 </option>   <option value="2009" >2009</option>  <option value="2010" >2010 </option> 
												<option value="2011" >2011 </option>   <option value="2012" >2012 </option> <option value="2013" >2013 </option>
												<option value="2014" >2014 </option>   <option value="2015" >2015 </option> <option value="2016" >2016 </option>
												<option value="2017" >2017 </option>   <option value="2018" >2018 </option> <option value="2019" >2019 </option>					
        							</select>
									
                                     <br><br>
                                  Male: <input type= "radio" name= "sex" value= "male" />
                                  Female: <input type= "radio" name= "sex" value= "female" />
                                  Others: <input type= "radio" name= "sex" value= "others" />  
								  
							</div>
							
								  <br><br>
		     					  <input type= "button" id= "Sign_Up_Button" value="Sign up" />
								  
             </form>
			 
	</div>
    <!-- Account Box Ends -->						
					
					
					
					
					
					
					
					
					
					
					
					
					
					

	            <!-- Footer Starts From Below -->				
	                  <footer id="footer">
					  
			                  <div class= "CUSTOMER_SERVICE">
							  
			                               <p> CUSTOMER SERVICE </p>
														<ul>
														    	<li>
																	<a href="#" title="Help Center">Help Center</a>
																</li>
																
																<li>
																	<a href="#" title="How to Shop From Shopping BD">How to Shop From Shopping BD</a>
																</li>
																
																<li>
																	<a href="#" title="Why Shop on Shopping BD">Why Shop on Shopping BD</a>
																</li>
																
																<li>
																	<a href="#" title="Returns & Refunds">Returns & Refunds</a>
																</li>
																
																<li>
																	<a href="#" title="Contact Us">Contact Us</a>
																</li>
														</ul>
			                  </div>

			   
			                  <div class="ABOUT_US">
							  
							           <p>ABOUT US</p>
							                  <ul>
													<li>
													    <a href="#" title="About my Shop">About myShop</a>
													</li>
													
													<li>
													    <a href="#" title="Terms and Conditions">Terms and Conditions</a>
													</li>
													
													<li>
														<a href="#" title="Privacy Policy">Privacy Policy</a>
													</li>
													
													<li>															
														<a href="#" title="Visit our Blog">Visit our Blog</a>
													</li>													
							                  </ul>
				              </div>
			   
				             <div class="ADDRESS">
				
				                     <p> ADDRESS </p>				 
				                         <ul>
										 
								             <li>
									             <p>Tolarbug R/A, Mirpur 1,Dhaka 1216,Bangladesh <br> Mobile:01835667387,01621182421</p>
								             </li>
								
						                 </ul>
			                 </div>

	               </footer>
	               <!-- Footer Ends Here -->
					
					
</body>
</html>		
					
					