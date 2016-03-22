Bytehand SMS gateway for Yii 1.*

## Setup

1. Get your Bytehand account (please, use my reflink <https://www.bytehand.com/?r=ab0973d9155697ff> if you don't mind, or don't if you do — I completely understand)

2. Add component to your application config:

```
'components' => array(
	'bytehand' => array(
		'class' => 'wkd.components.BytehandSms',
		'bytehandId' => '111 (YOUR ID)',
		'bytehandKey' => 'A KEY YOU GET ON BYTEHAND',
		'bytehandFrom' => 'SMS-INFO',
	),
```
   
## Usage:

```
Yii::app()->bytehand->sendSMS(111111111111, 'Your order has been shipped, tracking: ABCABCABCAB');
```