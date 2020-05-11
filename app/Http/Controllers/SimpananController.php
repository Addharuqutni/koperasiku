<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Simpanan;
use DB;

class SimpananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $simpanan = Simpanan::all();
      return view('simpanan', ['simpanan' => $simpanan]);

      $simpanan = Simpanan::all();
      return view('dashboard', ['dashboard' => $simpanan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
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

      //   'id_simpanan'  => 'required',
      //   'id_anggota'   => 'required',
      //   'j_simpanan'   => 'required',
      //   'nominal'      => 'required',

      // ]);


      Simpanan::create($request->all());
      return redirect('simpanan');


      // $res = $request->input('simpanan');
      // $simpanan = new Simpanan;
      // $simpanan->id_simpanan      = strtoupper("sm-".hash('crc32b', $res['id_anggota'].Carbon::now()));
      // $simpanan->id_anggota       = $res['id_anggota'];
      // $simpanan->j_simpanan       = $res['j_simpanan'];
      // $simpanan->nominal          = $res['nominal'];
      // $simpanan->created_at       = Carbon::now();
      // if ($simpanan->save()) {
      //   return Carbon::now();
      // } else {
      //   return "FAIL";
      // }
      
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      DB::table('simpanan')->where('id_simpanan', $id)->delete();
      return "OK";
    }
}
