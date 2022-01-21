<?php
  include '../ConnectDatabase/Class.php';
  extract($_POST);
  
  $obj=new connection;

    $id=$_POST['idUser'];
    $displayName=$_POST['displayName'];
    $userName=$_POST['userName'];
    $emailName=$_POST['emailName'];
    $passwordName=$_POST['passwordName'];
    $rePasswordName=$_POST['rePasswordName'];

    $emailInvalid = "SELECT *FROM registerform where email='$emailName'";
     $emailValid=$obj->condb()->query($emailInvalid);
    if(mysqli_num_rows($emailValid)>0){
          echo 'error';
          exit();
    }else{

    $sql="INSERT INTO registerform(id,displayname,username,email,password,repassword)
      VALUES('null','$displayName','$userName','$emailName','$passwordName','$rePasswordName')";

    $result=$obj-> condb()->query($sql);
    if($result){
        echo 'success';
    }else{
        echo 'fair';
    }
  }

?>