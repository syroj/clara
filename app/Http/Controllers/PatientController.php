<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Patient as Patient;
use App\Contact as Contact;
use App\insurance as Insurance;
use App\data_insurance as DI;
use App\visite as Visite;
use DB;
use Response;
class PatientController extends Controller
{

// ============ index pasien ============
    public function index(){
      $Patients=Patient::orderby('created_at','asc')->paginate('25');
      $count=Patient::count();
      $search="";
      return view('pasien',[
        'Patients'=>$Patients,
        'count'=>$count
      ]);
    }

// ========= Cari pasien ========
    public function search(Request $request){
      $id=$request->search;
      $result=Patient::where('mr','like','%'.$id.'%')->orWhere('nama','like','%'.$id.'%')->get();
      //return Response::json($result);
      return view('result',[
                          'Patients'=>$result,
                          'search'=>$id
                            ]);

    }
// ============ pasien baru ============
    public function pasbar(){
      $mr=Patient::max('mr');
      $insurance=DI::all();
      return view('form.pasbar',[
        'mr'=>$mr,
        'insurance'=>$insurance
      ]);
    }
// ==========Single pasien==============
    public function single($mr){
      $mr=$mr;
      $di=DI::all();
      $insurance=Insurance::where('mr',$mr)->get();
      $Contact=Contact::where('mr',$mr)->get();
      $Patients=Patient::where('mr',$mr)->get();
    return  view('widget.identitas',[
      'Patients'=>$Patients,
      'mr'=>$mr,
      'Contact'=>$Contact,
      'di'=>$di,
      'insurances'=>$insurance
    ]);
    }
    public function add_jamkes(Request $request){
      $mr=$request->mr;
      $nama_asuransi=$request->nama_asuransi;
      $status=$request->status;
      $data=[
        'mr'=>$mr,
        'nama_asuransi'=>$nama_asuransi,
        'status'=>$status,
        'created_at'=>date('Y-m-d')
      ];
      $save=Insurance::insert($data);
      return redirect('/pasien'.'/'.$mr);
    }
    public function del_jam_id($id){
      $data=Insurance::where('id',$id)->delete();
    }




    public function keluarga($mr){
      $Patients=Patient::where('mr',$mr)->get();
      return  view('widget.keluarga',['Patients'=>$Patients]);
    }
    public function kunjungan($mr){
      $Patients=Patient::where('mr',$mr)->get();
      return  view('widget.kunjungan',['Patients'=>$Patients]);
    }
    public function terapi($mr){
      $Patients=Patient::where('mr',$mr)->get();
      return  view('widget.terapi',['Patients'=>$Patients]);
    }
    public function mr($mr){
      $Patients=Patient::where('mr',$mr)->get();
      return  view('widget.mr',['Patients'=>$Patients]);
    }
    public function problem($mr){
      $Patients=Patient::where('mr',$mr)->get();
      return  view('widget.problem',['Patients'=>$Patients]);
    }
// ========= panggil_pasien ==========
    public function panggil_pasien($mr){
      $Patients=Patient::where('mr',$mr)->get();
      $visite=Visite::where('mr',$mr)->update(['status'=>'proses']);
      return  view('profil.pasien',['Patients'=>$Patients]);
    }
//========= pasien baru ============
    public function store(Request $request){
      $Patient=new Patient;
      $Patient->fam_id = $request->fam_id;
      $Patient->mr = $request->mr;
      $Patient->nama = $request->nama;
      $Patient->tanggal_lahir = $request->tanggal_lahir;
      $Patient->gender = $request->gender;
      $Patient->alamat = $request->alamat;
      $Patient->telp = $request->telp;
      $Patient->pekerjaan = $request->pekerjaan;
      $Patient->pernikahan = $request->pernikahan;
      $Patient->gol_darah = $request->gol_darah;
      $Patient->created_at=date('Y-m-d');
      $Patient->save();
      return redirect('/home');
    }
// ====== save edit pasien ===
  public function edit_pasien(Request $request){
    $fam_id         = $request->fam_id;
    $mr             = $request->mr;
    $nama           = $request->nama;
    $tanggal_lahir  = $request->tanggal_lahir;
    $gender         = $request->gender;
    $alamat         = $request->alamat;
    $telp           = $request->telp;
    $pekerjaan      = $request->pekerjaan;
    $pernikahan     = $request->pernikahan;
    $gol_darah      = $request->gol_darah;

    $data=[
      'fam_id'  =>$fam_id,
      'nama'    =>$nama,
      'tanggal_lahir'    =>$tanggal_lahir,
      'gender'    =>$gender,
      'alamat'    =>$alamat,
      'telp'    =>$telp,
      'pekerjaan'    =>$pekerjaan,
      'pernikahan'    =>$pernikahan,
      'gol_darah'    =>$gol_darah
    ];
    $save=Patient::where('mr',$mr)->update($data);
    return redirect('/pasien'.'/'.$mr);
  }
}
