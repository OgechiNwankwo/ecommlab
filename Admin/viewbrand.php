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
							function displayAllCtr()
							{
								$result = select_all_brand_ctr();
								for ($i = 0; $i < count($result); $i++) {
									echo "<tr>";
									echo "<td>" . $result[$i]['brand_name'] . "</td>";
									echo "<th><form action='edit_brand.php' method='POST'>
			<input type='submit' value='edit'  name='edit'>
			<input type='hidden' name='brand_id' value='" . $result[$i]['brand_id'] . "'></form></th>";

									echo "<th><form action='delete_brand.php' method='POST'>
			<input type='submit' value='delete'  name='delete'>
			<input type='hidden' name='brand_id' value='" . $result[$i]['brand_id'] . "'></form></th>";
									echo "</tr>";
								}
							}
							displayAllCtr();
                            
							?>
						</tbody>
            </table>
        </div>
   </body>
</html>



