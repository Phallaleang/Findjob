<?php
session_start();
include_once '../ConnectDatabase/Class.php';
$connclass = new connection;

 $emailId = $_POST['emailId']; 
 $passwordForget = $_POST['passwordForget'];
 $sql2 = "SELECT *FROM registerform where id = '$emailId'";
 $result = $connclass->condb()->query($sql2);
 $row = mysqli_fetch_assoc($result);

  $fetch_id       = $row['id'];
  $fetch_email    = $row['email'];
  $fetch_password = $row['password'];
    if($emailId == $fetch_id){
            $to = $fetch_email;
            $subject = 'Password';
            $txt ='Your Password is : $fetch_password';
            $headers = 'From: phallaleang731@gmail.com '."\r\n".
            "CC: Somebodyelse@gmail.com";
            mail($to,$subject,$txt,$headers);
            echo "done";
    }else{
         echo 'fair';
    }

?>