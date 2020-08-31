<?php 

include 'header.php';

?>


<div class="main-content">
  
    <!--PRODUCT DETAILS-->
    
        <div>
        	<div style="text-align:center;font-size:24px;padding-bottom:20px;">
                
                    <span>Product Detail</span>
                
                <div style="margin: 3% 0 5% 5%">
                    <?php
                        if(isset($_GET['pro_id'])){
					
							$product_id= $_GET['pro_id'];
	
							$get_prodetail= "select * from prodct where productID ='$product_id'";
	
							$run_prodetail= mysqli_query($con,$get_prodetail);
							
							while ($row_prodetail= mysqli_fetch_array($run_prodetail))
							{
								$productName = $row_prodetail['name'];
								$productDetail = $row_prodetail['product_detail'];
								$productBrand = $row_prodetail['brand'];
								$productPrice = $row_prodetail['price'];
								$productImage = $row_prodetail['product_img'];
								
								
								
							echo "<div style='height:600px;'>
									<div style='float:left;'>
										<p> $productName </p>
											<img src='produc_img/$productImage' width='200' height='390' />
											
											
											<p> $productPrice</p>
								
								
									</div>
									
									<div>
										<div style='height:300px;'>
											<p style='text-align:left'>$productDetail</p>
										</div>
										<a href='addcart.php?pro_id=$product_id'> <button> Add to Cart </button></a>	
									</div>
							
								</div>";
							}
						}
					?>
                
                </div>
            </div>
         </div>
        

<?php
	include 'footer.php';
?>