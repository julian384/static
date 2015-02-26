<?php

#
#
#
#

class gcs
{

    function text()
    {
		$url = "http://static-code-test.storage.googleapis.com";
		$file = "file.txt";

		$curl = curl_init();
		$fp = fopen('$file', "r");

		# CONTENT_LENGTH The length of the request body without headers (in bytes)
		# Date format convential HTTP format Date: Wed, 16 Jun 2010 11:11:11 GMT
		# Host = The URI for Google Cloud Storage

		# Set PUT method
		curl_setopt($ch, CURLOPT_PUT, 1); 

		# Set headers
		curl_setopt($ch,CURLOPT_HTTPHEADER,array('Authorization: OAuth c71d790582c67e05a506233c50ddda15ea3fbd12', 'Content-Length: Content-LengthValue', 'Date: DateValue','Host: HostValue'));

		curl_setopt($ch, CURLOPT_INFILE, $fp);
		curl_setopt($ch, CURLOPT_INFILESIZE, filesize($localfile));

		curl_exec($curl);
		curl_close($curl);
		fclose($fp);
    }

}
