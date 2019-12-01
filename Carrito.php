<?php
session_start();
if(isset($_POST['btnAccion'])){
  switch($_POST['btnAccion']){
case 'Agregar':
  if(is_numeric(openssl_decrypt($_POST['id'],Code,key))){
$ID=openssl_decrypt($_POST['id'],Code,key);
  }else{
#Intentaron desencriptar 

  }
  if(is_string(openssl_decrypt($_POST['nombre'],Code,key))){
    $NOMBRE=openssl_decrypt($_POST['nombre'],Code,key);
      }else{
    #Intentaron desencriptar 
    
      }
      if(is_numeric(openssl_decrypt($_POST['cantidad'],Code,key))){
        $CANTIDAD=openssl_decrypt($_POST['cantidad'],Code,key);
          }else{
        #Intentaron desencriptar 
        
          }
          if(is_numeric(openssl_decrypt($_POST['precio'],Code,key))){
            $PRECIO=openssl_decrypt($_POST['precio'],Code,key);
              }else{
            #Intentaron desencriptar 
            
              }
              #puedo poner que cuando se ingrese se cree la session
              if(!isset($_SESSION['CARRITO'])){
                $p=array(
                'ID'=>$ID,
                'NOMBRE'=>$NOMBRE,
                'CANTIDAD'=>$CANTIDAD,
                'PRECIO'=>$PRECIO

                );
$_SESSION['CARRITO'][0]=$p;
echo "<script>alert('Producto Agregado')</script>";
              }else{
                $IDProductos=array_column($_SESSION['CARRITO'],"ID");
                if(in_array($ID,$IDProductos)){
                  echo "<script>alert('El producto ya ha sido seleccionado')</script>";
                }else{
                $numProductos=count($_SESSION['CARRITO']);
                $p=array(
                  'ID'=>$ID,
                  'NOMBRE'=>$NOMBRE,
                  'CANTIDAD'=>$CANTIDAD,
                  'PRECIO'=>$PRECIO
  
                  );

                  $_SESSION['CARRITO'][$numProductos]=$p;
                  echo "<script>alert('Producto Agregado')</script>";
              }}
             
  break;
  case 'Borrar':
    if(is_numeric(openssl_decrypt($_POST['id'],Code,key))){
      $ID=openssl_decrypt($_POST['id'],Code,key);
        
    
      foreach($_SESSION['CARRITO'] as $i=>$p){
        if($p['ID']==$ID){
          unset($_SESSION['CARRITO'][$i]);
          echo "<script>alert('Elemento eliminado');</script>";
       } }
      }else{
        //Lol
      }
      

      
        
    break;
  }
}
?>
