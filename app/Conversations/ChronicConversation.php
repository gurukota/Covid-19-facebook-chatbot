<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;

class ChronicConversation extends Conversation
{
    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        $this->say('https://www.cdc.gov/coronavirus/2019-ncov/hcp/underlying-conditions.html');
    }
}
