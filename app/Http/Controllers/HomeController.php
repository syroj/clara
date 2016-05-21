<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Patient as Patient;
use App\Contact as Contact;
use App\Insurance as Insurance;
use App\visite as Visite;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Patients=Visite::where('tanggal',date('Y-m-d'))->where('status','menunggu')->orderby('id','asc')->paginate(10);
        $count=Visite::where('tanggal',date('Y-m-d'))->where('status','menunggu')->count();
        return view('home',[
          'Patients'=>$Patients,
          'count'=>$count
        ]);
    }

}
