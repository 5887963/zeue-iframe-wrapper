<?php
	switch (key($_GET)) {
		case "user":
			switch ($_GET["user"]) {
				case "50513090":
					require("50513090.php");
					break;
				default:
					require("landing.php");
			};
			break;
		default:
			require("landing.php");
	};
?>
