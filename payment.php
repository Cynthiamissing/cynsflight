<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="http://fonts.googleapis.com/css?family=Muli|Dosis|Baumans|Montserrat|Indie+Flower|Exo+2|Josefin+Sans|Rokkitt" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <script src="http://use.fontawesome.com/6b67148139.js"></script>
    <!-- JS library-->
    <script type="text/javascript" src="js/main.js"></script>

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
<div class="oder_pay_detail">
    <div id="main_payment_detail">
            <form id="card_detail_form" method="post" action="book_confirm.php">
                <div class="order_info">
                <fieldset>
                    <legend class="pay_info_title">Order Information</legend>
                    <table class="order_info table-responsive">
                        <tr>
                            <td class="order_info"><b>Given Name: </b></td>
                            <td class="order_info"><?php echo "$a_p_detail[0]"; ?><td>
                        </tr>
                        <tr>
                            <td class="order_info"><b>Family Name: </b></td>
                            <td class="order_info"><?php echo "$a_p_detail[1]"; ?></td>
                        </tr>
                        <tr>
                            <td class="order_info"><b>Country: </b></td>
                            <td class="order_info"><?php echo "$a_p_detail[2]"; ?></td>
                        </tr>
                        <tr>
                            <td class="order_info"><b>Address: </b></td>
                            <td class="order_info"><?php echo "$a_p_detail[3]"." $a_p_detail[4]"; ?></td>
                        </tr>
                        <tr>
                            <td class="order_info"><b>Suburb: </b></td>
                            <td class="order_info"><?php echo "$a_p_detail[5]"; ?></td>
                        </tr>
                        <tr>
                            <td class="order_info"><b>State: </b></td>
                            <td class="order_info"><?php echo "$a_p_detail[6]"; ?></td>
                        </tr>
                        <tr>
                            <td class="order_info"><b>Postcode: </b></td>
                            <td class="order_info"><?php echo "$a_p_detail[7]"; ?></td>
                        </tr>
                        <tr>
                            <td class="order_info"><b>Email: </b></td>
                            <td class="order_info"><?php echo "$a_p_detail[8]"; ?></td>
                        </tr>
                        <tr>
                            <td class="order_info"><b>Mobile Phone: </b></td>
                            <td class="order_info"><?php echo "$a_p_detail[9]"; ?></td>
                        </tr>
                        <tr>
                            <td class="order_info"><b>Business Phone: </b></td>
                            <td class="order_info"><?php echo "$a_p_detail[10]"; ?></td>
                        </tr>
                        <tr>
                            <td class="order_info"><b>Work Phone: </b></td>
                            <td class="order_info"><?php echo "$a_p_detail[11]"; ?></td>
                        </tr>
                        <?php

                        ?>
                        </table>
                </fieldset>
                    </div>
                <div class="payment_info">
                    <fieldset>
                        <legend class="pay_info_title">Complete your bookings: Payment</legend>
                        <div id="small_check_2" class="width_500 text_center a_center">
                            <font size="2"></font>
                        </div>
                        <br/>
                        <table id="table_payment_detail" width="700px" class="payment_info ">
                            <tr>
                                <td class="payment_info"><input id="pa_visa" name="pcard" type="radio" value="Visa" onmouseover="getitem(this.id)" onclick="card_type_click()"/> <img class="pay_logo" src="css/visa.jpg"> <td>
                                <td class="payment_info"><input id="pa_diners" name="pcard" type="radio" value="Diners" onmouseover="getitem(this.id)" onclick="card_type_click()"/> <img class="pay_logo" src="css/diners.jpg"> <td>
                            </tr>
                            <tr>
                                <td class="payment_info"><input id="pa_mastercard" name="pcard" type="radio" value="Mastercard" onmouseover="getitem(this.id)" onclick="card_type_click()"/> <img class="pay_logo" src="css/mastercard.jpg"> <td>
                                <td class="payment_info"><input id="pa_amex" name="pcard" type="radio" value="Amex" onmouseover="getitem(this.id)" onclick="card_type_click()"/> <img class="pay_logo" src="css/Amex.jpg"> <td>
                            </tr>
                            <tr>
                                <td class="payment_info" colspan="1"><b>Credit Card Number</b><td>
                                <td class="payment_info" colspan="3"><input id="pa_card_no" size="40" type="text" minlength="12" maxlength="12" onkeypress="return isNumber(event)"/><td>
                            </tr>
                            <tr>
                                <td class="payment_info" colspan="1"><b>Name on Card</b><td>
                                <td class="payment_info" colspan="3"><input id="pa_name_oncard" size="40" minlength="2" maxlength="40" type="text"/><td>
                            </tr>
                            <tr>
                                <td class="payment_info"><b>Expiry Month</b><td>
                                <td class="payment_info"><input id="pa_ex_mon" type="number" min="1" max="12"/><td>
                            </tr>
                            <tr>
                                <td class="payment_info"><b>Expiry Year</b><td>
                                <td class="payment_info"><input id="pa_ex_year" type="number" min="2017"/><td>
                            </tr>
                            <tr>
                                <td class="payment_info" colspan="1"><b>Security Code</b><td>
                                <td class="payment_info" colspan="3"><input id="pa_se_code" size="40" type="text" maxlength="3" onkeypress="return isNumber(event)"/><td>
                            </tr>
                        </table>
                        <br/>
                        <div class="order_re_btn">
                            <button type="button" id="go_confirm" class="btn btn-sm btn-xs-block btn-primary" onclick="card_detail_check()" disabled>Review Bookings and Details</button>
                        </div>
                    </fieldset>
                    </div>

            </form>


        </div>
</div>
    </div>
</body>
</html>
