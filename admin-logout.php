<?php
   session_start();
   unset($_SESSION["adminusername"]);
   unset($_SESSION["adminvalid"]);
   echo("<script type='text/javascript'>alert('Successfully Logged Out'); </script>");

   header('Refresh: 0; URL = admin-login.html');
?>