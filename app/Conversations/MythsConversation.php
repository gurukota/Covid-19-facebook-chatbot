<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;

class MythsConversation extends Conversation
{
    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        $this->say('There is a lot of false information currently going around.

        Reply with one of the words in the list below to get the correct information on the topic:
        
        BATH: Taking a hot bath does not prevent COVID-19
        
        GARLIC: Can eating garlic help prevent infection with COVID-19?
        
        PETS: Can pets at home spread the COVID-19? 
        
        SPRAY: Can spraying alcohol or chlorine all over your body kill COVID-19?
        
        DRYERS: Are hand dryers effective in killing COVID-19?
        
        MOSQUITO: COVID-19 CANNOT be transmitted through mosquito bites.
        
        AGE: Does COVID-19 affect older people, or are younger people also susceptible?
        
        NOSE: Can regularly rinsing your nose with saline help prevent infection with COVID-19?
        
        HOT: Can COVID-19 be transmitted in areas with hot and humid climates?
        
        COLD: Cold weather and snow CANNOT kill COVID-19.
        
        GOODS: COVID-19 cannot be transmitted through goods manufactured in China or any country reporting COVID-19 cases.
        
        UV: Can an ultraviolet disinfection lamp kill COVID-19?
        
        SCAN: How effective are thermal scanners in detecting people infected with COVID-19?
        
        VACCINES: Do vaccines against pneumonia protect you against the COVID-19?
        
        ANTIBIOTICS: Are antibiotics effective in preventing and treating the COVID-19?
        
        MEDICINE: Are there any specific medicines to prevent or treat the COVID-19?
        
        📌Reply MENU to return to the main menu');
    }
}
