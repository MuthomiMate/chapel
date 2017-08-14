
 <html xmlns="http://www.w3.org/1999/xhtml">
 <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
<head><title>
	PAC login
</title> 
</head>

    <body>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script type="text/javascript" src="jquery/jquery-2.1.1.js"></script>
<script type="text/javascript" src="jquery/jquery-ui.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="view.js" type="text/javascript"></script>

  <script type="text/javascript">
      $(function() { 
    $( "#datepicker" ).datepicker();
  });
  </script> 
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
      <<ul class="nav navbar-nav">
        <li class="active"><a href="#">Enter chapel Attendance</a></li>
        <li><a href="view.php">View Chapel Attendance Details</a></li>
        <li><a href="another.php">Add Admin</a></li>
        <li ><a href="Student.php">Enter new Student</a></li>
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
	<script src="script.js"></script><link href="Content/font-awesome.css" rel="stylesheet" />
 
  





        <Style type="text/css">
              html,body{
    height: 100%
}
        </Style>
      

    <link rel="shortcut icon" href="Images/logop.jpg" />

    <form method="post" action="collect.php" id="Form1">
<div class="aspNetHidden">
<input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="t2N+3v7AuBqq5I58gh8jLIG3ZyAtj+FGX2asSmLNrhwuU93vkIUtOoeOC63WYtHU7g/S2kTO6FMlJ/kucXD0k/Vq1crGfOZrEIEE62W5dc8=" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['Form1'];
if (!theForm) {
    theForm = document.Form1;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>



<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CA0B0334" />
	<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
	<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="65rc7vwMmGCVj7eSgKRSViC5FIaLY1mUdettM11+hZhmf5UzJv8rSVa9qL9QM39VlKJz2RIH5tnRbwrnMXLIQ7pOpkCxbMf0FJYvbTrl7qZy9Eii/X1Wm7aazu6/utiv/kL0DCcCkvRFZe1kg9EYVe+uK7P66jzsw7lCjFhdM0k=" />
</div>
        <div class="container">
            
    <div class="row hidden-xs hidden-sm" style="height: 80px;">&nbsp;</div>
    <div class="row hidden-xs hidden-sm" style="padding-bottom: 18px;">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8"><img src="images/pac.jpg" style="background-color:#F0F0F0}" /></div>
                <div class="col-md-2"></div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            

<div class="panel panel-default">
  <div class="panel-heading panel-heading-custom">
    <h3 class="panel-title">Student Attendance</h3>
  </div>
  <div class="panel-body">
          <?php
          if (isset($_POST['submit'])) {
          if(isset($_SESSION['sucess'])){
            echo  '<div class="alert alert-success">
  <strong>Success!</strong> Information submitted successfully
  </div>' ;
          }
        }

           ?>
						<div class="form-group">
                        <label for="regNo" class="sr-only">regNo</label>
                        <input name="regNo" type="text" id="regNo" class="form-control" placeholder="Student Number">
                    </div>
                    
						<div class="form-group">
						<label for="name" class="sr-only">name</label>
						<input name="name" type="text" id="name" class="form-control" placeholder="Student Name" >
					</div>
					
					<div class="form-group">
						<label for="program" class="sr-only">program</label>
						<input name="program" type="text" id="program" class="form-control" placeholder="Program"  >
						</div>
            <div class="form-group">
            <label for="session" class="sr-only"></label>
                <select name="session" id="session" class="form-control">
                    <option>JAN-APRIL 2016</option>
                    <option>MAY-AUG 2016</option>
                    <option> SEPT-DEC 2016</option>
                    <option>JAN-APRIL 2017</option>
                    <option>MAY-AUG  2017</option>
                    <option> SEPT-DEC 2017</option>
                    
                    </select>
      </div>
            
					<div class="form-group">
       
							<style>
			.ui-datepicker {font-size:100%; }
						</style>
								<label for="selected_date" class="sr-only">date</label>
								<input type="text" class="form-control" id="datepicker" name="selected_date" placeholder="Date" >
							</div>

							<div class="form-group">
				<label for="status" class="sr-only"></label>
				<select name="status" id="status" class="form-control">
					<option>present</option>
					<option>Absent</option>
					<option>Apology</option>
					</select>
					</div>
				
<div class="clearfix">&nbsp; </div>
            <span id="Main_lblError"></span>
 <input type="submit" name="submit" value="Submit" id="Main_btnDefaultLogin" class="btn btn-success" style="text-allign: center;" 
    " style="width: 120px;" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    <input type="submit" onclick="test.php" name="submit" value="Reset" id="Main_btnDefaultLogin" class="btn btn-success" style="text-allign: center;" 
    " style="width: 120px;" /> 
                   



                    
</div>
        </div>
        <div class="col-md-4"></div>
            
    </div>

        </div>
    


        <nav class="navbar navbar-fixed-bottom bg-warning" style="padding: 20px;color: #ffffff;font-weight: bolder;border-top: 1px solid #008000">
            <p class="text-center text-success">All Righs reserved&copy;2016. Designed by PAC University ICT</a></p>
        </nav>
        
</body>
</html> 