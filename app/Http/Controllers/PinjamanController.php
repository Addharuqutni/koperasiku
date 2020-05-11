<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pinjaman;
use DB;

class PinjamanController extends Controller
{

    public function index()
    {

      $pinjaman = Pinjaman::all();
      return view('pinjaman', ['pinjaman' => $pinjaman]);

      $pinjaman = Pinjaman::all();
      return view('dashboard', ['dashboard' => $pinjaman]);

      
    }


    public function create()
    {
      
    }

    public function store(Request $request)
    {
      // $this->validate($request, [

      //   'id_pinjaman'  => 'required',
      //   'id_anggota'   => 'required',
      //   'j_pinjaman'   => 'required',
      //   'provisi'      => 'required',
      //   'nominal'      => 'required',

      // ]);

      Pinjaman::create($request->all());
      return redirect('pinjaman');
    }

    public function edit($id)
    {
      
    }

    public function update(Request $request, $id)
    {
      
    }

    public function destroy($id)
    {
      pinjaman::where('id_pinjaman', $id)->delete();
      return "OK";
    }
}