<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;

class MenuConversation extends Conversation
{
    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function getMenu()
    {
        $simba = 'sadas';
        $date = json_decode(file_get_contents('https://crnzwhack.herokuapp.com/dateUpdate'));
        $this->say("Welcome to the COVID-19 support service. ".$date[0]->date
        
        ."\r\nCorrect information is critical. This service provides the official and up to date information on the status of COVID-19 in Zimbabwe.\r\n\r\n
        
        What would you like to know about COVID-19?\r\n
        Reply with one of the words in the list below to get the correct information on the topic:\r\n\r\n
        
        News 🆕
        \r\nCases 🗓
        \r\nMyths 🛑
        \r\nAbout ℹ️
        \r\nPrevention 👍
        \r\nSymptoms 🤒
        \r\nTreatment 🏥
        \r\nTesting 🔬
        \r\nConditions 📁
        \r\nCheck 💟 - COVID-19 Risk assessment
        Share this service ➡️");
    }
    public function run()
    {
        $this->getMenu();
    }
}
