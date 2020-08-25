<?php
if ($_REQUEST['submit'] == 'true') {
    require '-----------' ; #file with database credentials
    
    #get salt
    $saltsql = "SELECT `----`, `-------` FROM `------` WHERE `------` = '" . $_REQUEST['username'] . "' " ;
    $saltresult = mysqli_query($----, $saltsql) ;
    $saltrow = mysqli_fetch_assoc($saltresult);
    if (crypt($_REQUEST['password'], $saltrow['salt']) == $saltrow['password'] ) {
        $usersql = "SELECT `--------` FROM `-------` WHERE `------` = '" . $_REQUEST['username'] . "';" ;
        $userresult = mysqli_query($------, $usersql) ;
        $userrow = mysqli_fetch_assoc($userresult) ;
        $_SESSION['user'] = $userrow['id'] ;
        header("location: home.php") ;
    } else {
        $login = '0' ;
    }
}


?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php require 'css.php'; ?>

        
    </head>
    <body>
        
        <?php require 'header.php'; ?>
         <div class="w3-row-padding">

<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container" ><!--style="max-width:600px; align:center;">-->
<form class="w3-container w3-card-4" method="post" action="">
  <h2>Login</h2>
<?php echo "Login status = " . $login ; ?> #used for testing. deleted for final deploy

  <div class="w3-section">      
    <input class="w3-input" type="text" name="username" required>
    <label>Username or Email</label>
  </div>
  <div class="w3-section">      
    <input class="w3-input" type="text" name="password" required>
    <label>Password</label>
  </div>
  
  <input type='hidden' name='submit' value='true'>
 

  
  <div class="w3-row">
      <button type="submit" class="w3-button w3-theme w3-dark-grey">Login</button></form><br><br><form action="register.php" method='post'><button id='register' type="submit" class="w3-button w3-theme w3-dark-grey">Register</button>
  </div>
  <div class="w3-row">&nbsp;</div>
</form>
</div>

        <?php require 'footer.php'; ?>
        
    </body>
</html>
