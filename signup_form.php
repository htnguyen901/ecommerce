<?php
include 'header.php'
?>
<div id="form" style="background-image:url(images/background.jpg); margin:0 5%; height:1000px">
<div id="table-form" style="margin: 10%">
    <form action="signup_form.php" method="post" enctype="multipart/form-data" style="padding:10%">
    <table class="signup" align="center" cellpadding="3" style="background-color:#FFF; padding:5%;border-radius:10px;opacity:0.9" >
          <tr>
            <td colspan="2" align="center">
                <span style="text-align:center;font-size:24px"> Welcome to TAME! <br>Sign Up </span>
            <td>
          </tr>
    
        <tr>
            <td> <label for="name"><b>Name</b></label></td>
            <td> <input type="text" placeholder="Enter Name" name="name" required size="50"> </td>
        </tr>
        
        <tr>
            <td> <label for="phone"><b>Phone number</b></label></td>
            <td> <input type="tel" placeholder="Enter Phone Number" name="phone" required size="50"> </td>
        </tr>
        
        <tr>
            <td><label for="email"><b>Email address</b></label></td>
            <td><input type="email" placeholder="Enter Email Address" name="email" required size="50"></td>
        </tr>
        
        <tr>
            <td><label for="email"><b>Shipping address</b></label></td>
            <td><input type="text" placeholder="Enter Address" name="address" required size="50"></td>
        </tr>
        
        <tr>
            <td> <label for="username"><b>Username</b></label></td>
            <td> <input type="text" placeholder="Enter Username" name="username" required size="50"> </td>
        </tr>
        
        <tr>
            <td><label for="password"><b>Password</b></label></td>
            <td><input type="password" placeholder="Enter Password" name="password" required size="50"></td>
        </tr>
        
        <tr>
        <td colspan="2" align="center">
        <button type="submit" name="signup" style="transition-duration:0.3s;">Sign Up</button>
        </td>
        </tr>
    
    </table>
    </form>
</div>
</div>
<?php

	if(isset($_POST['signup']))
	{
		$username= $_POST['username'];
		$password= $_POST['password'];
		$name =$_POST['name'];
		$phone =$_POST['phone'];
		$email =$_POST['email'];
		$ship_add =$_POST['address'];

		
		/*insert to mySQL*/
		
		$check_customer='select * from customer';
		
		$check_cus= mysqli_query($con,$check_customer);
		
		while ($check_cuss=mysqli_fetch_array($con,$check_cus))
		{
			if(
			$name=$check_cuss['cusName']&&
			$phone=$check_cuss['phone'] &&
			$email=$check_cuss['cusEmail'] &&
			$address=$check_cuss['shipping_add'])
			{
					echo "Customer is already existed";
					break;
				}
			else
			{
				$insert_customer= "insert into customer (customerID,cusName,phone,billing_add,shipping_add,cusEmail) values ('','$name','$phone','','$ship_add',$email)";
				
				$insert_cus = mysqli_query($con,$insert_customer);

				$insert_account= "insert into useraccount (user_name,pass_word,customerID) values ('$username','$password','')";
				
				$insert_acc = mysqli_query($con,$insert_account);
				
				if($insert_acc && $insert_cus)
				{
					echo "Account created with $username,$password";
					}
			}
			break;
		}
		
	}



?>