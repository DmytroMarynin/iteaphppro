<?php

include "logwriter.php";

echo "Hello, Itea! First lesson done. Let's make secon one!";

echo "GitHub the best ;)";


if (function_exist('writeLog')) {
	writeLog('history.log');
}
