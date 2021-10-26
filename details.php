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
    background-color: #FF9D9D;
    color: #FFFFFF;
    border: 1px white;
    width: 140px;
    margin-left: auto; 
}
#tbody{
    width: auto;
    height: 500px;
    margin-top: 10px;
    padding: 10px 8px 5px;
}
.left{
    padding-left: 35px;
    padding-right: 25px;
    width: 440px;
    color: #111;
    height: 500px;
    background-color: rgba(241,240,239,0.62);
    float: left;
    
}
.right{
    padding-left: 30px;
    padding-right: 35px;
    width: 443px;
    color: #111;
    height: 500px;
    background-color: rgba(241,240,239,0.62);
    float: right;
}
.qteinput{
    background-color: #fbf4f4;
    color: #111;
    border: 1px #111;
    width: 80px;
    margin-top: 8px; 
}
.green{
    font-size: 30px;
    color: #e62020;
}
.submit{
    margin-top: 20px;
    border: 2px solid #f70b3a;
    border-radius: 10px;
    font-size: 20px;
    background-color: #f70b0b;
}
p{
    width: 380px;
}
#footer{
    width: auto;
    background-color: rgba(165,116,78,0.42);
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
        
		
        <?php include "include/header.php" ?>
		

<body background="img/back.jpg" background-repeat="no-repeat">
<br /><br />
<br />

        
        <div id="tbody">
            <div class="left">
                <?php
                    
                detail_left();
                   
                ?>
            
            </div>
            <div class="right">
                <?php
                    
                detail_right();
                    
                ?>    
                

            </div>
            
            
        </div>
        
     <?php  include"include/footer.php" ?>
    
    </div>
  
</body>

</html>