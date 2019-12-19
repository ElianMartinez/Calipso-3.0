<!-- Button to Open the Modal -->


<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Información</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        En este formulario es para agregar, modificar y eliminar la lista de BANCOS.
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
  </div>
</div>

<style>
  .container {
    margin-top: 30px;
  }

  .social {

    display: flex;
    float: right;
    /* Hacemos que la posición en pantalla sea fija para que siempre se muestre en pantalla*/
    /* Establecemos la barra en la izquierda */
    top: 400px;
    /* Bajamos la barra 200px de arriba a abajo */
    z-index: 2000;

    /* Utilizamos la propiedad z-index para que no se superponga algún otro elemento como sliders, galerías, etc */
  }

  .social ul {



    list-style: none;
  }

  .social ul li a {
    padding-bottom: 5px;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    display: inline-block;
    color: #fff;
    background: #000;
    text-decoration: none;
    /* Establecemos una transición a todas las propiedades */
  }

  .social ul li .icon-facebook {
    background: #3b5998;
  }

  /* Establecemos los colores de cada red social, aprovechando su class */
  .social ul li .icon-twitter {
    background: #00abf0;
  }

  .social ul li .icon-googleplus {
    background: #d95232;
  }

  .social ul li .icon-pinterest {
    background: #ae181f;
  }

  .social ul li .icon-mail {
    background: #666666;
  }

  .social ul li a:hover {
    background: #000;
    /* Cambiamos el fondo cuando el usuario pase el mouse */
    /* Hacemos mas grande el espacio cuando el usuario pase el mouse */
  }
</style>


<div class="dashboard-wrapper">
 


    
    <div class="MostrarGrupos">

 
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 App1">
          <br>
          <br>
        <h2 id="Titulo" class="text-center">MAESTRO DE BANCOS</h2>
          <div class="card">
            <div class="card-header">
              <form action="#" class="form-inline">
                <h4 style="margin-top:12px">NOMBRE DEL BANCO</h4>

                <button type="button" id="agregargrupo" class="btn btn-primary"
                  style="color:white; margin-left:30px "><i class="fas fa-plus-circle"></i> Agregar</button>
                  <button type="button" onclick="imprimir('<?php echo SERVERURL; ?>Vistas/assets/vendor/bootstrap/css/bootstrap.min.css','BANCOS')"  class="btn btn-dark imprimir"
                  style="color:white; margin-left:30px "><i class="fas fa-print"></i> Imprimir</button>



                

              </form>
            </div>
            <div class="card-body">
              <div class="table-responsive">

                <table id="example" border=1 cellspacing="0" bordercolor="#DCDCDC" class="table  display table-hover table-striped table-bordered" style="width:100%">
                  <thead>
                    <tr>
                      <th scope="col"># Banco</th>
                      <th scope="col">NOMBRE BANCO</th>
                      <th width="8%" scope="col">OPERACIONES</th>
                    </tr>
                  </thead>
                  <tbody >

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    

        <div class="Registrogrupos container  col-xl-11 col-lg-11 col-md-11 col-sm-10 col-10 App2">
            <div class="card">
              <div class="form-group">
                <div class="row">
                  <div style="margin-top:0px;" class="col" >
                    <button id="back" class="btn btn-dark"><i class="fas fa-arrow-left"></i></button>
                  </div>
                </div>
                <center>
                  <h5 class="col-xl-4 col-lg-6 col-md-9 display-7">AGREGAR BANCO</h5>
                </center>
            
         
          <div class="card-body border-top">



            <form class="FormularioAjaxNuevo FormularioAjax " id="Form" data-form="save"
              action="<?php echo SERVERURL;?>Ajax/BancoAjax.php" method="POST">
                

              <div class="form-group">
                <label>Nombre de Bancos</label>
                <input id="inputUserName" type="text" required name="nombre" data-parsley-trigger="change"
                  placeholder="Introduzca el Nombre del Banco" autocomplete="off" class="form-control ">
              </div>

              <input style="display:none" type="text" id="ID" name="ID" class="form-control">

              <div>
                
                <center> <button type="submit" class="btn btn-space btn-primary registrar">Guardar</button>
                  <button type="submit" class="btn btn-space btn-primary modificar">Modificar</button></center>

              </div>

              <div class="RespuestaAjax">



              </div>

            </form>
          </div>
        
        <div class="RespuestaAjax3">

        </div>

      </div>


    </div>
  </div>



  <script>

    $(document).ready(function () {

     
      MostrarDatos('<?php echo SERVERURL;?>Ajax/BancoAjax.php');

    });

    $("#back").click(function () {
     
      MostrarDatos('<?php echo SERVERURL;?>Ajax/BancoAjax.php');
      OcurtarApp2();
      $(".FormularioAjax")[0].reset();

    });








  </script>