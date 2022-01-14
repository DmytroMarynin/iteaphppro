<?php

include "logwriter.php"

echo "New file from second lesson";

if (function_exist('writeLog')) {
	writeLog("history.log");
}
