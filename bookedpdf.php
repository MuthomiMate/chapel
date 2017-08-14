<?php
error_reporting(0);
ini_set('display_errors', 0);
include("mpdf/mpdf.php");
$stylesheet = file_get_contents('mpdf/mpdf.css');
$mpdf=new mPDF('c','A4'
,12 //font-size
,'Times New Romans' //font name default family
,10 //margin_left
,10 //margin_right
,10 //margin_top
,45 //margin_bottom
,0 //margin_header
,10 //margin_footer
,'P' //potrait
);
$mpdf->AddPage();
//adding a page i.e overriding thefpdf class in mfpdf.php
$mpdf->MultiCell(190,6,"",0,'C');
$mpdf->MultiCell(190,6,"",0,'C');
$mpdf->MultiCell(190,6,"",0,'C');
$mpdf->SetFont('Times','B',20);	
$mpdf->MultiCell(190,6,"ANDROID CAR PARKING BASED SYSTEM",0,'C');
//$mpdf->Image("image/gok.gif",90,18,40,0,'C');
$mpdf->SetFont('Times','B',20);	
$mpdf->MultiCell(200,6,"BOOKED SLOTS",0,'C');
$mpdf->MultiCell(200,6,"",0,'C');
$mpdf->MultiCell(200,6,"",0,'C');
$mpdf->MultiCell(200,6,"",0,'C');
$mpdf->MultiCell(200,6,"",0,'C');
$mpdf->MultiCell(200,6,"",0,'C');
$mpdf->setFooter('{PAGENO}');
// $mpdf->SetFont('Times','B',12);	
// $mpdf->MultiCell(200,6,"P.O. BOX 254",0,'C');
// $mpdf->SetFont('Times','B',12);	
// $mpdf->MultiCell(200,6,"Kenya",0,'C');
// $mpdf->SetHTMLFooter('
// 	<br><br><br><br><br><br>
// 	<div style=" font-size: 16px;">
// 		<div style="text-align:center;">Sign:.........................................</div>
// 		<div style="text-align:center;">(Project Manager)</div>
// 	</div>
// 	<div style="text-align:center; font-weight: bold; font-size: 12px;">Printed by: '.$usernames.' on '.date("d"."-"."M"."-"."Y")." at ".date("h:i a").' </div>
// 	<div style="text-align:center; font-weight: bold; font-size: 16px;">CIMES &copy; Copyright '. $year.' All rights reserved.</div>
// 	<div style="text-align:right; font-weight: bold; font-size: 12px;">{PAGENO} out of {nb}</div><div style="text-align: left; font-weight: bold; font-size: 12px;">'.$wardname.' Ward '.$subcountyname.' Subcounty</div>','O');
$mpdf->setAutoTopmargin="stretch";
$mpdf->watermarkImageAlpha=0.05;
// $mpdf->SetWatermarkImage("image/gok.gif",-50,"","","C");
// $mpdf->showWatermarkImage=true;
// $mpdf->watermarkTextAlpha=0.1;
// $mpdf->SetWatermarkText(strtoupper("$wardname " .$financial_year));
// $mpdf->showWatermarkText=true;
// include 'database.php';
// $status='Booked';
//  if($status=='Booked'){
// 		$state=intval('1');
// 	}
// 	if($status=='Not Booked'){
// 		$state=intval('0');
// 	}
$html='          
  <table border="1" style="border-collapse:collapse;">
	<thead>
		<tr class="headerrow">
               <th>Customer Name</th>
               <th>Email</th>
               <th>Car Number</th>
               <th>Car Park Name</th>
               <th>Slot Number</th>
               <th> Time From</th>
               <th> Time To</th>
               
               </tr>
               </thead>';

// 			$sql='SELECT * FROM carslots WHERE status=:status';
// $st = $conn->prepare($sql);
// $st->bindValue(":status", $state, PDO::PARAM_STR);
// $st->execute();

// $rows = $st->rowCount();
//       if ($rows>0) {
//       	while($cars   = $st->fetch(PDO::FETCH_ASSOC)){
//       		$car_park_id=intval($cars['car_park_id']);
//       		$user_id=intval($cars['user_id']);
//       		$pos=$cars['name'];
//     $sqli='SELECT * FROM users WHERE user_id=:userid';
// 	$stm = $conn->prepare($sqli);
// 	$stm->bindValue(":userid", $user_id, PDO::PARAM_STR);
// 	$stm->execute();
// 	$users   = $stm->fetch(PDO::FETCH_ASSOC);
// 	$username=$users['name'];
// 	$useremail=$users['Email'];
// 	$usercarNo=$users['carNumber'];
// 			$sqlim='SELECT * FROM car_parks WHERE car_park_id=:carrid';
// 			$stmt = $conn->prepare($sqlim);
// 			$stmt->bindValue(":carrid", $car_park_id, PDO::PARAM_STR);
// 			$stmt->execute();
// 			$carPark   = $stmt->fetch(PDO::FETCH_ASSOC);
// 			$name=$carPark['Name'];
// 	$sqlimt='SELECT * FROM bookings WHERE car_park_name=:carname AND user_id=:userid AND pos=:pos';
// 	$stmtm = $conn->prepare($sqlimt);
// 	$stmtm->bindValue(":carname", $car_park_id, PDO::PARAM_STR);
//   $stmtm->bindValue(":userid", $user_id, PDO::PARAM_STR);
//   $stmtm->bindValue(":pos", $pos, PDO::PARAM_STR);
// 	$stmtm->execute();
// 	$booking   = $stmtm->fetch(PDO::FETCH_ASSOC);
// 	$timefrom=$booking['Time_From'];
// 	$timeto=$booking['Time_To'];
	// var_dump($timeto); die();
			$html.='<tr>
               <td>'.
               ' mwiti'.'
               </td>
               <td>'
               .'$useremail'.
               '</td>
               <td>'.
               '$usercarNo'.
               '</td>
               <td>'
               .'$name'.
               '</td>
                <td>'
               .'$pos'.
               '</td>
               <td>'.
               '$timefrom'.
               '</td>
               <td>'
               .'$timeto'.
               '</td>
               </tr>';


			












$html.='</table>';
  
               
              

$ffname='filename.pdf';

$mpdf->SetDisplayMode('fullpage');
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($html,2);
$mpdf->Output($ffname,'F');


function multi_attach_mail($to, $subject, $message, $senderMail, $senderName, $files){

    $from = $senderName." <".$senderMail.">"; 
    $headers = "From: $from";

    // boundary 
    $semi_rand = md5(time()); 
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

    // headers for attachment 
    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

    // multipart boundary 
    $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
    "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n"; 

    // preparing attachments
    if(count($files) > 0){
        for($i=0;$i<count($files);$i++){
            if(is_file($files[$i])){
                $message .= "--{$mime_boundary}\n";
                $fp =    @fopen($files[$i],"rb");
                $data =  @fread($fp,filesize($files[$i]));

                @fclose($fp);
                $data = chunk_split(base64_encode($data));
                $message .= "Content-Type: application/octet-stream; name=\"".basename($files[$i])."\"\n" . 
                "Content-Description: ".basename($files[$i])."\n" .
                "Content-Disposition: attachment;\n" . " filename=\"".basename($files[$i])."\"; size=".filesize($files[$i]).";\n" . 
                "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
            }
        }
    }

    $message .= "--{$mime_boundary}--";
    $returnpath = "-f" . $senderMail;

    //send email
    $mail = @mail($to, $subject, $message, $headers, $returnpath); 

    //function return true, if email sent, otherwise return fasle
    if($mail){ return TRUE; } else { return FALSE; }

}

//email variables
$to = 'muthomimate254@gmail.com';
$from = 'muthomimate@gmail.com';
$from_name = 'Muthomi Mate';

//attachment files path array
$files = array($ffname);
$subject = 'Receipt Confirmation'; 
$html_content = '<h1>Thanks for shopping with us</h1>
            <p><b>Total Attachments : </b>'.count($files).' attachments</p>';

//call multi_attach_mail() function and pass the required arguments
$send_email = multi_attach_mail($to,$subject,$html_content,$from,$from_name,$files);

//print message after email sent
echo $send_email?"<h1> Mail Sent</h1>":"<h1> Mail not SEND</h1>";
unlink($ffname);
?>
