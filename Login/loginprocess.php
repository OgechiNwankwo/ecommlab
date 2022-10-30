<?php
include ('../Controllers/customer_controller.php');
// include ('../Settings/core.php');


/**
 * Get the data from the login form and pass it ot the Login controller function
 */
if (isset($_POST['Login'])){
    $c_email = $_POST['Email'];
    $c_pass = $_POST['Password'];

    $check = select_customer_ctr($c_email,$c_pass);
    
    if ($check)
    {
        //Start session and set session id
        session_start();
        $_SESSION['cid'] = $check['customer_id'];
        $_SESSION['role'] = $check['user_role'];

        if ($_SESSION['role']==1){
            header ('Location:../Admin/admin_index.php');
        }
        else{
            header('location:../index.php');
        }
    }
    else{
            echo"Login Unsuccessful";
        }
        
}
        

        
    
    

    
?>
