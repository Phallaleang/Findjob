<?php
  
  class connection{
      function condb(){
             $server="localhost";
             $username="root";
             $password="";
             $db="findjob";
             $con =new mysqli($server,$username,$password,$db);
             return $con;

             if($con){
                 echo "Connection success";

             }else{
                 echo "Connection failure";
             }
      }
  }
?>