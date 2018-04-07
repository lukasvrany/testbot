<?php declare(strict_types=1);

require 'vendor/autoload.php';

use app\command\Leaderboard;
use app\command\ReactionCatch;
use PhpSlackBot\Bot;
use

$bot = new Bot();
$bot->setToken(getenv('SLACK_TOKEN'));
$bot->loadCommand(new Leaderboard());
$bot->loadCatchAllCommand(new ReactionCatch());
$bot->run();