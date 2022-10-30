<?php
include("../Controllers/customer_controller.php");

if(isset($_POST['register_auser'])){

    $customer_name = $_POST['username'];
    $customer_email = $_POST['email'];
    $customer_pass = password_hash($_POST['password'],Default_password);
    $customer_country = $_POST['country'];
    $customer_city = $_POST['city'];
    $customer_contact = $_POST['contact'];
    $user_role=2;

    $check=customer_register_ctr($customer_name, $customer_email, $customer_pass, $customer_country, $customer_city,
     $customer_contact,$user_role);

    // return $check;

    if($check){
        echo "Record inserted";
        header ('Location:login.php');
        
    }else{
        echo"Insertion Failed";
        
    }


    }


    
   ?> 