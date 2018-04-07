<?php declare(strict_types=1);

namespace app\command;

class ReactionCatch extends \PhpSlackBot\Command\BaseCommand {

	protected function configure() {

	}

	protected function execute($data, $context) {
		if ($data['type'] === 'reaction_added') {
			$user = $data['user'];
			$reaction = $data['reaction'];
		}
	}
}
