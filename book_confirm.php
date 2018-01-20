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


<datalist id="list_country">
    <option value="USA">
    <option value="UK">
    <option value="Australia">
    <option value="New Zealand">
    <option value="Other">
</datalist>

<div class="context">
    <img src="css/clouds.jpg" style="width: 100%; height: auto;" >
    <!--image is from website: https://wallpaperscraft.com/image/sky_clouds_pink_92617_1366x768.jpg-->
    <div class="payment_confirm" id="main_final">
        <form id="final_form">
            <fieldset>
                <legend class="pay_confirm_title">Complete your bookings: Confirm Your Order</legend>
                <table class="table order_confirm table-responsive">
                    <tr>
                        <th class='text_from'>From</th>
                        <th class='text_to'>To</th>
                        <th class='width_200'>Seats Booked</th>
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
                    <table class="table p_info_confirm table-responsive">
                        <tr>
                            <td>Name: </td>
                            <td><?php echo "$a_p_detail[0]"." $a_p_detail[1]"; ?><td>
                        </tr>
                        <tr>
                            <td>Country: </td>
                            <td><?php echo "$a_p_detail[2]"; ?></td>
                        </tr>
                        <tr>
                            <td>Address: </td>
                            <td><?php echo "$a_p_detail[3]"." $a_p_detail[4]"; ?></td>
                        </tr>
                        <tr>
                            <td>Suburb: </td>
                            <td><?php echo "$a_p_detail[5]"; ?></td>
                        </tr>
                        <tr>
                            <td>State: </td>
                            <td><?php echo "$a_p_detail[6]"; ?></td>
                        </tr>
                        <tr>
                            <td>Postcode: </td>
                            <td><?php echo "$a_p_detail[7]"; ?></td>
                        </tr>
                        <tr>
                            <td>Email: </td>
                            <td><?php echo "$a_p_detail[8]"; ?></td>
                        </tr>
                        <tr>
                            <td>Credit Card: </td>
                            <td>Detail Provided</td>
                        </tr>
                    </table>
                <br/>
                <div class="right">
                    <button type="button" class="btn btn-sm btn-xs-block btn-primary" id="go_finalise" onclick="location.href='order.php'">Submit Order ></button>
                </div>
            </fieldset>
        </form>
    </div>
</div>
</body>
</html>
