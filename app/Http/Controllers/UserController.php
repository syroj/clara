<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User as User;
Use App\Patient as Patient;
Use App\visite as visite;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
      $staf=User::all();
      return view('staf',['staf'=>$staf]);
    }
}
