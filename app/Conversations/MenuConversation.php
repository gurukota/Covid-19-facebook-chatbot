<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use App\Services\APIService;
use BotMan\Drivers\Facebook\Extensions\ElementButton;
use BotMan\Drivers\Facebook\Extensions\Element;
use BotMan\Drivers\Facebook\Extensions\GenericTemplate;

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

    public function run()
    {
        $this->say("Welcome to the COVID-19 support service. ".$this->api->dateUpdate()
        
        ."\r\nCorrect information is critical. This service provides the official and up to date information on the status of COVID-19 in Zimbabwe.
        \r\nWhat would you like to know about COVID-19?
        ");
        $this->bot->reply(GenericTemplate::create()
            ->addImageAspectRatio(GenericTemplate::RATIO_SQUARE)
            ->addElements([
                Element::create('What is COVID-19?')
                    ->subtitle('Remember to wash your hands regularly')
                    ->image('http://botman.io/img/botman-body.png')
                    ->addButton(ElementButton::create('About ℹ️')
                        ->payload('about')
                        ->type('postback')
                    ),
                Element::create('BotMan Laravel Starter')
                    ->subtitle('Remember to wash your hands regularly')
                    ->image('http://botman.io/img/botman-body.png')
                    ->addButton(ElementButton::create('Symptoms 🤒')
                        ->payload('Symptoms')
                        ->type('postback')
                    ),
                Element::create('BotMan Laravel Starter')
                    ->subtitle('Remember to wash your hands regularly')
                    ->image('http://botman.io/img/botman-body.png')
                    ->addButton(ElementButton::create('Prevention 👍')
                        ->payload('Prevention')
                        ->type('postback')
                    ),
                Element::create('BotMan Laravel Starter')
                    ->subtitle('Remember to wash your hands regularly')
                    ->image('http://botman.io/img/botman-body.png')
                    ->addButton(ElementButton::create('Daily Stats 🗓')
                        ->payload('Daily Stats')
                        ->type('postback')
                    ),
                    Element::create('BotMan Laravel Starter')
                    ->subtitle('Remember to wash your hands regularly')
                    ->image('http://botman.io/img/botman-body.png')
                    ->addButton(ElementButton::create('Cases by Provinces🗓')
                        ->payload('Cases by Provinces')
                        ->type('postback')
                    ),
                Element::create('BotMan Laravel Starter')
                    ->subtitle('Remember to wash your hands regularly')
                    ->image('http://botman.io/img/botman-body.png')
                    ->addButton(ElementButton::create('Update Summary🗓')
                        ->payload('Update Summary')
                        ->type('postback')
                    ),
                Element::create('BotMan Laravel Starter')
                    ->subtitle('Remember to wash your hands regularly')
                    ->image('http://botman.io/img/botman-body.png')
                    ->addButton(ElementButton::create('Myths 🛑')
                        ->payload('Myths')
                        ->type('postback')
                    ),
                Element::create('BotMan Laravel Starter')
                    ->subtitle('Remember to wash your hands regularly')
                    ->image('http://botman.io/img/botman-body.png')
                    ->addButton(ElementButton::create('Testing 🔬')
                        ->payload('Testing')
                        ->type('postback')
                    ),
                Element::create('BotMan Laravel Starter')
                    ->subtitle('Remember to wash your hands regularly')
                    ->image('http://botman.io/img/botman-body.png')
                    ->addButton(ElementButton::create('Conditions 📁')
                        ->payload('Conditions')
                        ->type('postback')
                    ),
            ])
        );
    }
}
