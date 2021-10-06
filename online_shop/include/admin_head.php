<div id="header">
            
          <ul class="nav">
            <li><a href="admin_page.php?product">PRODUITS</a></li>
            <li><a href="admin_page.php?client">CLIENTS</a></li>
            <li><a href="ajoute_produit.php">AJOUTER UN PRODUIT</a></li>
           
            <?php     
              
              
                  
                  echo"
                  <li style='max-width: 159px;margin-top: 0px;margin-bottom: 0px;' >
                  <table class='profile'>
                      <tr><th><a href='#' style='padding-left: 3px;'>".$_SESSION['nom']."</a></th></tr>
                      
                      <tr>
                    
                        <td style='color: black;font-size: 15px;'>
                            <a href='logout.php' style='padding: 0;'>Log Out</a>
                        </td>
                      
                      </tr>
                      
                  </table>
                  </li>";
              
              
              
             
            ?>
              
              
        </ul>
        
        </div>