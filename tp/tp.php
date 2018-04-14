<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Une page PHP</title>
</head>
<body>
<?php
date_default_timezone_set('America/Los_Angeles');
echo "<h3> Aujourd'hui le ". date('d / M / Y h:i:s')."</h3><hr />";
echo "<h2>Bienvenue sur le site PHP 5</h2>";
echo 'Aujourd\'hui :       '. date('Y-m-d') ."\n";

?>
</body>
</html>