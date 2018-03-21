<?php include('conexion_sis.php'); ?>

<div class="table-responsive">

		<table class="table">
			<h5>Viajes en Curso</h5>
				<thead class=" text-primary">
						<th>
								Placas
						</th>
						<th>
								Vehiculo
						</th>
						<th>
								Destino
						</th>
						<th class="text-right">
								
						</th>
				</thead>
				<tbody>

					<?php

					$consulta = "SELECT DESPROD,CAJAS,UNIDADES,CONCAT('Q',CAST(COSTO AS MONEY)) AS COSTO FROM mov_inventarios ORDER BY ID";

					$ejecutar = sqlsrv_query($connn, $consulta);

					$i = 0;

					while($fila = sqlsrv_fetch_array($ejecutar)){
					$desprod = $fila['DESPROD'];
					if ($nivel==1){
						$cajas = $fila['CAJAS'];
						$unidades = $fila['UNIDADES'];
						$costo= $fila['COSTO'];
					} else { 
						$cajas = 'Disponible';
						$unidades = '---';
						$costo='---'; 
							}					
					$i++;

					?>

					<tr>

					<td><?php echo $desprod; ?></td>
					<td class="text-center"><?php echo $cajas; ?></td>
					<td class="text-center"><?php echo $unidades; ?></td>
					<td class="text-right"><button type="button" class="btn btn-warning">+</button></td>

					</tr>

					<?php } ?>

				</tbody>
		</table>

</div>
