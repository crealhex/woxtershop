<?php
  
  session_start();
  
  $cod = $_GET['cod'];
  $can = $_GET['can'];
  
  $cesta = $_SESSION['carrito'];
  
  unset($cesta[$cod]);
  
  $_SESSION['carrito'] = $cesta;
  
  header('Location: cart.php');