<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
  /**
   *  Return the user list
   */
  public function index()
  {
    return User::all();
  }
}
