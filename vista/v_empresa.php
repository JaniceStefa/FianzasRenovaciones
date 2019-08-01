<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Page-->
    <title>Empresas / Consorcios</title>
    <?php include 'complementos/head_pag.php';?>   

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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
                                <h3 class="title-5 m-b-35">Empresas/Consorcios</h3>
                                <!--BOTONES DE CONTROL-->
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">   
                                    </div>
                                    <div class="table-data__tool-right">
                                        <!-- Button trigger modal -->
                                    </div>
                                </div>

                                <!-- DATA TABLE -->
                                <div class="table-responsive table-responsive-data2">
                                    <table id="mytable" class="table table-data2 table-striped" >
                                        <thead class="table-earning">
                                            <tr>
                                                <th>RUC Empresa</th>
                                                <th>Nombre Empresa</th>
                                                <th>Email</th>
                                                <th>Teléf.</th>
                                                <th> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="spacer"></tr>
                                            <?php
                                            foreach($this->modelo->Mostrar_Empresa() as $registro){
                                                echo "<tr class='tr-shadow'>";
                                                echo "<td>".$registro["ruc_empresa"]. "</a></td>";
                                                echo "<td>".$registro["nombre_empresa"]. "</td>";
                                                echo "<td> <span class='block-email'>".$registro["contacto_email"]. "</span></td>";
                                                echo "<td>".$registro["contacto_telefono"]. "</td>";
                                                echo "<td>";
                                                $id = $registro["id_empresa"];
                                                ?>
                                                <div class="table-data-feature">
                                                <button type="button" class="btn btn-info item" data-toggle="modal" data-target="#dataUpdate" title="Modificar" data-id="<?php echo $registro['id_empresa']?>" data-ruc="<?php echo $registro['ruc_empresa']?>" data-nombre="<?php echo $registro['nombre_empresa']?>" data-email="<?php echo $registro['contacto_email']?>" data-phone="<?php echo $registro['contacto_telefono'] ?>" ><i class='zmdi zmdi-edit'></i> </button>
                                                <button class="btn btn-warning item" title="Visualizar" onclick="window.open('../controlador/c_empresa_detalle.php?varid=<?php echo $id;?>', 'Generar reporte', 'toolbar=no, directories=no, location=no, menubar=no, scrollbars=yes, statusbar=no, tittlebar=no, width=800, height=750');"> <i class='zmdi zmdi-eye'></i> </button>
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
          
            <?php include("modals/agregar_empresa.php");?>
            <?php include("modals/modif_empresa.php");?>
            <?php include("modals/eliminar_empresa.php");?>
        </div>
    </div>
<script src="../vista/empresa.js"></script>
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
        },
        "columnDefs": [
                {
                "targets": [ 7 ],
                "visible": false,
                "searchable": false
                }
            ],
        "order": []
    } );
    } );
</script>
<!--VALIDACION DE CAMPOS -->
<script >
$(function() {
  $("#newModalForm").validate({
    rules: {
      txtruc: {
        required: true,
      },
      txtempresa: {
        required: true,
      },
      txtdni: {
        required: true,
      },
      txtapellido: {
        required: true,
      },
      txtnombre: {
        required: true,
      },
      txtemail: {
        required: true,
      },
      txttelef: {
        required: true,
      },
    },
    messages: {
      txtruc: {
        required: "Ingrese datos válidos",
      },
      txtempresa: {
        required: "Ingrese datos válidos",
      },
      txtdni: {
        required: "Ingrese datos válidos",
      },
      txtapellido: {
        required: "Ingrese datos válidos",
      },
      txtnombre: {
        required: "Ingrese datos válidos",
      },
      txttelef: {
        required: "Ingrese datos válidos",
      },
      txtemail: {
        required: "Ingrese datos válidos",
      },
    }
  });
});
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


</body>
</html>
<!-- end document-->
