<?php declare(strict_types=1);

require 'vendor/autoload.php';
use PhpSlackBot\Bot;

// Custom command
class MyCommand extends \PhpSlackBot\Command\BaseCommand {

	protected function configure() {

	}

	protected function execute($data, $context) {

		if ($data['type'] == 'reaction_added') {
			$channel = $this->getChannelNameFromChannelId($data['channel']);
			$username = $this->getUserNameFromUserId($data['user']);
			echo $username.' from '.($channel ? $channel : 'DIRECT MESSAGE').' : '.$data['text'].PHP_EOL;
			$this->send($this->getCurrentChannel(), null, $data['reaction']);
		}

	}

}

$bot = new Bot();
$bot->setToken(getenv('SLACK_TOKEN')); // Get your token here https://my.slack.com/services/new/bot
//$bot->loadCommand(new MyCommand());
$bot->loadCatchAllCommand(new MyCommand());
//$bot->loadInternalCommands(); // This loads example commands
$bot->run();