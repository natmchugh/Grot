<?php

class GrotRequest {

	public $controller = 'Grot';

	public function  __construct() {
		$queryString = $_SERVER['QUERY_STRING'];
		if (empty($queryString)) {
			return;
		} else {
			$queryParts = explode('&', $string);
			foreach ($queryParts as $pair) {
				list($key, $value) = explode('=', $pair);
				$params[$key] = $value;
			}
		}
	}
}