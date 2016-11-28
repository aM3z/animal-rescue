<?php

	/**
	 * Writes data to a .json file.
	 *
	 */
	function saveData($data, $filename) {

		// open file
		$saveFile = fopen($filename, "a") or die("<p>Unable to open file...</p><br>");

		// get JSON representation
		$json_data = json_encode($data) . "\n";
		
		// write to file
		fwrite($saveFile, $json_data);

		// close file
		fclose($orderFile);

	}
