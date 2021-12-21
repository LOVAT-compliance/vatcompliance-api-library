# Vatcompliance api php library

## Plugin install

The official documentation is located [here](https://developers.vatcompliance.co/omp-tax-rate-api/)

## Getting Started
```
composer require vatcompliance/vatcompliance
```

## Example
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

If you see in method POST GET params `?if_digital={true/false}&if_vat_calculate={true/false}` set the given parameter in the array as:
```
	'getParams' => array(
		'if_digital' => 'true/false',
		'if_vat_calculate' => 'true/false'
	)
```

## OMP Feed API methods

#### Definition

Omp feed
```
$omp = new Omp('__ACCESS KEY__');
$omp->feed
```

Omp Tax Rate

```
$omp = new Omp('__ACCESS KEY__');
$omp->taxRate()
```

Omp Report Create

```
$omp = new Omp('__ACCESS KEY__');
$omp->reportCreate()
```

Get Status
```
$omp = new Omp('__ACCESS KEY__');
$omp->getStatus()
```

Get Report

```
$omp = new Omp('__ACCESS KEY__');
$omp->getReport()
```

Omp Invoice

```
$omp = new Omp('__ACCESS KEY__');
$omp->ompInvoice()
```

## Omp Merchant Api

Merchant feed

```
$merchant = new Merchant('__ACCESS KEY__');
$merchant->merchantSend()
```

Merchant Tax Rate

```
$merchant = new Merchant('__ACCESS KEY__');
$merchant->taxRate()
```

Merchant Vat Checker
```
$merchant = new Merchant('__ACCESS KEY__');
$merchant->vatChecker()
```