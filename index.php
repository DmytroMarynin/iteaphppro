<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

include_once "logwriter.php";

echo "Hello, Itea! First lesson done. Let's make secon one!";

echo "GitHub the best ;)";


if (function_exists('writeLog')) {
	writeLog('history.log');
}

if (random_int(1, 20) > 10 && file_exists("index-dev.php")) {
	include "index-dev.php";
}
