<?php
session_start();
if (isset($_SESSION['admin'])) {
//var_dump($_SESSION['admin']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>pac</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
  
  <div class="panel-group">
  <div class="col-md-4"></div>
  <div class="col-md-8"><img src="images/pac.jpg" style="background-color:#F0F0F0}" /></div>
  <div class="row">
                <div class="col-md-2"></div>
  <div class="col-md-8">
    <div class="panel panel-success" >
      <div class="panel-heading text-center"> Admin Panel</div>
      <div class="panel-body">
      <div class="clearfix">&nbsp; </div>
      <div class="clearfix">&nbsp; </div>
      <div class="clearfix">&nbsp; </div>
      <div class="clearfix">&nbsp; </div>
      
        <input type="submit"  value="Enter Chapel Attendance Details"  class="btn btn-success"  style="width: 170px; height: 70px" onclick="window.location.href='test.php'"/>&nbsp;&nbsp;&nbsp;&nbsp;

        
         <input type="submit"  value="View Chapel Attendance Details"  class="btn btn-success" style="width: 170px; height: 70px ;"  onclick="window.location.href='view.php'" />&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="submit"  value="Add user"  class="btn btn-success"  style="width: 150px; height: 70px ; " onclick="window.location.href='another.php'"/>&nbsp;&nbsp;&nbsp;&nbsp;
           <input type="submit"  value="Add New Student"  class="btn btn-success"  style="width: 150px; height: 70px" onclick="window.location.href='test.php'"/>
           <div class="clearfix">&nbsp; </div>
           <input type="submit"  value="Add session"  class="btn btn-success"  style="width: 170px; height: 70px" onclick="window.location.href='addSession.php'"/>

        
      </div>
    </div>
    </div>
    
  </div>
  </div>
</div>

</body>
</html>

