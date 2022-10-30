<?php

    /**
     * This class hanldes all the database functions 
     */
    require("../Settings/db_class.php");

    class product_class  extends db_connection
    {

        //this function performs the insertion function
        function add_brand_cls($my_brand)
        {
            $mysql = "INSERT INTO `brands`(`brand_name`) VALUES ('$my_brand')";
            return $this->db_query($mysql);
        }	
        //Select All brands
        function select_all_brand_cls(){
            $mysql= "SELECT * FROM `brands`";
            return $this->db_fetch_all($mysql);
        }	
        //Select One brand
        function select_a_brand_cls($bid){
            $mysql="SELECT `brand_name`,`brand_id` FROM `brands` WHERE `brand_id`='$bid'";
            return $this->db_fetch_one($mysql);


        }
        //Update Brand 
        function update_a_brand_cls($bid,$my_brand){
            $mysql= "UPDATE `brands` SET `brand_name`='$my_brand'WHERE `brand_id`=$bid";
            return $this->db_query($mysql);
        }

        //Delete Brand
       // function delete_brand_cls($bid){
            //$mysql= "DELETE FROM  `brands` WHERE `brand_id`=$bid";
           // return $this->db_query($mysql)
        //}

      //Add Category 
    }
          
    
?>

