<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');
$botman->hears('menu', BotManController::class.'@menuConversation');
$botman->hears('Start conversation', BotManController::class.'@startConversation');
$botman->hears('Symptoms', BotManController::class.'@symptomsConversation');
$botman->hears('Prevention', BotManController::class.'@preventionConversation');
$botman->hears('Daily Stats', BotManController::class.'@dailyStatsConversation');
$botman->hears('Positive Cases', BotManController::class.'@menuConversation');
$botman->hears('Cases by Provinces', BotManController::class.'@menuConversation');
$botman->hears('Update Summary', BotManController::class.'@menuConversation');
$botman->hears('Myths', BotManController::class.'@menuConversation');
$botman->hears('Testing', BotManController::class.'@menuConversation');
$botman->hears('Conditions', BotManController::class.'@menuConversation');
$botman->hears('Check', BotManController::class.'@menuConversation');
$botman->fallback(BotManController::class.'@fallbackConversation');