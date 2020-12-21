<?php
ini_set('open_basedir', 'a');
$gz = gzfile('http://localhost/text.gz');
var_dump($gz);