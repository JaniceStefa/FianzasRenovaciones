<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Page-->
    <title>Cheques</title>
    <?php include 'complementos/head_pag.php';?>  
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <?php include 'complementos/header.php';?>            
        </header>
        <!-- END HEADER MOBILE-->
        <!-- MENU SIDEBAR-->
       <?php include 'complementos/menu.php';?>       
        <!-- END MENU SIDEBAR-->
        <!-- PAGE CONTAINER-->
        <div class="page-container" id="contenido">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <?php include 'complementos/header_desktop.php';?>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="title-5 m-b-35">CHEQUES ARCHIVADOS</h3>
                                <!--BOTONES DE CONTROL-->
                                <div class="table-data__tool">
                                    <!--EXPORTAR DOCUMENTOS-->
                                </div>
                                <!-- DATA TABLE -->
                                <div class="table-responsive table--no-card m-b-30">
                                    <table id="mytable" class=" table table-data2 table-striped" onmouseover="this.style.cursor='pointer';">
                                        <thead class="table-earning">
                                            <tr>
                                                <th>Número de Cheque</th>
                                                <th>Empresa</th>
                                                <th>Número Carta Fianza</th>
                                                <th>Monto</th>
                                                <th>Banco </th>
                                                <th>Fecha de giro</th>
                                                <th>Fecha a cobrar</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            
                                            foreach($this->modelo->Mostrar_cheque_archi() as $registro){
                                                echo "<tr class='tr-shadow'><td>".$registro["numero_cheque"]. "</td>";
                                                echo "<td>".$registro["nombre_empresa"]. "</td>";
                                                echo "<td>".$registro["cod_carta_fianza"]. "</td>";
                                                echo "<td> S/.".$registro["monto"]. "</td>";
                                                echo "<td>".$registro["banco"]. "</td>";
                                                echo "<td>".date('d/m/Y', strtotime($registro["fecha_giro"]))."</td>";
                                                echo "<td>".date('d/m/Y', strtotime($registro["fecha_cobrar"]))."</td>";
                                                echo "<td>"?>

                                                <div class="table-data-feature">
                                                <button type="button" class="btn btn-warning item" data-toggle="modal" data-target="#archivoCheque" title="Visualizar" data-id="<?php echo $registro['id_cheque']?>" ><i class='zmdi zmdi-eye' data-archive="<?php echo $registro['nombre_empresa']?>" ></i> </button>
                                                </div>

                                                </div>
                                                </td>
                                                <?php
                                             } ?>
                                             
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        <div class="row">
                            <?php include 'complementos/footer.php';?>    
                        </div>
                    </div>
                </div>
            </div>          

            <?php include 'modals/cheque_archi_adjuntar.php';?>
            </div>
        </div>
    </div>

<script>
    $(document).ready(function() {
    $('#mytable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf', 'print'
        ], 
        "paging": false,
        "language": {
            "paginate": {
              "previous": "Anterior",
              "next": "Siguiente"
            }
        }
    } );
    } );
</script>
<!-- Jquery JS-->
<!-- Jquery JS-->
<script src="../vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../vendor/slick/slick.min.js">
    </script>
    <script src="../vendor/wow/wow.min.js"></script>
    <script src="../vendor/animsition/animsition.min.js"></script>
    <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../assets/js/main.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script src="../assets/js/jquery.dataTables.min.js"></script>
<script src="../assets/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="../assets/js/buttons.html5.min.js"></script>
<script src="../assets/js/buttons.print.min.js"></script>
<link rel="stylesheet" type="text/css" href="../assets/css/buttons.dataTables.min.css">

<script src="../vista/archi1.js"></script>
</style>
</body>
</html>
<!-- end document-->
