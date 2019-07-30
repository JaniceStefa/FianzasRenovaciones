<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Page-->
    <title>Clientes</title>
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
                                <h3 class="title-5 m-b-35">Detalle de Empresa: </h3>
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
                                    <table class="table table-data2 table-striped" >
                                        <thead class="table-earning">
                                            <tr>
                                                <th>Poliza</th>
                                                <th>Fecha de emisión</th>
                                                <th></th>
                                                <th></th>
                                                <th> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="spacer"></tr>
                                            <?php

                                              foreach ($this->modelo->Consultar_Archivos($_GET['id']) as $registro) {?>
                                                <button type="button" class="btn-success" onClick="cfscan('<?php echo $registro['archivo'] ?>');"><img src="../images/icon/<?php echo $registro['prioridad']?>.png"></button>
                                                <br/><br/>
                                              <?php 
                                            }
                                              ?>
                                            foreach($this->modelo->Mostrar_Empresa() as $registro){
                                                echo "<tr class='tr-shadow'>";
                                                echo "<td>".$registro["ruc_empresa"]. "</a></td>";
                                                echo "<td>".$registro["nombre_empresa"]. "</td>";
                                                echo "<td> <span class='block-email'>".$registro["contacto_email"]. "</span></td>";
                                                echo "<td>".$registro["contacto_telefono"]. "</td>";
                                                echo "<td>";                                              
                                                ?>
                                                <div class="table-data-feature">
                                                <button type="button" class="btn btn-info item" data-toggle="modal" data-target="#dataUpdate" title="Modificar" data-id="<?php echo $registro['id_empresa']?>" data-ruc="<?php echo $registro['ruc_empresa']?>" data-nombre="<?php echo $registro['nombre_empresa']?>" data-email="<?php echo $registro['contacto_email']?>" data-phone="<?php echo $registro['contacto_telefono'] ?>" ><i class='zmdi zmdi-edit'></i> </button>
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
<?php include 'complementos/scripts.php';?>   
<script src="../vista/empresa.js"></script>
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
<script src="../vista/empresa.js"></script>
</body>
</html>
<!-- end document-->
