<?php

        class vistasModelo{
            protected function obtener_vistas_modelo($vistas){
                $listaBlanca = ["GRUPOS","Home","CambioUsuario","blankpage", "RegistroDeInventario", "TiposDeArticulosSubtipos", "Almacenes", "Marcas", "RegistroDeClientes", "TiposDeClientes", "RegistroDeVendedores", "TiposDeVendedores", "RegistroDeSuplidores", "TiposDeSuplidores", "Contabilidad", "VentasContados", "VentasCreditos", "CuadreDeCaja", "Cotizaciones", "PreventasAlContado", "PreventasACrédito", "OrdenDePedido", "RecibosNormales", "PagosConTarjeta", "RecibosDeAvances", "IngresoXTarjeta", "PreventasAlContado1", "OtrosIngresos", "ReimprimirRecibo", "NotaDeDebito", "NotaDeCredito", "CreditosXAplicar", "AvancesPendientes", "NotasDeDebito", "NotasDeCredito", "NotaDeDebitoSinNCF", "NotaDeCreditoSinNCF", "Cotizaciones1", "Cotizaciones2", "OrdenDeVentas", "VentasPorCuadrar", "VentasDelDia", "FacturasEmitidas", "DevolucionDeMercancia", "CreditosPorAplicar", "TransaccionesDiarias", "TransaccionesDePagoPorCuadrar", "TransaccionesGrales", "DocumentosPendientes", "EstadoDeCuentas", "HistorialDelCliente", "FacturasEmitidas", "RecibosDeIngresos", "DevolucionMercanciasDiarias", "AnulacionDeFacturas", "CreditosPorAplicar", "AvancesPendientes", "ChequesDevueltosCXC", "TransaccionesDiarias1", "BalanceGeneral", "ExistenciadeArticulos", "DetallesdeClientes", "ArticulosporCliente", "VentasporArticulos", "BeneficiodeArticulos", "PorClientes", "PorArticulos", "PorCuidad", "General", "FacturaEmitidas", "PorArticulos1", "CreditosporAplicar2", "TransaccionesDiariaIT1", "OperacionesComprobantes", "OtrosComprobantes", "NCFAnulaciones", "VentasGrabadasExentasventas", "FormadePagos", "Formulario607", "Formulario608", "FacturasDetallas", "TransaccionesGenerales", "FacturaEmitidas1", "ArchivosGeneral", "ClasificadoporRango", "BalancedeClientes", "FacturasPendientes", "ChequesDevueltos", "AnalisisPorVendedor", "DetallesdeDocumentos", "RelacionDoc.Pend.Cuentas", "CartasEstadodeCtasdelCliente", "CartasPorunRango", "RelacionDoc.Pend.Form", "ClientesIndividual", "HistorialporVendedor", "ResumenTiposClientes", "ResumenVendedores", "CobroaCredito", "VentasdeContado", "FacturaEmitidas2", "RecibosdeIngesos", "OperacionesDiarias", "OperacionesporVendedor", "ClasificaporTipos", "IncluyeSub-Tipos", "EstadísticadeVentas", "RelaciónMínimoMaximo", "TodoslosAlmacenes", "VentasporArticulos1", "ListadePrecio", "Artículos", "TiposSub-Tipos", "Clientes", "Suplidores", "Vendedores", "Artículos1", "Clientes1", "Suplidores1", "Vendedores1", "BarrasPRE", "BarrasSIN", "CreditoaClientes", "EspecialesdeVentas", "CombosEspeciales", "PrecioporRango", "ArticulosIndividuales", "Ventas", "Clientes2", "Suplidores2", "Inventario", "InventarioFisico", "ArticulosDesdeAlm.", "CuentasporCobrar", "PlanesdeCredito", "ModificarCXC", "ModificarFacturaCion", "ModificarCXP", "CrearUsuariosNuevo", "BANCOS", "ZONAS", "CUIDADES", "OTROS_M", "IMPUESTOS" ];
                if (in_array($vistas,$listaBlanca)) {
                  if (is_file("./Vistas/contenido/".$vistas."-view.php")) {
                    $contenido = "./Vistas/contenido/".$vistas."-view.php";
                  } else {
                    $contenido = "login";   
                  }
                  
                } elseif($vistas == "login"){
                   $contenido = "login";
                }elseif($vistas == "index"){
                    $contenido = "login";
                }else{
                    $contenido = "404";
                }
                return $contenido;
            }
        }

