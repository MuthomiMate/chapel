<!DOCTYPE html>
<meta charset="utf-8">
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>
	PACUNIVERSITY
</title><link href="css/bootstrap.min.css" rel="stylesheet" /><link href="css/bootstrap.css" rel="stylesheet" /><link href="css/bootstrap-theme.css" rel="stylesheet" /><link href="css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="reveal.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script> -->
</head>
<body>
<script type="text/javascript" src="jquery/jquery-2.1.1.js"></script>
<script type="text/javascript" src="jquery/jquery-ui.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="panel.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> -->


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="select.php">PAC University</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="test.php">Enter chapel Attendance</a></li>
        <li class="active"><a href="#">View Chapel Attendance Details</a></li>
        <li><a href="another.php">Add Admin</a></li>
        <li><a href="Student.php">Enter new Student</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php
session_start();
if (isset($_SESSION['admin'])) {
  $user=$_SESSION['admin'];
  echo "Welcome ". $user;
}
?></a></li>
        <li><a href="Logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="col-md-4"></div>
                <div class="col-md-8"><img src="images/pac.jpg" style="background-color:#F0F0F0}" /></div>
                




<div class="container">
<div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-default">
  <div class="panel-heading panel-heading-custom">
    <h3 class="panel-title">How do you want to view the student?</h3>
  </div>
  <div class="panel-body">
<form method="post" action="ValidateView.php">
  
  <h4>View By?</h4>
  <div>
    <div>
      <input type="radio" name="choice-animals" id="choice-animals-dogs"   required>
      <label for="choice-animals-dogs">Student Number</label>
    
      <div class="reveal-if-active">
        <label for="which-dog"></label>
        <input type="text" id="regNo" name="studNo" class="require-if-active" data-require-pair="#choice-animals-dogs" placeholder="Enter Student Number">
      </div>
    </div>
    
    <div>
      <input type="radio" name="choice-animals" id="choice-animals-cats"   required>
      <label for="choice-animals-cats">Program</label>
    
      <div class="reveal-if-active">
        <label for="which-cat"></label>
        <input type="text" id="program" name="program" class="require-if-active" data-require-pair="#choice-animals-cats" placeholder="Enter the Program" >
      </div>
    </div>
    <div>
      <input type="radio" name="choice-animals" id="choice-animals-cats" required>
      <label for="choice-animals-cats">Session</label>
      <div class="reveal-if-active">
        <label for="status" class="sr-only"></label>
                <select name="status" id="status" class="form-control">
                    <option>JAN-APRIL 2016</option>
                    <option>MAY-AUG 2016</option>
                    <option> SEPT-DEC 2016</option>
                    <option>JAN-APRIL 2017</option>
                    <option>MAY-AUG  2017</option>
                    <option> SEPT-DEC 2017</option>
                    
                    </select>
      </div>
    
      <div class="reveal-if-active">
        <label for="session"></label>
        <input type="text" id="stud" name="session" class="require-if-active" data-require-pair="#choice-animals-cats" placeholder="Enter Student Number" >
      </div>
    </div>
  </div>
  
  <div>
    <input type="submit" value="Submit">
  </div>
      
</form>
</div>
</div>
</div>
</div>
</div>
<!-- <script src="jquery/jquery.ui.js"></script> -->
<!-- <script src="js/bootstrap.min.js"></script> -->
<!-- <script src="jquery/jquery-ui.js"></script> -->


<script src="view.js" type="text/javascript"></script>
<script src="fill.js" type="text/javascript"></script>
<script src="program.js" type="text/javascript"></script>

</body>



</html>
