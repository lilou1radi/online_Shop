<?php 
include("fct.php");
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>Categories</title>
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
    padding: 10px 20px;
    color: black;
}
.nav li:hover a{
    color: #0f0;
}
.textinput{
    background-color: white;
    color: black;
    border: 1px solide white;
    width: 140px;
    margin-left: auto; 
}
#body{
    width: auto;
    min-height: 400px;
    height: auto;
    background-color: rgba(0, 0, 0, 0.56);
    margin-top: 10px;
    padding-left: 40px;
    padding-right: 40px;
    padding-bottom: 15px;
    padding-top: 10px;
    color: #fff9f9;
}
.tab_cat{
    width: 855px;
    height: 390px;
    
}
.tab_cat td{
    padding-left: 15px;
    border: 1px solid ea0a0a;
}
.tab_cat img{
    width: 250px;
    height: 150px;
}
.tab_cat a{
    text-decoration: none;
}
.cat-name{
    color: #f9f6f6;
    font-size: 20px;
    margin-left: 90px; 
}
#footer{
    width: auto;
    height: 50px;
    background-color: #e0bd89;
    border-radius: 30px;
    margin-top: 40px;
}
.footer_nav li{
    float: right;
    margin: 15px 10px;
}
.footer_nav a{
    text-decoration: none;
    padding: 10px 20px;
    color: #111;
    border-left: 1px solid #111;
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



	
	
    
        <div id="body">
            
            <h2 style="margin:0px;">CATEGORIES</h2>
            <p style="margin-top:0;">Selectionnez la categorie de votre produit s'il vous plait</p>
            
            <?php   select_cat() ?>
        
        </div>
    
        
     <?php  include"include/footer.php" ?>
    
    </div>
  
</body>

</html>