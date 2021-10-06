<?php
include("fct.php");
session_start();
    // define var null !
    $nameErr = $prenomErr = $emailErr = $genderErr = $passwordErr = $vpasswordErr ="";
    $name = $email = $prenom = $gender = $password = $vpassword ="";
    $cmp=0; 


    //--------check if all info is correct !---------------
    if(isset($_POST['create'])){
        
        if(empty($_POST['email'])){
            $emailErr = "Email is required";
            
        if(!empty($_POST['email'])){
                
        //-------verification  l'existense d'un compte---------
            
            $reponse=mysql_query("SELECT * FROM client ");
            while ($donnees = mysql_fetch_array($reponse)) {

                if ($_POST['email'] == $donnees['email']) {
                    $emailErr = 'Email est  deja exsiste';
                }
            }
        }
        }else{$cmp++;}
        if(empty($_POST['pass'])){
            $passwordErr = "Password is required";
        }else{$cmp++;}
        if(empty($_POST['vpass'])){
            $vpasswordErr = "Password is required";
        }elseif($_POST['vpass'] != $_POST['pass'] ){
            $vpasswordErr = "Password Incor";
            
        }else{$cmp++;}
        if(empty($_POST['nom'])){
            $nameErr = "Name is required";
        }else{$cmp++;}
        if(empty($_POST['prenom'])){
            $prenomErr = "Prenom is required";
        }else{$cmp++;}
    
    }
    
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
          
?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>Inscription</title>
        <link rel="stylesheet" href="css/css.css" />
        <script>


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
    color: #111;
    border: 1px solid #111;
    width: 140px;
    margin-left: auto; 
}
#tbody{
    width: auto;
    min-height: 400px;
    height: auto;
    background-color: rgba(249,245,245,0.34);
    margin-top: 10px;
}
.left{
    width: 580px;
    float: left;
    border-right: 1px solid white;
}
.right{
     width: 442px;
    float: right;   
}
.tab_insc{
    margin: 10px 50px; 
    color: #111;
}
.tab_insc td{
    padding: 15px ;
} 
.submit{
    margin-left: 80px;
    border: 5px solid #c10b0b;
    border-radius: 10px;
    font-size: 20px;
    background-color: #c10b0b;
}
.error{
    color: red;
}

#footer{
    width: auto;
    height: 50px;
    background-color: rgba(204,146,88,0.55);
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
    border-left: 1px black;
}
</script>
    </head>
<body>

    
    <div id="content"> 
    
        <?php include "include/header.php" ?>
        
        <div id="tbody">
            
            <div class="left"><form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <table  class="tab_insc">
                  
                <tr>
                    <th colspan="2" ><h2>Create your Account</h2></th>
                </tr>    
                <tr>
                    <td>Email: </td>
                    <td><input type="email"  name="email" class="textinput" value="<?php echo $email;?>"/><span class="error">* <?php echo $emailErr;?></span></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="pass" class="textinput" value="<?php echo $password;?>"/><span class="error">* <?php echo $passwordErr;?></span></td>
                </tr>
                <tr>
                    <td>Verify Password: </td>
                    <td><input type="password" name="vpass" class="textinput" value="<?php echo $vpassword;?>"/><span class="error">* <?php echo $vpasswordErr;?></span></td>
                </tr>
                <tr>
                    <td>First Name: </td>
                    <td><input type="text" name="nom" class="textinput" value="<?php echo $name;?>"/><span class="error">* <?php echo $nameErr;?></span></td>
                </tr>
                <tr>
                    <td>Last Name: </td>
                    <td><input type="text" name="prenom" class="textinput" value="<?php echo $prenom;?>"/><span class="error">* <?php echo $prenomErr;?></span></td>
                </tr>
                    <td>Gender: </td>
                    <td><input type="radio" name="sexe[]" value="male" />Male<input type="radio" name="sexe" value="female" />Female </td>
                    </tr>
                 <tr>
                    <td>Birth Date: </td>
                    <td><input type="date" name="date" class="textinput"/></td>
                 </tr>
                 <tr>
                    <td colspan="2"><input type="submit" name="create" value="Create Now"  class="submit"/></td>   
                </tr>
            </table>
   
            </form> </div>
            <div class="right"> <form action="#" method="post">
            <table  class="tab_insc">
                
                <tr>
                    <th colspan="2" ><h2>Connextion</h2></th>
                </tr>    
                <tr>
                    <td>Email: </td>
                    <td><input type="email"  name="email1" class="textinput"/></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="pass1" class="textinput"/></td>
                </tr>
                
                 <tr>
                    <td colspan="2"><input type="submit" name="sign_in" value="Sign In"  class="submit"/></td>   
                </tr>
            </table>
   
            </form>
                
            <?php ajoute_ver_cmt(); ?>
                
        </div>
            
        <div style="clear:both;"></div>    
        </div>
        
       <?php  include"include/footer.php" ?>
    </div>
    
    
</body>
</html>