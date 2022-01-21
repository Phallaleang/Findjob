<?php
 session_start();
 unset($_Session['id']);
 unset($_Session['username']);
 unset($_Session['displayname']);
 header('location: ./Home.php');
 
?>
