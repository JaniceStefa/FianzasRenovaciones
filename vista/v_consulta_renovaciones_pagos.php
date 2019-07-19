<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Page-->
    <title>Cartas Fianzas Pendientes</title>
    <?php include 'complementos/head_pag.php';?>   
</head>

<body class="animsition" style="padding-right: 0px !important;">
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
                                <h3 class="title-5 m-b-35">RENOVACIONES - PAGOS </h3>
                                <!--BOTONES DE CONTROL-->
                                <div class="table-data__tool">
                                    <!--BUSQUEDA EN BASE DE DATOS-->                                  
                                    <!--EXPORTAR DOCUMENTOS-->
                                    <div class="table-data__tool-right">                                    
                                        <!-- Button trigger modal -->
                                        <!--<button id="btnmodificar" class="au-btn au-btn-icon au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>Modificar</button>-->
                                    </div>
                                </div>
                                <!-- DATA TABLE -->
                                <div class="table-responsive table--no-card m-b-30">
                                    <table id="mytable" class="table table-data2 table-striped" onmouseover="this.style.cursor='pointer';" onclick="fila();">
                                        <thead class="table-earning">
                                            <tr>
                                                <th>Poliza</th>
                                                <th>Empresa/Consorcio</th>
                                                <th>Estado</th>  
                                                <th>Importe</th>
                                                <th>Fecha Emisión</th>
                                                <th>Fecha Vencimiento</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php
                                            
                                            foreach($this->modelo->Consulta_Pagos() as $registro){ 
                                                echo "<tr class='tr-shadow'><td>".$registro["cod_cartafianza"]. "</td>";
                                                echo "<td>".$registro["nombre_empresa"]. "</td>";
                                                if ($registro["tramite_estado"] == 1)
                                                {
                                                    echo "<td>VIG</td>";?>
                                                    <script>$(function() {
                                                        var codigo = "<?php echo '$registro["cod_cartafianza"]' ?>";
                                                        $("table td:first-child:contains("+codigo+")")
                                                        .parents("tr")
                                                        .css("background-color", "rgba(172, 186, 212,0.7)");
                                                        });</script>

                                                    <?php
                                                }
                                                else
                                                {
                                                    echo "<td>CANC</td>";
                                                }
                                                echo "<td> S/.".$registro["total_fianza"]. "</td>";
                                                echo "<td>".date('d/m/Y', strtotime($registro["fecha_emision"]))."</td>";
                                                echo "<td>".date('d/m/Y', strtotime($registro["fecha_venc"])). "</td>";
                                                echo "<td>";
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
            <!-- MODALES -->    

            </div>
        </div>
    </div>
<?php include 'complementos/scripts.php';?>

<script src="../vista/fianzas.js"></script>

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
                "targets": [ 8 ],
                "visible": false,
                "searchable": false
                }
            ],
        "order": []
    } );
    } );
    $('#mytable').on('click', 'tbody tr', function(event) {
       
        $(this).addClass('highlight').siblings().removeClass('highlight');
    });
    $('#btnmodificar').click(function (){
        $('#modif').click();
    });
    function fila(){
        $('#btnmodificar').removeClass('au-btn--disabled');
        $('#btnmodificar').addClass('au-btn--blue');
        document.getElementById('btnmodificar').disabled=false  ; 
    }
    $('#btnmodificar').addClass('au-btn--disabled');
    document.getElementById('btnmodificar').disabled=true;   
</script>
<script>
    $(function() {
    var codigo = "<?php echo $cod;?>";
    $("table td:first-child:contains("+codigo+")")
    .parents("tr")
    .css("background-color", "rgba(172, 186, 212,0.7)");
    });
</script>

<!--JS para Tabla-->
<script src="../assets/js/jquery.dataTables.min.js"></script>
<script src="../assets/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="../assets/js/buttons.html5.min.js"></script>
<script src="../assets/js/buttons.print.min.js"></script>
<link rel="stylesheet" type="text/css" href="../assets/css/buttons.dataTables.min.css">
<style type="text/css">
    .table-striped tbody tr.highlight td { 
        background-color: #acbad4;
    }
    label.error{
        color:red;
    }
    .au-btn--disabled{
        background: #999;
        border: #d0d0d0;
        cursor: default;
    }
    .au-btn--disabled:hover{
        background: #999;
        border: #d0d0d0;
        cursor: default;
    }
    }
</style>
</body>
</html>
<!-- end document-->
