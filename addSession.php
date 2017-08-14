<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>
    PAC login
</title><link href="css/bootstrap.min.css" rel="stylesheet" /><link href="css/bootstrap.css" rel="stylesheet" /><link href="css/bootstrap-theme.css" rel="stylesheet" /><link href="css/font-awesome.css" rel="stylesheet" />

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="panel.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="http://www.pacuniversity.ac.ke">PAC University</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="test.php">Enter chapel Attendance</a></li>
        <li><a href="view.php">View Chapel Attendance Details</a></li>
        <li ><a href="another.php">Add Admin</a></li>
        <li ><a href="Student.php">Enter new Student</a></li>
      </ul>      <ul class="nav navbar-nav navbar-right">
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


        <Style type="text/css">
              html,body{
    height: 100%
}
        </Style>
      

    <link rel="shortcut icon" href="Images/logop.jpg" />
</head>

    <body>
    <form method="post" action="insert_session.php" id="Form1">
<div class="aspNetHidden">
<input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="2RWsw3RAX4zTUcXRYlybc4IYBLuCvN9qByKqJx4oLODdNZ4Jr7MPx4+ZpDg1stT1p0pVRfaLyjuQpQyn6TOe8hxREm01fx80g7jWbkzyWpo=" />
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
    <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="frXHqJ4u7ITCENPsIV92H/u0ZtB5K8yhuF1diWWbiAnEyfA4/TtoWIiDVDHxLf3rq0x3i9BsIe0QqHraB0NBbMr/k730Q0T4wcka/0dvFKHvfMbdRs7aDUBgOciLwN1HgAiQupaKOPuQShoCEs/z1JORpxla6XJZd33dTNuBJ3s=" />
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
        <div class="col-md-4"></div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="panel panel-default">
  <div class="panel-heading panel-heading-custom">
    <h3 class="panel-title">Add Session</h3>
  </div>
  <div class="panel-body">
                        
                        <div class="form-group">
                        <label for="name" class="sr-only">name</label>
                        <input name="name" type="text" id="email" class="form-control" placeholder="Session" required autofocus>
                    </div>
                            
                 
                            
                
<div class="clearfix">&nbsp; </div>
            <span id="Main_lblError"></span>
 <input type="submit"  value="Submit"  class="btn btn-success"  /> 
                   



                    </div>
</div>
        </div>
        <div class="col-md-4"></div>
            
    </div>

        </div>
    

<script type="text/javascript">
//<![CDATA[
WebForm_AutoFocus('Main_txtUserName');//]]>
</script>
</form>

        <nav class="navbar navbar-fixed-bottom bg-warning" style="padding: 20px;color: #ffffff;font-weight: bolder;border-top: 1px solid #008000">
            <p class="text-center text-success">All Righs reserved&copy;2016. powered by muthomimate@gmail.com</a></p>
        </nav>
</body>
</html>