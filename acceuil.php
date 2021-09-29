<?php
include("fct.php");
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>Accueil</title>
	
	<style>
	body{ 
    margin: 0;
    padding: 0;    
}

#header{ 
    width: auto;
    height: 100px;
    background-color: #111;
}

#nav{
    position: relative;
    width: 980px;
    height: 100px;
    margin: 0 auto; 
}
#logo{
    width: 80px;
    height: 100px;
    margin-top: 20px;
    margin-right: 50px;
    float: left;
}

ul.nav-content{
    float: left;
    position: relative;
    padding-left: 0px;
    margin-top: 50px;
    margin-bottom: 0px;
    letter-spacing: 1px;

}
ul.nav-content li {
    list-style: none;
    display: inline;
    margin-left: 30px;
}
ul.nav-content li:hover  a{
    border-bottom:6px solid #FF2F2F;
    color:  black;
}

ul.nav-content li a{
    text-decoration: none;
    font-size: 1.30rem;
    padding: 10px;
    padding-bottom: 20px;
    color: #FF2F2F;
}


#form {
    float:right; 
    line-height:120px; 
    padding-right:5px;
    height: 100px;
}

#form input{
    background-color: yellow;
    color: #0f0;
    border: 1px solid white;
    width: 130px;    
}

input.search-logo{
    position: relative;
    top: 51px;
    right: 84px;
    float: right;
    max-width: 17px;
    height: 17px;
}
#sign{
    text-decoration: none;
    color: #FF2F2F;
    position: relative;
    left: 30px;
}

.slideshow {
    position: absolute;
    width: 100%;
    height: 864px;
    background-image: url('../img/bac.jpg');
    background-repeat: no-repeat;
    background-size: auto;
}
.slide {
    position: relative;
    padding: 0;
    width: 980px;
    height: 500px;
    border: 3px solide #111;
    margin: 0px auto;
    overflow: hidden;
}
.slide li {
    width: 100%;
    list-style: none;
}

.slide img {
    width: 980px;
    height: 500px;

}
.mySlides {
    display:none;
}

#image{
    width: 910px;
    position: relative;
    margin-left: auto;
    margin-right: auto;
}
#image img{
    width: 250px;
    height: 150px;
}
div#image .col-img{
    float: left;
    padding: 10px;
    width: 280px;
    height: 110px;
}

#footer{
    position: relative;
    top: 190px;
    right: 540px;
}

#span{
    color: #888;
    width: auto;
    height: 50px;
    margin: 10px;
}


</style>
	

<title>Lesieur Cristal/Acceuil</title>

</head>
<body>
	
<!--Main Contrainer Starts-->

	

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

 <TD   WIDTH="7%"><a href="#"><IMG SRC="img/acceuil.png" BORDER="0" ALIGN="BOTTOM" WIDTH="30px" HEIGHT="30px" ALT="acceuil"><h4>Acceuil</h4></a>&nbsp;</td>
   <TD   WIDTH="11%"><a href="principale.php"><IMG SRC="img/acheter.jpg" BORDER="0" ALIGN="BOTTOM" WIDTH="30px" HEIGHT="30px" ALT="acheter"><h4>Nos produits</h4></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <TD WIDTH="10%"> <a href="categorie.php"><IMG SRC="img/cat.jpg" BORDER="0" ALIGN="BOTTOM" WIDTH="30px" HEIGHT="30px" ALT="cat"><h4>Categories</h4></a>&nbsp;&nbsp;</td>
 <TD  WIDTH="10%"> <a href="chercher.htm"><IMG SRC="img/chercher.png" BORDER="0" ALIGN="BOTTOM" WIDTH="30px" HEIGHT="30px" ALT="checher"><h4>Rechercher</h4></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <TD WIDTH="10%"> <a href="inscription.php"><IMG SRC="img/inscrip.png" BORDER="0" ALIGN="BOTTOM" WIDTH="30px" HEIGHT="30px" ALT="inscrip"><h4>Inscription/Se connecter</h4></a>&nbsp;&nbsp;</td>
    
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



<DIV ALIGN="CENTER"><caption><em><h1><ins>LESIEUR CRISTAL</ins></h1></em></caption></div>

 <TABLE ALIGN="CENTER" BORDER="0" CELLSPACING="2" CELLPADDING="1" WIDTH="60%" HEIGHT="70%" BGCOLOR="#FFFFFF" >
   <TR>
    <TD>
	<center><em>
Lesieur Cristal conditionne et commercialise une gamme complète de marques d'huiles, de savons et de produits d'hygiène de grande qualité qui ont su conquérir l'adhésion et la fidélité renouvelée de millions de consommateurs. </em></center>
&nbsp;</TD>
  
  <tr>
	
    <td>
            
        <ul class="slide" style="margin-top:20px">
            <li><img src="img/huiles.jpg" alt="" class="mySlides"/></li>
            <li><img src="img/savon.jpg" alt="" class="mySlides"/></li>
            <li><img src="img/tourteau tourn.jpg" alt="" class="mySlides"/></li>
            <li><img src="img/sav.jpg" alt="" class="mySlides" /></li>

        </ul>
    
 
 </td>
	 </tr>
 </TABLE>

 

 <TABLE ALIGN="CENTER" BORDER="0" CELLSPACING="2" CELLPADDING="1" WIDTH="60%" HEIGHT="30%" BGCOLOR="#FFFFFF" BORDERCOLOR="#FFD1BB">
   <TR>
    <TD><img src="img/tour.jpg" >&nbsp;</TD>
    <TD><img src="img/soja.jpg" >&nbsp;</TD>
    <TD><img src="img/colza.jpg" >&nbsp;</TD>
   </TR>
 </TABLE>
</br>
</br>
</br>
    
        
            
			
 <TABLE ALIGN="CENTER" BORDER="0" CELLSPACING="2" CELLPADDING="1" WIDTH="60%" HEIGHT="30%" BGCOLOR="#FFFFFF" BORDERCOLOR="#FFD1BB">

   <TR>
    <TD>
         <center>   <img src="img/map.png" > </center> &nbsp;</TD>
   </TR>
   <TR>
    <TD>
         
<center>		 Copyright © 2016 All rights reserved.  Legal </center> &nbsp; </TD>
   </TR>
 </TABLE> 
             
            
            
        
    <!--Main Contrainer Ends-->
<script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
               x[i].style.display = "none";  
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}    
            x[myIndex-1].style.display = "block";  
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
</script>
</body>

</html>