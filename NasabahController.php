<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use Illuminate\Http\Request;

class NasabahController extends Controller
{
    public function index(){
        $data = Nasabah::all();
        return view('data',compact('data'));
    }
    public function tambah(){
        return view('tambah');
    }
    public function input(Request $request){
        Nasabah::create($request->all());
        return redirect()->route('data');
    }
    public function ubah($id){
        $data = Nasabah::find($id);
        return view('ubah',compact('data'));
    }

    public function update(Request $request, $id){
        $data = Nasabah::find($id);
        $data->update($request->all());
        return redirect()->route('data');
    }

    public function hapus($id){
        $data = Nasabah::find($id);
        $data->delete();
        return redirect()->route('data');
    }

}
