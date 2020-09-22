<?php 
$prekes= array(
    array(
      "komp1" => "Mac book pro",
      "atmintis" => "512gb",
      "ekranas" => 18
    ),
    array(
        "komp1" => "Lenovo",
        "atmintis" => "342gb",
        "ekranas" => 12
    ),
    array(
        "komp1" => "Dell",
        "atmintis" => "1000gb",
        "ekranas" => 16
    )
  );
  
  foreach ( $prekes as $prekes ) {
    foreach ( $prekes as $id => $value ) {
      echo "$id: $value<br>";
    }
  }
  ?>