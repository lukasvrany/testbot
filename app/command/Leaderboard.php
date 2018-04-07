<?php declare(strict_types=1);

namespace app\command;

class Leaderboard extends \PhpSlackBot\Command\BaseCommand {

	protected function configure() {
		$this->setName('Bonami tabule');
	}

	protected function execute($message, $context) {
		$result = "1. Laky
		2. Honza
		3. Petra";
		$this->send($this->getCurrentChannel(), $this->getCurrentUser(), $result);
	}
}