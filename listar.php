<?php

/*$frotas = 'assets/img/portfolio/frota/'; // Substitua pelo caminho da pasta que você quer listar os arquivos
$files = array_diff(scandir($frotas), array('..', '.')); // Exclui as pastas pai (..) e atual (.)

foreach ($files as $file) {
  if (is_file($frotas . '/' . $file)) { // Verifica se é um arquivo e não uma pasta
    
    $imagens[] =  $frotas.$file;
  
  }
}*/
$frotas = 'assets/img/portfolio/frota/'; // Substitua pelo caminho da pasta que você quer listar os arquivos
$filesFrota = array_diff(scandir($frotas), array('..', '.')); // Exclui as pastas pai (..) e atual (.)
$fundoCava = 'assets/img/portfolio/fundoCava/'; // Substitua pelo caminho da pasta que você quer listar os arquivos
$filesFundoCava = array_diff(scandir($fundoCava), array('..', '.')); // Exclui as pastas pai (..) e atual (.)
$nivelFreatico = 'assets/img/portfolio/nivelFreatico/'; // Substitua pelo caminho da pasta que você quer listar os arquivos
$filesNivelFreatico = array_diff(scandir($nivelFreatico), array('..', '.')); // Exclui as pastas pai (..) e atual (.)
$pocosMonitoramento = 'assets/img/portfolio/pocosMonitoramento/'; // Substitua pelo caminho da pasta que você quer listar os arquivos
$filesPocosMonitoramento = array_diff(scandir($pocosMonitoramento), array('..', '.')); // Exclui as pastas pai (..) e atual (.)
$tanques = 'assets/img/portfolio/tanques/'; // Substitua pelo caminho da pasta que você quer listar os arquivos
$filesTanques = array_diff(scandir($tanques), array('..', '.')); // Exclui as pastas pai (..) e atual (.)

foreach ($filesFrota as $file) {
  if (is_file($frotas . '/' . $file)) { // Verifica se é um arquivo e não uma pasta
    
    $imagensFrota[] =  $frotas.$file;
  
  }
}
foreach ($filesFundoCava as $file) {
  if (is_file($fundoCava . '/' . $file)) { // Verifica se é um arquivo e não uma pasta
    
    $imagensCava[] =  $fundoCava.$file;
  
  }
}
foreach ($filesNivelFreatico as $file) {
  if (is_file($nivelFreatico . '/' . $file)) { // Verifica se é um arquivo e não uma pasta
    
    $imagensFreatico[] =  $nivelFreatico.$file;
  
  }
}
foreach ($filesPocosMonitoramento as $file) {
  if (is_file($pocosMonitoramento . '/' . $file)) { // Verifica se é um arquivo e não uma pasta
    
    $imagensPocos[] =  $pocosMonitoramento.$file;
  
  }
}
foreach ($filesTanques as $file) {
  if (is_file($tanques . '/' . $file)) { // Verifica se é um arquivo e não uma pasta
    
    $imagensTanques[] =  $tanques.$file;
  
  }
}

$resultsFrota = count($imagensFrota);
$resultsCava = count($imagensCava);
$resultsFreatico = count($imagensFreatico);
$resultsPocos = count($imagensPocos);
$resultsTanques = count($imagensTanques);


$data = array(

  'rowsFrota' => $imagensFrota, 
  'resultsFrota' => $resultsFrota,
  'rowsCava' => $imagensCava, 
  'resultsCava' => $resultsCava,
  'rowsFreatico' => $imagensFreatico, 
  'resultsFreatico' => $resultsFreatico,
  'rowsPocos' => $imagensPocos, 
  'resultsPocos' => $resultsPocos,
  'rowsTanques' => $imagensTanques, 
  'resultsTanques' => $resultsTanques,

);

echo json_encode($data);
