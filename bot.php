<?php declare(strict_types=1);

require 'vendor/autoload.php';
use PhpSlackBot\Bot;

$bot = new Bot();
$bot->setToken(getenv('SLACK_TOKEN'));
$bot->loadCommand(new Leaderboard());
$bot->loadCatchAllCommand(new ReactionCatch());
$bot->run();