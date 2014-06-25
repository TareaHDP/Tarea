
<?php
// no direct access
defined('_JEXEC') or die('Acceso restringido<br />Buen intento!');

?>
<?php 
	echo "<div><h5>".$textBV."</h5></div>";
	if($res2){ JFactory::getApplication()->enqueueMessage('Se ha añadido exitosamente el registro<br/>Nombre: '.$NOMBRE_EMPRESA.'<br/>Tipo de empresa: '.$TIPO_EMPRESA.'<br/>Tamaño: ', '.$TAMAÑO'); }
?>
<form action="./" method="post">
	<input type="text" name="mensaje" placeholder="Ingrese un mensaje cualquiera">
    <input type="submit" value="Mostrar mensaje" />
</form>

<form action="./" method="post">
	<input type="text" name="NOMBRE_EMPRESA" placeholder="El nombre de la empresa" required="required"/>
    <input type="text" name="TIPO_EMPRESA" placeholder="El tipo de la empresa" required="required"/>
    <input type="submit" value="Guardar" />
</form>
<?php if($mensaje!=''){echo "<div><h5>".$mensaje."</h5></div>";}?>
<div>
    <table>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Tamano</th>
            </tr>
        <tbody>
        <?php 
		if(count($res)>0){
			foreach($res as $resultado){?>
        	<tr>
                <td><?php echo $resultado[0]?></td>
                <td><?php echo $resultado[1]?></td>
                <td><?php echo $resultado[2]?></td>
                <td><?php echo $resultado[3]?></td>
            </tr>
            <?php }
			}else{
				echo'<tr><td colspan="5"><i><strong>No hay registros que mostrar</strong></i></td></tr>';
		   }?>
		</tbody>
      </table>
</div>
<?php echo "<div><h5>".$textDesp."</h5></div>";?>

//------------------------------------------------------------------------------------------------------
<?php 
	echo "<div><h5>".$textBV."</h5></div>";
	if($res2){ JFactory::getApplication()->enqueueMessage('Se ha añadido exitosamente el registro<br/>Nombre: '.$nombre.'<br/>A la  tabla de pais', 'message'); }
?>

<form action="./" method="post">
	<input type="text" name="mensaje" placeholder="Ingrese un mensaje cualquiera">
    <input type="submit" value="Mostrar mensaje" />
</form>

<form action="./" method="post">
	<input type="text" name="nombre" placeholder="El nombre de la persona" required="required"/>
    
    <input type="submit" value="Guardar" />
</form>
<?php if($mensaje!=''){echo "<div><h5>".$mensaje."</h5></div>";}?>
<div>
    <table>
            <tr>
                <th>Numero</th>
                <th>Nombre</th>
             
            </tr>
        <tbody>
        <?php 
		if(count($res)>0){
			foreach($res as $resultado){?>
        	<tr>
                <td><?php echo $resultado[0]?></td>
                <td><?php echo $resultado[1]?></td>
                <td><?php echo $resultado[2]?></td>
            </tr>
            <?php }
			}else{
				echo'<tr><td colspan="5"><i><strong>No hay registros que mostrar</strong></i></td></tr>';
		   }?>
		</tbody>
      </table>
</div>
<?php echo "<div><h5>".$textDesp."</h5></div>";?>

//------------------------------------------------------------------------------------------------------

<?php 
	echo "<div><h5>".$textBV."</h5></div>";
	if($res2){ JFactory::getApplication()->enqueueMessage('Se ha añadido exitosamente el registro<br/>Nombre: '.$nombre.'<br/>A la  tabla de pais', 'message'); }
?>

<form action="./" method="post">
	<input type="text" name="mensaje" placeholder="Ingrese un mensaje cualquiera">
    <input type="submit" value="Mostrar mensaje" />
</form>

<form action="./" method="post">
	<input type="text" name="nombre" placeholder="El nombre de la persona" required="required"/>
    
    <input type="submit" value="Guardar" />
</form>
<?php if($mensaje!=''){echo "<div><h5>".$mensaje."</h5></div>";}?>
<div>
    <table>
            <tr>
                <th>Numero</th>
                <th>Nombre</th>
             
            </tr>
        <tbody>
        <?php 
		if(count($res)>0){
			foreach($res as $resultado){?>
        	<tr>
                <td><?php echo $resultado[0]?></td>
                <td><?php echo $resultado[1]?></td>
                <td><?php echo $resultado[2]?></td>
            </tr>
            <?php }
			}else{
				echo'<tr><td colspan="5"><i><strong>No hay registros que mostrar</strong></i></td></tr>';
		   }?>
		</tbody>
      </table>
</div>
<?php echo "<div><h5>".$textDesp."</h5></div>";?>
