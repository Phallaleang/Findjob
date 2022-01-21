<?php
  session_start();

  include '../ConnectDatabase/Class.php';

  $connect = new connection;
  
   $userName = $_POST['uname'];
   $Password = $_POST['psw'];

   $sqli = "SELECT *FROM  registerform where username='$userName' and password='$Password'";
  $data = $connect->condb()->query($sqli);
   $row=mysqli_fetch_array($data);

  if(is_array($row)){
     $_SESSION['id']          = $row['id'];
     $_SESSION['displayname'] = $row['displayname'];
     $_SESSION['username']    = $row['username'];
     $_SESSION['email']       = $row['email'];
     $_SESSION['password']    = $row['password'];
     $_SESSION['repassword']  = $row['repassword'];
      echo 'done';
  }else{
      echo 'error';
  }
   

  
?>