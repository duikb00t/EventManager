<?php


namespace Duikb00t\EventManager\Controllers;

class ScanController extends BaseController {

	public function validateTicket($ticketID) {
		return 'Validating ticket ' . $ticketID;
	}

	public function loadTicket($id) {
		echo sha1($id);
		return View('eventmanager::tests.ticket');
	}
}
