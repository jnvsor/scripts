<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Local Site Index</title>
        <style>
        body {
            margin:40px auto;
            max-width: 650px;
            line-height: 1.6;
            font-size: 18px;
            color: #444;
            padding: 0 10px;
        }

        h1, h2, h3 {
            line-height: 1.2;
        }

        a {
            color: #47A;
            text-decoration: none;
        }

        a:hover {
            color: #8AC;
        }
        </style>
    </head>
<!---
Localhost index to list sites created with addsite and delsite
-->
    <body>
        <h1>Local Site Index</h1>
        <ul>
            <li><a href="/adminer/">Adminer</a></li>
<?php

foreach (scandir($_SERVER['DOCUMENT_ROOT']) as $entry)
    if (is_dir($entry) && $entry != "." && $entry != ".." && file_exists('/etc/apache2/sites-enabled/'.$entry.'.conf'))
        echo '<li><a href="http://'.$entry.'.local">'.$entry."</a></li>\n";

?>
        </ul>
    </body>
</html>
