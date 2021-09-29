<?php
    

function select_pro(){
   
    if(!isset($_GET['cat'])){
        mysql_connect("localhost","root",""); 
        mysql_select_db("siteweb");
        
        $select_image=mysql_query("SELECT * FROM  produit ORDER BY id_produit asc");
                
            while ($pro = mysql_fetch_array($select_image))
            {   
                $pro_prix=$pro['prix_produit'];
                $pro_id=$pro['id_produit'];
                $pro_nom=$pro['nom_produit'];
                $image_src=$pro['image_produit'];
                $pro_des=$pro['description_produit'];
                        
                echo"<div class='new-product-list'>
                        <a href='details.php?pro_id=$pro_id' >
                            <img src='img/$image_src'>
                            <h3 class='prod-name'>$pro_nom</h3>
                            <span class='green'> $pro_prix $</span>
                        </a>
                    </div>";
                        
            }
    
        mysql_close();
    }
}

function select_cat_pro(){
   
   if(isset($_GET['cat'])){
       
        mysql_connect("localhost","root",""); 
        mysql_select_db("siteweb");
       
        $cat_id = $_GET['cat'];
       
        $select_cat_image=mysql_query("SELECT * FROM  produit Where cat_id='$cat_id' ");
                
            while ($pro_cat = mysql_fetch_array($select_cat_image))
            {   
                $cat_pro = $pro_cat['cat_id'];
                $pro_prix = $pro_cat['prix_produit'];
                $pro_id = $pro_cat['id_produit'];
                $pro_nom = $pro_cat['nom_produit'];
                $image_src = $pro_cat['image_produit'];
                $pro_des = $pro_cat['description_produit'];
                        
                echo"<div class='new-product-list'>
                        <a href='details.php?pro_id=$pro_id' >
                            <img src='img/$image_src'>
                            <h3 class='prod-name'>$pro_nom</h3>
                            <span class='green'> $pro_prix $</span>
                        </a>
                    </div>";
                        
                }
    
        mysql_close();
   
    }
}

function select_cat(){
         
        mysql_connect("localhost","root",""); 
        mysql_select_db("siteweb");
        $select_category=mysql_query("SELECT * FROM  category ORDER BY id_category asc");
        
            echo"<table border='0' cellspacing=0 class='tab_cat'><tr> ";
            $cmp=0;
            while ($cat = mysql_fetch_array($select_category))
            {
                     $cat_id=$cat['id_category'];
                     $cat_img=$cat['image_category'];
                     $cat_name=$cat['nom_category'];
                     $cmp++;
                     
                    echo" 
                        <td>
                            <a href='principale.php?cat=$cat_id'>
                                <img src='img/$cat_img' />
                                <span class='cat-name'>$cat_name</span>
                            </a>
                        </td>";
                     
                        if($cmp==3){ echo"</tr><tr>"; }
                        if($cmp==6){ echo"</tr>";}
                    
            }
        echo"</table>";
        mysql_close();
          
    
}

function detail_left(){
    
    if(isset($_GET['pro_id'])){
        
        
            mysql_connect("localhost","root",""); 
            mysql_select_db("siteweb");
        
            $pro_id = $_GET['pro_id'];
    
            $select_image=mysql_query("SELECT * FROM  produit where id_produit='$pro_id'");
        
            $pro_cat = mysql_fetch_array($select_image);
            
                $image_src = $pro_cat['image_produit'];
                    
            echo"<h2>IMAGE </h2>
            <img src='img/$image_src' style='border-top:1px solid grey; border-bottom:1px solid grey;width: 400px;
    height: 300px;' />";
    }
    
}

function detail_right(){
    
    if(isset($_GET['pro_id'])){
        
        
            mysql_connect("localhost","root",""); 
            mysql_select_db("siteweb");
        
            $pro_id = $_GET['pro_id'];
    
            $select_image=mysql_query("SELECT * FROM  produit where id_produit='$pro_id'");
        
            $pro_cat = mysql_fetch_array($select_image);
                
                $_SESSION['pro_id'] = $pro_id;
                $cat_pro = $pro_cat['cat_id'];
                $pro_prix = $pro_cat['prix_produit'];
                $pro_nom = $pro_cat['nom_produit'];
                $pro_des = $pro_cat['description_produit'];
        
                
           echo"<h2>$pro_nom</h2>
                <span class='green'>$pro_prix $</span><br><br>
                <span style='color:white; font-size:20px;'>Quantité :</span><br>
                <form method='post' action='cart.php?pro_id=$pro_id'>
                    <input type='number' class='qteinput' name='qte' value='1' min='1'/><br><br>
                <span style='color:white; font-size:20px;'>Details :</span>
                <p> $pro_des </p>";
        
            if(isset($_SESSION['email1'])){    
                
                echo"<a href='#'><input type='submit' class='submit' name='add_panier' value='ADD TO CART'/></a></form>";
            }
            else{  
                echo"<a href='#'><input type='submit' class='submit' name='add_panier' value='ADD TO CART'/></a></form>";
            }
             
    }
        
            
}

function ajoute_ver_cmt(){            
            
            global $cmp;
            
            if($cmp == 5 && isset($_POST['create'])){
                    
                
                mysql_connect("localhost","root",""); 
                mysql_select_db("siteweb");
                
                    $email=$_POST['email'];
                    $pass=$_POST['pass'];
                    $nom=$_POST['nom'];
                    $prenom=$_POST['prenom'];
                    if(isset($_POST['sexe'])){
                       $sexe=$_POST['sexe'];  
                    }
                    $date=$_POST['date'];

        // -------ajouter un compte -------- 
                    
                    $ajouter_client=" INSERT INTO client (email, password, nom, prenom, sexe, date) VALUES ('$email', '$pass', '$nom','$prenom','$sexe','$date')";	
                    mysql_query($ajouter_client);

                    $_SESSION['email']=$email;
                    $_SESSION['pass']=$pass;
                    header("Location: pg1.php");

    
            }
   
        // verifier que email & password est correcte 
    
            if(isset($_POST['sign_in'])){
              
                mysql_connect("localhost","root",""); 
                mysql_select_db("siteweb");
                    
                $email= $_POST['email1'];
                $pass = $_POST['pass1'];
                $err=0;
                $repon=mysql_query("SELECT * FROM client");

                while ($don = mysql_fetch_array($repon))
                {
                
                    if($email == $don['email'] && $pass == $don['password']){
                            if($email == 'admin@admin.com' && $pass == 'admin' ){
            
                                $_SESSION['email1'] = $don['email'];                               
                                $_SESSION['nom'] = $don['nom'];
                                $_SESSION['img'] = $don['img'];
                                header("Location:admin_page.php?product");   
                            }else{
                            header("Location:principale.php"); 
                        
                            session_start();
                            $_SESSION['id'] = $don['id_client'];
                            $_SESSION['email1'] = $don['email'];
                            $_SESSION['pass1'] = $don['password'];
                            $_SESSION['nom'] = $don['nom'];
                            $_SESSION['prenom'] = $don['prenom'];
                            $_SESSION['img'] = $don['img'];
                            $_SESSION['qu_pro'] = $don['quantite_prod'];
                           
                             }
                    }else{$err=1;}
                    
                }
                if($err==1){echo"<span style='color:red;'>Vérifiez que vous utilisez bien le mot de passe & email de votre compte </span>";}    
            }
                    

            mysql_close();
      
}




?>