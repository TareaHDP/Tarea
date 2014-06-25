<?php 
defined('_JEXEC') or die('Acceso restringido<br />Buen intento!');

function mostrarMensaje($mensaje)
{
	echo "Bienvenido este es su mensaje impreso adentro de una funcion: ".$mensaje;
}

class GestorDB{
	
	public static function mostrarRegistros(){
		$db = JFactory::getDbo();
		$consulta = $db->getQuery(true); 
		$consulta->select('*'); 
		$consulta->from($db->quoteName('#__PUESTO'));
		$consulta->order('COD_PUESTO ASC'); 
		$db->setQuery($consulta); 
		$resultado = $db->loadRowList();
		return $resultado;		
	}	
	
	public static function insertarRegistro($NOMBRE_PUESTO, $TIPO_EMPRESA,$TAMANO){
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		$columns = array('NOMBRE_PUESTO', 'CANTIDAD_PUESTO');
		$values = array($db->quote($NOMBRE_PUESTO), $db->quote($CANTIDAD_PUESTO));
		$query
			->insert($db->quoteName('#__PUESTO'))
			->columns($db->quoteName($columns))
			->values(implode(',', $values));
		$db->setQuery($query);
		$resultado = $db->query();
		return $resultado;
	}
	
}

?>