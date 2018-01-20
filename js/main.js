var item00	= 0;
var tt_seat_n = 0; //tracing how many seats haven been selected for single flight
var sta_fli = 0; //control "make booking for selected" button
var sta_c_sel = 0; //control "make booking for selected" button
var p_detail_c_sel = 0; //control "make booking for selected" button
var p_detail_checked = 0; //control "make booking for selected" button
var id_array_1 = ["p_g_name", "p_f_name", "p_country", "p_add_1", "p_suburb", "p_state", "p_postcode", "p_email"]; //"p_add_2", "p_m_phone", "p_b_phone", "p_w_phone"
var name_array = ["d_g_name", "d_f_name", "d_country", "d_add_1", "d_add_2", "d_suburb", "d_state", "d_postcode", "d_email", "d_m_phone", "d_b_phone", "d_w_phone"];
var item_array_1 = new Array();


function getitem(id)
{
    // close old layer
    //if(item00) item00.style.visibility = 'hidden';

    // get new layer and show it
    item00 = document.getElementById(id);

    //item00.style.visibility = 'visible';

}

function search_show_sel() {
    var x = document.getElementById("mySelect").selectedIndex;
    //alert(document.getElementsByTagName("option")[x].value);
}


function request_sumbit_check(){
    var c_s_all_checked = 0;
    var c_c1_checked =0;
    var c_c2_checked =0;
    var c_c3_checked =0;
    var c_c4_checked =0;
    var c_c5_checked =0;

    var _c1 = document.getElementById("co_f_name");
    var _c2 = document.getElementById("co_l_name");
    var _c3 = document.getElementById("co_subject");
    var _c4 = document.getElementById("co_email");
    var _c5 = document.getElementById("co_ta");

    if(_c1.value.length > 1)
    {
        c_c1_checked = 1;
    }
    if(_c2.value.length > 1)
    {
        c_c2_checked = 1;
    }
    if(_c3.value.length > 1)
    {
        c_c3_checked = 1;
    }
    if(_c4.value.length > 1)
    {
        //c_c4_checked = 1;
        var x_email0 = _c4.value;
        var atpos0 = x_email0.indexOf("@");
        var dotpos0 = x_email0.lastIndexOf(".");
        if(atpos0 < 1 || dotpos0 < atpos0 + 2 || dotpos0 + 2 >= x_email0.length)
        {
            c_c4_checked = 0;
        }else
        {
            c_c4_checked = 1;
        }
    }
    if(_c5.value.length > 10)
    {
        c_c5_checked = 1;
    }


    if(c_c1_checked == 1 && c_c2_checked == 1 && c_c3_checked == 1 && c_c4_checked == 1 && c_c5_checked == 1){
        c_s_all_checked = 1;
    }


    if(c_s_all_checked == 0)
    {
        document.getElementById("small_check_3").innerHTML = "Please check your submition!";
    }else if(c_s_all_checked == 1)
    {
        document.getElementById("small_check_3").innerHTML = " ";
        document.getElementById("form_contact_us").submit();
    }

}




function card_detail_check(){
    var c_all_checked = 0;
    var c_no_checked =0;
    var c_name_checked =0;
    var c_month_checked =0;
    var c_year_checked =0;
    var c_sc_checked =0;
    var _c1 = document.getElementById("pa_card_no");
    var _c2 = document.getElementById("pa_name_oncard");
    var _c3 = document.getElementById("pa_ex_mon");
    var _c4 = document.getElementById("pa_ex_year");
    var _c5 = document.getElementById("pa_se_code");

    if(_c1.value.length == 12)
    {
        c_no_checked = 1;
    }
    if(_c2.value.length > 0)
    {
        c_name_checked = 1;
    }
    if(_c3.value >= 1 && _c3.value <= 12)
    {
        c_month_checked = 1;
    }
    if(_c4.value >= 2015 && _c4.value <= 2020)
    {
        c_year_checked = 1;
        if( _c4.value == 2015 )
        {
            if(_c3.value < 6){
                c_year_checked = 0;
            }
        }else
        {
            c_year_checked = 1;
        }

    }
    if(_c5.value.length >= 3)
    {
        c_sc_checked = 1;
    }

    if(c_no_checked == 1 && c_name_checked == 1 && c_month_checked == 1 && c_year_checked == 1 && c_sc_checked == 1){
        c_all_checked = 1;
    }


    if(c_all_checked == 0)
    {
        //document.getElementById("small_check_2").innerHTML = "Please check your submition! _ " + c_no_checked + " " + c_name_checked + " " + c_month_checked + " " + c_year_checked + " " + c_sc_checked + " " +"  aa";

        document.getElementById("small_check_2").innerHTML = "Please check your submition!";
    }else if(c_all_checked == 1)
    {
        document.getElementById("small_check_2").innerHTML = " ";
        document.getElementById("card_detail_form").submit();
    }

}

function p_detail_check(){
    var cc_value = document.getElementById("p_country").value;
    var cc_value_upcase = cc_value.toUpperCase();
    var email_checked = 0;
    var state_checked = 0;
    var postcode_checked = 0;
    var add_line_checked = 0;
    var g_name_checked = 0;
    var f_name_checked = 0;
    var country_checked = 0;
    var suburb_checked = 0;

    //value.length < 3
    //small_check_1
    //if(cc_value_upcase == || cc_value == ) //Australia

    item_array_1 = new Array();
    for(i1 = 0; i1 < id_array_1.length; i1++)
    {
        item_array_1.push(document.getElementById(id_array_1[i1]));
        if(item_array_1[i1].value.length > 0)
        {
            p_detail_c_sel = p_detail_c_sel + 1;
        }
    }

    //id_array_1 = ["p_g_name", "p_f_name", "p_country", "p_add_1", "p_suburb", "p_state", "p_postcode", "p_email"]; //"p_add_2", "p_m_phone", "p_b_phone", "p_w_phone"

    var x_email = item_array_1[7].value;
    var atpos = x_email.indexOf("@");
    var dotpos = x_email.lastIndexOf(".");
    if(atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x_email.length)
    {
        email_checked = 0;
    }else
    {
        email_checked = 1;
    }

    if(item_array_1[0].value.length > 0)
    {
        g_name_checked = 1;
    }
    if(item_array_1[1].value.length > 0)
    {
        f_name_checked = 1;
    }
    if(item_array_1[2].value.length > 0)
    {
        country_checked = 1;
    }
    if(item_array_1[3].value.length > 0)
    {
        add_line_checked = 1;
    }
    if(item_array_1[4].value.length > 0)
    {
        suburb_checked = 1;
    }
    if(item_array_1[5].value.length > 0)
    {
        state_checked = 1;
    }
    if(item_array_1[6].value.length > 0)
    {
        postcode_checked = 1;
    }


    if(cc_value_upcase == "AUSTRALIA")
    {
        if(g_name_checked == 0 || f_name_checked == 0 || suburb_checked == 0 || add_line_checked == 0 || state_checked == 0 || postcode_checked == 0 || email_checked == 0)
        {
            p_detail_checked = 0;
        }else
        {
            p_detail_checked = 1;
        }
    }else if(cc_value_upcase != "AUSTRALIA" && country_checked == 1)
    {
        if(g_name_checked == 0 || f_name_checked == 0 || suburb_checked == 0 || add_line_checked == 0 || email_checked == 0)
        {
            p_detail_checked = 0;
        }else
        {
            p_detail_checked = 1;
        }
    }


    if(p_detail_checked == 0)
    {
        document.getElementById("small_check_1").innerHTML = "Please check your submition!";
    }else if(p_detail_checked == 1)
    {
        document.getElementById("small_check_1").innerHTML = " ";
        document.getElementById("p_detail_form").submit();
    }
}


function c_sel_button() {
    //document.getElementById("myCheck").disabled = true;
    var idid = item00.id;

    if (item00.checked == false)
    {
        sta_c_sel =  sta_c_sel + 1;
    }else if(item00.checked == true)
    {
        sta_c_sel =  sta_c_sel - 1;
    }

    if(sta_c_sel == 0)
    {
        document.getElementById("clear_Selected_flights").disabled = true;
    }else
    {
        document.getElementById("clear_Selected_flights").disabled = false;
    }
}

function card_type_click() {
    //document.getElementById("myCheck").disabled = true;
    var idid = item00.id;
    var card_type_press = 0;

    if (item00.checked == true)
    {
        card_type_press =  card_type_press + 1;
    }else if(item00.checked == false)
    {
        card_type_press =  card_type_press - 1;
    }

    if(card_type_press == 0)
    {
        document.getElementById("go_confirm").disabled = true;
    }else
    {
        document.getElementById("go_confirm").disabled = false;
    }
}

function search_show_sel() {
    var x = document.getElementById("mySelect").selectedIndex;
    //alert(document.getElementsByTagName("option")[x].value);
}

function fli_button() {
    //document.getElementById("myCheck").disabled = true;
    var idid = item00.id;
    sta_fli =  1;

    if(sta_fli == 0)
    {
        document.getElementById("to_seats").disabled = true;
    }else
    {
        document.getElementById("to_seats").disabled = false;
    }
}

function seat_check() {
    //document.getElementById("myCheck").disabled = true;
    var idid = item00.id;
    var idstring_1 = "";
    var idstring_2 = "";
    var idstring_3 = "";
    var idstring_4 = "";
    var idstring_n = 0;
    //var tt_seat_n = 0;

    var xx = document.getElementById("selected_total");

    for (i1 = 0; i1 < 5; i1++) {
        idstring_n = i1;
        idstring_1 = "row_" + (idstring_n + 1) + "_0";  //"row_".$x2."_0";
        idstring_2 = "row_" + (idstring_n + 1) + "_1";  //"row_".$x2."_1";
        idstring_3 = "row_" + (idstring_n + 1) + "_2";  //"row_".$x2."_2";
        idstring_4 = "row_" + (idstring_n + 1) + "_3";  //"row_".$x2."_3";
        if (idid == idstring_1 &&  item00.checked == true)
        {
            document.getElementById(idstring_2).disabled = false;
            document.getElementById(idstring_3).disabled = false;
            document.getElementById(idstring_4).disabled = false;
            tt_seat_n = tt_seat_n + 1;
        }else if (idid == idstring_1 &&  item00.checked == false)
        {
            document.getElementById(idstring_2).disabled = true;
            document.getElementById(idstring_3).disabled = true;
            document.getElementById(idstring_4).disabled = true;
            document.getElementById(idstring_2).checked = false;
            document.getElementById(idstring_3).checked = false;
            document.getElementById(idstring_4).checked = false;
            tt_seat_n = tt_seat_n - 1;
        }

        //text += cars[i] + "<br>";
    }
    if(tt_seat_n > 0)
    {
        document.getElementById("add_seats").disabled = false;
    }else
    {
        document.getElementById("add_seats").disabled = true;
    }
    xx.innerHTML = tt_seat_n;
}

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

/*
 function myFunction() {
 //document.getElementById("myCheck").disabled = true;
 if(document.getElementById("myCheck").disabled == false)
 {
 document.getElementById("myCheck").disabled = true;
 }else
 {
 document.getElementById("myCheck").disabled = false;
 }
 }

 function search_show_sel() {
 //var i_x = document.getElementById("set_from").selectedIndex;
 //var i_y = document.getElementById("set_to").selectedIndex;

 //st_x = '<?php echo $st_from; ?>';
 //st_y = '<?php echo $st_to; ?>';

 //var simple = '<?php echo $simple; ?>';
 //alert(document.getElementsByTagName("option")[x].value);
 }
 */