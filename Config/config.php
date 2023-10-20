<?php
include('functions.php');
var_dump{$_SERVER}
if(define('ROOT'))
{
define('ROOT','http://'. $_SERVER['HTTP_HOST'].getFolderProyect());
}

?>