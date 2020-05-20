<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use App\Services\APIService;


class DailyStatsConversation extends Conversation
{
    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function __construct()
    {
        $this->api = new APIService;
    }
    public function run()
    {
        $this->say("Zimbabwe  COVID-19 Statistics As At: ".$this->api->dateUpdate().":
        \nCummilative Country Total Cases: ". $this->api->dailyCases('CMTTOTAL') .
        "\nCountry Total Tested: ". $this->api->dailyCases('TOTALTS')	 .
        "\nCountry Total Positive Tests: ". $this->api->dailyCases('TOTALPSTV') .
        "\nCountry Total Positive ReTests: ". $this->api->dailyCases('TOTALPSTVRETES') .
        "\nCountry Total Deaths: ". $this->api->dailyCases('TOTALDEAD')	 .
        "\nCountry Total in ICU: ". $this->api->dailyCases('TOTALICU')	 .
        "\nCountry Total recovered: ". $this->api->dailyCases('TOTALRCVD') .
        "\n\nTIP: KEEP a safe distance. Maintain a safe distance from anyone who is coughing or sneezing. \n#COVID19 #HealthyAtHome");
    }
}
