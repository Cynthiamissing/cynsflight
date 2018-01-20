<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">

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
require "db.inc.php";
?>
    <div class="context">
        <img src="css/plane.jpg" style="width: 100%; height: auto;">
        <!-- img is from website: http://www.mrwallpaper.com/wallpapers/airplane-flight-sunset-1366x768.jpg-->

        <div class="search_results">
    <div id="main_search_flight">
        <form method="get" action="search_seats.php">
            <fieldset>
                <legend class="search_results_title">Select your flights</legend>
                <table id="table_search_flight" class="result_table table table-hover table-responsive">
                    <thead>
                    <tr>
                        <th class=''>FROM</th>
                        <th class=''>TO</th>
                        <th class=''>SELECT</th>
                    </tr>
                    </thead>
                    <!--php for generating seats selection table-->
                    <?php
                    for ($x1 = 0; $x1 < count($a_flights); $x1++) {
                        $value_1 = $a_flights[$x1][0];
                        $id_flight_1 = "fli_".$a_flights[$x1][0];
                        $f_from_1 = $a_flights[$x1][1];
                        $f_to_1 = $a_flights[$x1][2];
                        //$a_flights[$row][$col]

                        echo "<tbody>";
                        echo "<tr>";
                        echo "<td>$f_from_1</td>";
                        echo "<td>$f_to_1</td>";
                        echo "<td><input type='radio' name='fl' value='$value_1' onmouseover='getitem(this.id)' onclick='fli_button();' id='$id_flight_1'/></td>";
                        echo "</tr>";
                        echo "</tbody>";
                    }
                    ?>

                </table>
                <br/>
                <div class="right">
                    <button type="button" id="back_to_search" class="btn btn-sm btn-xs-block btn-primary" onclick="location.href='search_panel.php';">New Search</button>
                    <button type="submit" id="to_seats" class="btn btn-sm btn-xs-block btn-primary" disabled="disabled">Make Booking for selected flight</button>
                    <div>
            </fieldset>
        </form>
    </div>

        </div>
    </div>

</body>

</html>
