<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    function index(){
        $tkelas = DB::table('t_kelas')->orderby('jurusan', 'ASC')->orderby('nama_kelas', 'ASC')->get();
        return view('t_kelas', compact('tkelas'));
    }

    function create(){
        return view('t_kelas.form');
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'nama_kelas' => 'required',
            'jurusan' => 'required',
            'lokasi_ruangan' => 'required',
            'nama_wali_kelas' => 'required',
        ]);

        $input = $request->all();
        unset($input['_token']);
        unset($input['_method']);
        $status = DB::table('t_kelas')->where('id', $id)->update($input);
        if ($status){
            return redirect('/t_kelas')->with('succses', 'Data berhasil diubah');
        } else{
            return redirect('/t_kelas/edit/'. $id)->with('error', 'Data gagal diubah');
        }
    }

    function destroy($id)
    {
        $status = DB::table('t_kelas')->where('id', $id)->delete();
        if ($status) {
            return redirect('/t_kelas')->with('succses', 'Data berhasil dihapus');
        } else {
            return redirect('/t_kelas')->with('error', 'Data gagal dihapus');
        }
    } 

    function store(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required',
            'jurusan' => 'required',
            'lokasi_ruangan' => 'required',
            'nama_wali_kelas' => 'required',
        ]);

        $input = $request->all();
        unset($input['_token']);
        $status = DB::table('t_kelas')->insert($input);
        if ($status) {
            return redirect('/t_kelas')->with('succses','Data berhasil ditambahkan :D');
        } else {
            return redirect('t_kelas/create')->with('error', 'Data gagal ditambahkan');
        }
    }

    function edit(Request $request, $id)
    {
        $t_kelas = DB::table('t_kelas')->find($id);
        return view('t_kelas.form', compact('t_kelas'));
    }


}
