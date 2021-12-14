<?php

namespace VatCompliance;

class Client
{
	protected $token;
	protected $maxTimeOut = 10000;
	protected $url;
	protected $params;
	protected $method;

	public function __construct($token)
	{
		$this->token = $token;
	}

	public function setParams($params, $method, $url)
	{
		$this->params = $params;
		$this->method = strtoupper($method);
		$this->url = $this->url . $url . '/' . $this->token;

		//build GET required params if method POST
		if (!empty($this->params['getParams'])) {
			$this->url = $this->url . '?' . http_build_query($this->params['getParams']);
			unset($this->params['getParams']);
		}

		if ($this->method == 'GET') {
			$this->url = $this->url . '?' . http_build_query($this->params);
		}
	}

	public function buildRequest()
	{
		try {
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $this->url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $this->method);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT_MS, $this->maxTimeOut);
			if ($this->method == 'POST')
				curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($this->params));

			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Accept: application/json'));
			$result = curl_exec($ch);
			curl_close($ch);

			return json_decode($result);

		} catch (\Exception $e) {
			return $e;
		}
	}
}