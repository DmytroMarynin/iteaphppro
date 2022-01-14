
function writeLog($file) {
	if (file_exist($file)) {
        	$history_log = fopen($file, "a");
        	if (fwrite($history_log, "Executed time" . date(time()) . ". Executed f>
                	echo "Impossible to write the file";
        	}
        	fclose($history_log);
	}
}

