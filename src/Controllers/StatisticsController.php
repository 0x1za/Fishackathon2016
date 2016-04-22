<?php
/*
 * ClickSendV3APILib
 *
 * This file was automatically generated by APIMATIC BETA v2.0 on 03/01/2016
 */

namespace ClickSendV3APILib\Controllers;

use ClickSendV3APILib\APIException;
use ClickSendV3APILib\APIHelper;
use ClickSendV3APILib\Configuration;
use Unirest\Unirest;
class StatisticsController {

    /* private fields for configuration */

    /**
     * your username 
     * @var string
     */
    private $username;

    /**
     * your api key 
     * @var string
     */
    private $key;

    /**
     * Constructor with authentication and configuration parameters
     */
    function __construct($username, $key)
    {
        $this->username = $username ? $username : Configuration::$username;
        $this->key = $key ? $key : Configuration::$key;
    }

    /**
     * Get voice statistics
     * @return string response from the API call*/
    public function getVoiceStatistics () 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/statistics/voice';

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'    => 'APIMATIC 2.0'
        );

        //prepare API request
        $request = Unirest::get($queryUrl, $headers, NULL, $this->username, $this->key);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new APIException('BAD_REQUEST', 400, $response->body);
        }

        else if ($response->code == 401) {
            throw new APIException('UNAUTHORIZED', 401, $response->body);
        }

        else if ($response->code == 403) {
            throw new APIException('FORBIDDEN', 403, $response->body);
        }

        else if ($response->code == 404) {
            throw new APIException('NOT_FOUND', 404, $response->body);
        }

        else if ($response->code == 405) {
            throw new APIException('METHOD_NOT_FOUND', 405, $response->body);
        }

        else if ($response->code == 429) {
            throw new APIException('TOO_MANY_REQUESTS', 429, $response->body);
        }

        else if ($response->code == 500) {
            throw new APIException('INTERNAL_SERVER_ERROR', 500, $response->body);
        }

        else if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
    /**
     * Get sms statistics
     * @return string response from the API call*/
    public function getSmsStatistics () 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/statistics/sms';

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'    => 'APIMATIC 2.0'
        );

        //prepare API request
        $request = Unirest::get($queryUrl, $headers, NULL, $this->username, $this->key);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new APIException('BAD_REQUEST', 400, $response->body);
        }

        else if ($response->code == 401) {
            throw new APIException('UNAUTHORIZED', 401, $response->body);
        }

        else if ($response->code == 403) {
            throw new APIException('FORBIDDEN', 403, $response->body);
        }

        else if ($response->code == 404) {
            throw new APIException('NOT_FOUND', 404, $response->body);
        }

        else if ($response->code == 405) {
            throw new APIException('METHOD_NOT_FOUND', 405, $response->body);
        }

        else if ($response->code == 429) {
            throw new APIException('TOO_MANY_REQUESTS', 429, $response->body);
        }

        else if ($response->code == 500) {
            throw new APIException('INTERNAL_SERVER_ERROR', 500, $response->body);
        }

        else if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
}