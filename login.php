
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hey, It's Lucas</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC" rel="stylesheet">
    <link rel="icon" type="image/png" href="favicon.ico" sizes="16x16">  
    <link rel="icon" type="image/png" href="favicon.ico" sizes="32x32">  
    <link rel="icon" type="image/png" href="favicon.ico" sizes="96x96">  
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>





      <!-- JUMBOTRON -->

      
      <div class="jumbotron">
        <div class="container">
          <p><span class="headertext"><b>Seeing is believing!</b></span><br>
         But you'll need a password...</p>

                <?php
        session_start();
        $errorMsg = "";
        $validUser = $_SESSION["login"] === true;
        if(isset($_POST["sub"])) {
          $validUser =  $_POST["password"] == "lucas";
          if(!$validUser) $errorMsg = "Invalid username or password.";
          else $_SESSION["login"] = true;
        }
        if($validUser) {
           header("Location: /index.html"); die();
        }
        ?>
       
       <div style="color:#5D5D5D">
          <form name="input" action="" method="post">
            <label for="password">Password:&nbsp;&nbsp;</label><input type="password" value="" id="password" name="password" />
&nbsp;&nbsp;
            <input type="submit" value="Submit" name="sub" />
            <div class="error"><?= $errorMsg ?></div>
            
          </form>
      
        </div>
      </div>
      </div>

     
      <!-- CONTENT -->

      

      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script src="js/fadein.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>