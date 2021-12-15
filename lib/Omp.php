<?php

namespace VatCompliance;

class Omp extends Client
{

	public function __construct($token)
	{
		parent::__construct($token);
		$this->url = 'https://omp.vatcompliance.co/api';
	}

	public function feed($params)
	{
		$this->setParams($params, 'POST', '/omp/feed');
		return $this->buildRequest();
	}

	public function taxRate($params)
	{
		$this->setParams($params, 'POST', '/omp/tax_rate');
		return $this->buildRequest();
	}

	public function reportCreate($params)
	{
		$this->setParams($params, 'POST', '/omp/report/create');
		return $this->buildRequest();
	}

	public function getStatus($params)
	{
		$this->setParams($params, 'GET', '/omp/report/status');
		return $this->buildRequest();
	}

	public function getReport($params)
	{
		$this->setParams($params, 'GET', '/omp/report');
		return $this->buildRequest();
	}

	public function ompInvoice($params)
	{
		$this->setParams($params, 'POST', '/omp/omp_invoice');
		return $this->buildRequest();
	}
}