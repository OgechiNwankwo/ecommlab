<?php
                    include("../controllers/product_controller.php");
                        // fetching all the brands.
                        $brand_items = select_all_brand_ctr();
                        $i=0;
                        while ($i<count($brand_items)) {

echo $brand_items[$i]['brand-name'];
$i++;
                        }
                        
                    ?>