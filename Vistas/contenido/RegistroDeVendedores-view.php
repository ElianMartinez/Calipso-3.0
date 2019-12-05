<div class="dashboard-wrapper">

  <div class="MostrarGrupos App1">

    <div class="col-xl-12 col-lg-10 col-md-10 col-sm-12 col-10 ">
      <br>
      <br>
      <h2 id="Titulo" class="text-center">MAESTRO DE VENDEDORES</h2>
      <div class="container">
        <div class="card">
          <div class="card-header">

          </div>
          <div class="card-body">
            <form action="#" method="POST" class="form-horizontal form11">
              <div class="container">
                <div class="row">
                  <div class="form-group form-group-sm  col-sm-6">
                    <div class="row">
                      <label for="first_name" required="" class="col-sm-7 col-form-label">CODIGO</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" autocomplete="off" id="codigo" name="codigo">
                      </div>
                    </div>
                  </div>

                  <div class="form-group form-group-sm 9 col-sm-6">
                    <div class="row">
                      <label for="Street" class="col-sm-7 col-form-label">NOMBRE</label>
                      <div class="col-sm-9">
                        <input type="text" required="" autocomplete="off" class="form-control" id="nombre"
                          name="nombre">
                      </div>
                    </div>
                  </div>
                  <div class="form-group form-group-sm  col-sm-6">
                    <div class="row">
                      <label for="last_name" class="col-sm-7 col-form-label">TIPO DE VENDEDOR</label>
                      <div class="col-sm-9">
                        <select required="" class="mostrarTipoV form-control" name="tipoV" id="tipoV">

                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group form-group-sm  col-sm-6">
                    <div class="row">
                      <label for="City" class="col-sm-7 col-form-label">SEXO</label>
                      <div class="col-sm-9 input-md">
                        <select name="Sexo" class="form-control" id="Sexo">
                          <option value="M">MASCULINO</option>
                          <option value="F">FEMENINO</option>
                        </select>
                        <br>
                        <button type="submit" class="btn btn-success botonB">
                          Buscar... <span><i class="fas fa-search"></i></span>
                      </div>

                    </div>
                  </div>


                </div>

              </div>


            </form>
          </div>
        </div>
      </div>


      <div class="card">
        <div class="card-header">
          <form class="form-inline">
            <h4 style="margin-top:12px">NOMBRE DE LAS VENDEDORES</h4>

            <button type="button" id="agregargrupo" class="btn btn-primary" style="color:white; margin-left:30px "><i
                class="fas fa-plus-circle"></i> Agregar</button>
            <button type="button"
              onclick="imprimir('<?php echo SERVERURL; ?>Vistas/assets/vendor/bootstrap/css/bootstrap.min.css','ZONAS','<?php echo COMPANY; ?>')"
              class="btn btn-dark imprimir" style="color:white; margin-left:30px "><i class="fas fa-print"></i>
              Imprimir</button>




            <div class="form-group mx-sm-3 mb-2">


            </div>
          </form>
        </div>
        <div class="card-body">
          <div class="table-responsive">



            <table id="example" border=1 cellspacing="0" bordercolor="#DCDCDC" class="display table table-hover"
              style="width:100%">
              <thead class="the">
                <tr>
                  <th width="8%" scope="col">CODIGO</th>
                  <th scope="col">TIPO DE VENDEDOR</th>
                  <th scope="col">NOMBRE</th>
                  <th scope="col">SEXO</th>
                  <th scope="col">CEDULA</th>
                  <th scope="col">ESTADO CIVIL</th>
                  <th width="8%" scope="col">OPERACIONES</th>
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



  <!--   Big container   -->
  <div class="Registrogrupos col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 App2">
    <div  class="card">
      <div class="form-group">
        <div class="row">
          <div style="margin-top:0px;" class="col">
            <button id="back" class="btn btn-dark"><i class="fas fa-arrow-left"></i></button>
          </div>
        </div>
        <center>
          <h5 class="col-xl-4 col-lg-8 col-md-9 display-7"><b class="TituloAE"></b> Vendedores</h5>
        </center>

      </div>
      <div class="card-body">

        <form class="FormularioAjaxNuevo" method="POST" action="<?php echo SERVERURL;?>Ajax/VendedoresAjax.php"  >
        <div class="row">
          <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12  form-group ">
            <label for="last_name" class="form-label">TIPO DE VENDEDOR</label>
            <select required="" class="mostrarTipoV form-control" name="tipoV" id="tipoV" required>

            </select>
          </div>
          <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 form-group">
            <label for="last_name" class="form-label">NOMBRE DE VENDEDOR</label>
            <input type="text" name="nombreV" id="nombreV" class="form-control "
              placeholder="Ingrese el nombre del vendedor" required>
          </div>
        </div>
        <hr style="color: #0056b2;" />

        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
            <label for="cedulaV">SEXO</label>
            <select name="Sexo" class="form-control" id="SexoV" required>
              <option value="M">MASCULINO</option>
              <option value="F">FEMENINO</option>
           </select>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
            <label for="estado_c">ESATDO CIVIL</label>
            <select name="estado_c" class="form-control" id="estado_c" required>
              <option value="C">CASADO</option>
              <option value="S">SORTERO</option>
            </select>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 form-group">
            <label for="cedulaV">CÉDULA</label>
            <input type="text" class="form-control"   name="cedulaV" id="cedulaV" pattern="[0-9]{3}[\-]{1}[0-9]{7}[\-]{1}[0-9]{1}" placeholder="xxx-xxxxxxx-x" required>
            <div class="invalid-feedback">
              
              </div>
          </div>
        </div>

          <br>
          .
        <button type="submit"  class="btn btn-success">Guardar  <i class="fas fa-plus"></i></button>
      </form>

      </div>


      
    </div>
  </div> <!--  big container -->
 
</div>


<script>



  $(".form11").on('submit', function (e) {


    e.preventDefault();

    var a = $('#example').DataTable();
    a.destroy();

    var nombre1 = $("#nombre").val();

    var tipoV1 = $("#tipoV").val();
    var sexo1 = $("#Sexo").val();
    console.log(sexo1);
    var table = $("#example").DataTable({
      "processing": false,
      "ServerSide": true,
      "order": [],

      "ajax": {
        url: "<?php echo SERVERURL;?>Ajax/VendedoresAjax.php",
        method: "POST",
        data: { tipoV: tipoV1, nombre: nombre1, sexo: sexo1, sas: "hola" }
      },
      "columnDefs": {
        "target": [0, 3, 4],
        "orderable": false,
      }
    });

  });

  $(document).ready(function () {
   
    MostrarDatos('<?php echo SERVERURL;?>Ajax/VendedoresAjax.php');
    let id = "sdsa";
    $.ajax({

      url: "<?php echo SERVERURL;?>Ajax/tipoVAjax.php",
      type: "POST",
      dataType: 'html',
      data: { Select: id },
    })
      .done(function (respuesta) {

        $(".mostrarTipoV").html(respuesta);

      })

      .fail(function () {
        console.log('error');
      });

  });

  $("#back").click(function () {

    OcurtarApp2();
    $(".FormularioAjax")[0].reset();

  });

  $(document).ready(function(){
    $("#cedulaV").mask("999-9999999-9"); 
});







(function() {
'use strict';
window.addEventListener('load', function() {
// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.getElementsByClassName('FormularioAjaxNuevo');
// Loop over them and prevent submission
var validation = Array.prototype.filter.call(forms, function(form) {
form.addEventListener('submit', function(event) {
if (form.checkValidity() === false) {
event.preventDefault();
event.stopPropagation();
}
form.classList.add('was-validated');
}, false);
});
}, false);
})();

</script>