<?php
function usuarioOk($usuario, $contraseña) :bool {
  
    return ($usuario == "pepe" && $contraseña==strrev($usuario));
    
}
