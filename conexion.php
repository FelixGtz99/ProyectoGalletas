<?php
$servidor="mysql:dbname=".BD.";host=".Server;
try{
    $pdo=new PDO($servidor,User,Pass,
array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
);
//echo "<Script>alert('Conectado!!!')</Script>";

}catch(PDOException $Ex){
    echo "<Script>alert('No se conecto :(')</Script>";


}

?>