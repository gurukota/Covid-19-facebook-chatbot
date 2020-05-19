<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Hi', BotManController::class.'@menuConversation');
$botman->hears('Start conversation', BotManController::class.'@startConversation');

