<?php 

   function validaRequerido($valor){
      if(trim($valor) == ''){
         return false;
      }else{
         return true;
      }
   }
   
   function validarEntero($valor, $opciones=null){
   	echo"hola";
   	var_dump($valor);
   	var_dump(filter_var($valor, FILTER_VALIDATE_INT, $opciones));
      if(filter_var($valor, FILTER_VALIDATE_INT, $opciones)){
         return true;
      }else{
         return false;
      }
   }
   
   function validaEmail($valor){
      if(filter_var($valor, FILTER_VALIDATE_EMAIL)){
         return true;
      }else{
         return false;
      }
   }

?>