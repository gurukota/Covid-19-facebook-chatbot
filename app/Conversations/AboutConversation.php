<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;

class AboutConversation extends Conversation
{
    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        $this->say('What is COVID-19?

        - Coronavirus disease (COVID-19) is an infectious disease caused by the newly discovered coronavirus. Coronaviruses are large groups of viruses common throughout the world.
        
        - Most people with the COVID-19 virus will have mild to moderate respiratory illness. They\'ll recover without special treatment. Older people and those with underlying medical problems like cardiovascular disease, HIV, TB, chronic respiratory disease, and cancer are more likely to get seriously ill.
        
        - The COVID-19 virus spreads through droplets of saliva or discharge from the nose when an infected person coughs or sneezes. That\'s why it\'s important to wash your hands and cough into your flexed elbow.
        
        Watch this video to learn more: https://youtu.be/4hwD6tF9m5k
        
        -----
        Reply:
        🤒 SYMPTOMS for more on symptoms
        👍 PREVENTION to learn how to avoid infection
        📌 MENU to return to the main menu');
    }
}
