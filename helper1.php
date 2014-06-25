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
		$consulta->from($db->quoteName('#__RUBRO'));  
		$consulta->order('COD_RUBRO ASC'); 
		$db->setQuery($consulta); 
                $resultado = $db->loadRowList(); 
                return $resultado;
	}	
	
	public static function insertarRegistro($NOMBRE_RUBRO, $DESC_RUBRO){ 
                $db = JFactory::getDbo();
                $query = $db->getQuery(true);
		$columns = array('NOMBRE_RUBRO', 'DESC_RUBRO'); 
		$values = array($db->quote($NOMBRE_RUBRO), $db->quote($DESC_RUBRO));
		$query
			->insert($db->quoteName('#__PUESTO'))
			->columns($db->quoteName($columns))
			->values(implode(',', $values));
		 
		// Set the query using our newly populated query object and execute it.
		$db->setQuery($query);
		$resultado = $db->query();
		return $resultado;
	}
	
}

?>