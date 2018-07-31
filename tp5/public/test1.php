<?php
$file=fopen('message.txt','r+');
fwrite($file,'423');
fwrite($file,'423');
fclose($file);

