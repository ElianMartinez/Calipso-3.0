<?php

const SERVER ="localhost";
const DB = "movedb";
const USER = "root";
const PASS = "";

const SGBD="mysql:host=".SERVER.";dbname=".DB;

const METHOD = "AES-256-CBC";
const SECRET_KEY = '$SE2019';
const SECRET_IV = '090801';





require_once "fpdf.php";	
class pdf extends FPDF
{
 		
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
 
        $idGra = pdf::ejecutar_consulta_simple("SELECT * FROM `grado` WHERE `Nombre`='$Grado' and `Semestre` = '$Semestre'");

        foreach ($idGra as $row) {
        $idGrado = $row['Id_Grado'];
         }


  return pdf::ejecutar_consulta_simple("SELECT * FROM `asignaturas` WHERE `Id_Grado` = '$idGrado'");



        }

      






          public function buscarEs($Seccion,$Semestre,$Anno,$Grado){
        
            $annoAc = '2018-2019
           ';

        if ($annoAc != $Anno) {//revisar si el año es igual al actual para hacer la busqueda completa de todos los estudiantes

 
    return  pdf::ejecutar_consulta_simple("SELECT t2.Id_Estudiante as Id_Estudiante,  t2.No_Estudiante as No_Estudiante,t2.Nombre as Nombre,`Apellido Paterno`,`Apellido Materno`,t1.Id_Boletin as Id_Boletin FROM boletin as t1, estudiantes as t2 WHERE t1.Seccion = '$Seccion' and t1.Semestre = '$Semestre' and t1.Anno_Escolar = '$Anno' and t1.Id_Estudiante = t2.Id_Estudiante and t1.Grado = '$Grado' ORDER BY `Apellido Paterno` ASC");

}else{

	return  pdf::ejecutar_consulta_simple("SELECT t2.Id_Estudiante as Id_Estudiante,  t2.No_Estudiante as No_Estudiante,t2.Nombre as Nombre,`Apellido Paterno`,`Apellido Materno`,t1.Id_Boletin as Id_Boletin FROM boletin as t1, estudiantes as t2 WHERE t1.Seccion = '$Seccion' and t1.Semestre = '$Semestre' and t1.Anno_Escolar = '$Anno' and t1.Id_Estudiante = t2.Id_Estudiante and t1.Grado = '$Grado' ORDER BY `No_Estudiante` ASC");

}

}

	public function header()
	{
		$codigoCentro = 2321;
		$codigoModalidad = 41;
		$codigoPin = 223;
		$codigoE = 91;
		$this->SetFont('arial','i',9);
		$this->Image('img.png',140,5,0,10,'png');
		
		$this->SetY(20);
		$this->Cell(310,5, utf8_decode('DIRECCIÓN GENERAL DE EDUCACIÓN PARA JÓVENES Y ADULTOS -DIRECCIÓN REGIONAL 15, SANTO DOMINGO III -DISTRITO EDUCATIVO 15-02'),0,0,'C',0);

		$this->Ln();

		$this->SetFont('arial','B',9);
		$this->Cell(300,5, utf8_decode('PREPARA ESCUELA REPÚBLICA DE PERÚ CÓDIGO 08853'),0,0,'C',0);
		$this->Ln();
		$this->SetX(250);
		$this->SetY(5);
		$this->SetFont('arial','B',8);
		$this->Write(5, utf8_decode('CÓDIGO CENTRO: '));
		$this->SetFont('arial','',8);
		$this->Write(5,$codigoCentro);
		$this->Ln();
		$this->SetFont('arial','B',8);
		$this->Write(5,utf8_decode('CÓDIGO MODALIDAD: '));
		$this->SetFont('arial','',8);
		$this->Write(5,$codigoModalidad);
		$this->Ln();
		$this->SetFont('arial','B',8);
		$this->Write(5,utf8_decode('CÓDIGO PN: '));
		$this->SetFont('arial','',8);
		$this->Write(5,$codigoPin);
		$this->Ln();
		$this->SetFont('arial','B',8);
		$this->Write(5,utf8_decode('CÓDIGO ESPECIALIDAD: '));
		$this->SetFont('arial','',8);
		$this->Write(5,$codigoE);

		$a = 1;
		$asignaturas = pdf::buscarA($this->Grado,'Primer');
		foreach ($asignaturas as $key) {
			$a++;
		}
	
			$fontSize = 8;
		$tempFontSize=$fontSize;
		if ($a == 12) {
				$cellWidth=23.2;
			}

		if ($a == 11) {
				$cellWidth=27;
			}
		$this->Ln(12);
		$this->Cell(40,10,'1ro A Primer 2018-2019',1,0,'L',0);
	    $asignatura = pdf::buscarA($this->Grado,'Primer');
	    $this->SetFont('arial','B',8);
			foreach ($asignatura as $row) {
		
			while ($this->GetStringWidth($row["Nombre"]) > $cellWidth) {
				$this->SetFontSize($tempFontSize -= 0.1);
			}
			$this->Cell($cellWidth,10,utf8_decode($row["Nombre"]),1,0,'C',0);
			$this->SetFont('arial','B',8);
			}

		$this->Ln();
		$this->Cell(5,6,'No.',1,0,'L',0);
		$this->Cell(20,6,'Apellido',1,0,'L',0);
		$this->Cell(15,6,'Nombre',1,0,'L',0);
		$this->SetFont('arial','B',7);
		for ($i=1; $i < $a; $i++) { 
			if ($a== 12) {
				$this->Cell(7.73333,6,'GRAL',1,0,'C',0);
			$this->Cell(7.73333,6,'Com',1,0,'C',0);
			$this->Cell(7.73333,6,'Ext',1,0,'C',0);
			}else{
				$this->Cell(9,6,'GRAL',1,0,'C',0);
			$this->Cell(9,6,'COMP',1,0,'C',0);
			$this->Cell(9,6,'EXT',1,0,'C',0);
			}
		}

		


		
	
}

}


$pdf = new pdf('L','mm','rn','1ro');

$pdf->AddPage('landscape','rn');

$estudiantes = $pdf->buscarEs('A','Primer','2018-2019','1ro');
$pdf->SetFont('arial','',7);
foreach ($estudiantes as $re) {
		$pdf->Ln();
		$pdf->Cell(5,6,$re["No_Estudiante"],1,0,'L',0);
		$pdf->Cell(20,6,$re["Apellido Paterno"],1,0,'L',0);
		$pdf->Cell(15,6,$re["Nombre"],1,0,'L',0);

#$pdf->buscarNota('A','Primer','2018-2019','1ro',$re["Id_Estudiante"]);
		
		
}

$pdf->Output();


