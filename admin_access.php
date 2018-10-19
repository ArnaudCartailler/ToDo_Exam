<?php

session_start();

require 'config.php';

if(!empty($_SESSION['id']) AND $_SESSION['admin'] == 1){

  header('location: admin_page.php');

}else{

  header('location: index.php');

}
