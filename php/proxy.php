<?php
	/* Send POST request to https://secure.example.com/form_action.php
	* Include form elements named "foo" and "bar" with dummy values
	*/

	$sock = fsockopen("stark-wave-1524.herokuapp.com", 80, $errno, $errstr, 30);
	if (!$sock) 
		die("$errstr ($errno)\n");

	$data = "1=1";

	if(isset($_POST['operazione'])) {
		$data = $data . "&operazione=" . urlencode($_POST['operazione']);
	} else {
		die("$errstr ($errno)\n");
	}

	if($_POST['operazione'] == 1) {

		if(isset($_POST['da'])) {
			$data = $data . "&da=" . urlencode($_POST['da']);
		}
		if(isset($_POST['occorrenze'])) {
			$data = $data . "&occorrenze=" . urlencode($_POST['occorrenze']);
		}

	} else if($_POST['operazione'] == 0) {
		if(isset($_POST['dedicaNome'])) {
			$data = $data . "&nome=" . urlencode($_POST['dedicaNome']);
		} else {
			die("$errstr ($errno)\n");
		}
		if(isset($_POST['dedicaMessaggio'])) {
			$data = $data . "&messaggio=" . urlencode($_POST['dedicaMessaggio']);
		} else {
			die("$errstr ($errno)\n");
		}

	}

	fwrite($sock, "POST /wedding HTTP/1.0\r\n");
	fwrite($sock, "Host: stark-wave-1524.herokuapp.com\r\n");
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