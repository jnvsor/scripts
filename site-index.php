<!DOCTYPE html>
<html>
    <head>
        <title>Local Site Index</title>
    </head>
    <body>
        <h1>Local Site Index</h1>
        <ul>
<?php

foreach (scandir($_SERVER['DOCUMENT_ROOT']) as $entry)
    if (is_dir($entry) && $entry != "." && $entry != ".." && file_exists('/etc/apache2/sites-enabled/'.$entry.'.conf'))
        echo '<li><a href="http://'.$entry.'.local">'.$entry."</a></li>\n";

?>
        </ul>
    </body>
</html>
