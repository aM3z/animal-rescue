<?php 

	/**
	 * Cleans user-entered data.
	 *
	 * This functions strips off leading/ending whitespaces,
	 * backslahes, and HTML/PHP tags from a given string. 
	 * 
	 * NOTE: strip_tags() is a built-in functions that has not
	 * been discussed in class.
	 *
	 * @param string $data user-entered data
	 * @return string
	 */
	function cleanData($data) {
		// strip leading/ending whitespaces
		$data = trim($data);
		// strip slashes
		$data = stripslashes($data);
		// strip HTML and PHP tags
		$data = strip_tags($data);
		return $data;
	}

