<script src="https://use.fontawesome.com/f9d64cef7b.js"></script>

<div style="width:100%;text-align:center">
	<a href="http://108.20.161.15/todo/start.php" style="text-decoration:none">
		<i class="fa fa-home fa-2x" style="color:black"></i>
	</a>

	<a href="http://108.20.161.15/todo/weather.php" style="text-decoration:none">
		<i class="fa fa-sun-o fa-2x" style="color:black"></i>
	</a>
	
	<a href="https://google.com" style="text-decoration:none">
		<i class="fa fa-search fa-2x" style="color:black"></i>
	</a>
	
	<a href="https://news.ycombinator.com" style="text-decoration:none">
		<i class="fa fa-newspaper-o fa-2x" style="color:black"></i>
	</a>
</div>

<?php
/*
	This file is part of myTinyTodo.
	(C) Copyright 2009-2010 Max Pozdeev <maxpozdeev@gmail.com>
	Licensed under the GNU GPL v3 license. See file COPYRIGHT for details.
*/

require_once('./init.php');

$lang = Lang::instance();

if($lang->rtl()) Config::set('rtl', 1);

if(!is_int(Config::get('firstdayofweek')) || Config::get('firstdayofweek')<0 || Config::get('firstdayofweek')>6) Config::set('firstdayofweek', 1);

define('TEMPLATEPATH', MTTPATH. 'themes/'.Config::get('template').'/');

require(TEMPLATEPATH. 'index.php');

?>
