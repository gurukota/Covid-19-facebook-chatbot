<?php

namespace App\Http\Controllers;

use App\Conversations\DailyStatsConversation;
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use App\Conversations\ExampleConversation;
use App\Conversations\MenuConversation;
use App\Conversations\FallbackConversation;
use App\Conversations\PreventionConversation;
use App\Conversations\SymptomsConversation;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');

        $botman->listen();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function tinker()
    {
        return view('tinker');
    }

    /**
     * Loaded through routes/botman.php
     * @param  BotMan $bot
     */
    public function startConversation(BotMan $bot)
    {
        $bot->startConversation(new ExampleConversation());
    }
    public function menuConversation(BotMan $bot)
    {
        $bot->startConversation(new MenuConversation());
    }
    public function fallbackConversation(BotMan $bot)
    {
        $bot->startConversation(new FallbackConversation());
    }
    public function symptomsConversation(BotMan $bot)
    {
        $bot->startConversation(new SymptomsConversation());
    }
    public function preventionConversation(BotMan $bot)
    {
        $bot->startConversation(new PreventionConversation());
    }
    public function dailyStatsConversation(BotMan $bot)
    {
        $bot->startConversation(new DailyStatsConversation());
    }
}
