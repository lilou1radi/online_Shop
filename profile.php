<?php
    
include("fct.php");
session_start();

?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>Pageprofile</title>
	<style>
	
#content{
    width:1024px; 
    margin: auto;
}
#header{
    width: auto;
    height: 85px;
    background-color: #fbfbfb;
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
    background-color: #FFFFFF;
    color: #0f0;
    border: 1px solid white;
    width: 140px;
    margin-left: auto; 
}
#tbody{
    width: auto;
    height: 500px;
    margin-top: 10px;
    background-color: #111  
    padding: 20px 20px 0px;
}
.left{
    padding: 20px 0px 10px 40px;
    color: #111;
    width: 340px;
    height: 440px;
    background-color: rgba(243,238,238,0.55);
    float: left;
}
.right {
    color: #111;
    background-color: rgba(274,239,239,0.33);
    float: right;
    width: 540px;
    padding-left: 64px;
    padding-top: 10px;
    height: 460px;
}
.info {
        color: #111;
}
.info td{
    padding: 16px;
    padding-right: 45px;
    border-bottom: 1px solid #de0f0f;
}
.info input{
    width: 170px;
    height: 28px;
    border: 0px;
    background-color: #f7eeee;
    color: #111;
    margin-left: auto; 
}
.submit{
    margin-left: 80px;
    border: 5px solid #de0f0f;
    border-radius: 10px;
    font-size: 20px;
    background-color: #de0f0f;
}
#footer{
    width: auto;
    
    background-color: black;
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
    color: black;
    border-left: 1px solid #f7eeee;
}
	
	
	</style>
</head>
<body>

<body background="img/back.jpg" background-repeat="no-repeat">
<br /><br />
	<div id="content">
        
     <?php  include"include/header.php" ?>
        
        <div id="tbody">
            <div class="left">
                
             
                <?php
                    if(isset($_SESSION['email1'])){
                        
                        if($_SESSION['img']=='' ){
                            
                        echo"<form action='profile.php' method='post' >
                                Select image to upload:
                                <input type='file' name='fileToUpload' id='fileToUpload'>
                                <input type='submit' value='Upload Image' name='upsubmit'>
                            </form>";
                            
                            if(isset($_GET['upsubmit'])){
                                
                             if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], 'img/$_FILES["fileToUpload"]["name"];')) {
                                    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                                } else {
                                    echo "Sorry, there was an error uploading your file.";
                                }
                        
                            }
                            
                            
                        }
                        else{echo"<img  border=1 width='300px' src='img/".$_SESSION['img']."'/>";
                        }
                    }
                    else{echo 'You have to log in !';}
                                   
                ?> 
                
                
                
            </div>
            <div class="right">
                <?php
                   
              
                    if(isset($_SESSION['email1'])){
                        echo"
                        <h2>My Profile </h2>
                        <form method='post' action='profile.php'>

                            <table class='info'>

                                <tr>
                                    <td>Last Name: </td>
                                    <td><input type='text' name='nom_ch' value='".$_SESSION['nom']."' placeholder='".$_SESSION['nom']."'/></td>
                                </tr>
                                <tr>
                                    <td>First Name: </td>
                                    <td><input type='text' name='prenom_ch'  value='".$_SESSION['prenom']."' placeholder='".$_SESSION['prenom']."' /></td>
                                </tr>
                                <tr>
                                    <td>Email : </td>
                                    <td><input type='text' name='email_ch'  value='".$_SESSION['email1']."' placeholder='".$_SESSION['email1']."' /></td>
                                </tr>
                                <tr>
                                    <td>Password : </td>
                                    <td><input type='text' name='pass_ch'  value='".$_SESSION['pass1']."' placeholder='".$_SESSION['pass1']."' /></td>
                                </tr>

                            </table><br>

                            <input type='submit' name='change_data' value='Change information'  class='submit'/>

                        </form> 
                        ";
                    }
                    else{
                         echo 'You have to log in !';
                    }
                
                
                ?>
                
            </div>
            
            
        <?php
            
            if(isset($_POST['change_data'])){
                
                mysql_connect("localhost","root",""); 
                mysql_select_db("siteweb");
                
                $email= $_POST['email_ch'];
                $passw= $_POST['pass_ch'];
                $nom= $_POST['nom_ch'];
                $prenom= $_POST['prenom_ch'];
                $id = $_SESSION['id']; 
                 
                
                $change=mysql_query("UPDATE client SET email = '$email', password = '$passw', prenom = '$prenom', nom = '$nom' WHERE id_client = $id;");
                
                $_SESSION['prenom'] = $prenom;
                $_SESSION['nom'] = $nom;
                $_SESSION['pass1'] = $passw;
                $_SESSION['email1'] = $email;
                
                echo "<span style='color:red;'> You have changed your information </span>";
                
                echo"<meta http-equiv='refresh' content='1; url=profile.php '/>" ;
                
            }
            
        ?>
        </div>
        
     <?php  include"include/footer.php" ?>
    
    </div>
  
</body>

</html>