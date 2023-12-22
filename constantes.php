<?php
define("NOMBRE","Pepito Pérez");
const FULLNAME = "Pepito Pérez Lopez";
echo NOMBRE;
echo FULLNAME;
echo __FILE__;
//resultat: C:\xampp\htdocs\cursoPhp\constantes.php
echo __DIR__;
//resultat: C:\xampp\htdocs\cursoPhp
define('ANIMALES',array(
    'chacal',
    'cuervo',
    'lagarto',
    'marmota',
    'pichon'
));
echo ANIMALES[1];



?>