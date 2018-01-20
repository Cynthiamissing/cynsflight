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
    <!--editable select-->
    <script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</head>

<body>
  <?php
  require_once "head.php";
  require_once "db.inc.php";

  ?>

    <div class="context">
        <img src="css/plane.jpg" style="width: 100%; height: auto;">
        <!-- img is from website: http://www.mrwallpaper.com/wallpapers/airplane-flight-sunset-1366x768.jpg-->
        <div id="search_flight">
            <div id="search_flight_title">
                Search Flights
            </div>
            <br><br>
            <form method="get" action="search_results.php">
            <div class="search_destination">
                    <label for="">From:</label><br>
                    <select class="search_area" id="set_from" name="from_data">
                        <?php
                        for ($x01 = 0; $x01 < count($a_from); $x01++) {
                            $f_from_01 = $a_from[$x01];
                            echo "<option value='$f_from_01'>$f_from_01</option>";
                        }
                        ?>
                </select>
                    <br>
                    <label for="">To:</label><br>
                    <select class="search_area" id="set_to" name="to_data">
                        <?php
                        for ($x01 = 0; $x01 < count($a_to); $x01++) {
                            $f_to_01 = $a_to[$x01];
                            echo "<option value='$f_to_01'>$f_to_01</option>";
                        }
                        ?>
                </select>
                    <br><br>
                    <button type="submit" name="find_flights" class="find_flights">Find Flights
                <i class="fa fa-arrow-right" aria-hidden="true" id="arrow"></i></button>
            </div>
            </form>
        </div>

    </div>

</body>

</html>
