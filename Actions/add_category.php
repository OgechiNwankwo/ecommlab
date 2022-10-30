<?php
include ('../Controllers/product_controller.php');

/**
 * Get the data from brand 
 */
if (isset($_POST['submit'])){
    $my_cat = $_POST['category'];
    echo $my_cat;

    $check = add_cat_ctr($my_cat);

    if ($check)
    {
       echo"Result Inserted";
       header('location:../Admin/viewcategory.php');
        }
    
    else{
            echo"Failed Insertion";
        }
                
        
}
          
    
    

    
?>