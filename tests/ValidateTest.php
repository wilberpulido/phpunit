<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
	public function test_email()
	{
		$email = Validate::email('wilberpulido@gmail.com');
		$this->assertTrue($email);

		$email = Validate::email('wilberpulido@@gmail.com');
		$this->assertFalse($email);
	}
	public function test_url()
  {
  	$url = Validate::url('https://platzi.com');
		$this->assertTrue($url);

		$url = Validate::url('platzi.com');
		$this->assertFalse($url);

  }
	public function test_password()
	{
		$password = Validate::password('0123456');
		$this->assertTrue($password);

		$password = Validate::password('l36basjnaks');
		$this->assertTrue($password);

		$password = Validate::password('123');
		$this->assertFalse($password);

		$password = Validate::password('123456789qwertyuiop');
		$this->assertFalse($password);
	}
}
