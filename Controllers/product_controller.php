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
function add_cat_ctr($my_cat)
{
    $newcat_added= new product_class();

    return $newcat_added->add_cat_cls($my_cat);
}
//Select All Category
function select_all_cat_ctr(){
    $all_category= new product_class();
    return $all_category->select_all_cat_cls();

}
//Select One Category
function select_a_cat_ctr($cat_id){
    $category_one= new product_class();
    return $category_one->select_a_cat_cls($cat_id);

}

//Update Category
function update_cat_ctr($cat_id,$my_cat){
    $upda= new product_class();
    return $upda->update_a_cat_cls($cat_id,$my_cat);
}


//Add Product 
function insert_prod_ctr($product_brand,$product_cat,$product_title,$product_price,$product_desc,$product_image,$product_Key){
    $insertprod = new product_class();
  
    return $insertprod->insert_prod_cls($product_brand,$product_cat,$product_title,$product_price,$product_desc,$product_image,$product_Key);
  }
  
  function select_one_prod_ctr($prod_id){
    $select_contr = new product_class(); 
    return  $select_contr-> select_one_prod_cls($prod_id);
  }
  function select_all_prod_ctr(){
    $selectall = new product_class();
    return $selectall-> select_prod_cls();
  }

  
  function update_product($prod_id,$brand,$cat,$title,$pNum,$pDesc,$pKey,$folder_path){
    $select_contr = new product_class(); 
   
    return  $select_contr->update_product_cls($prod_id,$brand,$cat,$title,$pNum,$pDesc,$pKey,$folder_path);
  }
?>