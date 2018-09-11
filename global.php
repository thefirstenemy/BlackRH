<?php
spl_autoload_register('loadClass');
function loadClass(){
	if(file_exists('/model/'.$nameClass.'.php')){
		require_once '/model/'$nameClass.'.php';
	}
}

?>