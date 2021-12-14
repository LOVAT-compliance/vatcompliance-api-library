<?php

namespace VatCompliance;

class Merchant extends Client
{

	public function __construct($token)
	{
		parent::__construct($token);
		$this->url = 'https://merchant.vatcompliance.co/api';
	}

	public function merchantSend($params)
	{
		$this->setParams($params, 'POST', '/1/send');
		return $this->buildRequest();
	}

	public function taxRate($params)
	{
		$this->setParams($params, 'POST', '/1/tax_rate');
		return $this->buildRequest();
	}

	public function vatChecker($params)
	{
		$this->setParams($params, 'POST', '/1/returns/declarations/check_users_vat_number');
		return $this->buildRequest();
	}
}