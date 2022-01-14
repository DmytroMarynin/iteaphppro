<?php

include_once "logwriter.php";

echo "New file from second lesson";

if (function_exists('writeLog')) {
	writeLog("history.log");
}
