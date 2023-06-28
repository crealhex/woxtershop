<?php
  
  $cn=mysqli_connect("localhost","root","")
  or die("NO CONECTADO");
  mysqli_select_db($cn,"dbwoxter")
  or die("BD NO EXISTE");