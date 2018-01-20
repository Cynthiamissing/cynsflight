<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link href="http://fonts.googleapis.com/css?family=Muli|Dosis|Baumans|Montserrat|Indie+Flower|Exo+2|Josefin+Sans" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <script src="http://use.fontawesome.com/6b67148139.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <!-- JS library-->
    <script type="text/javascript" src="js/main.js"></script>
    <!-- Bootstrap library-->
    <script type="text/javascript" src="js/bootstrap.js"></script>

</head>

<body>
  <?php
  require_once "head.php";
  require_once "db.bookings.inc.php";

  ?>
    <div class="context">
        <img src="css/plane.jpg" style="width: 100%; height: auto;">
        <!-- img is from website: http://www.mrwallpaper.com/wallpapers/airplane-flight-sunset-1366x768.jpg-->

        <div class="add_bookings">
    <div id="main_booked_flights">
        <form method="post" action="">
            <fieldset>
                <legend class="add_bookings_title">Selected Flights</legend>
                <div id="no_booked_flight" style="font-family: 'Montserrat', sans-serif;font-size: 24px;">
                    <?php
                    if($show_no_fl == 0)
                    {
                        echo "You have no bookings...";
                    }
                    ?>
                </div>
                <table id="table_booked_flights" class="result_table table table-hover table-responsive">
                    <?php
                    for ($x3 = 0; $x3 < count($a_booked); $x3++) {
                        $id_flight_3 = "delete_booked_".$a_booked[$x3][0];
                        $seat_booked_no = $a_booked[$x3][0];
                        $f_from_3 = $a_booked[$x3][1];
                        $f_to_3 = $a_booked[$x3][2];
                        $sss_no = $_SESSION['data_booked_flights'][$x3];

                        if($_SESSION['data_booked_flights'][$x3] > 0){
                            echo "<tr>";
                            echo "<th class='text_from'>From</th>";
                            echo "<th class='text_to'>To</th>";
                            echo "<th class='cancel'>Cancel</th>";
                            echo "</tr>";
                            echo "<td>$f_from_3</td>";
                            echo "<td>$f_to_3</td>";
                            echo "<td><input type='checkbox' name='cancel_l[]' onmouseover='getitem(this.id)' onclick='c_sel_button()' value ='$seat_booked_no' id='$id_flight_3'/></td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td class='width_200'><b>Seats Booked: </b><span style='color:dimgrey'>$sss_no</span></td>";
                            echo "<td> </td>";
                            echo "<td> </td>";
                            echo "</tr>";

                        }
                    }
                    ?>

                </table>
                <br/>
                <div class="right">
                    <table style="width: 100%">
                        <tr>
                    <td><button type="button" class='btn btn-sm btn-xs-block btn-primary' id="book_more_flights" onclick="location.href='search_panel.php';">Book more Flights</button></td>
                    <?php
                    if($show_no_fl == 0)
                    {
                        //echo "No Flight Booked";
                    }else
                    {
                        echo "<td>";
                        echo "<button type='submit' name='cc_s_submit' class='btn btn-sm btn-xs-block btn-primary' id='clear_Selected_flights' disabled>Clear Selected Flights</button>";
                        echo "</td>";
                        echo "<td>";
                        echo "<button type='submit' name='cc_c_submit' class='btn btn-sm btn-xs-block btn-primary' id='clear_all_booked_flights'>Clear all booked Flights</button>";
                        echo "</td>";
                        echo "<td>";
                        echo "<button type='button' class='btn btn-sm btn-xs-block btn-primary' id='proceed_to_checkout' onclick=\"location.href='personal_info.php';\">Proceed to Checkout</button>";
                        echo "</td>";
                    }
                    ?>
                        </tr>
                    </table>
                    <div>
            </fieldset>
        </form>
    </div>
</div>
            </div>

</body>

</html>
