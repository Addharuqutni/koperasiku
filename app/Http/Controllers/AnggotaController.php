<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;
use Carbon\Carbon;
use DB;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$anggota = Anggota::all();
      return view('anggota', ['anggota' => $anggota]);

      

      return view('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('daftar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      // $this->validate($request, [   
      //   'id_anggota'  => 'required',
      //   'nama'        => 'required',
      //   'alamat'      => 'required',
      //   'j_kelamin'   => 'required',
      //   'no_telp'     => 'required',
      //   'no_ktp'      => 'required',
      //   'no_rek'      => 'required',
      //   'tgl_masuk'   => 'required',
        
      // ]);

      Anggota::create($request->all());
      return redirect('anggota');

    }
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      // $res = $request->input('update');
      // Anggota::where('id_anggota', $id)->update([
      //   'nama'          => $res['nama'],
      //   'tgl_gabung'    => $res['tgl_gabung'],
      //   'telp'          => $res['telp'],
      //   'jenis_kelamin' => $res['jenis_kelamin'],
      //   'kota'          => $res['kota'],
      //   'tgl_lahir'     => $res['tgl_lahir'],
      //   'pekerjaan'     => $res['pekerjaan'],
      //   'alamat'        => $res['alamat'],
      //   'tgl_masuk'     => $res['tgl_masuk'],

      // ]);
      // return "OK";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {

      DB::table('anggota')->where('id_anggota',$id)->delete();
      return redirect('anggota'); 
    }

    public function show($id)
    {
      $anggota = DB::table('anggota')->where('id_anggota',$id)->get();
	  
	    return view('listanggota',['anggota' => $anggota]);
    }
}
