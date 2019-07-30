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
                                <h3 class="title-5 m-b-35">Tabla Clientes - Empresas/Consorcios</h3>
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
                                                <a class="btn btn-warning item" title="Visualizar" href="../controlador/c_empresa.php?id=<?php echo $id?>"> <i class='zmdi zmdi-eye'></i> </a>
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
