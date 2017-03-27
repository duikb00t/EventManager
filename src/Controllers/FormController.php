<?php

namespace Duikb00t\EventManager\Controllers;

class FormController extends BaseController {

	/**
	 * Load front-end view for registrations
	 */
	public function index() {
		return view('eventmanager::form.register');
	}

	/**
	 * Store new attendee in the database.
	 */
	public function store() {
		return 'store it';
	}
}
