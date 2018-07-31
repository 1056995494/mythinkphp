<?php
//echo "aaa";
header("content-type:text/html;charset=utf-8");
echo "hello";
ob_flush();
$contents=ob_get_contents();
echo $contents;

?>