<?php

namespace App\Http\Controllers;

use App\Conversations\AboutConversation;
use App\Conversations\CasesByProvincesConversation;
use App\Conversations\CheckConversation;
use App\Conversations\ChronicConversation;
use App\Conversations\ConditionsConversation;
use App\Conversations\DailyStatsConversation;
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use App\Conversations\ExampleConversation;
use App\Conversations\MenuConversation;
use App\Conversations\FallbackConversation;
use App\Conversations\MythsConversation;
use App\Conversations\PositiveCasesConversation;
use App\Conversations\PregnantConversation;
use App\Conversations\PreventionConversation;
use App\Conversations\RisksConversation;
use App\Conversations\SymptomsConversation;
use App\Conversations\TestingConversation;
use App\Conversations\UpdateSummaryConversation;

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
    public function positiveCasesConversation(BotMan $bot)
    {
        $bot->startConversation(new PositiveCasesConversation());
    }
    public function casesByProvincesConversation(BotMan $bot)
    {
        $bot->startConversation(new CasesByProvincesConversation());
    }
    public function updateSummaryConversation(BotMan $bot)
    {
        $bot->startConversation(new UpdateSummaryConversation());
    }
    public function mythsConversation(BotMan $bot)
    {
        $bot->startConversation(new MythsConversation());
    }
    public function testingConversation(BotMan $bot)
    {
        $bot->startConversation(new TestingConversation());
    }
    public function conditionsConversation(BotMan $bot)
    {
        $bot->startConversation(new ConditionsConversation());
    }
    public function checkConversation(BotMan $bot)
    {
        $bot->startConversation(new CheckConversation());
    }
    public function aboutConversation(BotMan $bot)
    {
        $bot->startConversation(new AboutConversation());
    }
    public function chronicConversation(BotMan $bot)
    {
        $bot->startConversation(new ChronicConversation());
    }
    public function risksConversation(BotMan $bot)
    {
        $bot->startConversation(new RisksConversation());
    }
    public function pregnantConversation(BotMan $bot)
    {
        $bot->startConversation(new PregnantConversation());
    }
}
