<?php
	// include ("../settings/core.php");	
	require( "../Controllers/product_controller.php");
  
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	
    <link rel="stylesheet" href="../css/admin.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->

		<!-- Compiled and minified JavaScript -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		 -->
</head>
<body>
<nav>
			<div class="nav-wrapper">
				<a href="#" class="brand-logo">Logo</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					
				</ul>
			</div>
		</nav>

		<div>
		
	
	<h1>Add products </h1>
	<div >
        <form action="../Actions/add_product.php" method="post">

            <label for=""> Select Category</label>
            <select name= 'my_cat' >
            <option>category</option>


            <?php
            $my_cat = select_all_cat_ctr();
            if($my_cat){
                foreach($my_cat as $item){
                    $cat_id= $item['cat_id'];
                    $cat_name=$item['cat_name'];
                    echo "<option value= '$cat_id'> $cat_name </option>";
                }
            }else{
                echo "<option value= 'no found'> No category found</option>";
            }
                 

            ?>
            </select>
            <br>
            <label for=""> Select Brand</label>
            <select name="my_brand" id="">
            <option>brand</option>

            <?php
           
            $my_brand= select_all_brand_ctr();
            if($my_brand){
                foreach($my_brand as $item){
                    $brand_id= $item['brand_id'];
                    $brand_name=$item['brand_name'];
                    echo "<option value= '$brand_id'> $brand_name </option>";
                }
            }else{
                echo "<option value= 'no found'> No brand found</option>";
            }
                 

            ?>
                
            </select>
            <br>
            <label for=""> Product title</label>
            <input type="text" name="prod_title" id="">
            <br>
            <label for=""> Product Price</label>
            <input type="number" name="prod_prix" id="">
            <br>
            <label for=""> Product description</label>
            <input type="text" name="prod_desc" id="">
            <br>
            <label for=""> Product image</label>
            <input type="file" name="prod_image" id="">
            <br>
            <label for=""> Product keywords</label>
            <input type="text" name="prod_key" id="">


            <button type='submit' name='submitp'>
                Submit
            </button>

        </form>
        
    </div>



	
</body>
</html>