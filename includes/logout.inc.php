<?php 

session_start(); 
session_unset(); 
session_destroy(); 

header("Location: https://tarmac-twine.000webhostapp.com/index.php?");
exit();