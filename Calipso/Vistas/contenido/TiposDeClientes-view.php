<div class="dashboard-wrapper">

    <div class="MostrarGrupos App1">
    
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
          <br>
          <br>
        <h2 id="Titulo" class="text-center">Tipos de Clientes</h2>
          <div class="card">
            <div class="card-header">
              <form class="form-inline">
                <h4 style="margin-top:12px">Tipos de Clientes</h4>

                <button type="button" id="agregargrupo" class="btn btn-primary"
                style="color:white; margin-left:30px "><i class="fas fa-plus-circle"></i> Agregar</button>
                <button type="button" onclick="imprimir('TIPO DE CLIENTES','<?php echo COMPANY; ?>')"  class="btn btn-dark imprimir"
                style="color:white; margin-left:30px "><i class="fas fa-print"></i> Imprimir</button>




                <div class="form-group mx-sm-3 mb-2">

                  
                </div>
              </form>
            </div>
            <div class="card-body">
              <div class="table-responsive">

                <table id="example" border=1 cellspacing="0" bordercolor="#DCDCDC" class="table  display table-hover table-striped table-bordered" style="width:100%" >
                  <thead>
                    <tr>  
                      <th  scope="col">CODIGO</th>
                      <th scope="col">NOMBRE</th>
                      <th scope="col">TIPO</th>
                      <th  scope="col">OPERACIONES</th>
                    </tr> 
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

        <br>
<br>
    <div class="Registrogrupos col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 App2">
        <div class="card">
            <div class="form-group">
              <div class="row">
                <div style="margin-top:0px;" class="col" >
                  <button id="back" class="btn btn-dark"><i class="fas fa-arrow-left"></i></button>
                </div>
              </div>
              <center>
                <h5 class="col-xl-4 col-lg-6 col-md-9 display-7"><span class=" display-7 TituloAE badge badge-primary"></span> Tipo de Cliente</h5>
              </center>
          
       
        <div class="card-body border-top">

            <div class="form-group">

              <form class="FormularioAjaxNuevo FormularioAjax " data-form="save"
              action="<?php echo SERVERURL;?>Ajax/TipoVAjax.php" method="POST">
              <input type="text" name="ID" id="ID" style="display:none">
                <div class="form-row mb-8">
                  <div class="col-lg-6 col-md-6 col-sm-8 ">
                    <label>Nombre del tipo de Cliente</label>
                    <div class="input-group mb-3">
                      <input id="inputUserName"  type="text" name="nombre" required data-parsley-trigger="change"
                        placeholder="Introduzca el Nombre de la Zona" autocomplete="off" class="form-control ">
                    </div>
                  </div>
               
                </div>
                <input style="display:none" type="text" id="ID" name="ID" class="form-control">
                <div>
                   <button type="submit" class="btn btn-space btn-primary registrar">Guardar</button>
                    <button type="submit" class="btn btn-space btn-primary modificar">Modificar</button>
                </div>
                <div class="RespuestaAjax">



                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    <script>


        $(document).ready(function () {
        MostrarDatos('<?php echo SERVERURL;?>Ajax/TipoCAjax.php');
      
        
      });

      $("#back").click(function () {
        MostrarDatos('<?php echo SERVERURL;?>Ajax/TipoCAjax.php');
        OcurtarApp2();
        $(".FormularioAjax")[0].reset();

      });
    </script>