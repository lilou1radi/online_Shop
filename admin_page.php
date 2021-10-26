<?php
    
    session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page d'Admin</title>
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
</head>
<body>


<body background="img/back.jpg" background-repeat="no-repeat">
<br /><br />
	<div id="content">
        
     <?php  include"include/admin_head.php" ?>
        
        <div id="tbody">
            
           <?php      
                if(isset($_GET['product'])){
                   
                        mysql_connect("localhost","root",""); 
                        mysql_select_db("siteweb");

                        $select_image=mysql_query("SELECT * from produit ");

                        echo'<table border="1" cellspacing=0  width="1000px" style="min-height: 345px;">
                                <tr>  
                                    <th>Produit</th>
                                    <th>Nom</th>
                                    <th>Description</th>
                                    <th>Prix </th>
                                    <th>Stock</th>
                                    <th>Action</th>
                                </tr>
                            ';        

                        while ($pro = mysql_fetch_array($select_image))
                        {   
                           
                            $pro_prix = $pro['prix_produit'];
                            $pro_id = $pro['id_produit'];
                            $pro_nom = $pro['nom_produit'];
                            $image_src = $pro['image_produit'];
                            $pro_des = $pro['description_produit'];
                            $pro_stock = $pro['Qte_stock'];
                            
                            echo "
                                    <tr>  
                                        <td><img src='img/$image_src' width='100px' height='75px'/></td>
                                        <td>$pro_nom</td>
                                        <td>$pro_des</td>
                                        <td>$pro_prix$</td>
                                        <td>$pro_stock</td>
                                        <td><a href='admin_page.php?sup_produit=$pro_id'>supprimer</a></td>
                                    </tr>
                                 ";
                        }

                 
                    echo"</table>";
         
                     mysql_close();

                     }
        
                if(isset($_GET['sup_produit'])){
                    
                    $produit_id = $_GET['sup_produit'];
                    
                    
                    mysql_connect("localhost","root",""); 
                    mysql_select_db("siteweb");
                    
                    $del_pr=mysql_query("DELETE FROM produit WHERE id_produit ='$produit_id' ");
                        
                    
                    
                    if($del_pr){
                        echo "<script>alert('Product delete successfully')</script>";
                        header("location:admin_page.php?product");
                    }else{echo "<script>alert('Erreur in delete Product')</script>";}
                   
                     mysql_close();

                }
        
                if(isset($_GET['client'])){
                   
                        mysql_connect("localhost","root",""); 
                        mysql_select_db("siteweb");

                        $select_image=mysql_query("SELECT * from client ");

                        echo'<table border="1" cellspacing=0 class="tb"  width="1000px" style="min-height: 345px;">
                                <tr>  
                                    <th style="height: 45px;">Nom</th>
                                    <th>Prenom</th>
                                    <th>email</th>
                                    <th>password</th>
                                    <th>Action</th>
                                </tr>
                            ';        

                        while ($cl = mysql_fetch_array($select_image))
                        {   
                            $client_id = $cl['id_client'];
                            $client_nom = $cl['nom'];
                            $client_prenom = $cl['prenom'];
                            $client_email = $cl['email'];
                            $client_passw = $cl['password'];

                            if(! ($client_nom == 'admin') ){
                                
                                echo "
                                    <tr>  
                                        <td>$client_nom</td>
                                        <td>$client_prenom</td>
                                        <td>$client_email</td>
                                        <td>$client_passw</td>
                                        <td><a href='admin_page.php?sup_client=$client_id'>supprimer</a></td>
                                    </tr>
                                 ";
                            }
                        }

                 
                        echo"</table>";
         
                     mysql_close();

                     }
            
                if(isset($_GET['sup_client'])){
                    
                    $client_id = $_GET['sup_client'];
                    
                    
                    mysql_connect("localhost","root",""); 
                    mysql_select_db("siteweb");
                    
                    $del_cl=mysql_query("DELETE FROM client WHERE id_client ='$client_id' ");
                        
                    
                    
                    if($del_cl){
                        echo "<script>alert('Client delete successfully')</script>";
                        header("location:admin_page.php?client");
                    }else{echo "<script>alert('Erreur in delete Client')</script>";}
                   
                     mysql_close();

                }
            
            ?>
        <div style="clear:both;"></div>    
        </div>
           
     <?php  include"include/admin_footer.php" ?>
    
    </div>
  
</body>

</html>
