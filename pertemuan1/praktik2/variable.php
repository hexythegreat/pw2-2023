<?php

/*
    Variable Sistem
    variable built in php (variable yang sudah ada di php)
*/

    echo $_SERVER["DOCUMENT_ROOT"] ;

    echo "<br>";
/* Variable User
    Variable yang dibuat user
*/    
    
    $name = "Hex" ;
    $age = 20 ;
    $weight = 95 ;

    $name = "Dexi";
    
    echo "nama saya adalah "  .$name

     /*
    Variable konstan
    variable yang tidak bisa diubah nilainya
	  1. Menggunakan define | define('fruit', "Apel");
	  2. Menggunakan const  | const fruit = "Apel";
  */
    define ("SITE_NAME", "Elena");
    const BASE_URL = "https://elena.nurulfikri.ac.id/";

  // Menampilkan variable konstanta
  
  echo "URL: " . BASE_URL . "<br/>";
?>