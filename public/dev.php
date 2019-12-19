<?php
require dirname(__DIR__) . '/autoload.php';

if (php_sapi_name() == "cli-server") {
    $staticExts =["jpg", "jpeg", "gif", "css", "ico"];
    $ext = pathinfo(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH), PATHINFO_EXTENSION);
    if (in_array($ext, $staticExts)) {

        return false;   // そのまま表示
    }
}
exit((require dirname(__DIR__) . '/bootstrap.php')('dev-html-app'));
