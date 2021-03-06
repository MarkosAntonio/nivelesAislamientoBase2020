


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Base de datos</title>
  
    <link rel="shortcut icon" href="#" />  
  
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

   
   <link rel="stylesheet" type="text/css" href="plugins/animate.css/animate.css">
   <link rel="stylesheet" type="text/css" href="plugins/sweetAlert2/sweetalert2.min.css">



</head>
<body>

<!-- BARRA DE NAVEGACION -->

<?php include_once('barraNavegacion.php') ?>

  


<div class="container">

  <div class="row">

    <div class="col-md-4">
      <button type="" class="btn btn-primary btn btn-raised btn-info btn-lg">Commit</button>
    </div>

     <div class="col-md-4">
       <button type="" class="btn btn-primary btn btn-raised btn-success btn-lg">SavePoint</button>
    </div>

     <div class="col-md-4">
      <button type=""  class="btn btn-primary btn btn-raised btn-danger btn-lg">Rollback</button>  
    </div>
    
  </div>
  
</div>
        



<!-- TABLA -->
    <!-- TABLA PARA LECTURA COMPROMETIDA-->
   
               <table class="table table-bordered table-striped text-center" style="margin-top:20px;">
                  <thead>
                  <tr class="table-info">
           <!-- <th>idavion</th> -->
                     <th>Matricula</th>
                     <th>Fabricante</th>
                     <th>Modelo</th>
                     <th>Capacidad</th>
                     <th>Precio</th>
                     <th>Acciones</th>

                 </tr>
           </thead>
       <tbody>
     <?php
    include_once'conexion.php';

    $ver=$connect->query("SELECT * FROM avion ");
     while($row = mysqli_fetch_array($ver)) {
    ?>
      
          <tr>
                     
                     <td><?php echo $row['matricula'];?></td>
                     <td><?php echo $row['fabricante'];?></td>
                     <td><?php echo $row['modelo'];?></td>
                     <td><?php echo $row['capacidad'];?></td>
                     <td><?php echo $row['precio'];?></td>            
                    <td>
                       <a href="editarAvionSerializable.php?ir=<?php echo $row['idavion'];?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span> 
                        Editar
                       </a>

              
                      <a href="BorrarAvionSerializable.php?matar=<?php echo $row['idavion']; ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Borrar</a>
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

    
    <script src="plugins/sweetAlert2/sweetalert.min.js"></script>
    <script src="plugins/sweetAlert2/sweetalert2.all.min.js"></script>

    
  

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









