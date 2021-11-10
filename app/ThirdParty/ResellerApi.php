<?php

namespace App\ThirdParty;

class ResellerApi {

    private $reseller_api_soap_client;

    function __construct() {
        //set the login headers
        $authenticate = array();
        $authenticate['AuthenticateRequest'] = array();
        $authenticate['AuthenticateRequest']['ResellerID'] = env('DOMAIN_SEARCH_RESELLER_ID');
        $authenticate['AuthenticateRequest']['APIKey'] = env('DOMAIN_SEARCH_API_KEY');

        //convert $authenticate to a soap variable'
        $authenticate['AuthenticateRequest'] = new \SoapVar($authenticate['AuthenticateRequest'], SOAP_ENC_OBJECT);
        $authenticate = new \SoapVar($authenticate, SOAP_ENC_OBJECT);

        $header = new \SoapHeader(env('DOMAIN_SEARCH_SOAP_LOCATION'), 'Authenticate', $authenticate, false);

        $this->reseller_api_soap_client = new \SoapClient(env('DOMAIN_SEARCH_WSDL_LOCATION'), array('soap_version' => SOAP_1_2, 'cache_wsdl' => WSDL_CACHE_NONE));
        $this->reseller_api_soap_client->__setSoapHeaders(array($header));
    }

    function call($method, $data = null) {
        $prepared_data = $data != null ? array($data) : array();

        try {
            $response = $this->reseller_api_soap_client->__soapCall($method, $prepared_data);
        } catch (\SoapFault $response) { }

        return $response;
    }
}
