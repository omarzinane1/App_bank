
<?php
require 'connect.php';
session_start();

if (isset($_POST['button'])) {
    $nom = mysqli_real_escape_string($con, $_POST['nom']);
    $prenom = mysqli_real_escape_string($con, $_POST['prenom']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);
    $passc = mysqli_real_escape_string($con, $_POST['passc']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $select = mysqli_real_escape_string($con, $_POST['select']);
    $query = "INSERT INTO users (user_id ,  first_name,last_name,email,password1,password1Confirm,usertype) VALUES 
            (null,'$nom', '$prenom', '$pass', '$passc','$address','$select')";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = " Added Successfuly";
        if($_POST['select']== "Admin"){
            header("Location: Admin.php");
        }else{
            header("Location: header.html");
        }
        exit(0);
    } else {
        $_SESSION['message'] = "Product Not Added ";
        header("Location: register.php");
        exit(0);
    }
}
if (isset($_POST['button'])) {
    $email1 = mysqli_real_escape_string($con, $_POST['emailg']);
    $password = mysqli_real_escape_string($con, $_POST['passworg']);
    $sql="SELECT * FROM users WHERE email='$email1' AND password1='$password'";
    $query_run = mysqli_query($con, $query);
    $num_ligne=mysqli_num_rows($query_run);
    if($num_ligne > 0){
        for($i=0;$i<=$num_ligne;$i++) {
        $ligne=mysqli_fetch_assoc($query_run);
       
            if($ligne['usertype'] == "Admin"){
                
                header("Location: Admin.php");
            }else{
                header("Location: header.html");
            }
        }
    }else{
        echo " <script>
        document.getElementById('error').style.display='block';
        document.getElementById('error').style.color= 'red';
        </script>
        ";
    }
   


}
?>