<?php
 session_start();
 unset($_SESSION['Name']);
 unset($_SESSION['pwd']);
 unset($_SESSION['SubCode']);
 unset($_SESSION['Branch']);
  unset($_SESSION['Sem']);
    unset($_SESSION['tablename']);
    unset($_SESSION['callindex']);

 session_destroy();

 header('location:login_faculty.html');

 ?>