<?php
	include "../functions.php";

	$domain = $_SERVER["SERVER_NAME"];

	$txt = trim(trim(shell_exec("dig +short @ns1.varo.domains _redirect.".$domain." TXT")), '"');

	if ($txt) {
		$args = explode(";", $txt);

		if (@count($args)) {
			$arg = [];

			foreach ($args as $a) {
				$split = explode("=", $a);
				$arg[$split[0]] = $split[1];
			}

			if (@count($arg)) {
				foreach ($arg as $key => $value) {
					switch ($key) {
						case "to":
							if (startsWithHTTP($value)) {
								$redirect = $value;
							}
							break;
					}
				}
			}
		}
	}

	if (!@$redirect) {
		$redirect = "https://varo.domains";
	}

	header("location: ".$redirect);
?>