<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="http://fonts.googleapis.com/css?family=Muli|Dosis|Baumans|Montserrat|Indie+Flower|Exo+2|Josefin+Sans" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <script src="http://use.fontawesome.com/6b67148139.js"></script>
    <!-- JS library-->
    <script type="text/javascript" src="js/main.js"></script>

    <title>My Bookings-CYN's Trip</title>
</head>
<body>
<?php
require_once "head.php";
session_start();

$a_p_detail = array(" ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ");
//if(isset($_POST['p_detail_submit']))
for ($row = 0; $row < 12; $row++) {
    $a_p_detail[$row] = $_SESSION['p_session_data'][$row];
}

//data base---------------------------------------------------start
$connect = mysql_connect("rerun","potiro","pcXZb(kL");
$query_4 = "SELECT * FROM flights";

if (!$connect){
    die("Could not connect to Server");
}else{
    mysql_select_db("poti",$connect);
}

$result_4 = mysql_query($query_4);
$num_rows_4 = mysql_num_rows($result_4);

//echo count($_SESSION['data_booked_flights']);

$a_booked = array();
if ($num_rows_4 > 0 ) {
    $in_no = 0;
    while ( $a_row = mysql_fetch_row($result_4) ) {
        if($_SESSION['data_booked_flights'][$in_no] > 0){
            $a_p04=array();
            foreach ($a_row as $field){
                array_push($a_p04,$field);
            }
            //array_push($a_p04,0);
            array_push($a_p04,$_SESSION['data_booked_flights'][$in_no]);
            array_push($a_booked,$a_p04);
        }
        $in_no = $in_no + 1;
    }
}

mysql_close($connect);
//data base---------------------------------------------------end


// the message
$msg01 = "

<html>
<head>
</head>

<body>
  <p>Thank you for doing business with us.</p><br/>
  <table class='content_center table_column_width_1'>
           <tr>
            <td>Name: </td>
            <td>".$a_p_detail[0]." ".$a_p_detail[1]."<td>
           </tr>
           <tr> 
            <td>Country: </td>
            <td>".$a_p_detail[2]."</td>
           </tr> 
           <tr> 
            <td>Address: </td>
            <td>".$a_p_detail[3]." ".$a_p_detail[4]."</td>
           </tr> 
           <tr> 
            <td>Suburb: </td>
            <td>".$a_p_detail[5]."</td>
           </tr> 
           <tr> 
            <td>State: </td>
            <td>".$a_p_detail[6]."</td>
           </tr> 
           <tr> 
            <td>Postcode: </td>
            <td>".$a_p_detail[7]."</td>
           </tr> 
           <tr> 
            <td>Email: </td>
            <td>".$a_p_detail[8]."</td>
           </tr>
           <tr> 
            <td>Credit Card: </td>
            <td>Detail Provided</td>
           </tr>
         </table>     
         <br/><br/>
";

$msg02 = "<table>";

for ($i1=0; $i1 < count($a_booked); $i1++) {
    $msg02 = $msg02."
  <tr>
   <td style='color:blue;'>FROM</td> 
   <td><b>".$a_booked[$i1][1]."</b></td><td style='color:red;'>TO</td><td><b>".$a_booked[$i1][2]."</b></td>
   <td>Seat Booked: ".$a_booked[$i1][4]."</td>
  </tr>
  ";
    //echo $a_booked[$i1][0];
    //echo " is ";
    //echo $a_booked[$i1][4];
    //echo "<br/>";
}



$msg03 = "</table></body></html>";
$msg04 = $msg01.$msg02.$msg03;

// use wordwrap() if lines are longer than 70 characters
//$msg = wordwrap($msg,70);

$mailadd = $_SESSION['p_session_data'][8];
$mailsubject = "Internet Programming - ASS1 - Confirmation of Your Orders";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8";

// send email
//mail("someone@example.com","My subject",$msg);
mail($mailadd,$mailsubject,$msg04,$headers);

//echo "is: ".$mailadd." \n";
//echo "email sending";
// clear all session data


// session data---------------------------------------------end
?>


<div class="context">
    <img src="css/clouds.jpg" style="width: 100%; height: auto;" >
    <!--image is from website: https://wallpaperscraft.com/image/sky_clouds_pink_92617_1366x768.jpg-->
    <div class="ordered_info">
        <div id="main_order_sent" class="ordered_alert">
            Thanks for your booking!<br>
            Your order will be sent to your Email address.
        </div>
    </div>
</div>
</body>
</html>
