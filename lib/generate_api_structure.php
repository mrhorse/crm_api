<?php


require __DIR__ . '/../../../../../autoload.php';

$generator = new \Wsdl2PhpGenerator\Generator();
$generator->generate(
    new \Wsdl2PhpGenerator\Config(array(
        'inputFile' => 'https://api.independentage.org/thankQApiTrain/esitws.asmx?WSDL',
        'outputDir' => __DIR__ . '/Api',
	    'namespaceName' => 'Torchbox\Thankq\Api'
    ))
);

?>
