<?php
   session_start();
   unset($_SESSION["adminusername"]);
   unset($_SESSION["adminvalid"]);
   
   header('Refresh: 0; URL = admin-login.html');
?>