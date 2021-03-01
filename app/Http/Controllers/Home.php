<?php

namespace App\Http\Controllers;

use App\inputjawabans;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function home() {
        return view('akarkuadrat');
    }
    public function input(Request $request) {
        $data = inputjawabans::create($request->all());
        return redirect()->route('home')->with('sukses', 'Data telah tersimpan');
    }
    public function list(){
        $data = inputjawabans::paginate(10);
        return view('list',compact('data'));
    }
    public function listeditview($id){
        $data = inputjawabans::find($id);
        return view('editlist', compact('data'));
    }
    public function listeditpost(Request $request){
        $data = inputjawabans::find($request->id);
        $data->nama = $request->nama;
        $data->a = $request->a;
        $data->b = $request->b;
        $data->c = $request->c;
        $data->x1 = $request->x1;
        $data->x2 = $request->x2;
        $query = $data->save();
        if($query){
            return redirect()->route('home')->with('sukses', 'Data telah di ubah');
        }else{
            return redirect()->route('home')->with('sukses', 'Data telah di ubah');
        }
    }
    public function hapus($id){
        $data = inputjawabans::find($id);
        $data->delete();
        return redirect()->route('list')->with('sukses','Data telah terhapus');
    }
}
