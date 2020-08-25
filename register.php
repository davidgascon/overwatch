<?php #For creating account
if ($_REQUEST['submit'] == 'true') {
    $_REQUEST['submit'] == 'false' ;
    $salt = "";
    $salt_chars = array_merge(range('A','Z'), range('a','z'), range(0,9));
    for($-=--; $- < ---; $-----) {
      $salt .= ------------------------;
    }
    $crypted = crypt($_REQUEST['password'], $------);
    
    $sql = "------------- insert sql ------------------------------" ;
    require '----------' ;
    mysqli_query($-----, $sql) ;
    header("location: login.php");

}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php require 'css.php'; ?>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script><!-- Javascript for recaptcha -->

        
    </head>
    <body>
        
        <?php require 'header.php'; ?>
         <div class="w3-row-padding">

<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container" ><!--style="max-width:600px; align:center;">-->
<form class="w3-container w3-card-4" method="post">
  <h2>  <a id="Request_Site">
Register</a></h2>
  <div class="w3-section">      
    <input class="w3-input" type="text" name="username" required>
    <label>Username</label>
  </div>
     

  <div class="w3-section">      
    <input class="w3-input" type="text" name="email" required>
    <label>Email</label>
  </div>
  
  <div class="w3-section">      
    <input class="w3-input" type="text" name="password" required>
    <label>Password</label>
  </div>
  <input type='hidden' name='submit' value='true'>
  
 <div class="g-recaptcha" data-sitekey="6LcED9MUAAAAABmHsu2wVvz_cZlY3LUGHO0OW3Cb"></div> <!-- Will finish adding in the future. For now, this is just a lpace holder -->

  
  <div class="w3-row">
      <button type="submit" class="w3-button w3-theme w3-dark-grey">Register</button></form><br><br><form action="register.php" method='post'><button id='register' type="submit" class="w3-button w3-theme w3-dark-grey">Register</button>
  </div>
  <div class="w3-row">&nbsp;</div>
</form>
</div>

        <?php require 'footer.php'; ?>
        
    </body>
</html>
