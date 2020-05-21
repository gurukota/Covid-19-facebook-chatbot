<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;

class ConditionsConversation extends Conversation
{
    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        $this->say('Pre-existing conditions

        This is where you’ll find the important information you need about conditions, including pregnancy and Chronic Illnesses, like HIV.
        
        🤰🏼 PREGNANT Info for pregnancy
        ⚠️ RISKS WHo is most at risk
        💊 CHRONIC CCMDD Chronic Medication
        
        -----
        Reply 📌 MENU to return to the main menu.`');
    }
}
