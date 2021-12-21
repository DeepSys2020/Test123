<?php
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
include_once('autoload.php');
session_destroy();
session_unset();
$textArr = $lang['Intro1'];
?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print_r($PrjName) ?></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style-1.css" >
    <script  type="text/javascript" src='js/jquery.min.js'></script>
    <script  type="text/javascript" src='js/app.js'></script>
</head>
<body>

  <script type="text/javascript">
    $(function(){
      navigator.geolocation.getCurrentPosition(showposition);
      $('input').on('focus',function(){
          $('#error').hide();
      });
    });
    
     function showposition(pos){
      $('#latitude').val(pos.coords.latitude);
      $('#longitude').val(pos.coords.longitude);
      return false;
    }
  </script>
    <div class="container">
        
    </br>
        

        <div class="reg-form col-md-8 offset-md-2  col-sm-12 pt-5 mt-5 ">
            <div class="form-wrapper mt-5">
               <div class="mt-5">             
                
               
               <h4 class="text-center mt-5"><?php print_r($PrjName) ?></h4>
                <div class="col-md-8 offset-md-2 ">
                  <form action="chklogin.php" method="POST" onsubmit="return true;">
                      <input type="hidden" name="latitude" id="latitude">
                      <input type="hidden" name="longitude" id="longitude">
                      <div class="form-group">
                          <p><?php echo $textArr; ?></p>
                      </div>
                      <input type="submit"   value="Start"  class="btn btn-primary mt-5 " name="">
                  </form>
               </div> 
             </div>  
            </div>
          </div>
    </div>  
</body>
</html>