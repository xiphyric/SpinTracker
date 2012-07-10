<?php

class mysql extends mysqli {
	
	function check() {
		/* check connection */
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		}
	}
}
?>