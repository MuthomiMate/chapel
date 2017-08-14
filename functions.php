<?php

 
class functions {

    private $conn;

    // constructor
    function __construct() {
        require_once 'db.php';
        // connecting to database
        $db = new Db_Connect();
        $this->conn = $db->connect();

    }

    // destructor
    function __destruct() {
        

    }
    //the function to insert the first admin
    function insertAdmin(){
        $username= 'muthomi';
        $email="muthomimate@gmail.com";
        $password='muthomi';
          $stmt=$this->conn->prepare("INSERT INTO admin(username,email,password) VALUES('$username','$email','$password')");
         // $stmt->bind_param("sss,$username,$email,$password");
          $stmt->execute();
    }
    //function that allows one admin to add another one
    function addAdmin($username,$password,$campus){
          $stmt=$this->conn->prepare("INSERT INTO admin(username,campus,password) VALUES('$username','$campus','$password')");
         // $stmt->bind_param("sss,$username,$email,$password");
          $stmt->execute();
    }
    //function checks the admin log in credentials
    function validateAdmin($username,$password){
        $stmt=$this->conn->prepare("SELECT * FROM admin WHERE username='$username' and password='$password'");
            $stmt->execute();
            $num= $stmt->get_result()->num_rows;
            if ($num==1) {
                # code..
               return true;
            }


    }
    //function checks the student log in credentials
    function validateStudent($email, $regNo){
         $stmt=$this->conn->prepare("SELECT * FROM stud_details WHERE regNO='$regNo' and stud_email='$email'");
        $stmt->execute();
         $num= $stmt->get_result()->num_rows;
            if ($num==1) {
                # code..
               return true;
            }
        
    }
    //function inserts into the database the details of student
    function validateStudentDetails($name, $regNO,$program,$date,$signature, $session){
        $stmt=$this->conn->prepare("INSERT INTO students(name,RegNo,Programme,Datem,signature,session) VALUES('$name', '$regNO','$program','$date','$signature','$session')");
        $stmt->execute();
        return true;

    }
    //function displays the days attended chapel to the student
    function getStudentDetails($RegNo){

        $stmt=$this->conn->prepare("SELECT * FROM students WHERE RegNo='$RegNo'");
        $stmt->execute();
        $results=$stmt->get_result();
        //echo $results;
        $deposits =array();
        $num=$results->num_rows;
        if ($num>0) {
            //echo "<img src=images/pac.jpg style=background-color:#F0F0F0 align=middle/>";
          //session_start();
            if (isset($_SESSION['stud'])) {
            $regNO=$_SESSION['stud'];
            if (isset($_SESSION['name'])) {
            $name=$_SESSION['name'];
          }
  $RegNo=$regNO;

  }


            echo'<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>
  PACUNIVERSITY
  </title><link href="css/bootstrap.min.css" rel="stylesheet" /><link href="css/bootstrap.css" rel="stylesheet" /><link href="css/bootstrap-theme.css" rel="stylesheet" /><link href="css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="panel.css">  
  <link rel="stylesheet" type="text/css" href="reveal.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>

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
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-user"></span>' ;
      
            if (isset($_SESSION['stud'])) {
              $user=$_SESSION['stud'];
              echo "Welcome ". $user;
            }
           
            echo'</a></li>
            <li><a href="pdf.php"><span class="glyphicon glyphicon-download-alt">
            Download pdf</a></li>
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
          <div class="panel-heading heading custom"> 
          <div class panel title><h4>
          '
          ;

          echo "<p align=center>";
            echo " Student Name  ".$name."<br>"." Student Number: ".$regNO;
         echo "</p>";
         echo '</h4></div>
         </div>
          <div class="panel-body">
          <div class="table-striped">          
  <table class="table table-striped"> 
               <tr>
               <th>Date</th>
               <th> Status </td>
               </tr>';
while($deposit = $results->fetch_assoc()) {
                $date=$deposit['Datem'];
               $signature=$deposit['signature'];
                echo'<tr>';
               echo'<td>';
              echo $date;
               echo '</td>';
               echo '<td>';
                echo $signature;
                echo'</td>';
               echo '</tr>';

              
    }
               echo '</table>';
               $input=$RegNo;
               $this->getPresent($input);
               if (isset($_SESSION['present'])) {
                 $present=$_SESSION['present'];
                 $att=$_SESSION['percentage'];

                 $absent=$_SESSION['absent'];
                 $apology=$_SESSION['apology'];
               }
               echo '<div>';
               echo '<p align=center>';
              echo 'Present:   '.$present;
              echo '<br>';
               echo 'Absent: ' .$absent;
               echo '<br>';
             echo  'Apology: ' .$apology;
             echo '<br>';
              echo '<br>';
             echo  'Percentage Attendance: ' .$att;
             echo '<br>';
             echo '</div>';
echo '</div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>';

            
            
              
               

        }

        
}//function prints the student chapel attendance form 
function printPdf(){
  require('fpdf.php');
  session_start();
  if (isset($_SESSION['stud'])) {
            $regNO=$_SESSION['stud'];
            if (isset($_SESSION['name'])) {
            $name=$_SESSION['name'];
          }
  $RegNo=$regNO;

  }
 
   $stmt=$this->conn->prepare("SELECT * FROM students WHERE RegNo='$RegNo'");
        $stmt->execute();
        $results=$stmt->get_result();
        $deposits =array();
        $num=$results->num_rows;
        if ($num>0) {
           
            //$stud_name=$deposit = $results->fetch_assoc();
            
$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);

$pdf->Cell(0,7,"CHAPEL ATTENDANCE SHEET",0,1,'C');
$image1 = "images/pac.jpg";
$pdf->Image($image1, 70);
$pdf->Cell(0,10, "Student Name:  ".$name,0,1);
$pdf->Cell(0,10, "Student Number:  ".$regNO,0,1);
$pdf->SetMargins(50,10);
$pdf->Cell(50,10,"",0,1);
$pdf->Cell(50,10,"Date",1,0);
$pdf->Cell(50,10,"Status",1,1);
while($deposit = $results->fetch_assoc()) {
                $date=$deposit['Datem'];
               $signature=$deposit['signature'];
               $pdf->SetMargins(50,10);
               $pdf->SetFont('Arial','',12);
               $pdf->Cell(50,8,$date,1,0);
               $pdf->Cell(50,8,$signature,1,1);
               }
               $pdf->SetY(265);
    // Arial italic 8
    $pdf->SetFont('Arial','I',8);
    // Page number
    $pdf->Cell(0,10,'Page '.$pdf->PageNo(),0,0,'C');
$pdf->Output();
}
}
//THIS FUNCTION CREATES TABLE TO VIEW STUDENT DETAILS WHO ATTENDED CHAPEL
public function  tablem($num, $results, $studsess){
  if ($num>0) {
            //echo "<img src=images/pac.jpg style=background-color:#F0F0F0 align=middle/>";
           // $stud_name=$deposit = $results->fetch_assoc();
            //$name=$stud_name['name'];
            //$regNO=$stud_name['RegNo'];
            



echo'<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>
  PACUNIVERSITY
  </title><link href="css/bootstrap.min.css" rel="stylesheet" /><link href="css/bootstrap.css" rel="stylesheet" /><link href="css/bootstrap-theme.css" rel="stylesheet" /><link href="css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="reveal.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#http//www.pacuniversity.ac.ke">PAC University Chapel</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="test.php">Enter Student Details</a></li>
          <li class="active"><a href="view.php">View Student Details</a></li>
          <li><a href="another.php">Add Admin</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-user"></span>' ;
            session_start();
            if (isset($_SESSION['admin'])) {
              $user=$_SESSION['admin'];
              echo "Welcome ". $user;
            }
           
            echo'</a></li>
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
        <div class="panel panel-success">
          <div class="panel-heading"> <h4>' ;
          echo($studsess);
         echo '</h4></div>
          <div class="panel-body">
          <div class="table-responsive">          
  <table class="table table-striped"> 
               <tr>
               <th>Name</th>
               <th>Date</th>
               <th> Status </td>
               </tr>';
while($deposit = $results->fetch_assoc()) {
                $date=$deposit['Datem'];
               $signature=$deposit['signature'];
               $name=$deposit['name'];
                echo'<tr>';
                echo'<td>';
              echo $name;
               echo '</td>';
               echo'<td>';
              echo $date;
               echo '</td>';
               echo '<td>';
                echo $signature;
                echo'</td>';
               echo '</tr>';

              
    }
               '</table>
</div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>';


            
            
              
               

              
    }else{
   echo '<script language="javascript">';
        echo 'alert("No such record found"); location.href="view.php"'; 
        echo '</script>';
      }
 
    }
    //THIS FUNCTIOn CREATES A TABLE TO VIEW SESSION AND PROGRAMME FOR STUDENTS WHO ATTTEDED CHAPEL
public function  table($num, $results,$input){
  if ($num>0) {

            //echo "<img src=images/pac.jpg style=background-color:#F0F0F0 align=middle/>";
           // $stud_name=$deposit = $results->fetch_assoc();
           // $name=$stud_name['name'];
           // $regNO=$stud_name['RegNo'];
            



echo'<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>
  PACUNIVERSITY
  </title><link href="css/bootstrap.min.css" rel="stylesheet" /><link href="css/bootstrap.css" rel="stylesheet" /><link href="css/bootstrap-theme.css" rel="stylesheet" /><link href="css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="reveal.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#http//www.pacuniversity.ac.ke">PAC University Chapel</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="test.php">Enter Student Details</a></li>
          <li class="active"><a href="view.php">View Student Details</a></li>
          <li><a href="another.php">Add Admin</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-user"></span>' ;
            session_start();
            if (isset($_SESSION['admin'])) {
              $user=$_SESSION['admin'];
              echo "Welcome ". $user;
            }
           
            echo'</a></li>
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
        <div class="panel panel-success">
          <div class="panel-heading"> <h4>';
          echo "<p align=center>";
            echo "Student Number: ".$input;
         echo "</p>";
         echo '</h4></div>
          <div class="panel-body">
          <div class="table-responsive">          
  <table class="table table-striped"> 
               <tr>
               <th>Date</th>
               <th> Status </td>
               </tr>';

while($deposit = $results->fetch_assoc()) {
                $date=$deposit['Datem'];
               $signature=$deposit['signature'];
                echo'<tr>';
               echo'<td>';
              echo $date;
               echo '</td>';
               echo '<td>';
                echo $signature;
                echo'</td>';
               echo '</tr>';

              
    }
              echo '</table>';
    $this->getPresent($input);
               if (isset($_SESSION['present'])) {
                 $present=$_SESSION['present'];

                 $absent=$_SESSION['absent'];
                 $apology=$_SESSION['apology'];
                 $attendance=$_SESSION['percentage'];
               }
               echo '<div>';
               echo '<p align=center>';
              echo 'Present:   '.$present;
              echo '<br>';
               echo 'Absent: ' .$absent;
               echo '<br>';
             echo  'Apology: ' .$apology;
             echo '<br>';
             echo '<br>';
             echo  'Percentage Attendance: ' .$attendance;
             echo '<br>';
             echo '</div>';
 echo '</div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>';


            
            
              
               

              
    }else{
   echo '<script language="javascript">';
        echo 'alert("No such record found"); location.href="view.php"';
        echo '</script>';
      }
 
    }
//creates a table to show student attendance per session
public function  tablew($num, $results,$input,$session){
  if ($num>0) {

            //echo "<img src=images/pac.jpg style=background-color:#F0F0F0 align=middle/>";
           // $stud_name=$deposit = $results->fetch_assoc();
           // $name=$stud_name['name'];
           // $regNO=$stud_name['RegNo'];
            



echo'<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>
  PACUNIVERSITY
  </title><link href="css/bootstrap.min.css" rel="stylesheet" /><link href="css/bootstrap.css" rel="stylesheet" /><link href="css/bootstrap-theme.css" rel="stylesheet" /><link href="css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="reveal.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#http//www.pacuniversity.ac.ke">PAC University Chapel</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="test.php">Enter Student Details</a></li>
          <li class="active"><a href="view.php">View Student Details</a></li>
          <li><a href="another.php">Add Admin</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-user"></span>' ;
            session_start();
            if (isset($_SESSION['admin'])) {
              $user=$_SESSION['admin'];
              echo "Welcome ". $user;
            }
           
            echo'</a></li>
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
        <div class="panel panel-success">
          <div class="panel-heading"> <h4>';
          echo "<p align=center>";
            echo "Student Number: ".$input;
         echo "</p>";
         echo '</h4></div>
          <div class="panel-body">
          <div class="table-responsive">          
  <table class="table table-striped"> 
               <tr>
               <th>Date</th>
               <th> Status </td>
               </tr>';

while($deposit = $results->fetch_assoc()) {
                $date=$deposit['Datem'];
               $signature=$deposit['signature'];
                echo'<tr>';
               echo'<td>';
              echo $date;
               echo '</td>';
               echo '<td>';
                echo $signature;
                echo'</td>';
               echo '</tr>';

              
    }
              echo '</table>';
    $this->getPresentv($input, $session);
               if (isset($_SESSION['present'])) {
                 $present=$_SESSION['present'];

                 $absent=$_SESSION['absent'];
                 $apology=$_SESSION['apology'];
                 $attendance=$_SESSION['percentage'];
               }
               echo '<div>';
               echo '<p align=center>';
              echo 'Present:   '.$present;
              echo '<br>';
               echo 'Absent: ' .$absent;
               echo '<br>';
             echo  'Apology: ' .$apology;
             echo '<br>';
             echo '<br>';
             echo  'Percentage Attendance: ' .$attendance;
             echo '<br>';
             echo '</div>';
 echo '</div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>';


            
            
              
               

              
    }else{
   echo '<script language="javascript">';
        echo 'alert("No such record found"); location.href="view.php"';
        echo '</script>';
      }
 
    }
    //gets the student attendance details for the whole semester
    function getPresent($input){
       $stmt=$this->conn->prepare("SELECT * FROM students WHERE RegNo='$input' AND  signature='present'");
        $stmt->execute();
        $results=$stmt->get_result()->num_rows;
        $stmt=$this->conn->prepare("SELECT * FROM students WHERE RegNo='$input' AND  signature='Absent'");
        $stmt->execute();
        $rest=$stmt->get_result()->num_rows;
        $stmt=$this->conn->prepare("SELECT * FROM students WHERE RegNo='$input' AND  signature='Apology'");
        $stmt->execute();
        $res=$stmt->get_result()->num_rows;
        
        $_SESSION['present']=$results;
        $_SESSION['absent']=$rest;
        $_SESSION['apology']=$res;
        $total=$results+$rest+$res;
        $att=($results/$total )*100;
        $_SESSION['percentage']=$att;


    }
    //gets the attendance of the student per session
    function getPresentv($input,$session){
       $stmt=$this->conn->prepare("SELECT * FROM students WHERE RegNo='$input' AND  signature='present'AND session='$session' ");
        $stmt->execute();
        $results=$stmt->get_result()->num_rows;
        $stmt=$this->conn->prepare("SELECT * FROM students WHERE RegNo='$input' AND  signature='Absent' AND session='$session'");
        $stmt->execute();
        $rest=$stmt->get_result()->num_rows;
        $stmt=$this->conn->prepare("SELECT * FROM students WHERE RegNo='$input' AND  signature='Apology' AND session='$session'");
        $stmt->execute();
        $res=$stmt->get_result()->num_rows;
        
        $_SESSION['present']=$results;
        $_SESSION['absent']=$rest;
        $_SESSION['apology']=$res;
        $total=$results+$rest+$res;
        $att=($results/$total )*100;
        $_SESSION['percentage']=$att;


    }

    //FUNCTION TO VIEW CHAPEL ATTENDANCE PER PROGRAMME
    function Viewprog($input){
        $stmt=$this->conn->prepare("SELECT * FROM students WHERE Programme='$input'");
        $stmt->execute();
        $results=$stmt->get_result();
        //echo $results;
        $deposits =array();
        $num=$results->num_rows;
        $this-> tablem ($num,$results,$input) ;
       
  

}
//FUNCTION TO VIEW CHAPEL ATTENDANCE PER STUDENT
function ViewStud($input){
        $stmt=$this->conn->prepare("SELECT * FROM students WHERE regNo='$input'");
        $stmt->execute();
        $results=$stmt->get_result();
        //echo $results;
        $deposits =array();
        $num=$results->num_rows;
      $this-> table ($num,$results,$input) ;
       
    }
    //FUNCTION TO VIEW CHAPEL ATTENDANCE PER SESSION
    function ViewSession($session, $studsess){
        $stmt=$this->conn->prepare("SELECT * FROM students WHERE session='$session' AND regNo='$studsess' ");
        $stmt->execute();
        $results=$stmt->get_result();
        //echo $results;
        $deposits =array(); 
        $num=$results->num_rows;
        $input=$studsess;
        
        $this-> tablew($num,$results,$input, $session) ;
       
       
    }
    //THIS FUNCTION AUTOFILLS THE FIELDS

function useAjax(){
    $name = $_POST['name_startsWith'];
  $stmt=$this->conn->prepare("SELECT regNO, stud_name, Programme FROM stud_details where UPPER(regNO) LIKE '".strtoupper($name)."%'");
  $stmt->execute();
  $result=$stmt->get_result();
  $data = array();
 $date = date('m/d/Y');
  while ($row =$result->fetch_assoc() ) {
    $name = $row['regNO'].'|'.$row['stud_name'].'|'.$row['Programme'].'|'.$date;
   array_push($data, $name); 
  } 
  echo json_encode($data);
}
//FUNCTION CREATES A SESSION FOR STUDENT WHO IS LOGGED IN
function getStudent($regNo){
  $stmt=$this->conn->prepare("SELECT * FROM stud_details WHERE regNO= '$regNo'");
  $stmt->execute();
  $results=$stmt->get_result();
  $stud_name=$results->fetch_assoc();
  
  $RegNo=$stud_name['regNO'];
  session_start();
  $_SESSION['stud']=$RegNo;
  $name=$stud_name['stud_name'];
  $_SESSION['name']=$name;
  
}
//insert  new students to the databse
function insertStudentDetails($name, $regNO,$program,$stud_email){
        $stmt=$this->conn->prepare("INSERT INTO stud_details(stud_name,regNO,Programme,stud_email) VALUES('$name', '$regNO','$program','$stud_email')");
        $stmt->execute();
        return true;

    }
//adds session to the session table in the database
    function addSession($name){
      $stmt=$this->conn->prepare("INSERT INTO session(session_name) VALUES('$name')");
        $stmt->execute();
        return true;
    }



}