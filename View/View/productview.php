<?php
//  include ("../Settings/db_cred.php");
require ("../Controllers/product_controller.php")
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

</head>
<body>

<div class ="container">
<button class= "btn btn-primary my-5"><a href="../admin/product.php" style="text-decoration: none; color: #fff;">
 Add product </a>

        

 </button>



 <table class="table">
  <thead>
    <tr>
      <th scope="col">Product Category</th>
      <th scope="col">Product Brand</th>
      <th scope="col">Product Title</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Description</th>
      <th scope="col">Product Image</th>
      <th scope="col">Product Keywords</th>
    </tr>
  </thead>
  <tbody>
   
  <?php
                    
                        // fetching all the Products.
                        $brand_items = select_all_prod_ctr();
                        foreach ($brand_items as $brand) {
                    ?>
                        <tr>
                            <td><?php echo $brand['product_cat']?></td>
                            <td><?php echo $brand['product_brand']?></td>
                            <td><?php echo $brand['product_title']?></td>
                            <td><?php echo $brand['product_price']?></td>
                            <td><?php echo $brand['product_desc']?></td>
                            <td><?php echo $brand['product_image']?></td>
                            <td><?php echo $brand['product_keywords']?></td>
                            <td>
                                <form action="../Actions/update_product.php" method="GET">
                                    <input type="hidden" name="product_id" value='<?php echo $brand['brand_id']?>'>
                                    <input type="hidden" name="product_name" value='<?php echo $brand['brand_name']?>'>
                                    <button class= "btn btn-success btn-sm" type="submit" name="update_procuct">Update</button>
                                </form>
                            </td>
                            <td>
                                <form action="../actions/delete_brand.php" method="POST">
                                    <input type="hidden" name="product_id" value='<?php echo $brand['brand_id']?>'>
                                    <input type="hidden" name="product_name" value='<?php echo $brand['brand_name']?>'>
                                    <button class= 'btn btn-danger btn-sm' type="submit" name="delete_product">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <?php }?> 


 
 </tbody>
 </table>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 </body>
</html>