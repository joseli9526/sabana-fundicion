<?php
include ('../sabana.class.php');
include ('../lib/PHPExcel/Classes/PHPExcel.php');

$web = new CRUD;
$web->conexion();

$f1 = $_GET['f1'];
$f2 = $_GET['f2'];

$filename = 'SabanaFundicion_' . $f1 . '_' . $f2 . '.xlsx';

$excel = new PHPExcel();

try {
    //combinacion de celdas
    $excel->setActiveSheetIndex(0)->mergeCells('A1:B1');
    $excel->setActiveSheetIndex(0)->mergeCells('C1:P1');
    $excel->setActiveSheetIndex(0)->mergeCells('Q1:AC1');
    $excel->setActiveSheetIndex(0)->mergeCells('AD1:AF1');
    $excel->setActiveSheetIndex(0)->mergeCells('AG1:AH1');
    $excel->setActiveSheetIndex(0)->mergeCells('AI1:AK1');
    $excel->setActiveSheetIndex(0)->mergeCells('AL1:AQ1');

    //Estilos
    $styleTituloImagen = array(
        'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID,
            'color' => array('rgb' => '4F81BD')
        ),
        'borders' => array(
            'allborders' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN
            )
        )
    );

    $styleSubTituloImagen = array(
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
        ),
        'font' => array(
            'size' => 10,
            'bold' => true
        ),
        'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID,
            'color' => array('rgb' => '4F81BD')
        ),
        'borders' => array(
            'allborders' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN
            )
        )
    );

    $styleTituloMetalurgico = array(
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
        ),
        'font' => array(
            'size' => 11,
            'bold' => true
        ),
        'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID,
            'color' => array('rgb' => 'E26B0A')
        ),
        'borders' => array(
            'allborders' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN
            )
        )
    );

    $styleSubTituloMetalurgico = array(
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
        ),
        'font' => array(
            'size' => 10,
            'bold' => true
        ),
        'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID,
            'color' => array('rgb' => 'E26B0A')
        ),
        'borders' => array(
            'allborders' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN
            )
        )
    );

    $styleTituloQuimico = array(
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
        ),
        'font' => array(
            'size' => 11,
            'bold' => true
        ),
        'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID,
            'color' => array('rgb' => '339933')
        ),
        'borders' => array(
            'allborders' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN
            )
        )
    );

    $styleSubTituloQuimico = array(
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
        ),
        'font' => array(
            'size' => 10,
            'bold' => true
        ),
        'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID,
            'color' => array('rgb' => '339933')
        ),
        'borders' => array(
            'allborders' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN
            )
        )
    );

    $styleTituloTemperatura = array(
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
        ),
        'font' => array(
            'size' => 11,
            'bold' => true
        ),
        'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID,
            'color' => array('rgb' => 'FFFF00')
        ),
        'borders' => array(
            'allborders' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN
            )
        )
    );

    $styleSubTituloTemperatura = array(
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
        ),
        'font' => array(
            'size' => 10,
            'bold' => true
        ),
        'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID,
            'color' => array('rgb' => 'FFFF00')
        ),
        'borders' => array(
            'allborders' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN
            )
        )
    );

    $styleTituloNotas = array(
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
        ),
        'font' => array(
            'size' => 16,
            'bold' => true
        ),
        'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID,
            'color' => array('rgb' => 'F2F2E5')
        ),
        'borders' => array(
            'allborders' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN
            )
        )
    );

    $styleSubTituloNotas = array(
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
        ),
        'font' => array(
            'size' => 10,
            'bold' => true
        ),
        'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID,
            'color' => array('rgb' => 'F2F2E5')
        ),
        'borders' => array(
            'allborders' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN
            )
        )
    );

    $styleContendio = array(
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
        ),
        'borders' => array(
            'allborders' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN
            )
        )
    );

    //Ancho de las filas
    $excel->getActiveSheet()->getRowDimension('1')->setRowHeight(40);
    $excel->getActiveSheet()->getRowDimension('2')->setRowHeight(84);

    //Titulos
    $excel->setActiveSheetIndex(0)->setCellValue('C1', 'REPORTE METALURGICO DE OLLAS COLADAS');
    $excel->setActiveSheetIndex(0)->setCellValue('Q1', 'ANALISIS QUIMICO');
    $excel->setActiveSheetIndex(0)->setCellValue('AD1', 'DETERM. C & S');
    $excel->setActiveSheetIndex(0)->setCellValue('AG1', 'TEMPERATURA');
    $excel->setActiveSheetIndex(0)->setCellValue('AI1', 'INOCULANTE');
    $excel->setActiveSheetIndex(0)->setCellValue('AL1', 'REFERENCIAS NOTAS');

    $excel->setActiveSheetIndex(0)->setCellValue('A2', 'FECHA');
    $excel->setActiveSheetIndex(0)->setCellValue('B2', 'TURNO');
    $excel->setActiveSheetIndex(0)->setCellValue('C2', 'No. OLLA');
    $excel->setActiveSheetIndex(0)->setCellValue('D2', 'MODELO');
    $excel->setActiveSheetIndex(0)->setCellValue('E2', 'CAVIDAD');
    $excel->setActiveSheetIndex(0)->setCellValue('F2', 'DUREZA');
    $excel->setActiveSheetIndex(0)->setCellValue('G2', '% NODULARIDAD');
    $excel->setActiveSheetIndex(0)->setCellValue('H2', 'NOD/mm2');
    $excel->setActiveSheetIndex(0)->setCellValue('I2', '% PERLITA');
    $excel->setActiveSheetIndex(0)->setCellValue('J2', '% FERRITA');
    $excel->setActiveSheetIndex(0)->setCellValue('K2', '% CARBUROS');
    $excel->setActiveSheetIndex(0)->setCellValue('L2', 'GRAFITO TIPO');
    $excel->setActiveSheetIndex(0)->setCellValue('M2', 'GRAFITO TAMAÑO');
    $excel->setActiveSheetIndex(0)->setCellValue('N2', 'ESTEADITA');
    $excel->setActiveSheetIndex(0)->setCellValue('O2', 'LOCALIZACION');
    $excel->setActiveSheetIndex(0)->setCellValue('P2', 'USUARIO');

    $excel->getActiveSheet()->getStyle('A2:P2')->getAlignment()->setTextRotation(90);

    $excel->setActiveSheetIndex(0)->setCellValue('Q2', '% Si');
    $excel->setActiveSheetIndex(0)->setCellValue('R2', '% Mn');
    $excel->setActiveSheetIndex(0)->setCellValue('S2', '% P');
    $excel->setActiveSheetIndex(0)->setCellValue('T2', '% Mg');
    $excel->setActiveSheetIndex(0)->setCellValue('U2', '% Cr');
    $excel->setActiveSheetIndex(0)->setCellValue('V2', '% Ni');
    $excel->setActiveSheetIndex(0)->setCellValue('W2', '% Mo');
    $excel->setActiveSheetIndex(0)->setCellValue('X2', '% Cu');
    $excel->setActiveSheetIndex(0)->setCellValue('Y2', '% Al');
    $excel->setActiveSheetIndex(0)->setCellValue('Z2', '% Ti');
    $excel->setActiveSheetIndex(0)->setCellValue('AA2', '% V');
    $excel->setActiveSheetIndex(0)->setCellValue('AB2', '% Sn');
    $excel->setActiveSheetIndex(0)->setCellValue('AC2', '% Pb');
    $excel->setActiveSheetIndex(0)->setCellValue('AD2', '% C');
    $excel->setActiveSheetIndex(0)->setCellValue('AE2', '% S');
    $excel->setActiveSheetIndex(0)->setCellValue('AF2', 'USUARIO');

    $excel->setActiveSheetIndex(0)->setCellValue('AG2', 'SANGRADO °C');
    $excel->setActiveSheetIndex(0)->setCellValue('AH2', 'VACIADO °C');
    $excel->setActiveSheetIndex(0)->setCellValue('AI2', 'Kg');
    $excel->setActiveSheetIndex(0)->setCellValue('AJ2', 'TIEMPO');
    $excel->setActiveSheetIndex(0)->setCellValue('AK2', 'USUARIO');

    $excel->getActiveSheet()->getStyle('AG2:AK2')->getAlignment()->setTextRotation(90);

    $excel->setActiveSheetIndex(0)->setCellValue('AL2', 'DIA');
    $excel->setActiveSheetIndex(0)->setCellValue('AM2', 'SEMANA');
    $excel->setActiveSheetIndex(0)->setCellValue('AN2', 'MES');
    $excel->setActiveSheetIndex(0)->setCellValue('AO2', 'AÑO');
    $excel->setActiveSheetIndex(0)->setCellValue('AP2', 'HOJA INSPECCION');
    $excel->setActiveSheetIndex(0)->setCellValue('AQ2', 'FAMILIA');

    $excel->getActiveSheet()->getStyle('AL2:AP2')->getAlignment()->setTextRotation(90);

    //Imagen
    $img = imagecreatefrompng('../images/logo_arbomex.png');
    $drawing = new PHPExcel_Worksheet_MemoryDrawing();
    $drawing->setName('Sample image');
    $drawing->setDescription('Sample image');
    $drawing->setImageResource($img);
    $drawing->setRenderingFunction(PHPExcel_Worksheet_MemoryDrawing::RENDERING_PNG);
    $drawing->setMimeType(PHPExcel_Worksheet_MemoryDrawing::MIMETYPE_DEFAULT);
    $drawing->setHeight(170);
    $drawing->setWidth(125);
    $drawing->setCoordinates('A1');
    $drawing->setOffsetY(10);
    $drawing->setOffsetX(0);
    $drawing->setWorksheet($excel->getActiveSheet());

    //Aplicar estilos
    $excel->getActiveSheet()->getStyle('C1')->applyFromArray($styleTituloMetalurgico);
    $excel->getActiveSheet()->getStyle('Q1')->applyFromArray($styleTituloQuimico);
    $excel->getActiveSheet()->getStyle('AD1')->applyFromArray($styleTituloQuimico);
    $excel->getActiveSheet()->getStyle('AG1')->applyFromArray($styleTituloTemperatura);
    $excel->getActiveSheet()->getStyle('AI1')->applyFromArray($styleTituloTemperatura);
    $excel->getActiveSheet()->getStyle('AL1')->applyFromArray($styleTituloNotas);

    $excel->getActiveSheet()->getStyle('A2:B2')->applyFromArray($styleSubTituloImagen);
    $excel->getActiveSheet()->getStyle('C2:P2')->applyFromArray($styleSubTituloMetalurgico);
    $excel->getActiveSheet()->getStyle('Q2:AF2')->applyFromArray($styleSubTituloQuimico);
    $excel->getActiveSheet()->getStyle('AG2:AK2')->applyFromArray($styleSubTituloTemperatura);
    $excel->getActiveSheet()->getStyle('AL2:AQ2')->applyFromArray($styleSubTituloNotas);

    //Llenado del archivo

    $sql = "SELECT fecha, turno, no_olla, modelo, cavidad, dureza_min, dureza_max, nodularidad, nod, perlita, ferrita,
       carburos, grafito_tipo,grafito_tamanio, grafito_tamanio_max, esteadita, localizacion, usuario_metalurgico, porcentaje_si, porcentaje_mn,
       porcentaje_p, porcentaje_mg, porcentaje_cr, porcentaje_ni, porcentaje_mo, porcentaje_cu, porcentaje_al, 
       porcentaje_ti, porcentaje_v, porcentaje_sn, porcentaje_pb,porcentaje_c, porcentaje_s, usuario_quimico, sangrado, vaciado, 
       kg, tiempo, usuario_temperatura, dia, semana, mes, anio, hoja_inspeccion, familia FROM sabana WHERE fecha 
       BETWEEN '$f1' AND '$f2' ORDER BY fecha DESC";

    $data = $web->fetchAll($sql);

    $cont = 3;
    foreach ($data as $item) {
        $excel->setActiveSheetIndex(0)->setCellValue('A'.$cont, $item['fecha']);
        $excel->setActiveSheetIndex(0)->setCellValue('B'.$cont, $item['turno']);
        $excel->setActiveSheetIndex(0)->setCellValue('C'.$cont, $item['no_olla']);
        $excel->setActiveSheetIndex(0)->setCellValue('D'.$cont, $item['modelo']);
        $excel->setActiveSheetIndex(0)->setCellValue('E'.$cont, $item['cavidad']);
        $excel->setActiveSheetIndex(0)->setCellValue('F'.$cont, $item['dureza_min'].'/'.$item['dureza_max']);
        $excel->setActiveSheetIndex(0)->setCellValue('G'.$cont, $item['nodularidad']);
        $excel->setActiveSheetIndex(0)->setCellValue('H'.$cont, $item['nod']);
        $excel->setActiveSheetIndex(0)->setCellValue('I'.$cont, $item['perlita']);
        $excel->setActiveSheetIndex(0)->setCellValue('J'.$cont, $item['ferrita']);
        $excel->setActiveSheetIndex(0)->setCellValue('K'.$cont, $item['carburos']);
        $excel->setActiveSheetIndex(0)->setCellValue('L'.$cont, $item['grafito_tipo']);
        $excel->setActiveSheetIndex(0)->setCellValue('M'.$cont, $item['grafito_tamanio'] . '+' . $item['grafito_tamanio_max']);
        $excel->setActiveSheetIndex(0)->setCellValue('N'.$cont, $item['esteadita']);
        $excel->setActiveSheetIndex(0)->setCellValue('O'.$cont, $item['localizacion']);
        $excel->setActiveSheetIndex(0)->setCellValue('P'.$cont, $item['usuario_metalurgico']);
        $excel->setActiveSheetIndex(0)->setCellValue('Q'.$cont, $item['porcentaje_si']);
        $excel->setActiveSheetIndex(0)->setCellValue('R'.$cont, $item['porcentaje_mn']);
        $excel->setActiveSheetIndex(0)->setCellValue('S'.$cont, $item['porcentaje_p']);
        $excel->setActiveSheetIndex(0)->setCellValue('T'.$cont, $item['porcentaje_mg']);
        $excel->setActiveSheetIndex(0)->setCellValue('U'.$cont, $item['porcentaje_cr']);
        $excel->setActiveSheetIndex(0)->setCellValue('V'.$cont, $item['porcentaje_ni']);
        $excel->setActiveSheetIndex(0)->setCellValue('W'.$cont, $item['porcentaje_mo']);
        $excel->setActiveSheetIndex(0)->setCellValue('X'.$cont, $item['porcentaje_cu']);
        $excel->setActiveSheetIndex(0)->setCellValue('Y'.$cont, $item['porcentaje_al']);
        $excel->setActiveSheetIndex(0)->setCellValue('Z'.$cont, $item['porcentaje_ti']);
        $excel->setActiveSheetIndex(0)->setCellValue('AA'.$cont, $item['porcentaje_v']);
        $excel->setActiveSheetIndex(0)->setCellValue('AB'.$cont, $item['porcentaje_sn']);
        $excel->setActiveSheetIndex(0)->setCellValue('AC'.$cont, $item['porcentaje_pb']);
        $excel->setActiveSheetIndex(0)->setCellValue('AD'.$cont, $item['porcentaje_c']);
        $excel->setActiveSheetIndex(0)->setCellValue('AE'.$cont, $item['porcentaje_s']);
        $excel->setActiveSheetIndex(0)->setCellValue('AF'.$cont, $item['usuario_quimico']);
        $excel->setActiveSheetIndex(0)->setCellValue('AG'.$cont, $item['sangrado']);
        $excel->setActiveSheetIndex(0)->setCellValue('AH'.$cont, $item['vaciado']);
        $excel->setActiveSheetIndex(0)->setCellValue('AI'.$cont, $item['kg']);
        $excel->setActiveSheetIndex(0)->setCellValue('AJ'.$cont, $item['tiempo']);
        $excel->setActiveSheetIndex(0)->setCellValue('AK'.$cont, $item['usuario_temperatura']);
        $excel->setActiveSheetIndex(0)->setCellValue('AL'.$cont, $item['dia']);
        $excel->setActiveSheetIndex(0)->setCellValue('AM'.$cont, $item['semana']);
        $excel->setActiveSheetIndex(0)->setCellValue('AN'.$cont, $item['mes']);
        $excel->setActiveSheetIndex(0)->setCellValue('AO'.$cont, $item['anio']);
        $excel->setActiveSheetIndex(0)->setCellValue('AP'.$cont, $item['hoja_inspeccion']);
        $excel->setActiveSheetIndex(0)->setCellValue('AQ'.$cont, $item['familia']);
        $excel->getActiveSheet()->getStyle('A'.$cont.':AQ'.$cont)->applyFromArray($styleContendio);
        $cont++;
    }

    $excel->getActiveSheet()->getColumnDimension('AP')->setAutoSize(true);
    $excel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
    $excel->getActiveSheet()->getColumnDimension('AL')->setAutoSize(true);

    $objWriter = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
    // mime type xlsx
    header('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename='.$filename);
    header('Cache-Control: max-age=0');

    $objWriter->save('php://output');
    exit;
}catch (Exception $e) {

}


//echo json_encode($data);