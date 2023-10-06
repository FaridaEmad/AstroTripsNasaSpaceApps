<?php
include_once 'nav.php';

//session_start();

require_once '../Models/opinions.php';
require_once '../Controllers/OpinionsController.php';

$errMsg="";
$AddMsg="";

if(isset($_POST["tripId"]) && isset($_POST["tripName"]) &&  isset($_POST["feedcack"]) &&  isset($_POST["Add"]))
{
    if(!empty($_POST["tripId"] ) && !empty($_POST["tripName"]) && !empty($_POST["feedcack"]))
    {
        $opinion=new opinion;
      $opinCont=new OpinionsController;
      $opinion->settripId($_POST["tripId"]);
      $opinion->settrip_name($_POST["tripName"]);
      $opinion->setfeedback($_SESSION["feedcack"]);
      if($opinCont->addOpinion($opinCont))
      {
        $AddMsg="Added successfully";
       
      }
      else{
        $errMsg="failed addition";
      }
    }
    else
    {
        $errMsg="Please Fill All Fields";
    }
    
}

?>
<div class="card card-center" id="loginForm" style="width: 400px;">
    <div class="card-body">
<form method="post" action="index.php" >
        <div class="form-group">
                    <label for="registerName">Trip Id:</label>
                    <input type="text" id="registerName" class="form-control" name="tripId"/>
                </div>
                <div class="form-group">
                    <label for="registerName">Trip Name:</label>
                    <input type="text" id="registerName" class="form-control" name="tripName"/>
                </div>
                <div class="form-group">
                    <label for="registerName">Feedback</label>
                    <input type="textarea" id="registerName" class="form-control" name="feedcack"/>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="Add">Submit</button>
        </form>
</div>
</div>
<?php
include_once 'footer.php'
?>