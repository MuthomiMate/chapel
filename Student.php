
 <html xmlns="http://www.w3.org/1999/xhtml">
<head><title>
	PAC login
</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

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
      <ul class="nav navbar-nav">
        <li><a href="test.php">Enter chapel Attendance</a></li>
        <li><a href="view.php">View Chapel Attendance Details</a></li>
        <li><a href="another.php">Add Admin</a></li>
        <li class="active"><a href="#">Enter new Student</a></li>
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
    <link rel="stylesheet" type="text/css" href="panel.css">
</head>

    <body>
    <form method="post" action="newstud.php" id="Form1">
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


<script src="/WebResource.axd?d=pynGkmcFUV13He1Qd6_TZIin72LPHi2NFWR6eWLS_FgIRGu7Lrg_BohmjZWU0b103FtnCOBwEBhiINvmq6k-xw2&amp;t=635332125020000000" type="text/javascript"></script>


<script src="/WebResource.axd?d=JoBkLzP19aTuxbWOhHobYgodhTRomlM0YvCUbA6sJMJapLUKng_RoJm9lsXdHvLYILaAQs7MJc27RgXkFPCgfA2&amp;t=635332125020000000" type="text/javascript"></script>
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
    <h3 class="panel-title">Student Details</h3>
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
                        <input name="regNo" type="text" id="regNo" class="form-control" placeholder="Student Number" required>
                    </div>
                    
						<div class="form-group">
						<label for="name" class="sr-only">name</label>
						<input name="name" type="text" id="name" class="form-control" placeholder="Student Name" required >
					</div>
          <div class="form-group">
            <label for="email" class="sr-only">email</label>
            <input name="Email" type="text" id="email" class="form-control" placeholder="Student Email" required >
            </div>
					
					<div class="form-group">
						<label for="program" class="sr-only">program</label>
						<input name="program" type="text" id="program" class="form-control" placeholder="Program" required>
						</div>
            
            
					
				
<div class="clearfix">&nbsp; </div>
            <span id="Main_lblError"></span>
 <input type="submit" name="submit" value="Submit" class="btn btn-success" style="text-allign: center;" 
    " style="width: 120px;" /> 
                   



                    
</div>
        </div>
        <div class="col-md-4"></div>
            
    </div>

        </div>
    

<script type="text/javascript">
//<![CDATA[
WebForm_AutoFocus('Main_txtUserName');//]]>
</script>

        <nav class="navbar navbar-fixed-bottom bg-warning" style="padding: 20px;color: #ffffff;font-weight: bolder;border-top: 1px solid #008000">
            <p class="text-center text-success">All Righs reserved&copy;2016. Designed by PAC University ICT Department </a></p>
        </nav>
        
</body>
</html> 
