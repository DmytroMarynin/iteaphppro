<?php 
function writeLog($file) {
	if (file_exists($file)) {
        	$history_log = fopen($file, "a");
        	if (fwrite($history_log, "Executed at " . date('F j, Y, H:i:s') . ". Executed file" . __FILE__ . "\r\n") === FALSE) {
                	echo "Impossible to write the file";
        	}
        	fclose($history_log);
	}
}

