<?php

class Bun
{
	public function __construct(string $key)
	{
		echo 'Hello' . $key . "\r\n";
	}
}

$bun = new Bun('a');
$bun = new Bun('b');
$bun = new Bun('b');
$bun = new Bun('r');

