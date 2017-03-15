<?php

namespace Duikb00t\EventManager\Controllers;

class ManagerController extends BaseController {

	public function index() {
		return view('eventmanager::admin.login.login');
	}
}
