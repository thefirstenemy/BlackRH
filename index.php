<?php
//require_once 'model/user_model.inc.php';
//$user_controller = new UserController ();
@$op = $_REQUEST ['method'] ? $_REQUEST ['method'] : $_REQUEST ['op'];
switch ($op) {	
	case 'recovery' :
		header ( "Location:view/recovery_password.php" );
	break;
	default :
        header ( "Location:home.php" );
	break;
}
?>