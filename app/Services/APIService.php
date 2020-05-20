<?php

namespace App\Services;

use Exception;
use GuzzleHttp\Client;

class APIService
{
    // The endpoint we will be getting a random image from.
    const URL = 'https://crnzwhack.herokuapp.com/';

    /**
     * Guzzle client.
     *
     * @var GuzzleHttp\Client
     */
    protected $client;

    /**
     * DogService constructor
     * 
     * @return void
     */
    public function __construct()
    {
        $this->client = new Client;
    }

    /**
     * Fetch and return a random image from all breeds.
     *
     * @return string
     */
    public function dateUpdate()
    {
        $ext = 'dateUpdate';
        try {
            // Decode the json response.
            $response = json_decode(
                // Make an API call an return the response body.
                $this->client->get(self::URL.$ext)->getBody()
            );

            // Return the image URL.
            return $response[0]->date;
        } catch (Exception $e) {
            // If anything goes wrong, we will be sending the user this error message.
            return 'An unexpected error occurred. Please try again later.';
        }
    }

    public function dailyCases($name)
    {
        $ext = 'apiday';
        try {
            // Decode the json response.
            $response = json_decode(
                // Make an API call an return the response body.
                $this->client->get(self::URL.$ext)->getBody()
            );
            switch ($name) {
                case 'CMTTOTAL':
                    return $response[0]->CMTTOTAL;
                  break;
                case 'TOTALTS':
                    return $response[0]->TOTALTS;
                  break;
                case 'TOTALPSTV':
                    return $response[0]->TOTALPSTV;
                break;
                case 'TOTALPSTVRETES':
                    return $response[0]->TOTALPSTVRETES	;
                  break;
                case 'TOTALDEAD':
                    return $response[0]->TOTALDEAD;
                  break;
                case 'TOTALICU':
                    return $response[0]->TOTALICU;
                break;
                case 'TOTALRCVD':
                    return $response[0]->TOTALRCVD;
                break;
                default:
                  return false;
              }
        } catch (Exception $e) {
            // If anything goes wrong, we will be sending the user this error message.
            return 'Null';
        }
    }
}