<?php
// Carga el autoloader de Composer para que las clases sean reconocidas.
require '../vendor/autoload.php';

use App\Infrastructure\DescargarExcelCorporativo;
use App\Application\BodegaGenerarInformeGestion;
use App\Infrastructure\Repository\BodegaInformeGestionRepository;

// Define la ruta al archivo de configuración.
$configPath = '../config.php';

// Carga el archivo de configuración y captura el array que retorna.
// Se usa "require" para ejecutar el archivo y obtener su valor de retorno.
$config = require $configPath;

// Ahora que $config es un array, se puede pasar al constructor.
$data = $config['data'];

$informeGestionExcelRepository = new BodegaInformeGestionRepository();
$informeGestionExcelRepository->setData($data);
$datosSimulacion = $informeGestionExcelRepository->getData();
$generarInformeGestion = new BodegaGenerarInformeGestion($config);
$registros = $generarInformeGestion->run($datosSimulacion);
$excelGenerator = new DescargarExcelCorporativo($configPath, $registros);
$excelGenerator->descargar();