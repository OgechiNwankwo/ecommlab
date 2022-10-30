<?php
    include("../settings/core.php");
    include("../controllers/product_controller.php");
?>



<DOCTYPE html>
    <head>
        <title>Category</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">       
  
        <!-- Bootstrap CSS for styling and layout-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        

    </head>
    <body>
        <div class = "container">
            <h1 style="text-align: center;">Available Category</h1>
            <a  class= 'btn btn-primary' href="../Admin/category.php" role="button" style = "text-align: left;">Go back to add category</a>
            
            <br>
            <br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="font-size:30px;">#</th>
                        <th style="font-size:30px;">Catgeory</th>
                        <th style="font-size:30px;">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        // fetching all the categories.
                        $cat_items = select_all_cat_ctr();
                        foreach ($cat_items as $my_cat) {
                    ?>
                        <tr>
                            <td a><?php echo $my_cat['cat_id']?></td>
                            <td a><?php echo $my_cat['cat_name']?></td>
                            <td>
                                <form action="../Actions/update_category.php" method="GET">
                                    <input type="hidden" name="cat_id" value='<?php echo $my_cat['cat_id']?>'>
                                    <input type="hidden" name="cat_name" value='<?php echo $my_cat['cat_name']?>'>
                                    <button class= "btn btn-success btn-sm" type="submit" name="update_category">Update</button>
                                </form>
                            </td>
                            <td>
                                <form action="../Actions/delete_category.php" method="POST">
                                    <input type="hidden" name="cat_id" value='<?php echo $my_cat['cat_id']?>'>
                                    <input type="hidden" name="cat_name" value='<?php echo $my_cat['cat_name']?>'>
                                    <button class= 'btn btn-danger btn-sm' type="submit" name="delete_category">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <?php }?>
                </tbody> 
            </table>
        </div>
   </body>
</html>