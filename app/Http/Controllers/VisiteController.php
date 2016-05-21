<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Patient as Patient;
use App\visite as Visite;
class VisiteController extends Controller
{
  //===========Kunjungan===========
  //=====Seluruh Kunjungan========
  public function visiteAll(){
    $data=Visite::orderby('tanggal','asc')->paginate(25);
    return view('kunjungan',['Patients'=>$data]);
  }
  //=======Kunjungan hari ini====
  public function visiteToday(){
    $data=Visite::where('tanggal',date('Y-m-d'))->get();
  }
  // ======= tambah kunjungan =====
  public function add_visite(Request $request){
    $v=new Visite;
    $v->tanggal=date('Y-m-d');
    $v->mr=$request->mr;
    $v->nama=$request->nama;
    $v->gender=$request->gender;
    $v->tgl_lahir=$request->tanggal_lahir;
    $v->alamat=$request->alamat;
    $v->status="menunggu";
    $v->tujuan=$request->tujuan;
    //return $v;
    $v->save();
    return redirect('/home');
  }
  //========Hapus Kunjungan=========
  public function delete_visite($id){
    $delete=Visite::where('id',$id)->delete();
    return redirect('/home');
  }
}
