<?php 
  $destino="juan_ls58@hotmial.com";
  $nombre= $_POST["nombre"];
  $correo= $_POST["correo"];
  $telefono= $_POST["telefono"];
  $mensaje = $_POST["mensaje"];
  $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nMensajes: " . $mensaje;
  
  mail($destino,"Contacto, $contenido");
 header("Location:Inicio.html")
  

?>