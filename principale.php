<?php
include("fct.php");
session_start();
?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>PRODUIT</title>
		<style>
		
h1, h2, h3, h4, h5, h6, p{
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    padding-left: 5px;
}

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
    padding: 10px 20px;
    color: #111;
}
.nav li:hover a{
    color: #FFDBCA;
}
.textinput{
    background-color: #111;
    color: #0f0;
    border: 1px white;
    width: 140px;
    margin-left: auto; 
}
#tbody{
    width: auto;
    min-height: 400px;
    height: auto;
    background-color: rgba(0, 0, 0, 0.56);
    margin-top: 10px;
    padding-left: 40px;
    padding-right: 40px;
    padding-bottom: 3px;
    padding-top: 10px;
}
#produit{
    width: auto;
    height: auto;
    margin: 0px;
    padding: 0px;
}
.new-product-list {
    width: 228px;
    height: 208px;
    display: inline-block;
    background-color: #000;
    border: 1px solid #2d2d2d;
    float: left;
    margin-bottom: 10px;
    margin-right: 6px;
    position: relative;
}
.new-product-list a{
    color: #eAdbba;
    text-decoration: none;
}
.new-product-list a img{
    padding: 5px 4px 0px;
    position: relative;
    display: block;
    width: 220px;
    height: 145px;
}
.green {
    font-size: 20px;
    color: #f30b0b;
    padding-left: 60px;
}

#footer{
    width: auto;
    height: 50px;
    background-color: white;
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
    border-left: 1px red;
}
</style>
    </head>
<body>

    
    <div id="content"> 
	
        
        <!--Header Starts-->

        <?php include "include/header.php" ?>

<body background="img/back.jpg" background-repeat="no-repeat">
<br /><br />
<br />



	
        <!--Header Ends-->
        
		
<DIV ALIGN="CENTER"><caption><em><h2><ins>BIENVENUE A LA BOUTIQUE EN LIGNE DE LESIEUR CRISTAL</ins></h2></em></caption></div>
        
    <div id="tbody">
            
        <div id="produit">
            <h2 style="color:white; margin:10px;font-size:28px;">PRODUIT</h2>
            
            <?php 
    
            select_pro();
            select_cat_pro();
        
            ?>  
               
        </div>
            
        <div style="clear:both;"></div>    
    </div>
	
	
	
	
       <!--Footer Starts-->
	   <TABLE ALIGN="CENTER" BORDER="0" CELLSPACING="2" CELLPADDING="1" WIDTH="60%" HEIGHT="30%" BGCOLOR="#FFFFFF" BORDERCOLOR="#FFBE7D">
   <TR>
    <TD>
<IMG SRC="img/map.png" BORDER="1" ALIGN="BOTTOM" WIDTH="720" HEIGHT="489" ALT="map">&nbsp;</TD>
   </TR>
   <TR>
    <TD>
               <center>     <h3><ins>Notre adresse</ins></h3>
                 
                    	Lesieur Cristal<br>
					 1, rue caporal corbi, Rue El Gara, 
<br>
                        Casablanca - MAROC
                        Appelez-nous: <br>
                        
                        <h3><ins>E-mail:</ins> </h3> elklifi@lesieur-cristal.co.ma.</center>
&nbsp;</TD>
   </TR>
 </TABLE>
	   
	   
	   

<HR WIDTH="100%" COLOR="#FFFFFF">
  
	  <center>Copyright &copy; 2017- <span style="text-transform:capitalize" >TOUS DROITS R&Eacute;SERV&Eacute;S. </span></center>

  </div>
  </div>


        <!--Footer Ends--> 
       
	   
    </div>
    
    
</body>
</html>