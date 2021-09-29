<div id="header">
            
          <ul class="nav">
            <li><a href="principale.php">PRODUITS</a></li>
            <li><a href="#">ACCEUIL</a></li>
            <li><a href="categorie.php">CATEGORIES</a></li>
            <li><a href="cart.php">VOTRE PANIER</a></li>
            <li><a href="chercher.htm">RECHERCHER</a></li>
            <?php     
              
              if(isset($_SESSION['email1'])){
                  
                  echo"
                  <li style='max-width: 159px;margin-top: 0px;margin-bottom: 0px;' >
                  <table class='profile'>
                      <tr><th colspan='2'><img  border=1 width='35px' height='30px' src='img/".$_SESSION['img']."'/><a href='profile.php' style='padding-left: 3px;'>".$_SESSION['nom']."</a></th></tr>
                      
                      <tr>
                        
                        <td style='color: white;font-size: 15px;border: 0.8px solid rgba(0, 227, 0, 0.75);'>
                            <a href='profile.php' style='padding: 0;'>Profile</a>
                            
                        </td>
                        <td style='color: white;font-size: 15px;border: 0.8px solid rgba(0, 227, 0, 0.75);'>
                            <a href='logout.php' style='padding: 0;'>Log Out</a>
                        </td>
                      
                      </tr>
                      
                  </table>
                  </li>";
              
              }
              
              else{ 
                  
                  echo"
                  <li style='margin-left: 0px;margin-right: 0px;'>
                    <a href='inscription.php'>Sign In / Up </a>
                  </li>";
              }
        
            ?>
              
              <li style="margin: 35px 0px;"><a href="#"><img src="./img/cart3.png" style="width:22px;"/><span class="cmt">
                  <?php
                  
                    if(isset($_SESSION['email1'])){
                        
                        $id_client = $_SESSION['id'];
                        mysql_connect("localhost","root",""); 
                        mysql_select_db("siteweb");
                        
                        $select_image=mysql_query("select count(id_client) as count from panier where id_client = '$id_client'");
        
                        $pro_cat = mysql_fetch_array($select_image);
                        
                        $qte_cmd = $pro_cat['count'];
                        
                        echo $qte_cmd;
                        
                    }
                    else{ echo'';}
                  
                  ?>
                  </span></a></li>
        </ul>
        
        </div>