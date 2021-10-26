
          

<!doctype>
<html>
<head><title>Page de Recherches</title><meta charset="utf-8"/></head>

<body background="img/back.jpg" background-repeat="no-repeat">
		  
		  <br /><br />
<br />


        <TABLE ALIGN="CENTER" BORDER="0" CELLSPACING="2" CELLPADDING="1" WIDTH="100%" HEIGHT="5%" BGCOLOR="#FF2828" >
   <TR>
    <TD>&nbsp;</TD>
   </TR>
 </TABLE>

<TABLE ALIGN="CENTER" BORDER="0" CELLSPACING="0" CELLPADDING="0"  HEIGHT="7%"  WIDTH="100%"   BGCOLOR="#FFFFFF">
 <TR>

 <TD   WIDTH="7%"><a href="principale.php"><IMG SRC="img/acceuil.png" BORDER="0" ALIGN="BOTTOM" WIDTH="30px" HEIGHT="30px" ALT="acceuil"><h4>Acceuil</h4></a>&nbsp;</td>
   <TD   WIDTH="11%"><a href="principale.php"><IMG SRC="img/acheter.jpg" BORDER="0" ALIGN="BOTTOM" WIDTH="30px" HEIGHT="30px" ALT="acheter"><h4>Nos produits</h4></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <TD WIDTH="10%"> <a href="categorie.php"><IMG SRC="img/cat.jpg" BORDER="0" ALIGN="BOTTOM" WIDTH="30px" HEIGHT="30px" ALT="cat"><h4>Categories</h4></a>&nbsp;&nbsp;</td>
 <TD  WIDTH="10%"> <a href="chercher.htm"><IMG SRC="img/chercher.png" BORDER="0" ALIGN="BOTTOM" WIDTH="30px" HEIGHT="30px" ALT="checher"><h4>Rechercher</h4></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    
    
<TD   WIDTH="10%"> </TD>
    <TD  WIDTH="10%" >
<IMG SRC="img/l.png" BORDER="0" ALIGN="BOTTOM" WIDTH="450" HEIGHT="90" ALT="l">
  &nbsp;</TD>
 </TABLE>

<TABLE ALIGN="CENTER" BORDER="0" CELLSPACING="2" CELLPADDING="1" WIDTH="100%" HEIGHT="5%" BGCOLOR="#FF2828" >
   <TR>
    <TD>&nbsp;</TD>
   </TR>
 </TABLE>
<br /><br /><br />
<br /><br />
                   
				   
				   
<?php
                    
 $search_keyword = $_POST['chercher'];
                    
                    mysql_connect("localhost","root",""); 
                    mysql_select_db("siteweb");

                    $select_image=mysql_query("select * from produit where nom_produit like '%$search_keyword%' ");


			  echo'<table border="1" cellspacing=0 align="center" WIDTH="600" HEIGHT="50%" BGCOLOR="#FFFFFF" class="cart_table">
                        <tr>  
                           
                           
                            <th></th>
                            
                            <th></th>
                            <th></th>
                        </tr>
                        ';        
        

                       while ($pro = mysql_fetch_array($select_image))
                        {    
                  
                    $title = $pro['nom_produit'];
                    $price= $pro['prix_produit'];
                    $descreption = $pro['description_produit'];  
                    $image_src = $pro['image_produit'];
					
                 
                  
                    echo "
                            <tr>  
                             
                                <td ><img src='img/$image_src' width='100px' height='75px'/></td>
								
                                <td  > $title<br><br>
								       $descreption </br></br>
								       $price DH 
								       </td>
                                
                             
                            </tr>
                         ";
                }

                    mysql_close();

?>

