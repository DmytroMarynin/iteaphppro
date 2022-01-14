<?php

include "logwriter.php";

echo "Hello, Itea! First lesson done. Let's make secon one!";

echo "GitHub the best ;)";


if (function_exist('writeLog')) {
	writeLog('history.log');
}

if (random_int(1, 20) > 10 && file_exist("index-dev.php")) {
	include "index-dev.php";
}
