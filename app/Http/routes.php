<?php
Route::group(['middleware'=>'web'],function(){
  Route::get('/register',function(){
    return redirect('/daftar');
  });
  route::get('daftar',function(){
    if (Auth::Guest()) {
      return view('daftar');
    } else {
      return redirect('/home');
    }

  });
});
Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/', function () {
      if (Auth::guest())
        return view('index');
      else {
        return redirect('/home');
      }
    });
    Route::get('/home', 'HomeController@index');
    //========== pasien===========
    Route::get('/pasien','PatientController@index');
    Route::get('/pasien_baru', 'PatientController@pasbar');
    Route::post('/pasbar','PatientController@store');
    Route::post('/edit_pasien','PatientController@edit_pasien');
    Route::post('/add_jamkes','PatientController@add_jamkes');
    Route::get('/del_jam_id/{id}','PatientController@del_jam_id');
    Route::get('/pasien/{mr}','PatientController@single');
    Route::get('/pasien/{mr}/keluarga','PatientController@keluarga');
    Route::get('/pasien/{mr}/kunjungan','PatientController@kunjungan');
    Route::get('/pasien/{mr}/mr','PatientController@mr');
    Route::get('/pasien/{mr}/terapi','PatientController@terapi');
    Route::get('/pasien/{mr}/problem','PatientController@problem');

    //=========kunjungan=============
    Route::get('/visite','VisiteController@visiteAll');
    Route::get('/panggil_pasien/{mr}','PatientController@panggil_pasien');
    Route::post('/add_visite','VisiteController@add_visite');
    Route::get('/visite/{mr}/delete','VisiteController@delete_visite');
    //========= search =========
    Route::post('/search','PatientController@search');
    Route::get('/search/{id}','PatientController@get_search');
    //========= staf ==========
    Route::Get('/staf','UserController@index');
});

                 /*route group admin*/
Route::group(['middleware'=>['web','auth','admin']],function(){
  Route::get('/admin',function(){
    return view('admin');
  });
});
                /*route group dokter*/
Route::group(['middleware'=>['web','auth','dokter']],function(){
  Route::get('/dokter',function(){
    return view('dokter');
  });
});
/*route group perawat*/
Route::group(['middleware'=>['web','auth','perawat']],function(){
  Route::get('/perawat',function(){
    return view('perawat');
  });
});
/*route group bidan*/
Route::group(['middleware'=>['web','auth','bidan']],function(){
  Route::get('/bidan',function(){
    return view('bidan');
  });
});
/*route group apotik*/
Route::group(['middleware'=>['web','auth','apotik']],function(){
  Route::get('/apotik',function(){
    return view('apotik');
  });
});
/*route group lab*/
Route::group(['middleware'=>['web','auth','lab']],function(){
  Route::get('/lab',function(){
    return view('lab');
  });
});
/*route group radiologi*/
Route::group(['middleware'=>['web','auth','radiologi']],function(){
  Route::get('/radiologi',function(){
    return view('radiologi');
  });
});
/*route group kasir*/
Route::group(['middleware'=>['web','auth','kasir']],function(){
  Route::get('/kasir',function(){
    return view('kasir');
  });
});
