<?php

namespace Duikb00t\EventManager;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Manager extends Authenticatable {

	use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
	protected $table = 'managers';


  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'password',
  ];

}