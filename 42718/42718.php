<?php
echo "filter.default = " . ini_get('filter.default') . " <br />\n";
echo "filter.default_flags = " . ini_get('filter.default_flags') . " <br />\n";
echo "<br />";
echo "\$_GET['a'] contains \\0: " . (strpos($_GET['a'], "\0") !== false ? 'Yes' : 'No') . " <br />\n";
echo "<br />";
echo "\$_GET['a'] throught filter_var() contains \\0: " . (strpos(filter_var($_GET['a'], FILTER_UNSAFE_RAW, FILTER_FLAG_STRIP_LOW), "\0") !== false ? 'Yes' : 'No') . "<br />";
echo "<br />";