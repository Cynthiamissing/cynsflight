<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="http://fonts.googleapis.com/css?family=Muli|Dosis|Baumans|Montserrat|Indie+Flower|Exo+2|Josefin+Sans" rel="stylesheet" />
    <!-- CSS library-->
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <script src="http://use.fontawesome.com/6b67148139.js"></script>
    <!-- JS library-->
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <title>My Bookings-CYN's Trip</title>
</head>
<body>
  <?php
  require_once "head.php";
  require "db.inc.php";
  ?>

<div class="context">
    <img src="css/clouds.jpg" style="width: 100%; height: auto;" >
    <!--image is from website: https://wallpaperscraft.com/image/sky_clouds_pink_92617_1366x768.jpg-->
    <div class="my_bookings_info">
                <legend class="my_bookings_title">Booked flights</legend>
        <table class="table table-responsive" style="margin-top: 100px; text-align: center;">
            <tr>
                <th class='text_from' style="text-align: center;">From</th>
                <th class='text_to' style="text-align: center;">To</th>
                <th class='width_200' style="text-align: center;">Seats Booked</th>
            </tr>
            <?php
            for ($x5 = 0; $x5 < count($a_booked); $x5++) {
                $seat_booked_no_5 = $a_booked[$x5][0];
                $f_from_5 = $a_booked[$x5][1];
                $f_to_5 = $a_booked[$x5][2];
                $sss_no_5 = $_SESSION['data_booked_flights'][$x5];

                if($_SESSION['data_booked_flights'][$x5] > 0){
                    echo "<tr>";
                    echo "<td>$f_from_5</td>";
                    echo "<td>$f_to_5</td>";
                    echo "<td><span style='color:darkred'>$sss_no_5</span></td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>

    </div>
</div>
</body>

</html>
