<?php
include ("../Controllers/product_controller.php");


if(isset($_POST['submit'])){

   
    $product_brand = $_POST['my_brand'];
    $product_cat = $_POST['my_cat'];
    $product_price=$_POST['prod_prix'];
    $product_title = $_POST['prod_title'];
    $product_desc = $_POST['prod_desc'];
    $product_Key = $_POST['prod_key'];
    $product_image = NULL;
    // $_FILES['prod_image']['name'];

    // 
    // $photo= "../images".basename($_FILES['prod_image']['name']);


    $insert=insert_prod_ctr($product_brand,$product_cat,$product_title,$product_price,$product_desc,$product_image,$product_Key);

    // echo "$product_brand,$product_cat,$product_title,$product_price,$product_desc,$product_image,$product_Key";
  if ($insert){

    header("location:../Admin/product.php");

    // if(move_uploaded_file($_FILES['prod_image']['tmp_name'], $photo)){
    //     echo "Insert was successful";
    // }else{
    //     echo "Failure";
    // }

    } else{
        header("location:../Admin/product.php");
     
  }
}
?>