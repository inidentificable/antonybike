<?php
require_once('config.php');
require_once('arriba.php');
if (isset($_GET["a"]))
{
	if(file_exists($_GET["a"]))
	{
		require_once($_GET["a"]);
	}
	else
	{
		require_once(DELANTE.'errorpagina.php');
	}
}
else
{
	require_once('centro.php');
}
require_once('abajo.php');
?>
