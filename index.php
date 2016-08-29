<?php
	switch (key($_GET)) {
		case "user":
			switch ($_GET["user"]) {
				require($_GET["test"] . ".php")
			};
			break;
		default:
			require("landing.php");
	};
?>
