<?php declare(strict_types=1);

require 'vendor/autoload.php';
use PhpSlackBot\Bot;

// Custom command
class MyCommand extends \PhpSlackBot\Command\BaseCommand {

	protected function configure() {
		$this->setName('mycommand');
	}

	protected function execute($message, $context) {
		$this->send($this->getCurrentChannel(), null, 'Hello !');
	}

}

$bot = new Bot();
$bot->setToken('xoxb-335005620384-xWxG9BeFN9nRpLc6ELnSUaPt'); // Get your token here https://my.slack.com/services/new/bot
$bot->loadCommand(new MyCommand());
$bot->loadInternalCommands(); // This loads example commands
$bot->run();