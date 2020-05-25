<?php
	function newed() {
		global $Wcms;

		// Check if the newed area is already exists, if not, create it
		if (empty($Wcms->get('blocks','newed'))) {
			$Wcms->set('blocks','newed', 'content', 'Your content here.');
		}

		// Fetch the value of the newed from database
		$value = $Wcms->get('blocks','newed','content');

		// If value is empty, let's put something in it by default
		if (empty($value)) {
			$value = 'Empty content';
		}
		if ($Wcms->loggedIn) {
			// If logged in, return block in editable mode
			return $Wcms->block('newed');
		}

		// If not logged in, return block in non-editable mode
		return $value;
	}
?>
<?php
	function whoami() {
		global $Wcms;

		// Check if the whoami area is already exists, if not, create it
		if (empty($Wcms->get('blocks','whoami'))) {
			$Wcms->set('blocks','whoami', 'content', 'Your content here.');
		}

		// Fetch the value of the whoami from database
		$value = $Wcms->get('blocks','whoami','content');

		// If value is empty, let's put something in it by default
		if (empty($value)) {
			$value = 'Empty content';
		}
		if ($Wcms->loggedIn) {
			// If logged in, return block in editable mode
			return $Wcms->block('whoami');
		}

		// If not logged in, return block in non-editable mode
		return $value;
	}
?>

