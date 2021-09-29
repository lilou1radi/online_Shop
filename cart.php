<?php 
include("fct.php");
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>Votre Panier</title>
	<style>
	
	
#content{
    width:1024px; 
    margin: auto;
}
#header{
    width: auto;
    height: 85px;
    background-color: #ffffff;
    border-radius: 15px;
    margin-top: 20px;
}
.nav li{
    float: left;
    margin: 35px 10px;
}
.nav a{
    text-decoration: none;
    padding: 10px 20px;
    color: #111;
}
.nav li:hover a{
    color: #0f0;
}
.textinput{
    background-color: #FFDBCA;
    color: #0f0;
    border: 1px white;
    width: 150px;
    margin-left: auto; 
}
#body{
    width: auto;
    min-height: 400px;
    height: auto;
    background-color: rgba(249,243,243,0.18);
    margin-top: 10px;
    padding-left: 40px;
    padding-right: 40px;
    padding-bottom: 15px;
    padding-top: 10px;
    color: #111;
}
nav{
    margin: 0px;
    text-align: center;  
}
nav ul{
    padding: 0 20px;
    border-radius: 10px;  
    display: inline-table;
}
nav ul li{
    float: left;
    color: #111;
    padding: 20px 47px;
    display: block;
}
nav ul ,.cart_table th{
    background: rgba(218, 135, 66, 0.15); 
    background: linear-gradient(top, #efefef 0%, #bbbbbb 100%);  
    background: -moz-linear-gradient(top, #efefef 0%, #bbbbbb 100%);  
    background: -webkit-linear-gradient gradient(top, rgba(249, 243, 243, 0.6) 0%,
rgba(249, 243, 243, 0.6) 100%);;
    box-shadow: 0px 0px 9px rgba(249,243,243,0.6);
}
.cart_table th{
    padding: 7px 8px 9px 8px;
    color: #d60303;
}
.cart_table td{
    padding: 7px 8px 9px 8px;
    height: 100px;
}
.cart_nav{
    margin: 10px 0 10px;
}
.cart_nav a{
    text-decoration: none;
    color: snow;
    float: right;
    padding: 20px 47px;
    background-color: #d60303;
    border-radius: 12px;
}
.a_right{
        margin-left: 544px;
}
.cart_nav span{
    border-radius: 4px;
    padding: 11px 0 15px;
}
#step2, #step3 {
    padding: 40px;
    width: 800px;
    height: 182px;
    background-color: white;
    margin-left: 25px;
}

#footer{
    width: auto;
    height: 50px;
    background-color: rgba(218,135,66,0.37);
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
    color: #111;
    border-left: 1px #111;
}
	
	</style>
</head>
<body>
	<div id="content">
        
     <?php  include"include/header.php" ?>
	 
<body background="img/back.jpg" background-repeat="no-repeat">
<br /><br />
        
        <div id="body">
    <?php
    
       
             
        if(isset($_SESSION['email1'])){
                
            // add product 
            if(isset($_GET['pro_id'])){
                
                $qte = $_POST['qte'];
                $id_produit = $_GET['pro_id'];
                $id_client = $_SESSION['id'];
                
                  
                $con = mysql_connect("localhost","root","");
                
                if (!$con){die('Could not connect: ' . mysql_error());}

                mysql_select_db("siteweb", $con);

                $result = mysql_query("select prix_produit from produit where id_produit='$id_produit'");

                while($row = mysql_fetch_array($result)){
                          
                           $prix_produit = $row['prix_produit'];
                        
                }

           
                $total = $qte * $prix_produit ;
    
                $add_pr = "insert into panier values (null,'$id_produit','$id_client','$qte','$total')";	

                $run_product = mysql_query($add_pr);
                
                mysql_close($con);
                      
       
           }
             
       
            
            //affiche produit de client
            echo'<nav>
                    <ul id="cart_step">
                        <li class="step first">01.Connexion</li>
                        <li class="step second">02.Récapitulatif</li>
                        <li class="step four">04.Livrasion</li>
                        <li class="step last">05.Paiement</li>
                    </ul>
                </nav>';
            
            if(!isset($_GET['step'])){ 
                
                $total = 0;
                $id_client = $_SESSION['id'];
            
                mysql_connect("localhost","root",""); 
                mysql_select_db("siteweb");

                $select_image=mysql_query("SELECT DISTINCT C.id_client, CP.*, P.*   FROM client C inner join panier CP on C.id_client = CP.id_client inner join produit P on CP.id_produit = P.id_produit  where C.id_client = $id_client order by C.id_client asc, CP.id_panier asc; ");
            
                echo'<table border="1" cellspacing=0 class="cart_table">
                        <tr>  
                            <th>Produit</th>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Prix </th>
                            <th>Quantité</th>
                            <th>Prix Total</th>
                            <th>Action</th>
                        </tr>
                        ';        
        
                while ($pro = mysql_fetch_array($select_image))
                {   
                    $id_panier = $pro['id_panier'];
                    $quantite = $pro['quantite'];
                    $pro_prix = $pro['prix_produit'];
                    $pro_id = $pro['id_produit'];
                    $_SESSION['pro_id']= $pro_id;
                    $pro_nom = $pro['nom_produit'];
                    $image_src = $pro['image_produit'];
                    $pro_des = $pro['description_produit'];
                    $prix_total = $pro['prix_total'];
                  
                    echo "
                            <tr>  
                                <td><img src='img/$image_src' width='100px' height='75px'/></td>
                                <td>$pro_nom</td>
                                <td>$pro_des</td>
                                <td>$pro_prix$</td>
                                <td>$quantite</td>
                                <td>$prix_total$</td>
                                <td><a href='cart.php?sup_produit=$id_panier'>supprimer</a></td>
                            </tr>
                         ";
                    $total = $total + $prix_total;
                }
            
            echo'<tr><th colspan="7">Total: '.$total.' $</th></tr>';
            echo"</table><p class='cart_nav'>
                <a href='cart.php?step=2' class='a_right'><span>Commande</span></a>
                <a href='principale.php'><span>Continuer mes achats</span></a>
            </p>";
            echo'<nav><ul id="cart_step"></ul></nav>';
                
            
             mysql_close();
    
           
            }
                
             }
            else{
                echo "<span style='color:red;'><h1> You have to Log in  </h1></span>";
                echo " <meta http-equiv='refresh' content='1; url=inscription.php?pro_id=3'/>";
              
                        
                }
        
                //step 2 
                
            if(isset($_GET['step'])){
                    
                    $step = $_GET['step'];
                    
                    if($step == 2){
                        
                        echo"<div id='step2'>
                            <h3> Option de livraison </h3>
                            <p>Livraison &agrave Casablanca,Marrakech,Sale,Mohamedia </br> Delai de livraison :24H &agrave 48H <br> </p>
                            
                        </div>";
                        echo"<p class='cart_nav'>
                            <a href='cart.php?step=3' class='a_right'><span>Commande</span></a>
                            <a href='principale.php'><span>Continuer mes achats</span></a>
                            </p>";
                        echo'<nav><ul id="cart_step"></ul></nav>';
                        
                    }
                    elseif($step == 3){
                        echo"<div id='step3'>
                            <h3> Payer comportant a la livraison </h3>
                            <p>(Vous payez lors de la livraison de votre commande)</p>
                            <h2> Your Commande is ok !!</h2>
                            
                        </div>";
                        echo"<p class='cart_nav'>
                            <a href='cart.php?step=4' class='a_right'><span>Commande</span></a>
                          
                            </p>";
                        echo'<nav><ul id="cart_step"></ul></nav>';
                    }
                    
                }
           
            //supprimer produit 
        
             if(isset($_GET['sup_produit'])){
                    
                    $produit_id = $_GET['sup_produit'];
                    
                    
                    mysql_connect("localhost","root",""); 
                    mysql_select_db("siteweb");
                    
                    $del_pr=mysql_query("DELETE FROM panier WHERE id_panier ='$id_panier' ");
                        
                    
                    if($del_pr){
                        echo "<script>alert('Product delete successfully')</script>";
                        echo"<meta http-equiv='refresh' content='0.1; url=cart.php '/>" ;
                    }else{echo "<script>alert('Erreur in delete Product')</script>";}
                   
                     mysql_close();

                }
            
        
        
            ?>
        
            
        
        </div>
    
        
     <?php  include"include/footer.php" ?>
    
    </div>
  
</body>

</html>