<?php

session_start();

require 'config.php';

//Verify if the admin is 0 or 1 for have access to admin page

if(!empty($_SESSION['id']) AND $_SESSION['admin'] == 1){

  header('location: admin_page.php');

}else{

  header('location: index.php');

}
