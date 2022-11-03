<?php
    include("../settings/core.php");
    include("../controllers/product_controller.php");
?>



<DOCTYPE html>
    <head>
        <title>Brands</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">       
  
        <!-- Bootstrap CSS for styling and layout-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        

    </head>
    <body>
        <div class = "container">
            <h1 style="text-align: center;">Brands Available</h1>
            <a  class= 'btn btn-primary' href="../Admin/brand.php" role="button" style = "text-align: left;">Go back to add brand</a>
            
            <br>
            <br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="font-size:30px;">#</th>
                        <th style="font-size:30px;">Brands</th>
                        <th style="font-size:30px;">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    function show(){
                        // fetching all the brands.
                        $brand_items = select_all_brand_ctr();
                        foreach ($brand_items as $brand) {
                    ?>
                        <tr>
                            <td a><?php echo $brand['brand_id']?></td>
                            <td a><?php echo $brand['brand_name']?></td>
                            <td>
                                <form action="../Actions/update_brand.php" method="GET">
                                    <input type="hidden" name="brand_id" value='<?php echo $brand['brand_id']?>'>
                                    <input type="hidden" name="brand_name" value='<?php echo $brand['brand_name']?>'>
                                    <button class= "btn btn-success btn-sm" type="submit" name="update_brand">Update</button>
                                </form>
                            </td>
                            <td>
                                <form action="../actions/delete_brand.php" method="POST">
                                    <input type="hidden" name="brand_id" value='<?php echo $brand['brand_id']?>'>
                                    <input type="hidden" name="brand_name" value='<?php echo $brand['brand_name']?>'>
                                    <button class= 'btn btn-danger btn-sm' type="submit" name="delete_brand">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <?php }?>

                        <?php }
                        show();?>
                </tbody> 
            </table>
        </div>
   </body>
</html>



