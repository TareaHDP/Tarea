<?php
 
//no direct access
defined('_JEXEC') or die('Acceso restringido'); //El modulo solo se ejecutara cuando se este ejecutando joomla

require_once ('helper.php');// Incluimos nuestro archivo a donde vamos a tener todas las clases y funciones a necesitar

$entrada = new JInput; // Objeto para conseguir los valores enviados atravez de formularios en el archivo tmpl/default.php

$mensaje = $entrada->get('mensaje', '', 'string'); //Obtenemos nuestra variable con nombre 'mensaje' enviada por formulario desde default.php, le decimos decimos que si no hay nada enviado (si acabamos de abrir la pagina que le asigne hola), y el tercer parametro que lo trate como una cadena.

$textBV = $params->get('textBV', '', 'string');
$textDesp = $params->get('textDesp', '', 'string');
$nombre = $entrada->get('nombre', '', 'string');
$apellido = $entrada->get('apellido', '', 'string');
$res2 = false;

if($nombre!='' && $apellido!=''){$res2 = GestorDB::insertarRegistro($nombre, $apellido);}

$res = GestorDB::mostrarRegistros(); // guardamos la matriz devuelta por el metodo
$layout = $params->get('layout', 'default');//asignamos un objeto de tipo layout con default (nuestro archivo default.php) como parametro
require JModuleHelper::getLayoutPath('mod_ejemplo', $layout); // Mandamos a imprimir en pantalla el layout que hemos configurado

/* Tdos estos son metodos de joomla o constantes
	_JEXEC
	JInput
	$params->get()
	JModuleHelper::getLayoutPath
*/

 
?>
 