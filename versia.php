<?php
class MathComplex
{
	public $re1, $im1, $re2, $im2;
	function __construct($re1 = 0, $im1 = 0, $re2 = 0, $im2 = 0)
	{
		$this->re = $re1;
		$this->im = $im1;
		$this->re = $re2;
		$this->im = $im2;
	}

	function add($re1, $im1, $re2, $im2)
	{
		$this->re = $re1 + $re2;
		$this->im = $im1 + $im2;
	}

	function sub($re1, $im1, $re2, $im2)
	{
		$this->re = $re1 - $re2;
		$this->im = $im1 - $im2;
	}

	function mult($re1, $im1, $re2, $im2)
	{
		$this->re = $re1 * $re2 - $im1 * $im2;
		$this->im = $re1 * $im2 + $im1 * $re2;
	}

	function div($re1, $im1, $re2, $im2)
	{
		$this->re = ($re1 * $re2 + $im1 * $im2) / (pow($re2, 2) + pow($im2, 2));
		$this->im = ($im1 * $re2 - $re1 * $im2) / (pow($re2, 2) + pow($im2, 2));
	}
}

$obj = new MathComplex;

$obj->sub(2, 7, 3, 0);

echo "{$obj->re}+({$obj->im})i" . "<br/>";

