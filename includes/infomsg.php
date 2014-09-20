<?php
//main info message
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>';
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
//second info message
        	if( isset($_SESSION['ERRMSG_ARRG']) && is_array($_SESSION['ERRMSG_ARRG']) && count($_SESSION['ERRMSG_ARRG']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARRG'] as $msg) {
			echo '<li>',$msg,'</li>';
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARRG']);
	}
?>
