<?php
session_start();
mysql_connect("localhost","root",""); 
mysql_select_db("siteweb");

?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<style>
	
	
#content{
    width:1024px; 
    margin: auto;
}
#header{
    width: auto;
    height: 85px;
    background-color: white;
    border-radius: 15px;
    margin-top: 20px;
}
.nav li{
    float: left;
    margin: 35px 10px;
}
.nav a{
    text-decoration: none;
    padding: 10px 65px;
    color: #111;
}
.nav li:hover a{
    color: #0f0;
}
.textinput{
    background-color: #111;
    color: #0f0;
    border: 1px yellow;
    width: 140px;
    margin-left: auto; 
}
table.profile {
    margin-left: 50px;
}
#tbody{
    width: auto;
    height: auto;
    min-height: 400px;
    margin-top: 10px;
    padding: 10px 8px 5px;
    background-color: white;
}
.tb td{
    padding-left: 65px;
}
#footer{
    width: auto;
    height: 50px;
    background-color: rgba(197, 158, 102, 0.66);;
    border-radius: 15px;
    margin-top: 20px;
}
.footer_nav li{
    float: right;
    margin: 15px 10px;
}
.footer_nav a{
    text-decoration: none;
    padding: 10px 20px;
    color: white;
    border-left: 1px blue;
}
	</style>
    <title>Ajouter des Produits</title>
 
</head>

<body>
    
<body background="img/back.jpg" background-repeat="no-repeat">
<br /><br />
    <div id="content">
    
        

             <?php include "include/admin_head.php" ?> 
        <div id="tbody">
                <form action="ajoute_produit.php" method="post" enctype="multipart/form-data">

                        <table width="700" align="center" border="1" cellpadding="5" cellspacing="0" >

                            <tr>
                                        <td colspan="2" align="center"><h1>Insert New Product</h1></td>
                                    </tr>
                            <tr>
                                        <td>Product Title</td>
                                        <td><input type="text" name="product_title" size="50" /></td>
                                    </tr>
                            <tr>
                                        <td>Product Category</td>
                                        <td>
                                        <select name="product_cat" >
                                            <option>Select a Category</option>
                                                <?php

                                                        mysql_connect("localhost","root",""); 
                                                        mysql_select_db("siteweb");

                                                        $get_cats=mysql_query("select * from category");

                                                            while($row_cats=mysql_fetch_object($get_cats)){

                                                                $cat_id = $row_cats->id_category;
                                                                $cat_title = $row_cats->nom_category;
                                                                echo "<option value='$cat_id'>$cat_title</option>";
                                                            }
                                                ?>

                                        </select>	
                                        </td>
                                    </tr>
                            <tr>
                                        <td>Product Image1</td>
                                        <td>
                                            <input type="file" name="fileToUpload" id="fileToUpload">

                                        </td>
                                    </tr>
                            <tr>
                                    <td>Product Price</td>
                                    <td><input type="number" name="product_price" min="0"/></td>
                            </tr>
                            <tr>
                                    <td>Product Quantite</td>
                                    <td><input type="number" name="product_qte" min="1" /></td>
                            </tr>
                            <tr>
                                        <td>Product description</td>
                                        <td><textarea name="product_desc" cols="35" rows="10"="1"></textarea></td>
                                    </tr>
                            <tr>
                                        <td colspan="2" align="center"><input type="submit" name="insert_now" value="Insert Product" /></td>
                                    </tr>

                        </table>


</form>
        </div>
             <?php include "include/admin_footer.php" ?> 
    
        
        
    </div>
</body>
</html>

<?php

if(isset($_POST['insert_now'])){
    
   
        //text 
        $product_title = $_POST['product_title'];	
        $product_cats = $_POST['product_cat'];;	
        $product_price = $_POST['product_price'];	
        $product_desc = $_POST['product_desc'];
        $product_qte = $POST['product_qte'];
                    
        $product_image = $_FILES['fileToUpload']['name'];
   
        $insert_product = "insert into produit  values (null,'$product_cats','$product_title','$product_image','$product_desc','$product_price','$product_qte')";	

        $run_product = mysql_query($insert_product);

     
 }

if(isset($_POST['insert_now'])){
    
    $target_dir = "img/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);


    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<script>alert('The file has been uploaded.')</script>";
    } else {
        echo "<script>alert('Sorry, there was an error uploading your file')</script>";
    }

}

?>

