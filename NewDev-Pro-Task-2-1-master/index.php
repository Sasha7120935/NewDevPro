<?php
$str = "Hello world";
for ($i = strlen($str); $i>=0; $i--) $rev[] = $str[$i];
$revstr =implode ("",$rev);
echo $revstr;