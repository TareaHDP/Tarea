<?php 
defined('_JEXEC') or die('Acceso restringido<br />Buen intento!');

function mostrarMensaje($mensaje)
{
	echo "Bienvenido este es su mensaje impreso adentro de una funcion: ".$mensaje;
}

class GestorDB{
	
	public static function mostrarRegistros(){
		$db = JFactory::getDbo(); // Una nueva instanacia de la base de datos
		$consulta = $db->getQuery(true);  //Le decimos que le asigne un objeto de tipo consulta a la variable $consulta
		$consulta->select('*'); // Le decimos que seleccione todos los campos
		$consulta->from($db->quoteName('#__EMPRESA'));  /*el $db->quoteName('nombre_tabla') es una funcion que le va a agregar comillas de tipo nombre al parametro adentro de las comillas simple, eso se hace asi por seguridad para prevenir SQL Inyections
		
	El formato #__tabla (numeral guionBajo guionBajo, si son dos guiones bajos) se usa para joomla reconozca que es una tabla adentro de joomla, y con el #_ joomla detectara el prefijo que ha sido asignado a sus tablas ya que todas las instalaciones de joomla tienen prefijos diferentes en sus tablas, y con ese formato se solventa la portabilidad del modulo (que se puede instalar en cualquier joomla desde la version 2.5 en adelante)
*/
		$consulta->order('COD_EMPRESA ASC'); // Esta linea es opcional, si se la quitamos no pasa nada, aqui estamos diciendo que los resultados los muestre ordenados por el campo usuario descendientemente, se puede usario cualquier campo de la tabla y se puede ordenar ASC (ascendientemente) y DESC (descendientemente) 
		$db->setQuery($consulta); // ejecutamos la consulta con los parametros ya definidos anteriormente
		$resultado = $db->loadRowList(); //guardamos el resultado devuelto por loadRowList() y lo almacenamos en $resultado, el tipo de dato es una matriz
		return $resultado;		//retornamos la matriz
	}	
	
	public static function insertarRegistro($NOMBRE_EMPRESA, $TIPO_EMPRESA,$TAMANO){
		// Get a db connection.
		$db = JFactory::getDbo();
		 
		// Create a new query object.
		$query = $db->getQuery(true);
		 
		// Insert columns.
		$columns = array('NOMBRE_EMPRESA', 'TIPO_EMPRESA','TAMANO');
		 
		// Insert values.
		$values = array($db->quote($NOMBRE_EMPRESA), $db->quote($TIPO_EMPRESA), $db->quote($TAMANO));
		 
		// Prepare the insert query.
		$query
			->insert($db->quoteName('#__EMPRESA'))
			->columns($db->quoteName($columns))
			->values(implode(',', $values));
		 
		// Set the query using our newly populated query object and execute it.
		$db->setQuery($query);
		$resultado = $db->query();
		return $resultado;
	}
	
}

?>