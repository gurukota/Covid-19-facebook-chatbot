<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use App\Services\APIService;

class UpdateSummaryConversation extends Conversation
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
        $this->say($this->api->updateSummary());
    }   //
}
