<?php

namespace Duikb00t\EventManager\Controllers;

class ScanController extends BaseController {

	public function validateTicket($ticketID) {
		return 'Validating ticket ' . $ticketID;
	}
}
