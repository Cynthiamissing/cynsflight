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
  require "db.inc.php";
  ?>

  <div class="context">
        <img src="css/plane.jpg" style="position:absolute; width: 100%; height:auto;">
        <!-- img is from website: http://www.mrwallpaper.com/wallpapers/airplane-flight-sunset-1366x768.jpg-->
      <div style="position: absolute; top: 30%; left: 5%; width: 700px; height: 700px;">
          <div class="choose_seats">
      <form method="post" action="make_bookings.php">
              <fieldset>
                <?php
                if($fl_int == 0)
                {
                echo "<div id='main_seats' class='hidden'>";
                }else
                {
                    echo "<div id='main_seats' class='visible'>";
                }
                ?>
                  <br/>
                  <?php
                  echo "<div class='choose_from_tt'>Choose your seats: </div><div class='choose_to_tt'>".$s_string_fli."</div>";
                  ?>
                  <table id="table_seats" class="result_table table table-hover table-responsive">
                      <?php
                        for ($x2 = 1; $x2 < 6; $x2++) {
                            $s_valuename = "Seat ".$x2;
                            $s_row0 = "row_".$x2."_0";
                            $s_row1 = "row_".$x2."_1";
                            $s_row2 = "row_".$x2."_2";
                            $s_row3 = "row_".$x2."_3";
                            echo "<tr>";
                            echo "<td class='width_200'>$s_valuename <input type='checkbox' onmouseover='getitem(this.id)' name='seat_l[]' value='$s_valuename' onclick='seat_check()' id='$s_row0'/></td>";
                            echo "<td><i class=\"fa fa-child\" aria-hidden=\"true\"></i> Child <input type='checkbox' onmouseover='getitem(this.id)' onclick='seat_check()' id='$s_row1' disabled/></td>";
                            echo "<td><i class=\"fa fa-wheelchair\" aria-hidden=\"true\"></i> Wheelchair <input type='checkbox' onmouseover='getitem(this.id)' onclick='seat_check()' id='$s_row2' disabled/></td>";
                            echo "<td><i class=\"fa fa-cutlery\" aria-hidden=\"true\"></i> Special Diet <input type='checkbox' onclick='seat_check()' onmouseover='getitem(this.id)' id='$s_row3' disabled/></td>";
                            echo "</tr>";
                        }
                        ?>
                  </table>
                  <div class="right">
                      <table>
                          <tr>
                              <td><b>Total Numbers of Seats Selected:  </b></td>
                              <td id="selected_total"> </td>
                              <td></td>
                            </tr>
                      </table>
                      <div style="position: absolute; top: 40%; right: 0%;"><button type="submit" name="sn_submit" id="add_seats" class="btn btn-sm btn-xs-block btn-primary" disabled>Book your seats now</button></div>
                  </div>
                </fieldset>
            </form>
          </div>
      </div>
  </div>

</body>

<?php
mysqli_close($link);
?>
</html>
