<?php 
$peticionAjax = false;
include './Controladores/permisosControlador.php'; 
$login = new PermisosControlador();
$role =  $_SESSION["role"];



?>

 

<div class="nav-left-sidebar sidebar-dark" >
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Home</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                           
                          
                            
   
    
    
                            
                         
                                Categorias
                            </li>
                            <br><li class="nav-item ">
                                <a <?php echo $login->Inicio_Permisos($role,"MAESTROS") ?> class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>MAESTROS <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a <?php echo $login->Inicio_Permisos($role,"INVENTARIO"); ?> class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2"><i class="fas fa-warehouse"></i>  INVENTARIO</a>
                                            <div id="submenu-1-2" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"REGISTRO DE INVENTARIO"); ?> class="nav-link" href="/RegistroDeInventario/"></i> Registro de Inventario</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"TIPOS DE ARTICULOS / SUB TIPOS"); ?> class="nav-link" href="/TiposDeArticulosSubtipos/">Tipos de Articulos /Sub-Tipos</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"ALMACEN"); ?> class="nav-link" href="/Almacenes/">Almacenes</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"MARCAS"); ?> class="nav-link" href="Marcas/">Marcas</a>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                          <a <?php echo $login->Inicio_Permisos($role,"CLIENTES"); ?> class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2-2" aria-controls="submenu-2-2"><i class="fas fa-users"></i> CLIENTES</a>
                                            <div id="submenu-2-2" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"REGISTRO DE CLIENTES"); ?> class="nav-link" href="/RegistroDeClientes/">Registro de Clientes</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"TIPOS DE CLIENTES"); ?> class="nav-link" href="/TiposDeClientes/">Tipos de Clientes</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a <?php echo $login->Inicio_Permisos($role,"VENDEDORES"); ?> class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3-1" aria-controls="submenu-3-1"><i class="fas fa-id-card-alt"></i>VENDEDORES</a>
                                            <div id="submenu-3-1" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"REGISTRO DE VENDEDORES"); ?>  class="nav-link" href="/RegistroDeVendedores/">Registro de Vendedores</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"TIPOS DE VENDEDORES"); ?> class="nav-link" href="/TiposDeVendedores/">Tipos de Vendedores</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a  <?php echo $login->Inicio_Permisos($role,"SUPLIDORES"); ?> class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3-2" aria-controls="submenu-3-2"><i class="fas fa-truck-loading"></i>SUPLIDORES</a>
                                            <div id="submenu-3-2" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"REGISTRO DE SUPLIDORES"); ?> class="nav-link" href="/RegistroDeSuplidores/">Registro de Suplidores</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"TIPOS DE SUPLIDORES"); ?>  class="nav-link" href="/TiposDeSuplidores/">Tipos de Suplidores</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <li class="nav-item">
                                           <a <?php echo $login->Inicio_Permisos($role,"CONTABILIDAD"); ?> class="nav-link" href="/Contabilidad/"><i class="fas fa-id-card"></i>Contabilidad</a>
                                        </li>
                                        <a  <?php echo $login->Inicio_Permisos($role,"OTROS_M"); ?> class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-9-2" aria-controls="submenu-9-2"><i class="fas fa-calendar-plus"></i>Otros</a>
                                            <div id="submenu-9-2" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"BANCOS"); ?> class="nav-link" href="/BANCOS/">Bancos</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"ZONAS"); ?>  class="nav-link" href="/ZONAS/">Zonas</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"CUIDADES"); ?>  class="nav-link" href="/CUIDADES/">Cuidades</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"IMPUESTOS"); ?>  class="nav-link" href="/IMPUESTOS/">Impuestos</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <br><li class="nav-item">
                                <a <?php echo $login->Inicio_Permisos($role,"OPERACIONES"); ?> class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fas fa-th-large"></i></i>OPERACIONES</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                             <li class="nav-item">
                                            <a <?php echo $login->Inicio_Permisos($role,"VENTAS"); ?> class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4-1" aria-controls="submenu-4-1"><i class="fas fa-cart-arrow-down"></i></i>Ventas</a>
                                            <div id="submenu-4-1" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"VENTAS CONTADO"); ?> class="nav-link" href="/VentasContados/">Ventas Contado</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"VENTAS CREDITO"); ?> class="nav-link" href="/VentasCreditos/">Ventas Creditos</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"CUADRE DE CAJA"); ?> class="nav-link" href="/CuadreDeCaja/">Cuadre de caja</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a  <?php echo $login->Inicio_Permisos($role,"COTIZACIONES"); ?> class="nav-link" href="/Cotizaciones/">Cotizaciones</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"PREVENTAS AL CONTADO"); ?> class="nav-link" href="/PreventasAlContado/">Preventas al Contado</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"PREVENTAS A CREDITO"); ?> class="nav-link" href="/PreventasACrédito/">Preventas a Crédito</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"ORDEN DE PEDIDO"); ?>  class="nav-link" href="/OrdenDePedido/">Orden de Pedido </a>
                                                    </li>
                                                </ul>

                                            </div>
                                        </li>
                                           
                                        </li>
                                        <li class="nav-item">
                                            <a <?php echo $login->Inicio_Permisos($role,"CUENTAS POR COBRAR"); ?> class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4-2" aria-controls="submenu-4-2"><i class="fas fa-calculator"></i>Cuentas por cobrar</a>
                                            <div id="submenu-4-2" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                       <li class="nav-item">
                                            <a <?php echo $login->Inicio_Permisos($role,"INGRESOS"); ?> class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4-3" aria-controls="submenu-4-3"><i class="fas fa-cart-arrow-down"></i>Ingresos</a>
                                            <div id="submenu-4-3" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"RECIBOS NORMALES"); ?> class="nav-link" href="/RecibosNormales/">Recibos Normales</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"PAGOS CON TARJETA"); ?> class="nav-link" href="/PagosConTarjeta/">Pagos con Tarjeta</a>
                                                               <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"RECIBOS DE AVANCES"); ?> class="nav-link" href="/RecibosDeAvances/">Recibos de Avances</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"INGRESO POR TARJETA"); ?> class="nav-link" href="/IngresoXTarjeta/">Ingreso x Tarjeta</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"PREVENTAS AL CONTADO"); ?> class="nav-link" href="/PreventasAlContado1/">Preventas al Contado</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"OTROS INGRESOS"); ?> class="nav-link" href="/OtrosIngresos/">Otros Ingresos</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"REIMPRIMIR RECIBO"); ?> class="nav-link" href="/ReimprimirRecibo/">Reimprimir Recibo</a>
                                                    </li>
                                                </ul>
                                                
                                            </div>
                                        </li>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a  <?php echo $login->Inicio_Permisos($role,"NOTA DE DEBITO"); ?> class="nav-link" href="/NotaDeDebito/"><i class="fas fa-id-card"></i>Nota de Debito</a>
                                                               <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"NOTA DE CREDITO"); ?> class="nav-link" href="/NotaDeCredito/"><i class="fas fa-sticky-note"></i>Nota de Credito</a>
                                                    </li>
                                                     <a <?php echo $login->Inicio_Permisos($role,"OTROS"); ?> class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4-4" aria-controls="submenu-4-4"><i class="fas fa-calendar-plus"></i>Otros</a>
                                            <div id="submenu-4-4" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"CREDITOS POR APLICAR"); ?> class="nav-link" href="/CreditosXAplicar/">Creditos x Aplicar</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"AVANCES PENDIENTES"); ?> class="nav-link" href="/AvancesPendientes/">Avances Pendientes</a>
                                                </ul>
                                                
                                            </div>
                                        </li>
                                                     <a <?php echo $login->Inicio_Permisos($role,"REIMPRESION"); ?> class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4-5" aria-controls="submenu-4-5"><i class="fas fa-cart-arrow-down"></i></i>Reimpresion</a>
                                            <div id="submenu-4-5" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"NOTAS DE DEBITO"); ?> class="nav-link" href="/NotasDeDebito/">Notas de Debito </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"NOTAS DE CREDITO"); ?> class="nav-link" href="/NotasDeCredito/">Notas de Creditos</a>
                                                    </li>
                                                </ul>
                                                
                                            </div>
                                        </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"NOTA DE DEBITO SIN NCF"); ?> class="nav-link" href="/NotaDeDebitoSinNCF/"><i class="fas fa-sticky-note"></i>Nota de Debito sin NCF</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"NOTA DE CREDITO SIN NCF"); ?> class="nav-link" href="/NotaDeCreditoSinNCF/"><i class="fas fa-sticky-note"></i>Nota de Credito sin NCF</a>
                                                    </li>
                                                </ul>
                                                
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                       <a <?php echo $login->Inicio_Permisos($role,"COTIZACIONES"); ?> class="nav-link" href="/Cotizaciones1/"><i class="fas fa-book"></i>Cotizaciones</a>
                                       </li>
                                    </ul>
                                </div>
                            </li>
                            <br><li class="nav-item">
                                <a <?php echo $login->Inicio_Permisos($role,"REPORTES"); ?> class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fab fa-readme"></i>CONSULTAS Y REPORTES</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a <?php echo $login->Inicio_Permisos($role,"COTIZACIONES2"); ?> class="nav-link" href="/Cotizaciones2/"><i class="fas fa-book"></i>Cotizaciones</a>
                                        </li>
                                        <li class="nav-item">
                                            <a <?php echo $login->Inicio_Permisos($role,"ORDEN DE VENTAS"); ?> class="nav-link" href="/OrdenDeVentas/"><i class="fas fa-money-bill-alt"></i>Orden de Ventas</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5-1" aria-controls="submenu-5-1"><i class="fas fa-id-card-alt"></i>Punto de ventas</a>
                                            <div id="submenu-5-1" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"VENTAS POR CUADRAR"); ?> class="nav-link" href="/VentasPorCuadrar/">Ventas por Cuadrar</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"VENTAS DEL DIA"); ?> class="nav-link" href="/VentasDelDia/"> Ventas del Dia</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"FACTURAS EMITIDAS"); ?> class="nav-link" href="/FacturasEmitidas/"> Facturas Emitidas </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"DEVOLUCION DE MERCANCIA"); ?> class="nav-link" href="/DevolucionDeMercancia/">Devolucion de Mercancia</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"CREDITOS POR APLICAR"); ?> class="nav-link" href="/CreditosPorAplicar/">Creditos por Aplicar</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"TRANSACCIONES DIARIAS"); ?> class="nav-link" href="/TransaccionesDiarias/">Transacciones Diarias</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"TRANSACCIONES DE PAGO POR CUADRAR"); ?>  class="nav-link" href="/TransaccionesDePagoPorCuadrar/">Transacciones de Pago por Cuadrar</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"TRANSACCIONES GRALES"); ?> class="nav-link" href="/TransaccionesGrales/">Transacciones Grales </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a <?php echo $login->Inicio_Permisos($role,"CUENTAS POR COBRAR"); ?> class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5-2" aria-controls="submenu-5-2"><i class="fas fa-closed-captioning"></i>Cuentas por Cobrar</a>
                                            <div id="submenu-5-2" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"DOCUMENTOS PENDIENTES"); ?> class="nav-link" href="/DocumentosPendientes/">Documentos Pendientes</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"ESTADO DE CUENTAS"); ?>  class="nav-link" href="/EstadoDeCuentas/">Estado de Cuentas</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"HISTORIAL DEL CLIENTE"); ?>  class="nav-link" href="/HistorialDelCliente/"> Historial del Cliente</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"FACTURAS EMITIDAS"); ?>  class="nav-link" href="/FacturasEmitidas/">Facturas  Emitidas</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <a <?php echo $login->Inicio_Permisos($role,"RECIBOS DE INGRESOS"); ?> class="nav-link" href="/RecibosDeIngresos/">Recibos de Ingresos</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <a <?php echo $login->Inicio_Permisos($role,"DEVOLUCION DE MERCANCIAS DIARIAS"); ?> class="nav-link" href="/DevolucionMercanciasDiarias/">Devolucion Mercancias Diarias</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"ANULACION DE FACTURAS"); ?> class="nav-link" href="/AnulacionDeFacturas/">Anulacion de Facturas</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"CREDITOS POR APLICAR"); ?> class="nav-link" href="/CreditosPorAplicar/">Creditos por Aplicar</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a  <?php echo $login->Inicio_Permisos($role,"AVANCES PENDIENTES"); ?> class="nav-link" href="/AvancesPendientes/">Avances Pendientes</a>
                                                        <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"CHEQUES DEVUELTOS CXC"); ?> class="nav-link" href="/ChequesDevueltosCXC/">Cheques Devueltos CXC</a>
                                                        <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"TRANSACCIONES DIARIAS"); ?> class="nav-link" href="/TransaccionesDiarias/">Transacciones Diarias</a>
                                                        <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"BALANCE GENERAL"); ?> class="nav-link" href="/BalanceGeneral/">Balance General</a>
                                                </ul>
                                            </div>
                                        <li class="nav-item">
                                            <a <?php echo $login->Inicio_Permisos($role,"MISCELANEOS"); ?> class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5-3" aria-controls="submenu-5-3"><i class="fas fa-hand-holding-usd"></i> Miscelaneos</a>
                                            <div id="submenu-5-3" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"EXISTENCIA DE ARTICULOS"); ?> class="nav-link" href="/ExistenciadeArticulos/">Existencia de Articulos </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"DETALLES DE CLIENTES"); ?> class="nav-link" href="/DetallesdeClientes/"> Detalles de Clientes</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"ARTICULOS POR CLIENTE"); ?> class="nav-link" href="/ArticulosporCliente/">Articulos por Cliente</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"VENTAS POR ARTICULOS"); ?> class="nav-link" href="/VentasporArticulos/">Ventas por Articulos</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"BENEFICIO DE ARTICULOS"); ?> class="nav-link" href="/BeneficiodeArticulos/">Beneficio de Articulos</a>
                                                    </li>

                                                    </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a <?php echo $login->Inicio_Permisos($role,"COTIZACIONES-3006"); ?> class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5-4" aria-controls="submenu-5-4"><i class="fas fa-book"></i>Cotizaciones</a>
                                            <div id="submenu-5-4" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"POR CLIENTES"); ?> class="nav-link" href="/PorClientes/">Por Clientes</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"POR ARTICULOS"); ?> class="nav-link" href="/PorArticulos/">Por Articulos</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"POR CIUDAD"); ?> class="nav-link" href="/PorCuidad/">Por Cuidad</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"GENERAL"); ?> class="nav-link" href="/General/">General</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <li class="nav-item">
                                            <a <?php echo $login->Inicio_Permisos($role,"PUNTO DE VENTAS"); ?> class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5-5" aria-controls="submenu-5-5"><i class="fas fa-certificate"></i>Punto de Ventas</a>
                                            <div id="submenu-5-5" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"FACTURA EMITIDAS"); ?> class="nav-link" href="/FacturaEmitidas/">Factura Emitidas</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"POR ARTICULOS"); ?> class="nav-link" href="/PorArticulos1/">Por Articulos</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"CREDITOS POR APLICAR"); ?> class="nav-link" href="/CreditosporAplicar2/">Creditos por Aplicar</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"TRANSACCIONES DIARIA IT1"); ?> class="nav-link" href="/TransaccionesDiariaIT1/">Transacciones Diaria IT1</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"TRANSACCIONES DIARIA IT1"); ?>  class="nav-link" href="/OperacionesComprobantes/">Operaciones Comprobantes</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"OPERACIONES COMPROBANTES"); ?> class="nav-link" href="/OtrosComprobantes/">Otros Comprobantes</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"NCF ANULACIONES"); ?> class="nav-link" href="/NCFAnulaciones/">NCF Anulaciones</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"VENTAS GRABADAS/EXENTAS VENTAS"); ?> class="nav-link" href="/VentasGrabadasExentasventas/">Ventas Grabadas/Exentas ventas</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"FORMA DE PAGOS"); ?>  class="nav-link" href="/FormadePagos/">Forma de Pagos</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"FORMULARIO 607"); ?> class="nav-link" href="/Formulario607/">Formulario 607</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"FORMULARIO 608"); ?>  class="nav-link" href="/Formulario608/">Formulario 608</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"FACTURA DETALLES"); ?> class="nav-link" href="/FacturasDetallas/">Facturas Detalles</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"TRANSACCIONES GENERALES"); ?> class="nav-link" href="/TransaccionesGenerales/">Transacciones Generales</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a <?php echo $login->Inicio_Permisos($role,"CUENTAS POR COBRAR"); ?> class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5-6" aria-controls="submenu-5-6"><i class="fas fa-donate"></i>Cuentas x Cobrar</a>
                                            <div id="submenu-5-6" class="collapse submenu" style="">
                                           <ul class="nav flex-column">
                                          <li class="nav-item">
                                            <a <?php echo $login->Inicio_Permisos($role,"ANALISIS DE SALDO"); ?> class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5-7" aria-controls="submenu-5-7"><i class="fas fa-id-card-alt"></i>Analisis de Saldos</a>
                                            <div id="submenu-5-7" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"FACTURAS EMITIDAS"); ?> class="nav-link" href="/FacturaEmitidas1/">Factura Emitidas</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"ARCHIVOS GENERAL"); ?> class="nav-link" href="/ArchivosGeneral/">Archivos General</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"CLASIFICADO POR RANGO"); ?> class="nav-link" href="/ClasificadoporRango/">Clasificado por Rango</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"BALANCE DE CLIENTES"); ?> class="nav-link" href="/BalancedeClientes/">Balance de Clientes</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"FACTURAS PENDIENTES"); ?> class="nav-link" href="/FacturasPendientes/">Facturas Pendientes</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"CHEQUES DEVUELTOS"); ?> class="nav-link" href="/ChequesDevueltos/"><i class="fas fa-id-card"></i>Cheques Devueltos</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"ANALISIS POR VENDEDOR"); ?> class="nav-link" href="/AnalisisPorVendedor/">Analisis Por Vendedor</a>
                                                    </li>
                                                </ul>
                                            </div>  
                                                    <li class="nav-item">
                                            <a <?php echo $login->Inicio_Permisos($role,"ESTADOS DE CUENTAS"); ?> class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5-8" aria-controls="submenu-5-8"><i class="fas fa-id-card-alt"></i>Estados de Cuentas</a>
                                            <div id="submenu-5-8" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"DETALLES DE DOCUEMENTOS"); ?> class="nav-link" href="/DetallesdeDocumentos/">Detalles de Documentos</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"RELACION DOC.PEND.CUENTAS"); ?> class="nav-link" href="/RelacionDoc.Pend.Cuentas/">Relacion Doc. Pend. Cuentas</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"CARTAS ESTADO DE CTAS DEL CLIENTE"); ?> class="nav-link" href="/CartasEstadodeCtasdelCliente/"> Cartas Estado de Ctas del Cliente</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"CARTA POR UN RANGO"); ?> class="nav-link" href="/CartasPorunRango/">Cartas Por un Rango</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"RELACION DOC.PEND.FORM"); ?> class="nav-link" href="/RelacionDoc.Pend.Form/">Relacion Doc. Pend. Form</a>
                                                    </li>
                                                </ul>
                                                </div>  
                                                    <li class="nav-item">
                                            <a <?php echo $login->Inicio_Permisos($role,"HISTORIA DE CLIENTE"); ?> class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5-9" aria-controls="submenu-5-9"><i class="fas fa-id-card-alt"></i>Historia de Clientes</a>
                                            <div id="submenu-5-9" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"CLIENTES INDIVIDUAL"); ?> class="nav-link" href="/ClientesIndividual/">Clientes Individual</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"HISTORIAL POR VENDEDOR"); ?> class="nav-link" href="/HistorialporVendedor/">Historial por Vendedor</a>
                                                    </li>
                                                    
                                                </ul>
                                                </div>  
                                           <li <?php echo $login->Inicio_Permisos($role,"HISTORIA DE CLIENTE2"); ?> class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6-1" aria-controls="submenu-6-1"><i class="fas fa-id-card-alt"></i>Historia de Clientes</a>
                                            <div id="submenu-6-1" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"RESUMEN TIPOS CLIENTES"); ?> class="nav-link" href="/ResumenTiposClientes/">Resumen Tipos Clientes</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"RESUMEN VENDEDORES"); ?> class="nav-link" href="/ResumenVendedores/">Resumen Vendedores</a>
                                                    </li>
                                                    
                                                </ul>
                                                </div>  
                                                     <li class="nav-item">
                                            <a <?php echo $login->Inicio_Permisos($role,"CALCULOS DE COMISIONES"); ?> class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6-2" aria-controls="submenu-6-2"><i class="fas fa-id-card-alt"></i>Calculos de Comisiones</a>
                                            <div id="submenu-6-2" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"COBRO A CREDITO"); ?> class="nav-link" href="/CobroaCredito/">Cobro a Credito</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"VENTAS DE CONTADO"); ?> class="nav-link" href="/VentasdeContado/">Ventas de Contado</a>
                                                    </li>
                                                    
                                                </ul>
                                                </div>  
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"FACTURAS EMITIDAS"); ?> class="nav-link" href="/FacturaEmitidas2/"><i class="fas fa-id-card"></i>Factura Emitidas</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"RECIBOS DE INGRESOS"); ?> class="nav-link" href="/RecibosdeIngesos/"><i class="fas fa-plus-circle"></i>Recibos de Ingesos</a>
                                                    </li>
                                                    <li class="nav-item">
                                            <a <?php echo $login->Inicio_Permisos($role,"TRANSACCIONES DIARIAS"); ?> class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6-3" aria-controls="submenu-6-3"><i class="fas fa-id-card-alt"></i>Transacciones Diarias</a>
                                            <div id="submenu-6-3" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"OPERACIONES DIARIAS"); ?> class="nav-link" href="/OperacionesDiarias/"><i class="fas fa-plus-circle"></i>Operaciones Diarias</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"OPERACIONES POR VENDEDOR"); ?> class="nav-link" href="/OperacionesporVendedor/"><i class="fas fa-id-card"></i>Operaciones por Vendedor</a>
                                                    </li>
                                                    
                                                </ul>
                                                </div>  
                                                </li>
                                              
                                                </ul>
                                            </div> 
                                              <li class="nav-item">
                                            <a <?php echo $login->Inicio_Permisos($role,"MISCELANEOS"); ?> class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6-4" aria-controls="submenu-6-4"><i class="fas fa-id-card-alt"></i>Miscelaneos</a>
                                            <div id="submenu-6-4" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                     <li class="nav-item">
                                            <a <?php echo $login->Inicio_Permisos($role,"BENEFICIO DE ARTICULOS2"); ?> class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6-5" aria-controls="submenu-6-5"><i class="fas fa-book"></i>Beneficios de Articulos</a>
                                            <div id="submenu-6-5" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"CLASIFICA POR TIPOS"); ?> class="nav-link" href="/ClasificaporTipos/">Clasifica por Tipos</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"INCLUYE SUB-TIPOS"); ?> class="nav-link" href="/IncluyeSub-Tipos/">Incluye Sub-Tipos</a>
                                                    </li>
                                                    
                                                </ul>
                                                </div> 
                                              <li class="nav-item">
                                            <a <?php echo $login->Inicio_Permisos($role,"ESTADISTICAS VENTAS"); ?> class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6-6" aria-controls="submenu-6-6"><i class="fas fa-chart-pie"></i>Estadísticas Ventas</a>
                                            <div id="submenu-6-6" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"ESTADISTICA DE VENTAS"); ?> class="nav-link" href="/EstadísticadeVentas/">Estadística de Ventas</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"RELACION MINIMO MAXIMO"); ?> class="nav-link" href="/RelaciónMínimoMaximo/">Relación MínimoMaximo</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"TODOS LOS ALMACENES"); ?> class="nav-link" href="/TodoslosAlmacenes/">Todos los Almacenes</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"VENTAS POR ARTICULOS 1"); ?> class="nav-link" href="/VentasporArticulos1/">Ventas por Articulos</a>
                                                    </li>

                                                </div> 
                                                <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"LISTA DE PRECIO"); ?> class="nav-link" href="/ListadePrecio/"><i class="fas fa-donate"></i>Lista de Precio</a>
                                                    </li>
                                                    <li class="nav-item">
                                            <a <?php echo $login->Inicio_Permisos($role,"MAESTROS 1"); ?> class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6-7" aria-controls="submenu-6-7"><i class="fas fa-id-card-alt"></i>Maestros </a>
                                            <div id="submenu-6-7" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"ARTICULOS 1"); ?> class="nav-link" href="/Artículos/">Artículos</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"TIPOS SUB-TIPOS "); ?> class="nav-link" href="/TiposSub-Tipos/">Tipos/Sub-Tipos</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"CLIENTES-3009"); ?> class="nav-link" href="/Clientes/">Clientes</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"SUPLIDORES-3009"); ?> class="nav-link" href="/Suplidores/">Suplidores</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"VENDEDORES"); ?> class="nav-link" href="/Vendedores/">Vendedores</a>
                                                    </li>

                                                </div>
                                                <li class="nav-item">
                                            <a <?php echo $login->Inicio_Permisos($role,"LABELS ETIQUETAS"); ?> class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6-8" aria-controls="submenu-6-8"><i class="fas fa-money-bill-alt"></i>LABELS (Etiquetas) </a>
                                            <div id="submenu-6-8" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"ARTICULOS 2"); ?> class="nav-link" href="/Artículos1/">Artículos</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"CLIENTES 1"); ?> class="nav-link" href="/Clientes1/">Clientes</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"SUPLIDORES 1"); ?> class="nav-link" href="/Suplidores1/">Suplidores</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"VENDEDORES  1"); ?> class="nav-link" href="/Vendedores1/">Vendedores</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"BARRAS PRE"); ?> class="nav-link" href="/BarrasPRE/">Barras PRE</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"BARRAS SIN"); ?> class="nav-link" href="/BarrasSIN/">Barras SIN</a>
                                                    </li>

                                                </div>


                                                </ul>
                                                </div>
                                            </ul>
                                           </div>

                                           </li>
                            <br><li class="nav-item ">
                                <a <?php echo $login->Inicio_Permisos($role,"PROCEDIMIENTOS"); ?> class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6-9" aria-controls="submenu-6-9"><i class="fab fa-fw fa-wpforms"></i>PROCEDIMIENTOS</a>
                                <div id="submenu-6-9" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                         <li class="nav-item">
                                            <a <?php echo $login->Inicio_Permisos($role,"AUTORIZACIONES"); ?> class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7-1" aria-controls="submenu-7-1"><i class="fas fa-id-card-alt"></i>Autorizaciones </a>
                                            <div id="submenu-7-1" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"PRECIOS ARTICULOS"); ?> class="nav-link" href="/PreciosArticulos/">Precios Articulos</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"CREDITOS A CLIENTES"); ?> class="nav-link" href="/CreditoaClientes/">Crédito a Clientes</a>
                                                    </li>
                                                    
                                                </div>
                                        <li class="nav-item">
                                            <a <?php echo $login->Inicio_Permisos($role,"ESPECIALES DE VENTAS"); ?> class="nav-link" href="/EspecialesdeVentas/"><i class="fas fa-hand-holding-usd"></i>Especiales de Ventas</a>
                                        </li>
                                        <li class="nav-item">
                                            <a <?php echo $login->Inicio_Permisos($role,"COMBOS ESPECIALES"); ?> class="nav-link" href="/CombosEspeciales/"><i class="fas fa-cubes"></i>Combos Especiales</a>
                                        </li>
                                         <li class="nav-item">
                                            <a <?php echo $login->Inicio_Permisos($role,"CAMBIOS DE PRECIOS"); ?> class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7-2" aria-controls="submenu-7-2"><i class="fas fa-balance-scale"></i>Cambios de Precios </a>
                                            <div id="submenu-7-2" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"PRECIO POR RANGO"); ?> class="nav-link" href="/PrecioporRango/">Precio por Rango</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"ARTICULOS INDIVIDUALES"); ?> class="nav-link" href="/ArticulosIndividuales/">Articulos Individuales</a>
                                                    </li>
                                                     

                                                </div>
                                        <li class="nav-item">
                                            <a <?php echo $login->Inicio_Permisos($role,"POSTEAR ARCHIVOS"); ?> class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7-3" aria-controls="submenu-7-3"><i class=" fas fa-address-card"></i>Postear Archivos</a>
                                            <div id="submenu-7-3" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"VENTAS 2"); ?> class="nav-link" href="/Ventas/">Ventas</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"CLIENTES 2"); ?> class="nav-link" href="/Clientes2/">Clientes</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"SUPLIDORES 2"); ?> class="nav-link" href="/Suplidores2/">Suplidores</a>
                                                    </li>
                                                     <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"INVENTARIO 1"); ?> class="nav-link" href="/Inventario/">Inventario</a>
                                                    </li>

                                                </div>
                                                <li class="nav-item">
                                            <a <?php echo $login->Inicio_Permisos($role,"INICIALIZAR"); ?> class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7-4" aria-controls="submenu-7-4"><i class=" fas fa-child"></i>Inicializar</a>
                                            <div id="submenu-7-4" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"INVENTARIO FISICO"); ?> class="nav-link" href="/InventarioFisico/">Inventario Físico</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"ARTICULOS DESDE ALM"); ?> class="nav-link" href="/ArticulosDesdeAlm./">Articulos Desde Alm.</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"CUENTAS POR COBRAR"); ?> class="nav-link" href="/CuentasporCobrar/">Cuentas por Cobrar</a>
                                                    </li>
                                                     <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"PLANES DE CREDITO"); ?> class="nav-link" href="/PlanesdeCredito/">Planes de Crédito</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"MODIFICAR CXC"); ?> class="nav-link" href="/ModificarCXC/">Modificar CXC</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"MODIFICAR FACTURACION"); ?> class="nav-link" href="/ModificarFacturaCion/">Modificar Facturación</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"MODIFICAR CXP"); ?> class="nav-link" href="/ModificarCXP/">Modificar CXP</a>
                                                    </li>

                                                </div>
                                    </ul>
                                </div>
                            </li>
                            <br><li class="nav-item">
                                <a <?php echo $login->Inicio_Permisos($role,"CONFIGURACIONES"); ?> class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-5"><i class="fas fa-wrench"></i>CONFIGURACIONES</a>
                                <div id="submenu-8" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"GRUPOS"); ?> class="nav-link" href="/GRUPOS/"> Grupos</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a <?php echo $login->Inicio_Permisos($role,"CREAR USUARIOS"); ?> class="nav-link" href="/CrearUsuariosNuevo/">Usuario</a>
                                                    </li>
                                    </ul>
                                </div>
                            </li>                                                 
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
       