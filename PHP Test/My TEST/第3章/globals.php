<?php
function test()
{
	global $var;
	echo '全局变量$var: ' . $var.'<br>';
	echo '全局变量$str: ' . $GLOBALS['str'];
}
$var = 100;
$str = 'php';
test();