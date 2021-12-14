# vatcompliance api php library

## Установка плагина

Офицальная документация находится [Здесь](https://developers.vatcompliance.co/omp-tax-rate-api/)

Установка через composer
```
composer require lovat/vatcompliance
```

Пример использования
```
include __DIR__ . '/vendor/autoload.php';

$omp = new Merchant('__ACCESS KEY__');

$result = $omp->merchantSend(
	array(
		'transaction_id' =>'213321829137291739231321',
		'transaction_datetime' => date('Y-m-d'),
		'transaction_sum' => 25,
		'currency' => 'EUR',
		'customer_ip' => '127.0.0.1',
		"arrival_country" => " GBR",
		"arrival_city" => " London",
		"arrival_address_line" => " Peckham Road",
		"transaction_status" => "Success",
		'customer_phone_number' => '+48 *** *** ***',
		'getParams' => array(
			'if_digital' => 'true',
			'if_vat_calculate' => 'true'
		)
	)
);
```

Если вы видите в методе POST ?if_digital={true/false}&if_vat_calculate={true/false} задайте данный параметр в массиве как:
```
	'getParams' => array(
		'if_digital' => 'true/false',
		'if_vat_calculate' => 'true/false'
	)
```
