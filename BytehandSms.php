<?php
/**
 * BytehandSms.php
 * Date: 01.07.13
 *
 * @author Sergii Gamaiunov <hello@webkadabra.com>
 * @license MIT
 */
class BytehandSms extends CApplicationComponent
{

	public $bytehandId = 0000;
	public $bytehandKey = "XXXXXXXXXXXXXXXX";
	public $bytehandFrom = "SMS-INFO";

	public function sendSMS($to, $text)
	{

		$result = @file_get_contents('http://bytehand.com:3800/send?id='.$this->bytehandId.'&key='.$this->bytehandKey.'&to='.urlencode($to).'&from='.urlencode($this->bytehandFrom).'&text='.urlencode($text));
		if ($result === false)
			return false;
		else
			return true;
	}
}
