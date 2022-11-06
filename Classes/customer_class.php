<?php

/**
 * This class hanldes all the database functions 
 */
require("../Settings/db_class.php");

class customer_class  extends db_connection{

    //this function performs the insertion function
    function customer_register_cls($customer_name,$customer_email,$customer_pass,$customer_country, $customer_city, $customer_contact, $user_role){

		$mysql = "INSERT INTO `customer`(`customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `user_role`) VALUES ('$customer_name','$customer_email','$customer_pass','$customer_country','$customer_city','$customer_contact','2')";
		
		return $this->db_query($mysql);
		// return $mysql;
		
		
	}

	

	function select_customer_cls($c_email,$c_pass){
		
		$mysql ="SELECT * FROM `customer` WHERE `customer_email` = '$c_email'AND `customer_pass` ='$c_pass'";
		
		return $this->db_query($mysql);
	}
	
	
}
?>