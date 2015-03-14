<?php 
/**
* 
*/
class OpenSETClient
{
	
	private $base_service = "";
	private $result_data;
	public function get_all()
	{

	}

	public function get_stock($stock_name)
	{

	}
	private function _curl($url)
	{
		// Get cURL resource
		$curl = curl_init();
		// Set some options - we are passing in a useragent too here
		curl_setopt_array($curl, array(
		    CURLOPT_RETURNTRANSFER => 1,
		    CURLOPT_URL => $url;
		    CURLOPT_USERAGENT => 'open set client php';
		));
		// Send the request & save response to $resp
		$this->result_data = curl_exec($curl);
		// Close request to clear up some resources
		curl_close($curl);
	}

}
?>