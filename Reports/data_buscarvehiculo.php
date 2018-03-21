
<?php include('conexion_sis.php'); ?>

			<div class="table-responsive">
				   <table class="table"> <!--table-bordered" id="dataTable" width="100%" cellspacing="0">-->
						 		<h5>Listado de Precios</h5>
			              <thead>
			                    <tr>
			                      <th>Placas</th>
			                      <th>Descripción</th>
			                      <th>Destino</th>
			                      <th>...</th>
			                    </tr>
			              </thead>
			               <tfoot>
			                    <tr>
			                      <th></th>
			                      <th></th>
			                      <th></th>
			                      <th></th>
			                    </tr>
			               </tfoot>
			              <tbody>

			                <?php

											if(isset($_POST['filtro'])){

												$filtro = $_POST['filtro'];

												$consulta = "SELECT gen_precios.CODPROD, gen_productos.DESPROD, gen_precios.CODMEDIDA, CONCAT('Q',CAST(gen_precios.COSTO AS MONEY)) AS COSTO, CONCAT('Q',CAST(gen_precios.PRECIO AS MONEY)) AS PRECIO, gen_precios.LASTUPDATE
																		FROM gen_precios LEFT OUTER JOIN gen_productos ON gen_precios.CODPROD = gen_productos.CODPROD
																		WHERE (gen_productos.DESPROD LIKE '%$filtro%') order by gen_productos.CODPROD";
											
												$ejecutar = sqlsrv_query($connn, $consulta);

			                	$i = 0;

			                	while($fila = sqlsrv_fetch_array($ejecutar)){
			                	$codprod = $fila['CODPROD'];
			                	$desprod = $fila['DESPROD'];
			                	$codmedida = $fila['CODMEDIDA'];
			                	$precio = $fila['PRECIO'];
				                $i++;

			                	?>
			                		<tr>
				                		<td><?php echo $codprod; ?></td>
				                		<td><?php echo $desprod; ?></td>
				                		<td><?php echo $codmedida; ?></td>
				                		<td><button class="button button-danger"></td>
			                		</tr>
												<?php }}; ?>

			              </tbody>
			            </table>
			          </div>
