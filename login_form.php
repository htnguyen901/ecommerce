<?php

include 'header.php';

?>

<div id="form" style="background-image:url(images/background.jpg); margin:0 5%; height:1000px">
<div id="table-form" style="margin: 10%">
    <form action="process_login.php" method="post" style="padding:10%">
    <table class="login" align="center" cellpadding="3" style="background-color:#FFF; padding:5%;border-radius:10px;opacity:0.9" >
          <tr>
            <td colspan="2" align="center">
                <span style="text-align:center; font-size:24px"> Welcome back! <br> Log In </span>
            <td>
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
        <button type="submit" name="login" style="transition-duration:0.3s;">Login</button></td>
        </tr>
    
    </table>
    </form>
</div>
</div>

