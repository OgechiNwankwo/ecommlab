<?php
//connect to the user account class
include("../Classes/customer_class.php");

//sanitize data




//--INSERT--//
function customer_register_ctr($customer_name, $customer_email, $customer_pass, $customer_country, 
$customer_city,  $customer_contact, $user_role)
{
    $newuser_added= new customer_class();

    return $newuser_added->customer_register_cls($customer_name, $customer_email, $customer_pass, $customer_country, 
    $customer_city,  $customer_contact,$user_role);
}

function select_customer_ctr($c_email,$c_pass){

    $add= new customer_class();
    
    return $add->select_customer_cls($c_email,$c_pass);
}


?>