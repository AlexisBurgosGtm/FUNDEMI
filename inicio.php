
<?php include('Views/header.php'); ?>

            <div class="content">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <!--<h5 class="card-title">Inventario General</h5>-->
                            </div>
                            <div class="card-body">


                              <?php
                                //if(isset($_POST['filtro'])){
                                      include('Reports/data_viajes.php');
                                                         // } else {
                                 //     include('Reports/data_inventario.php');
                              //}
                              ?>


                            </div>
                        </div>

                    </div>

                </div>
            </div>

<?php include('Views/footer.php'); ?>
