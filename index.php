<?php
define('BASE_URI', str_replace('\\','/', substr(__DIR__ , strlen($_SERVER['DOCUMENT_ROOT']))));
require_once(implode(DIRECTORY_SEPARATOR , ['Core','autoload.php']));
$app = new  Core\Core();
//$app ->run();
$app ->rundynamique();
//echo "<pre>".$_POST["email"]."</pre>";
//echo "<pre>".$_POST["password"]."<pre>";
//"<pre>".var_dump($_GET)."</pre>";
//echo "<pre>";
//echo substr($_SERVER["REDIRECT_URL"],7);
//echo "</pre>";
?>
