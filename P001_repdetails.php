<?php
include_once('autoload.php');
$textArr = $lang['RespDetials'];
?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print_r($PrjName) ?></title>
        <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style-1.css" >
    <script  type="text/javascript" src='js/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
</head>
<body>
  <div class="form-wrapper col-md-8  offset-md-2 col-sm-12">
    <form action="<?php echo(basename($_SERVER['PHP_SELF'],".php")) ?>_RD.php" method="POST">
    <div class="container">
        <h4 class="text-center mt-5"><?php print_r($textArr[0]); ?></h4>
        <p id="error" style="display: none;">Please Select option</p>

        <input autocomplete="off" type="text" class="form-control" placeholder="<?php print_r($textArr[1]); ?>" name="resp_name" id="resp_name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" required/>
        <br/>

        <input autocomplete="off" type="text" class="form-control" placeholder="<?php print_r($textArr[2]); ?>" name="resp_designation" id="resp_designation" required/>
        <br/>

        <input type="email" class="form-control" placeholder="<?php print_r($textArr[3]); ?>" name="resp_workmail" id="resp_workmail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required/>
        <br/>

        <input type="email" class="form-control" placeholder="<?php print_r($textArr[4]); ?>" name="resp_email" id="resp_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required/>
        <br/>

        <input type="tel" class="form-control" placeholder="<?php print_r($textArr[5]); ?>" name="resp_mobile" id="resp_mobile" maxlength = "10" required/>
        <br/>

        <input autocomplete="off" type="text" class="form-control" placeholder="<?php print_r($textArr[6]); ?>" name="resp_city" id="resp_city" required/>
        <br/>

        <input autocomplete="off" type="text" class="form-control" placeholder="<?php print_r($textArr[7]); ?>" name="resp_country" id="resp_country" required/>
        <br/>

        <input autocomplete="off" type="text" class="form-control" placeholder="<?php print_r($textArr[8]); ?>" name="resp_company" id="resp_company" required/>
        <br/>

        <input autocomplete="off" type="url" class="form-control" placeholder="<?php print_r($textArr[9]); ?>" name="resp_orgweb" id="resp_orgweb" required/>
        <br/>
        <label>Interview Date : </label>
        <input required type="date" name="int_date" id="int_date" placeholder="<?php echo $textArr[5]; ?>" value="<?php echo date('Y-m-d'); ?>" disabled/>
        <br/><br/>


        <div class="col-md-12 mx-auto">
          <a href="<?php echo $_SESSION['LPage']; ?> " class="btn btn-primary">Back</a>
          <button type="submit" class="btn btn-primary float-right" >Next</button>
        </div>
   </div>
 </form>
  </div>
  <script type="text/javascript">
        $('#int_date').val(new Date().toDateInputValue());
        function lettersOnly(evt)
{                         
       evt = (evt) ? evt : event;
        var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
          ((evt.which) ? evt.which : 0));
        if (charCode == 32)
            return true;
        if (charCode > 31 && (charCode < 65 || charCode > 90) &&
          (charCode < 97 || charCode > 122)) {
            evt.target.value="";
            //return false;
        }
        else
            return true;
}
    </script> 
</body>
</html>