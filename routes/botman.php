<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');
$botman->hears('menu', BotManController::class.'@menuConversation');
$botman->hears('Start conversation', BotManController::class.'@startConversation');
$botman->hears('Symptoms', BotManController::class.'@symptomsConversation');
$botman->hears('Prevention', BotManController::class.'@preventionConversation');
$botman->hears('Daily Stats', BotManController::class.'@dailyStatsConversation');
$botman->hears('Positive Cases', BotManController::class.'@positiveCasesConversation');
$botman->hears('Cases by Provinces', BotManController::class.'@casesByProvincesConversation');
$botman->hears('Update Summary', BotManController::class.'@updateSummaryConversation');
$botman->hears('Myths', BotManController::class.'@mythsConversation');
$botman->hears('Testing', BotManController::class.'@testingConversation');
$botman->hears('Conditions', BotManController::class.'@conditionsConversation');
$botman->hears('Check', BotManController::class.'@checkConversation');
$botman->hears('About', BotManController::class.'@aboutConversation');
$botman->hears('Risks', BotManController::class.'@risksConversation');
$botman->hears('Pregnant', BotManController::class.'@pregnantConversation');
$botman->hears('Chronic', BotManController::class.'@chronicConversation');
$botman->fallback(BotManController::class.'@fallbackConversation');