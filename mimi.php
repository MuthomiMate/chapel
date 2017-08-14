

                <?php
require_once 'functions.php';
$db = new functions();
session_start();
if (isset($_SESSION['stud'])) {
  $user=$_SESSION['stud'];
  $RegNO=$user;
$db->getStudentDetails($RegNO);
}

?>

        <!-- <nav class="navbar navbar-fixed-bottom bg-warning" style="padding: 20px;color: #ffffff;font-weight: bolder;border-top: 1px solid #008000">
            <p class="text-center text-success">All Righs reserved&copy;2016. Powered by muthomimate@gmail.com</p>
            <button class="btn btn-danger" onclick="window.location.href='pdf.php'"/> Download</button>
        </nav> -->
