<div class="dashboard-wrapper">

  <div class="MostrarGrupos App1">

    <div class="col-xl-12 col-lg-12  col-sm-12 ">
      <br>
      <br>
      <h2 id="Titulo" class="text-center">MAESTRO DE CLIENTES</h2>
     
        <div class="card">
          <div class="card-header">

          </div>
          <div class="card-body">
            <form action="#" method="POST" class="form-horizontal form11">
              <div class="container">
                <div class="row">
                  <div class="form-group col-lg-4 col-md-4 col-sm-6">
                      <label for="codigo" required="" class="col-form-label">CODIGO</label>
                        <input type="text" class="form-control" autocomplete="off" id="codigo" name="codigo">
                  </div>
                  <div class="form-group  col-lg-4 col-md-4 col-sm-6">
                      <label for="nombre" class=" col-form-label">NOMBRE</label>
                        <input type="text" required="" autocomplete="off" class="form-control" id="nombre"
                    name="nombre">
                  </div>
                  <div class="form-group  col-lg-4 col-md-4 col-sm-6">
                      <label for="tipoC" class="col-form-label">TIPO DE CLIENTES</label>
                        <select required="" class="mostrarTipoV form-control" name="tipoC" id="tipoC">
                    </select>
				  </div>	  
			</div>
                  <div class="form-group d-flex justify-content-center col-12">
                        <br>
                        <button type="submit" class="btn btn-success botonB">
						  Buscar... <span><i class="fas fa-search"></i></span>
                        </button>
                    </div>
                 


             

              </div>


            </form>
          </div>
        </div>
      


      <div class="card">
        <div class="card-header">
          <form class="form-inline">
            <h4 style="margin-top:12px">NOMBRE DE LOS CLIENTES</h4>

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
				  <th width="8%" scope="col">NOMBRE</th>
				  <th scope="col">CODIGO</th>
				  <th scope="col">TELÉFONO</th>
                  <th scope="col">TIPO DE CLIENTE</th>
                  <th scope="col">LIMITE</th>
				  <th scope="col">BALANCE</th>
				  <th scope="col">VENCIDA</th>
				  <th scope="col">VENDEDOR</th>
				  <th scope="col">CIUDAD</th>
				  <th scope="col">ZONA</th>
				  <th scope="col">CONTACTO</th>
				  
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





</div>
