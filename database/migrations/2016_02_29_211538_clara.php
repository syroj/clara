<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clara extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      //table users
      Schema::create('users', function (Blueprint $table) {
          $table->increments('id');
          $table->string('code');
          $table->string('prefix');
          $table->string('name');
          $table->string('gelar');
          $table->string('email');
          $table->string('password', 60);
          $table->string('tgl_lahir');
          $table->string('alamat');
          $table->string('telp');
          $table->string('sip');
          $table->string('rules');
          $table->string('divisi');
          $table->string('status');
          $table->rememberToken();
          $table->timestamps();
      });
      //table password reset
      Schema::create('password_resets', function (Blueprint $table) {
          $table->string('email')->index();
          $table->string('token')->index();
          $table->timestamp('created_at');
      });
      //table pendidikan
      Schema::create('educations',function (Blueprint $table){
          $table->increments('id');
          $table->string('code');
          $table->string('lembaga');
          $table->string('mulai');
          $table->string('selesai');
      });
      //table pelatihan
      Schema::create('trainings',function(Blueprint $table){
          $table->increments('id');
          $table->string('code');
          $table->string('jenis');
          $table->string('tahun');
          $table->string('lembaga');
          $table->string('skp');
      });
      //berkas keluarga
      Schema::create('fam_archives',function(Blueprint $table){
          $table->increments('id');
          $table->string('fam_id');
          $table->string('kepala');
          $table->string('alamat');
          $table->string('tlp');
          $table->string('bentuk_keluarga');
          $table->string('siklus_keluarga');
          $table->string('genogram');
          $table->string('hubungan_kelurga');
          $table->string('freq_kumpul');
          $table->string('keputusan');
          $table->string('spiritual');
          $table->string('stresor_keluarga');
          $table->string('pekerjaan_kk');
          $table->string('interaksi_lingkungan');
          $table->string('organisasi');
          $table->string('kedudukan_keluarga');
          $table->string('stressor_sosial');
          $table->string('sumber_nafkah');
          $table->string('keb_ekonomi');
          $table->string('keb_pendidikan');
          $table->string('keb_kesehatan');
      });
      //risiko internal
      Schema::create('int_risks',function(Blueprint $table){
          $table->increments('id');
          $table->string('fam_id');
          $table->string('mandi');
          $table->string('perlengkapan_mandi');
          $table->string('bersih2_rumah');
          $table->string('bersih2_wc');
          $table->string('pengetahuan_penyakit');
          $table->string('pengetahuan_risiko_kesehatan');
          $table->string('sumber_makanan');
          $table->string('jenis');
          $table->string('pola');
          $table->string('jumlah');
          $table->string('perencanaan_dlm_berkeluarga');
          $table->string('pengambilan_keputusan');
          $table->string('fokus_perkembangan_anak');
          $table->string('siklus_menstruasi');
          $table->string('kb');
          $table->string('jenis_kb');
          $table->string('koitus');
          $table->string('olahraga');
          $table->string('jenis_olahraga');
          $table->string('durasi');
          $table->string('meorkok');
          $table->string('tidur_malam');
      });
      //faktor fasilitas kesehatan
      Schema::create('faskes_risks',function(Blueprint $table){
          $table->increments('id');
          $table->string('fam_id');
          $table->string('faskes');
          $table->string('cara_berkunjung');
          $table->string('tarif');
          $table->string('kualitas');
      });
      //faktor lingkungan
      Schema::create('env_risks',function(Blueprint $table){
          $table->increments('id');
          $table->string('fam_id');
          $table->string('kepemilikan_rumah');
          $table->string('jenis_bangunan');
          $table->string('daerah_perumahan');
          $table->string('keamanan');
          $table->string('exposure');
      });
      //kondisi rumah
      Schema::create('home_characteristics',function(Blueprint $table){
          $table->increments('id');
          $table->string('fam_id');
          $table->string('luas');
          $table->string('jumlah_penghuni');
          $table->string('luas_halaman');
          $table->string('bertingkat');
          $table->string('lantai');
          $table->string('dinding');
          $table->string('jumlah_jendela');
          $table->string('ukuran_jendela');
          $table->string('listrik');
          $table->string('kelembapan');
          $table->string('kebersihan');
          $table->string('kerapihan');
          $table->string('sumber_air_minum');
          $table->string('sumber_air_mck');
          $table->string('jamban');
          $table->string('limbah_keluarga');
      });
      //risiko pekerjaan
      Schema::create('work_risks',function(Blueprint $table){
          $table->increments('id');
          $table->string('fam_id');
          $table->string('mr');
          $table->string('pekerjaan');
          $table->string('risiko_pekerjaan');
          $table->string('exposure');
      });
      //pasien
      Schema::create('patients',function(Blueprint $table){
          $table->increments('id');
          $table->string('fam_id');
          $table->string('mr');
          $table->string('nama');
          $table->string('tanggal_lahir');
          $table->string('gender');
          $table->string('alamat');
          $table->string('telp');
          $table->string('pekerjaan');
          $table->string('pernikahan');
          $table->string('gol_darah');
      });
      //kontak darurat
      Schema::create('contacts',function(Blueprint $table){
          $table->increments('id');
          $table->string('rm');
          $table->string('nama');
          $table->string('alamat');
          $table->string('telp');
          $table->string('hubungan');
      });
      //asuransi
      Schema::create('insurances',function(Blueprint $table){
          $table->increments('id');
          $table->string('mr');
          $table->string('nama');
          $table->string('alamat');
          $table->string('telp');
          $table->string('email');
          $table->string('status');
      });
      //alergi
      Schema::create('allergies',function(Blueprint $table){
          $table->increments('id');
          $table->string('mr');
          $table->string('pencetus');
          $table->string('reaksi');
          $table->string('code');
      });
      Schema::create('visits',function(Blueprint $table){
        $table->increments('id');
        $table->string('tanggal');
        $table->string('mr');
        $table->string('nama');
        $table->string('gender');
        $table->string('alamat');
        $table->string('status');
      });
      //rekam medis
      Schema::create('med_records',function(Blueprint $table){
          $table->increments('id');
          $table->string('tanggal');
          $table->string('mr');
          $table->string('sub_id');
          $table->string('pf_id');
          $table->string('rad_id');
          $table->string('lab_id');
          $table->string('ass_id');
          $table->string('pln_id');
          $table->string('code');
      });
      //subjektif
      Schema::create('subjectives',function(Blueprint $table){
          $table->increments('id');
          $table->string('sub_id');
          $table->string('tanggal');
          $table->string('mr');
          $table->string('code');
          $table->string('ku');
          $table->string('rps');
          $table->string('rpd');
          $table->string('sosial');
          $table->string('kebiasaan');
      });
      //objektif

      Schema::create('pfs',function(Blueprint $table){
        $table->increments('id');
        $table->string('pf_id');
        $table->string('kepala');
        $table->string('mata');
        $table->string('tht_kl');
        $table->string('toraks');
        $table->string('abdomen');
        $table->string('genitalia_anus');
        $table->string('ekstrimitas');
        $table->string('st_lokalis');
        $table->string('pf_lain');
        $table->string('resume');
      });
      Schema::create('labs',function(Blueprint $table){
        $table->increments('id');
        $table->string('lab_id');
        $table->string('mr');
        $table->string('tanggal');
        $table->string('item');
        $table->string('hasil');
        $table->string('keterangan');
        $table->string('payment');
      });
      Schema::create('rads',function(Blueprint $table){
        $table->increments('id');
        $table->string('rad_id');
        $table->string('mr');
        $table->string('tanggal');
        $table->string('item');
        $table->string('hasil');
        $table->string('keterangan');
        $table->string('payment');
      });
      //assesment
      Schema::create('assessmets',function(Blueprint $table){
        $table->increments('id');
        $table->string('ass_id');
        $table->string('diagnosis');
        $table->string('dd');
        $table->string('icpc');
        $table->string('icd_10');
        $table->string('code');
      });
      //planing
      Schema::create('refers',function(Blueprint $table){
        $table->increments('id');
        $table->string('mr');
        $table->string('tanggal');
        $table->string('diagnosis');
        $table->string('tujuan');
        $table->string('keterangan');
      });
      //resep
      Schema::create('recipes',function(Blueprint $table){
          $table->increments('id');
          $table->string('rec_id');
          $table->string('tanggal');
          $table->string('mr');
          $table->string('code');
          $table->string('payment');
      });
      //isi resep
      Schema::create('rec_contents',function(Blueprint $table){
          $table->increments('id');
          $table->string('rec_id');
          $table->string('nama_obat');
          $table->string('frekuensi');
          $table->string('dosis');
          $table->string('satuan');
          $table->string('durasi');
          $table->string('harga');
          $table->string('keterangan');
      });
      //data obat
      Schema::create('drugs',function(Blueprint $table){
        $table->increments('id');
        $table->string('drg_id');
        $table->string('content');
        $table->string('merek');
        $table->string('sediaan');
        $table->string('satuan');
        $table->string('harga');
        $table->string('stok');
      });
      //data radiologi
      Schema::create('data_rads',function(Blueprint $table){
        $table->increments('id');
        $table->string('item');
        $table->string('harga');
        $table->string('keterangan');
      });
      //data lab
      Schema::create('data_labs',function(Blueprint $table){
        $table->increments('id');
        $table->string('kelompok');
        $table->string('item');
        $table->string('harga');
        $table->string('keterangan');
      });
      //data jasa medis
      Schema::create('data_jasmeds',function(Blueprint $table){
        $table->increments('id');
        $table->string('item');
        $table->string('harga');
        $table->string('keterangan');
      });
      //data Applikasi
      Schema::Create('apps',function(Blueprint $table){
        $table->increments('id');
        $table->string('nama_klinik');
        $table->string('alamat');
        $table->string('telp');
        $table->string('institusi');
        $table->string('status');
      });
      Schema::Create('rooms',function(Blueprint $table){
        $table->increments('id');
        $table->string('ruangan');
        $table->string('fungsi');
        $table->string('status');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('users');
      Schema::drop('password_resets');
      Schema::drop('educations');
      Schema::drop('trainings');
      Schema::drop('fam_archives');
      Schema::drop('int_risks');
      Schema::drop('faskes_risks');
      Schema::drop('env_risks');
      Schema::drop('home_characteristics');
      Schema::drop('work_risks');
      Schema::drop('patients');
      Schema::drop('insurances');
      Schema::drop('contacts');
      Schema::drop('allergies');
      Schema::drop('med_records');
      Schema::drop('subjectives');
      Schema::drop('pfs');
      Schema::drop('labs');
      Schema::drop('rads');
      Schema::drop('assessmets');
      Schema::drop('refers');
      Schema::drop('recipes');
      Schema::drop('rec_contents');
      Schema::drop('drugs');
      Schema::drop('data_labs');
      Schema::drop('data_rads');
      Schema::drop('data_jasmeds');
      Schema::drop('visits');
      Schema::drop('apps');
      Schema::drop('rooms');
    }
}
