<?php

const SERVER ="localhost";
const DB = "movedb";
const USER = "root";
const PASS = "";

const SGBD="mysql:host=".SERVER.";dbname=".DB;

const METHOD = "AES-256-CBC";
const SECRET_KEY = '$SE2019';
const SECRET_IV = '090801';


class actanotapdf {
protected function conectar()
        {
         $enlace = new PDO(SGBD,USER,PASS);
         
        return $enlace;
        }

        protected function ejecutar_consulta_simple($consulta)
        {
            $respuesta = self::conectar()->prepare($consulta);
            $respuesta->execute();
            return $respuesta;
            self::conectar()->close();

        }


       public function buscarA($Grado,$Semestre){
       		session_start(['name' => 'SEP']);
            $annoAc = $_SESSION['Ano_E'];


            	$idGra = $this->ejecutar_consulta_simple("SELECT * FROM `grado` WHERE `Nombre`='$Grado' and `Semestre` = '$Semestre'");

        foreach ($idGra as $row) {
        $idGrado = $row['Id_Grado'];
         }


 return $Asignaturas = $this->ejecutar_consulta_simple("SELECT * FROM `asignaturas` WHERE `Id_Grado` = '$idGrado'");



        }

        public function buscarEs($Seccion,$Semestre,$Anno,$Grado){
        	session_start(['name' => 'SEP']);
            $annoAc = $_SESSION['Ano_E'];

        if ($annoAc != $Anno) {//revisar si el año es igual al actual para hacer la busqueda completa de todos los estudiantes

 
    return $Estudiantes = $this->ejecutar_consulta_simple("SELECT t2.Id_Estudiante as Id_Estudiante,  t2.No_Estudiante as No_Estudiante,t2.Nombre as Nombre,`Apellido Paterno`,`Apellido Materno`,t1.Id_Boletin as Id_Boletin FROM boletin as t1, estudiantes as t2 WHERE t1.Seccion = '$Seccion' and t1.Semestre = '$Semestre' and t1.Anno_Escolar = '$Anno' and t1.Id_Estudiante = t2.Id_Estudiante and t1.Grado = '$Grado' ORDER BY `Apellido Paterno` ASC");

}else{

	return $Estudiantes = $this->ejecutar_consulta_simple("SELECT t2.Id_Estudiante as Id_Estudiante,  t2.No_Estudiante as No_Estudiante,t2.Nombre as Nombre,`Apellido Paterno`,`Apellido Materno`,t1.Id_Boletin as Id_Boletin FROM boletin as t1, estudiantes as t2 WHERE t1.Seccion = '$Seccion' and t1.Semestre = '$Semestre' and t1.Anno_Escolar = '$Anno' and t1.Id_Estudiante = t2.Id_Estudiante and t1.Grado = '$Grado' ORDER BY `No_Estudiante` ASC");

}

}


	public function buscarNota($Seccion,$Semestre,$Anno,$Grado){
		session_start(['name' => 'SEP']);
            $annoAc = $_SESSION['Ano_E'];
    	$idGra = $this->ejecutar_consulta_simple("SELECT * FROM `grado` WHERE `Nombre`='$Grado' and `Semestre` = '$Semestre'");

        foreach ($idGra as $row) {
        $idGrado = $row['Id_Grado'];
         }
			if ($annoAc != $Anno) {//revisar si el año es igual al actual para hacer la busqueda completa de todos los estudiantes


$Estudiantes = $this->ejecutar_consulta_simple("SELECT t2.Id_Estudiante as Id_Estudiante,  t2.No_Estudiante as No_Estudiante,t2.Nombre as Nombre,`Apellido Paterno`,`Apellido Materno`,t1.Id_Boletin as Id_Boletin FROM boletin as t1, estudiantes as t2 WHERE t1.Seccion = '$Seccion' and t1.Semestre = '$Semestre' and t1.Anno_Escolar = '$Anno' and t1.Id_Estudiante = t2.Id_Estudiante and t1.Grado = '$Grado' ORDER BY `Apellido Paterno` ASC");

}else{

	$Estudiantes = $this->ejecutar_consulta_simple("SELECT t2.Id_Estudiante as Id_Estudiante,  t2.No_Estudiante as No_Estudiante,t2.Nombre as Nombre,`Apellido Paterno`,`Apellido Materno`,t1.Id_Boletin as Id_Boletin FROM boletin as t1, estudiantes as t2 WHERE t1.Seccion = '$Seccion' and t1.Semestre = '$Semestre' and t1.Anno_Escolar = '$Anno' and t1.Id_Estudiante = t2.Id_Estudiante and t1.Grado = '$Grado' ORDER BY `No_Estudiante` ASC");

}
  foreach ($Estudiantes as $rowEs) {
	

		$Asignaturas = $this->ejecutar_consulta_simple("SELECT * FROM `asignaturas` WHERE `Id_Grado` = '$idGrado'");
		$id = $rowEs["Id_Estudiante"];
		
	foreach($Asignaturas as $rowAs) {
		$asig = $rowAs["Codigo"];
		
		$Calificaciones = $this->ejecutar_consulta_simple("SELECT t2.CFS as CFS,t2.CC as CC,t2.CEx as CEx FROM estudiantes as t1, calificaciones as t2, boletin as t3 Where t3.Grado = '$Grado'and t3.Anno_Escolar = '$Anno' and t3.Seccion = '$Seccion' and t2.Asignatura = '$asig' and t3.Semestre = '$Semestre' and t2.Id_Boletin = t3.Id_Boletin and t1.Id_Estudiante = t3.Id_Estudiante and t1.Id_Estudiante = '$id' ");
     
      foreach ($Calificaciones as $key) {
      if ($key["CFS"] > 70 ) {
      	 $tabla .= '
		<TD>'.$key["CFS"].'</TD>
		<TD></TD>
		<TD></TD>
		';
      }elseif ($key["CFS"] != 0 and $key["CEx"] == 0 and $key["CC"] != 0 ) {
      	$tabla .= '
		<TD></TD>
		<TD style="background-color:#F7D358;" >'.$key["CC"].'</TD>
		<TD></TD>
		';
		}elseif ($key["CC"] < 70 and $key["CEx"] != 0) {
			$tabla .= '
		<TD></TD>
		<TD ></TD>
		<TD style="background-color:#F5A9A9;">'.$key["CEx"].'</TD>
		';
		}else{
			$tabla .= '
		<TD></TD>
		<TD></TD>
		<TD></TD>
		';
		}


      }
       


      
  }





	}

}

}

$pdf = new actanotapdf();

echo $pdf->buscarNota('A','Primer','2018-2019','1ro');














