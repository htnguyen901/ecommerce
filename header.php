
<!DOCTYPE html>
<?php
	include 'functions/function.php';
?>
<html>
<head>
<meta charset=utf-8 />
<meta name="viewport" content="width=device-width, initial-scale=1" />


<link rel="stylesheet" href="styles/style.css" media="all" >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
 

<title>Tame Store</title>

</head>
<body>
<header>
    <div id="main-header">
        <div id="topBar">
            <div class="header-wrap" id="freeshipping">
                <span>FREE SHIPPING ON ALL ORDERS</span>
            </div>
        </div>
           
            <div id="menu-bar">
                <div id="nav">
                    <!-- shop mens-->
                    <div class="dropdown">
                      <button class="dropbtn">Men
                          <div class="dropdown-content">
                            <!--<a href="#">Shop all men</a>-->
                            
                            <?php getCat();?>
                            
                          </div>
                      </button>
                    </div>
                    
                    <!-- shop womens-->
                    <div class="dropdown">
                      <button class="dropbtn">Women
                          <div class="dropdown-content">
                            <!--<a href="#">Shop all women</a>-->
                            
                            <?php getCat();?>
                          </div>
                      </button>
                    </div>
                    
                    <!-- shop brand-->
                    <div class="dropdown">
                      <button class="dropbtn">Brand
                          <div class="dropdown-content">
                            <!--<a href="#">All Brands</a>-->
                            
                            <li><a href="#">Tommy Hilfiger</a></li>
                            <li><a href="#">Longines</a></li>
                            <li><a href="#">MVMT</a></li>
                            <li><a href="#">MAM</a></li>
                            <li><a href="#">Lacoste</a></li>
                          </div>
                       </button>
                    </div>
                </div>
                
                <div id="center-logo">
                    <div id="logo">
                        <a href="index.php" ><img src="images/logo3.png" alt="brand-logo" width="111" height="50"></a>
                    </div>
                </div>
            
                <div id="cart">
                	<div class="dropdown" id="account">
                        <button class="dropbtn">My account
                          <div class="dropdown-content">
                            
                            <li><a href="login_form.php">Log In</a></li>
                            <li><a href="signup_form.php">Sign Up</a></li>
                            
                          </div>
                       </button>
               		</div>
                        
                    <div id="shopping-cart">
                        <a href="">Cart
                           <span>
                        <!--Draw Cart Icon-->
                            <svg width="17" height="15" viewBox="0 0 17 15" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.751 14.928c.746 0 1.352-.59 1.352-1.315 0-.726-.606-1.316-1.352-1.316-.745 0-1.352.59-1.352 1.316 0 .725.607 1.315 1.352 1.315zM13.2 14.928h.1c.358-.03.686-.184.924-.455.239-.26.348-.6.328-.957-.05-.716-.696-1.267-1.441-1.219-.746.049-1.302.687-1.253 1.403a1.34 1.34 0 0 0 1.342 1.228zM.596 1.853h1.71l2.435 8.568c.07.252.309.426.577.426h7.485a.598.598 0 0 0 .546-.348l2.724-6.093a.573.573 0 0 0-.05-.551.596.596 0 0 0-.497-.262h-8.27a.59.59 0 0 0-.596.58c0 .32.268.58.596.58h7.356l-2.207 4.933h-6.64L3.33 1.118a.594.594 0 0 0-.577-.426H.596a.59.59 0 0 0-.596.58c0 .32.268.58.596.58z"></path>
                            </svg>
            
                           </span>
                        </a>
                    </div>
                </div>
            </div>
     </div>
</header>
