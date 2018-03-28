	<?php
		if (isset($title))
		{
	?>
<nav class="navbar navbar-default ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">GrSystem's</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="<?php echo $active_facturas;?>"><a href="carta_porte.php"><i class='glyphicon glyphicon-list-alt'></i> Carta Porte <span class="sr-only">(current)</span></a></li>
        <li><a href="#" data-toggle="modal" data-target="#exampleModal1"><i class='glyphicon glyphicon-envelope'></i> Manifiesto</a></li>
       <!-- <li class="<?php echo $active_Manifiesto;?>"><a href="manifiesto.php"><i class='glyphicon glyphicon-align-right'></i> Manifiesto <span class="sr-only">(current)</span></a></li>-->
        <li class="<?php echo $active_productos;?>"><a href="productos.php"><i class='glyphicon glyphicon-barcode'></i> Productos</a></li>
		<li class="<?php echo $active_clientes;?>"><a href="clientes.php"><i class='glyphicon glyphicon-user'></i> Clientes</a></li>
		<li class="<?php echo $active_usuarios;?>"><a href="usuarios.php"><i  class='glyphicon glyphicon-lock'></i> Usuarios</a></li>
    <li class="<?php echo $active_calendar;?>"><a href="calendar.php"><i  class='glyphicon glyphicon-calendar'></i> Calendario</a></li>
    <li class="<?php echo $active_conductores;?>"><a href="conductores.php"><i  class='glyphicon glyphicon-user'></i> Conductores</a></li>
    <li class="<?php echo $active_camiones;?>"><a href="camiones.php"><i  class='glyphicon glyphicon-bed'></i> Camiónes</a></li>
   <!-- <li class="<?php echo $active_camiones;?>"><a href="#"><i  class='glyphicon glyphicon-book'></i> Bitacóra</a></li>-->
   <li><a href="#" data-toggle="modal" data-target="#exampleModal"><i class='glyphicon glyphicon-envelope'></i> Bitacóra</a></li>
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mensaje de ITCONSULTORIA S.A. DE C.V.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Bitácora no se encuentra disponible en versiones de pruebas a version 1.1 !
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mensaje de ITCONSULTORIA S.A. DE C.V.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Manifiesto no se encuentra disponible por estas razónes :
              <br>
              - Crear un nuevo manifiesto no disponible.
              <br>
              - Exportar a formato PDF no disponible.
              <br>
              Favor de contactar Soporte Técnico ITCONSULTORIA S.A. de C.V.
              
              </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    
      </div>
    </div>
  </div>
</div>
       </ul>
      <ul class="nav navbar-nav navbar-right">
<!--      <li><a href="#" data-toggle="modal" data-target="#exampleModal"><i class='glyphicon glyphicon-envelope'></i> Soporte</a></li>-->
      
		<li><a href="login.php?logout"><i class='glyphicon glyphicon-off'></i> Salir</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	<?php
		}
	?>