<?php


// Check if the 'p' parameter is set in the URL
if (isset($_GET['p'])) {
    // If the parameter is set but empty, use 'default'
    $pagina = ($_GET['p'] === '') ? 'default' : strtolower($_GET['p']);
} else {
    // If the parameter is not set, use 'default'
    $p='default';
    $pagina = 'default';
}


require_once 'views/header.php';

require_once 'views/'.$pagina.'.php';

require_once 'views/footer.php';

?>
	
	
