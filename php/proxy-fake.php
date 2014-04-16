<?php
	/* Send POST request to https://secure.example.com/form_action.php
	* Include form elements named "foo" and "bar" with dummy values
	*/

	// $sock = fsockopen("localhost", 8080, $errno, $errstr, 30);
	// if (!$sock) 
	// 	die("$errstr ($errno)\n");

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
		
		echo "{\"conteggio\":20,\"pagine\":4,\"paginaCorrente\":1,\"dediche\":{\"-20\":{\"_id\":-20,\"data\":{\"date\":15,\"day\":2,\"hours\":15,\"minutes\":12,\"month\":3,\"seconds\":35,\"time\":1397567555268,\"timezoneOffset\":-120,\"year\":114},\"nome\":\"Nome -20\",\"document\":\"Documento -20\"},\"-19\":{\"_id\":-19,\"data\":{\"date\":15,\"day\":2,\"hours\":15,\"minutes\":12,\"month\":3,\"seconds\":35,\"time\":1397567555268,\"timezoneOffset\":-120,\"year\":114},\"nome\":\"Nome -19\",\"document\":\"Documento -19\"},\"-18\":{\"_id\":-18,\"data\":{\"date\":15,\"day\":2,\"hours\":15,\"minutes\":12,\"month\":3,\"seconds\":35,\"time\":1397567555268,\"timezoneOffset\":-120,\"year\":114},\"nome\":\"Nome -18\",\"document\":\"Documento -18\"},\"-17\":{\"_id\":-17,\"data\":{\"date\":15,\"day\":2,\"hours\":15,\"minutes\":12,\"month\":3,\"seconds\":35,\"time\":1397567555268,\"timezoneOffset\":-120,\"year\":114},\"nome\":\"Nome -17\",\"document\":\"Documento -17\"},\"-16\":{\"_id\":-16,\"data\":{\"date\":15,\"day\":2,\"hours\":15,\"minutes\":12,\"month\":3,\"seconds\":35,\"time\":1397567555268,\"timezoneOffset\":-120,\"year\":114},\"nome\":\"Nome -16\",\"document\":\"Documento -16\"}}}";

		// fwrite($sock, "POST /wedding HTTP/1.1\r\n");
		// fwrite($sock, "Host: secure.example.com\r\n");
		// fwrite($sock, "Content-type: application/x-www-form-urlencoded\r\n");
		// fwrite($sock, "Content-length: " . strlen($data) . "\r\n");
		// fwrite($sock, "Accept: */*\r\n");
		// fwrite($sock, "\r\n");
		// fwrite($sock, $data);

		// while ($str = trim(fgets($sock, 4096))){
		// 	if(0 === strpos($str, 'Content-Type:')){
		// 		header($str);
		// 	}
		// }

		// $body = "";
		// while (!feof($sock))
		// echo fgets($sock, 4096);

		// fclose($sock);
	} else if($_GET['operazione'] == 0) {
		if(isset($_GET['dedicaNome'])) {
			$data = $data . "&dedicaNome=" . urlencode($_GET['dedicaNome']);
		} else {
			die("$errstr ($errno)\n");
		}
		if(isset($_GET['dedicaMessaggio'])) {
			$data = $data . "&dedicaMessaggio=" . urlencode($_GET['dedicaMessaggio']);
		} else {
			die("$errstr ($errno)\n");
		}

		echo "{\"status\":0,\"messaggio\":\"inserimento ok\"}";

		// fwrite($sock, "POST /wedding HTTP/1.1\r\n");
		// fwrite($sock, "Host: secure.example.com\r\n");
		// fwrite($sock, "Content-type: application/x-www-form-urlencoded\r\n");
		// fwrite($sock, "Content-length: " . strlen($data) . "\r\n");
		// fwrite($sock, "Accept: */*\r\n");
		// fwrite($sock, "\r\n");
		// fwrite($sock, $data);

		// fclose($sock);



	}
?>