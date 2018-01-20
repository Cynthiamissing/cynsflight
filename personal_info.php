<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="http://fonts.googleapis.com/css?family=Muli|Dosis|Baumans|Montserrat|Indie+Flower|Exo+2|Josefin+Sans" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
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
    <div class="personal_info">
        <div id="main_personal_detail">
            <form id="p_detail_form" method="post" action="payment.php">
                <fieldset>
                    <legend class="per_info_title">Personal Detail</legend>
                    <div id="small_note" class="width_500 text_center a_center">
                        <font size="2" style="color: darkred"><b>State</b> and <b>Postcode</b> are <u>optional</u> for booking made from <b>outside Australia</b></font>
                    </div><br/>
                    <div id="small_check_1" class="width_500 text_center a_center">
                        <font size="2"></font>
                    </div>
                    <br/>
                    <div class="container-fluid">
                            <div class="col-xs-12 col-md-600 p-t-3 m-t-1 p_form_1">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="fName" class="control-label small text-uppercase">First Name<span style="color:red">*</span></label>
                                            <input class="form-control form-control-sm" name="d_g_name" id="p_g_name" type="text"
                                                           data-native-error="Please enter your Given name" required>
                                            <div class="help-block with-errors small"></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="lName" class="control-label small text-uppercase">Last Name<span style="color:red">*</span></label>
                                            <input class="form-control form-control-sm" id="p_f_name" name="d_f_name" type="text"
                                                           data-native-error="Please enter your Family name" required>

                                            <div class="help-block with-errors small"></div>
                                            </div>
                                    </div>
                                </div>
                                    <div class="form-group">
                                        <label for="Country" class="control-label small text-uppercase">Country<span style="color:red">*</span></label>
                                        <input class="form-control form-control-sm" id="p_country" name="d_country" list="list_country" type="text"
                                                   data-native-error="Please enter your country" required>

                                        <div class="help-block with-errors small"></div>
                                        </div>
                                    <div class="form-group">
                                        <label for="Address_Line1" class="control-label small text-uppercase">Address Line 1<span style="color:red">*</span></label>
                                        <input class="form-control form-control-sm" id="p_add_1" name="d_add_1" type="text"
                                                   data-native-error="Please enter your address" required>

                                        <div class="help-block with-errors small"></div>
                                        </div>
                                    <div class="form-group">
                                        <label for="Address_Line2" class="control-label small text-uppercase">Address Line 2</label>
                                        <input class="form-control form-control-sm" id="p_add_2" name="d_add_2" type="text">
                                        </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="Suburb" class="control-label small text-uppercase">Suburb<span style="color:red">*</span></label>
                                            <input class="form-control form-control-sm" id="p_suburb" name="d_suburb" type="text"
                                                   data-native-error="Please enter your suburb" required>
                                            <div class="help-block with-errors small"></div>
                                                </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="State" class="control-label small text-uppercase">State<span style="color:red">*</span></label>
                                            <input class="form-control form-control-sm" id="p_state" name="d_state" type="text"
                                                   data-native-error="Please enter your state" required>
                                            <div class="help-block with-errors small"></div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="form-group">
                                        <label for="Postcode" class="control-label small text-uppercase">Postcode<span style="color:red">*</span></label>
                                        <input class="form-control form-control-sm" id="p_postcode" name="d_postcode" type="text"
                                                   data-native-error="Please enter your postcode" required>
                                        <div class="help-block with-errors small"></div>
                                    </div>
                            </div>
                            <div class="col-xs-12 col-md-600 p-t-3 m-t-1 p_form_2">
                                <div class="row">
                                    <div class="form-group">
                                        <label for="Email" class="control-label small text-uppercase">Email<span style="color:red">*</span></label>

                                        <input class="form-control form-control-sm" id="p_email" name="d_email" type="text"
                                                   data-native-error="Please enter your Email address" required>
                                        <div class="help-block with-errors small"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Mobile_phone" class="control-label small text-uppercase">Mobile Phone<span style="color:red"></span></label>
                                        <input class="form-control form-control-sm" id="p_m_phone" name="d_m_phone" type="text"
                                                   data-native-error="Please enter your mobile phone" required>
                                        <div class="help-block with-errors small"></div>
                                    </div>
                                        <div class="form-group">
                                            <label for="Business_phone" class="control-label small text-uppercase">Business Phone<span style="color:red"></span></label>
                                            <input class="form-control form-control-sm" id="p_b_phone" name="d_b_phone" type="text"
                                                   data-native-error="Please enter your business phone" required>
                                            <div class="help-block with-errors small"></div>
                                        </div>
                                    <div class="form-group">
                                        <label for="Work_phone" class="control-label small text-uppercase">Work Phone<span style="color:red"></span></label>
                                        <input class="form-control form-control-sm" id="p_w_phone" name="d_w_phone" type="text"
                                                   data-native-error="Please enter your work phone" required>
                                        <div class="help-block with-errors small"></div>
                                    </div>
                                </div>
                                <div class="form-group go_pay_btn">
                                <button class="btn btn-sm btn-xs-block btn-primary go_payment_info" type="button" name='p_detail_submit' id="go_payment" value="Payment Details" onclick="p_detail_check()">Payment Details</button>
                                </div>
                            </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
</body>
</html>
