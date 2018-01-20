
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <!-- Local stylesheet overriding Bootstrap styles -->
    <link href="css/bootstrapstyle.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Muli|Dosis|Baumans|Montserrat|Indie+Flower|Exo+2|Josefin+Sans" rel="stylesheet" />
    <script src="http://use.fontawesome.com/6b67148139.js"></script>

    <title>Contact Us-CYN's Trip</title>
</head>

<body>

<?php
include "head.php";
session_start();

$co_m_name_f = "";
$co_m_name_l = "";
$co_m_subject = "";
$co_m_email = "";
$co_m_request = "";

if (isset($_POST['co_post_f_name'])) {
    $co_m_name_f = $_POST['co_post_f_name'];
}
if (isset($_POST['co_post_l_name'])) {
    $co_m_name_l = $_POST['co_post_l_name'];
}
if (isset($_POST['co_post_subject'])) {
    $co_m_subject = $_POST['co_post_subject'];
}
if (isset($_POST['co_post_email'])) {
    $co_m_email = $_POST['co_post_email'];
}
if (isset($_POST['co_post_request'])) {
    $co_m_request = $_POST['co_post_request'];
}


$msgmm = "
<html>
<head>
</head>

<body>
<p>Dear ".$co_m_name_f." ".$co_m_name_l."</p><br/>
<p>We have received your email, thanks for your request!</p>
<br/>
<p>".$co_m_request."</p>
<br/>
</body>
";

$mailadd0 = $co_m_email;
$mailsubject0 = "Internet Programming - ASS1 - Thanks for your request: ".$co_m_subject;

$headers0 = "MIME-Version: 1.0" . "\r\n";
$headers0 .= "Content-type:text/html;charset=UTF-8";

// send email
//mail("someone@example.com","My subject",$msg);
mail($mailadd0, $mailsubject0, $msgmm, $headers0);

/*

*/

?>

<!-- php code head ends here -----------------------------------------------  -->
<div class="context">
    <img src="css/book.jpg" style="width: 100%; height: auto;" >
    <!--image is from website: http://www.wallpaperhd.pk/openbook-blank-page-hd-wallpaper/-->
    <div id="main_request_sent" class="send_request_alert">
    Your request is sent, <br>
        THANK YOU!
    </div>
</div>
</body>
