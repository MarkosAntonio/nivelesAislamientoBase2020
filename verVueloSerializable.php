
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Base de datos</title>
  

  
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" type="text/css" href="librerias/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="librerias/materialbootstrap/materialicons.css">
    <link rel="stylesheet" type="text/css" href="librerias/materialbootstrap/bootstrap-material-design.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertify/css/themes/default.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertify/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertify/alertify.min.js">



</head>
<body>

<!-- BARRA DE NAVEGACION -->


<?php include_once('barraNavegacion.php') ?>


<div class="container">

  <div class="row">

    <div class="col-md-4">
      <a href="commit_vuelo.php">
      <button type="" class="btn btn-primary btn btn-raised btn-info btn-lg">Commit</button>
    </a>
    </div>

     <div class="col-md-4">
      <a href="save_pointVuelo.php">
       <button type="button" id="btnSave_point" class="btn btn-primary btn btn-raised btn-success btn-lg">SavePoint</button>
     </a>
    </div>

     <div class="col-md-4">
      <a href="rollbackVuelo.php">
      <button type="button"  class="btn btn-primary btn btn-raised btn-danger btn-lg">Rollback</button> 
      </a> 
    </div>
    
  </div>
  
</div>
        


<!-- TABLA -->
    <!-- TABLA PARA LECTURA COMPROMETIDA-->
    
               <table class="table table-bordered table-striped text-center" style="margin-top:20px;">
                  <thead>
                  <tr class="table-info">
           <!-- <th>idavion</th> -->
                     <th>Avion</th>
                     <th>Pais Origen</th>
                     <th>Pais destino</th>
                     <th>Acciones</th>

                 </tr>
           </thead>
       <tbody>
        <?php
    include_once'conexion.php';

    $ver=$connect->query("SELECT * FROM vuelo");
     while($row = mysqli_fetch_array($ver)) {
    ?>
    
      
          <tr>
           
                     <td><?php echo $row['idavion']; ?></td>
                     <td><?php echo $row['origen']; ?></td>
                     <td><?php echo $row['destino']; ?></td>
                               
                    <td>
                       <a href="editarVuelosSerializable.php?ir=<?php echo $row['idvuelo'];?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span> 
                        Editar
                       </a>

              
                      <a href="BorrarVueloSerializable.php?matar=<?php echo $row['idvuelo']; ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Borrar</a>
                    </td>
                     <?php
                }
                    ?>
          
          </tr>
        
        </tbody>
      </table>


      

  <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/slick.min.js"></script>
   

    
  

    <script src="js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });

    </script>

    <script src="librerias/jquery-3.2.1.min.js"></script>
    <script src="librerias/alertify/alertify.js"></script>
    <script src="librerias/alertify/alertify.min.js"></script>
    <script src="librerias/materialbootstrap/popper.js"></script>
    <script src="librerias/materialbootstrap/bootstrap-material-design.js"></script>
</body>
</html>









