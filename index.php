
<?php 

include 'header.php';

?>


<div id="main-content">
    
        
    <!--SHOP MEN-->
    <div class="shop-by-category" style="height:500px">
        <div id="shop-men">
        	<div class="shop-all">
                <span>Shop all Men</span>
                <div style="margin:0 10%;">
                    <?php
                        getProMen();
                    ?>
                </div>
            </div>
        </div>
    </div>
    


    <!--SHOP WOMEN-->
    <div class="shop-by-category">
        <div id="shop-women">
        	<div class="shop-all">
                <span>Shop all Women</span>
                <div style="margin-left:10%">
                    <?php
                        getProWomen();
                    ?>
                </div>
            </div>
        </div>
	</div>
</div>
<?php
	include 'footer.php'
?>


