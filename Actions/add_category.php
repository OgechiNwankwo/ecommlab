<?php
include ('../Controllers/product_controller.php');

/**
 * Get the data from brand 
 */
if (isset($_POST['submit'])){
    $my_cat = $_POST['category'];
    echo $my_cat;

    $check = add_cat($my_cat);
    

       header('location:../Admin/category.php');
        
        
}
        

        
    
    

    
?>