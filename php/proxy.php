<?php
	/* Send POST request to https://secure.example.com/form_action.php
	* Include form elements named "foo" and "bar" with dummy values
	*/

	$sock = fsockopen("localhost", 8080, $errno, $errstr, 30);
	if (!$sock) 
		die("$errstr ($errno)\n");

	$data = "1=1";

	if(isset($_GET['operazione'])) {
		$data = $data . "&operazione=" . urlencode($_GET['operazione']);
	} else {
		die("$errstr ($errno)\n");
	}

	if($_GET['operazione'] == 1) {

		if(isset($_GET['da'])) {
			$data = $data . "&da=" . urlencode($_GET['da']);
		}
		if(isset($_GET['occorrenze'])) {
			$data = $data . "&occorrenze=" . urlencode($_GET['occorrenze']);
		}

	} else if($_GET['operazione'] == 0) {
		if(isset($_GET['dedicaNome'])) {
			$data = $data . "&nome=" . urlencode($_GET['dedicaNome']);
		} else {
			die("$errstr ($errno)\n");
		}
		if(isset($_GET['dedicaMessaggio'])) {
			$data = $data . "&messaggio=" . urlencode($_GET['dedicaMessaggio']);
		} else {
			die("$errstr ($errno)\n");
		}

	}

	fwrite($sock, "POST /wedding HTTP/1.0\r\n");
	fwrite($sock, "Host: secure.example.com\r\n");
	fwrite($sock, "Content-type: application/x-www-form-urlencoded\r\n");
	fwrite($sock, "Content-length: " . strlen($data) . "\r\n");
	fwrite($sock, "Accept: */*\r\n");
	fwrite($sock, "\r\n");
	fwrite($sock, $data);

	while ($str = trim(fgets($sock, 4096))){
		if(0 === strpos($str, 'Content-Type:')){
			header($str);
		}
	}

	$body = "";
	while (!feof($sock))
	$body .= fgets($sock, 4096);

	echo $body;
	
	fclose($sock);
?>