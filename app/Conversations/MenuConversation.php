<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use App\Services\APIService;

class MenuConversation extends Conversation
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

    public function getMenu()
    {
        $this->say("Welcome to the COVID-19 support service. ".$this->api->dateUpdate()
        
        ."\r\nCorrect information is critical. This service provides the official and up to date information on the status of COVID-19 in Zimbabwe.\r\n\r\n
        
        What would you like to know about COVID-19?\r\n
        Reply with one of the words in the list below to get the correct information on the topic:\r\n\r\n
        
        Symptoms 🤒
        \r\nPrevention 👍
        \r\nPositive Cases🗓
        \r\nDaily Stats 🗓
        \r\nCases by Provinces🗓
        \r\nUpdate Summary🗓
        \r\nMyths 🛑
        \r\nTesting 🔬
        \r\nConditions 📁
        \r\nCheck 💟 - COVID-19 Risk assessment
        ");
    }
    public function run()
    {
        $this->getMenu();
    }
}
