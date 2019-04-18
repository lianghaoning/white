<?php

header("content-type:text/html;charset=utf8");

function GetUglyNumber_Solution($index)
{
	if(!is_numeric($index))
	{
		return 'this is not number';
	}

	while($index % 2 == 0)
	{
		$index = $index / 2;
	}

	while($index % 3 == 0)
	{
		$index = $index / 3;
	}

	while($index % 5 == 0)
	{
		$index = $index / 5;
	}

	if($index == 1)
	{
		return '是丑数';
	}

	else
	{
		return '不是丑数';
	}
}

$p = GetUglyNumber_Solution(8);

echo "$p";