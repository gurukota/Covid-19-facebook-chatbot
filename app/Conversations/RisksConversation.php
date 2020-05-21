<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;

class RisksConversation extends Conversation
{
    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        $this->say('Who is at risk of becoming very ill? 

        - Clinical observation suggests that older people that older adults and people with compromised immune systems, or other underlying illnesses, are at higher risk of becoming severely ill. The following diseases make people more vulnerable: 
        – HIV positive people with a low CD4 count
        – Chronic lung diseases, including TB, Asthma and COPD
        – Auto-Immune Diseases of any kind
        – Chronic Kidney Diseases
        – Cancer
        – Diabetes
        – Others: such as smokers & alcohol dependant people.
        
        - Follow local restrictions on travel, movement or large gatherings. Cooperating will reduce your risk of catching or spreading COVID-19. It\'s important that we all play our part, be responsible and self isolate to curb the infection spread.
        
        - China demonstrated that it\'s possible to contain and slow down the spread of COVID-19. But new outbreaks can happen quickly. It\'s important to stay informed. WHO publishes daily updates on the COVID-19 situation worldwide.
  
        📌Reply CONDITIONS to return to the conditions submenu
        📌Or reply MENU to return to the main menu');
    }
}
