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
				echo '<script>window.location="Cart_Details.php"</script>';
			}
		}
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title> Shopping Cart Details</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<link rel="stylesheet" type ="text/css" href="cart.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
		<br />
		<div id="Main_container">
		
		
		                        <h1 align="center"> <b>Thank You For Shopping With Us<b></h1>
			                <!-- Logo, Search Box, Create Account Link, Login Button, Cart Button Starts From Below -->	 
		            <div class="navigation-bar">
								 
										
	                 </div>
	                 <!-- Home,Fashion,Electronics,Food Starts From Below -->
	                <div class="navigation">
		
				         
		
	                </div>
		
		
		
		
			<br />
			<br />
			
			<h3 align="center"> <b>Your Shopping List </b></h3><br />
			<br />
			<?php
				$query = "SELECT * FROM products ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				$num= mysqli_num_rows($result);
				if($num > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="Cart_Details.php?action=add&id= <?php echo $row["id"]; ?>">
				
				</form>
			</div>
			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="Cart_Details.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>
		</div>
	</div>
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


