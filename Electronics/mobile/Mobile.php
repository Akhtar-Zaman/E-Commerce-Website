
<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "e_commerce_website");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="new 1.php"</script>';
			}
		}
	}
}

?>






<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Transtional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html>

<head>            
       <title> 
                Mobile Phone
       </title>
	   
      <link rel="stylesheet" type ="text/css" href="Mobile.css">
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
       <!-- new -->
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


</head>

<body>
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
												 <li>  <a href="http://localhost/Home%20Page/Fashion/KId/Kids.php"> Kids Fashion</a>   </li>												 
										   </ul>
						        </li>
							   
							     <li> <a> Electronics </a>
							   
							                 <ul>
												   <li>  <a href="http://localhost/Home%20Page/Electronics/mobile/Mobile.php"> Mobile</a> </li>
												   <li>  <a href="http://localhost/Home%20Page/Electronics/TV/TV.php"> TV</a>     </li>
												   <li>  <a href="http://localhost/Home%20Page/Electronics/Laptop/Laptop.php"> Saua</a>   </li>							   
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

					
						<!-- Image Slider for Home Page Starts From Here -->
	<script>
					var img= [ "A.jpg"
			                   
							   
							 ];
						  
						  var i=0;
						  function slides()
						  {
								  document.getElementById("bal").src= img[i];
								  if(i<(img.length-1))
								  i++;
								  else
								  i=0;		  
						  }
						  
						         setInterval(slides,2000)
	</script>

											<div id="slider">		 
												   <img src="a.jpg" id="bal" />		 
											</div>

	<!-- Image Slider for Home Page Ends Here -->
					
					<?php
				$query = "SELECT * FROM mobile ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				$num= mysqli_num_rows($result);
				if($num > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-3">
				<form method="post" action="Mobile.php?action=add&id= <?php echo $row["id"]; ?>">
						<div class="probox">
						<img src="<?php echo $row["image"]; ?>" class="img-responsive" /><br />
                                    <div class="pro_trans">
				        
						           <div class="prod-feature">
						<h5 ><?php echo $row["name"]; ?></h5>
						<h4 ><b>$ <?php echo $row["price"]; ?></b></h4>
                           
						<input type="text" name="quantity" placeholder="quantity" class= " bal"  />

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" class="add_to_cart" value="Add to Cart" />

					</div>
					</div>
					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
					
					
					
					

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
					
					
					
					