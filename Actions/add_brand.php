<?php
include ('../Controllers/product_controller.php');

/**
 * Get the data from brand 
 */
if (isset($_POST['submit'])){
    $my_brand = $_POST['brand'];

    $check = add_brand_ctr($my_brand);
    
    if ($check)
    {
       echo"Result Inserted";
       header('location:../Admin/viewbrand.php');
        }
    
    else{
            echo"Failed Insertion";
        }
        
}
        

        
    
    

    
?>
