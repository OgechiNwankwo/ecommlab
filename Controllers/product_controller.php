<?php
//connect to the user account class
include("../Classes/product_class.php");

//sanitize data
function cleantext($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
}



//--INSERT--//
function add_brand_ctr($my_brand)
{
    $newbrand_added= new product_class();

    return $newbrand_added->add_brand_cls($my_brand);
}
//Select All brand 
function select_all_brand_ctr(){
    $all_brand= new product_class();
    return $all_brand->select_all_brand_cls();

}
//Select One brand 
function select_a_brand_ctr($bid){
    $brand_one= new product_class();
    return $brand_one->select_a_brand_cls($bid);

}

//Update Brand
function update_brand_ctr($bid,$my_brand){
    $upda= new product_class();
    return $upda->update_a_brand_cls($bid,$my_brand);

}

//Delete Brand 
//function delete_brand_ctr($bid){
    //$del= new product_class();
    //return $del->delete_brand_cls($bid);
//}

//Add Category 

?>