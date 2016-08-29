<?php
	switch (key($_GET)) {
		case "user":
			switch ($_GET["user"]) {
				require($_GET["user"] . ".php")
			};
			break;
		default:
			require("landing.php");
	};
?>
