<?php include('conexion_sis.php'); ?>

<div class="table-responsive">

		<table class="table">
			<h5>Inventario General</h5>
				<thead class=" text-primary">
						<th>
								Puesto
						</th>
						<th>
								Nombre
						</th>
						<th>
								Teléfonos
						</th>
						<th>
								Whatsapp
						</th>
				</thead>
				<tbody>

					<?php

					$consulta = "";

					$ejecutar = sqlsrv_query($connn, $consulta);

					$i = 0;

					while($fila = sqlsrv_fetch_array($ejecutar)){
						$puesto = $fila['DESPUESTO'];
						$nombre = $fila['NOMCONTACTO'];
						$telefonos = $fila['TELEFONOS'];
						$whatsapp= $fila['WHATSAPP'];
						$i++;

					?>

					<tr>

					<td><?php echo $desprod; ?></td>
					<td class="text-center"><?php echo $cajas; ?></td>
					<td class="text-center"><?php echo $unidades; ?></td>
					<td class="text-right"><?php echo $costo; ?></td>

					</tr>

					<?php } ?>

				</tbody>
		</table>

</div>
