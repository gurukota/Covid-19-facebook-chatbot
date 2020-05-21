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
     * Fetch and return
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

    public function positiveCases()
    {
        $ext = 'apicase';
        try {
            // Decode the json response.
            $response = json_decode(
                // Make an API call an return the response body.
                $this->client->get(self::URL.$ext)->getBody()
            );
            foreach($response as $value){
                $string .= "
                \nCase Number:  $value->caseId
                \nAge:  $value->age
                \nGender:   $value->gender
                \nCity:  $value->city 
                \nDate Confirmed:  $value->dateConfirmation
                \nTravel History:  $value->travelHistoryLocation\n\n";
            }
            return $string;
        } catch (Exception $e) {
            // If anything goes wrong, we will be sending the user this error message.
            return 'An unexpected error occurred. Please try again later.';
        }
    }

    public function casesByProvinces()
    {
        $ext = 'CasesProvince';
        try {
            // Decode the json response.
            $response = json_decode(
                // Make an API call an return the response body.
                $this->client->get(self::URL.$ext)->getBody()
            );
            
            $string = " COVID-19 cases at Provincial Level:
                \nBulawayo:  ".$response[0]->Bulawayo."
                \nHarare:  ".$response[0]->Harare."
                \nManicaland:   ".$response[0]->Manicaland."
                \nMashonaland Central:  ".$response[0]->Mashonaland_Central." 
                \nMashonaland East:  ".$response[0]->Mashonaland_East."
                \nMashonaland West:  ".$response[0]->Mashonaland_West."
                \nMasvingo:  ".$response[0]->Masvingo."
                \nMatabeleland North:   ".$response[0]->Matabeleland_North."
                \nMatabeleland South:  ".$response[0]->Matabeleland_South." 
                \nMidlands:  ".$response[0]->Midlands."
                \n\n Follow the directions of your local health authority.\nAvoiding unneeded visits to medical facilities allows healthcare systems to operate more effectively, therefore protecting you and others.\n#COVID19 #HealthyAtHome";
            return $string;
        } catch (Exception $e) {
            // If anything goes wrong, we will be sending the user this error message.
            return 'An unexpected error occurred. Please try again later.';
        }
    }

    public function updateSummary()
    {
        $ext = 'UpdateSummary';
        try {
            // Decode the json response.
            $response = json_decode(
                // Make an API call an return the response body.
                $this->client->get(self::URL.$ext)->getBody()
            );
            $string = "COVID-19 Update Summary:
            \nTotal Tests: ". $response[0]->TotalTests.
            "\nPositive Cases: ". $response[0]->PositiveCases.
            "\nNegative Cases: ". $response[0]->NegativeTests.
            "\nDeaths: ". $response[0]->Deaths.
            "\nICU: ". $response[0]->ICU.
            "\nAverage Age: ". $response[0]->AverageAge.
            "\nMedian Age: ". $response[0]->MedianAge.
            "\nMinimum Age: ". $response[0]->MinimumAge.
            "\nMaximum Age: ". $response[0]->MaximumAge.
            "\n\nTip: COVER your cough. Cover your nose and mouth with your bent elbow or a tissue when you cough or sneeze.\n#COVID19 #HealthyAtHome";
            return $string;
        } catch (Exception $e) {
            // If anything goes wrong, we will be sending the user this error message.
            return 'An unexpected error occurred. Please try again later.';
        }
    }


}