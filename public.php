//Make dependencies availible

require_once __DIR__ . '/vendor/autoload.php';


//Connect to UCRM api

$api = \Ubnt\UcrmPluginSdk\Service\UcrmApi::create();

//add form to site 

