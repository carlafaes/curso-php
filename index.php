<?php
  print 'inicio de curso,prueba de mensaje simple';//prueba

  //variables
  $nombre_persona ="car";
  $edad= 28;
  
  // ambos print logran el mismo resultado
  print "El nombre de usuario es " . $nombre_persona;
  print "El nombre de usuario es $nombre_persona";

  //las comillas simples toman el string como literal, y no toma la variable
  print 'El nombre de usuario es $nombre_persona';
  
  //echo tambien nos permite imprimir
  echo "El nombre de usuario es " . $nombre_persona . " su edad es " . $edad;
?>