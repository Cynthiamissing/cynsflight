<?php

session_start();


   if (!isset($_SESSION['data_to_fl'])) {
       $_SESSION['data_to_fl'] = "0"; // if there is not old value
      //echo "not data_to_fl";
   } else {
       //echo "old data_to_fl = ".$_SESSION['data_to_fl']."<br>";
   }



// php populate html table from mysql database------------------------------

//$hostname = "localhost";
//$username = "root";
//$password = "";
//$databaseName = "test_db";

$hostname = "";
$username = "";
$password = "";
$databaseName = "";

// connect to mysql
//$connect = mysqli_connect($hostname, $username, $password, $databaseName);
//$link = mysql_connect("rerun","potiro","pcXZb(kL");
$connect = mysql_connect("rerun", "potiro", "pcXZb(kL");

// mysql select query
//$query_string = "select * from films";
//$query = "SELECT * FROM `users";
$query_1 = "SELECT * FROM flights";
$query_2 = "SELECT from_city FROM flights GROUP BY from_city";
$query_3 = "SELECT to_city FROM flights GROUP BY to_city";
$query_4 = "SELECT * FROM flights";
$query_5 = "SELECT * FROM flights";

if (!$connect) {
    die("Could not connect to Server");
} else {
    mysql_select_db("poti", $connect);
}


// result for
//$resultd = mysqli_query($connect, $query);
//$resultd = mysql_query($query_string);
//$num_rowsd = mysql_num_rows($resultd);

$result_1 = mysql_query($query_1);
$num_rows_1 = mysql_num_rows($result_1);
$result_2 = mysql_query($query_2);
$num_rows_2 = mysql_num_rows($result_2);
$result_3 = mysql_query($query_3);
$num_rows_3 = mysql_num_rows($result_3);
$result_4 = mysql_query($query_4);
$num_rows_4 = mysql_num_rows($result_4);


//populate information for flights
$a_flights = array();
if ($num_rows_1 > 0) {
    while ($a_row = mysql_fetch_row($result_1)) {
        $a_p01=array();
        foreach ($a_row as $field) {
            array_push($a_p01, $field);
        }
        array_push($a_flights, $a_p01);
    }
}

//populate information for flights booked

$a_booked = array();
if ($num_rows_4 > 0) {
    while ($a_row = mysql_fetch_row($result_4)) {
        $a_p04=array();
        foreach ($a_row as $field) {
            array_push($a_p04, $field);
        }
        array_push($a_p04, 0);
        array_push($a_booked, $a_p04);
    }
}


//  to create data for booked flights--------------------------------------
//$_SESSION['data_booked_flights'] = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

    //echo $_SESSION['data_to_fl'];

    if (isset($_POST['sn_submit'])) {
        if (!isset($_SESSION['data_booked_flights'])) {
            $_SESSION['data_booked_flights'] = array();
            for ($row00 = 0; $row00 < count($a_booked); $row00++) {
                array_push($_SESSION['data_booked_flights'], 0);
            }
        }

       //if(!empty($_POST['seat_l'])) {
       if (isset($_POST['seat_l'])) {
           // Counting number of checked checkboxes.
          $sn_checked_count = count($_POST['seat_l']);
          //echo "You have selected following ".$sn_checked_count." option(s): <br/>";
          for ($row = 0; $row < count($a_booked); $row++) {
              if ($a_booked[$row][0] == $_SESSION['data_to_fl']) {
                  $_SESSION['data_booked_flights'][$row] = $sn_checked_count;
              }
               //echo $_SESSION['data_booked_flights'][$row];
               //echo "<br/>";
               //echo $_SESSION['data_booked_flights'];
               //echo "<p>-----</p><br/>";
          }
       } else {
           //echo "<b>Please Select Atleast One Option.</b>";
       }
    } else {
    }

//  to clear the flights which have been selected to be canceled---------
    if (isset($_POST['cc_s_submit'])) {
        if (!isset($_SESSION['data_booked_flights'])) {
            $_SESSION['data_booked_flights'] = array();
            for ($row00 = 0; $row00 < count($a_booked); $row00++) {
                array_push($_SESSION['data_booked_flights'], 0);
            }
        }

        if (!empty($_POST['cancel_l'])) {
            // Counting number of checked checkboxes.
          $sn_cancel_count = count($_POST['cancel_l']);
          //echo "You have cancel following ".$sn_cancel_count." option(s): <br/>";
          for ($row = 0; $row < count($a_booked); $row++) {
              foreach ($_POST['cancel_l'] as $selected) {
                  //echo "<p>".$selected ."</p>";
                    if ($a_booked[$row][0] == $selected) {
                        $_SESSION['data_booked_flights'][$row] = 0;
                    }
              }
          }
        } else {
            echo "<b>Please Select Atleast One Option.</b>";
        }
    } else {
    }


//  to clear all booked flights if the clear button is pressed----------------------------
    if (isset($_POST['cc_c_submit'])) {
        if (!isset($_SESSION['data_booked_flights'])) {
            $_SESSION['data_booked_flights'] = array();
            for ($row00 = 0; $row00 < count($a_booked); $row00++) {
                array_push($_SESSION['data_booked_flights'], 0);
            }
        }

        for ($row00 = 0; $row00 < count($a_booked); $row00++) {
            $_SESSION['data_booked_flights'][$row00] = 0;
        }
    } else {
        //echo "<b>Please Select Atleast One Option.</b>";
    }


//   to checked if there is flight booked---------------------
$show_no_fl = 0;
if (isset($_SESSION['data_booked_flights'])) {
    for ($row = 0; $row < count($_SESSION['data_booked_flights']); $row++) {
        if ($_SESSION['data_booked_flights'][$row] != 0) {
            $show_no_fl = $show_no_fl + 1;
        }
    }
}

//$al_a_flights = count($a_flights);


/*
//how to get values from stored array-----------
print "<table border=0>";
for ($row = 0; $row < count($a_booked); $row++) {
  print "<tr>\n";
  for ($col = 0; $col < 5; $col++) {
    echo "\t<td>".$a_booked[$row][$col]."</td>\n";
  }
  echo "\t<td>".$_SESSION['data_booked_flights'][$row]."</td>\n";
  print "</tr>\n";
}
print "</table>";
//*/


//close database link-----------important
mysql_close($connect);


//from_data
//to_data

//for a string in seats selection--------------------
$s_string_fli = "";
$fl_int = intval($_SESSION['data_to_fl']);

if ($fl_int == 0) {
    $s_string_fli = "***";
} else {// if($_SESSION['data_to_fl'] > 0)
   for ($row = 0; $row < count($a_flights); $row++) {
       $aa_int = intval($a_flights[$row][0]);
       if ($aa_int == $fl_int) {
           $s_string_fli = "<b>".$a_flights[$row][1]." to ".$a_flights[$row][2]."</b>";
             //echo "$aa_int";
       }
   }
}





// session data---------------------------------------------end

?>
<!--PHP head code END-->
