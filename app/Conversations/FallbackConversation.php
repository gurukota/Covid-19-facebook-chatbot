<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;

class FallbackConversation extends Conversation
{
    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        $this->say('Sorry, I did not understand these commands. Here is a list of commands I understand...');
        $this->bot->startConversation(new \App\Conversations\MenuConversation());
    }
}
