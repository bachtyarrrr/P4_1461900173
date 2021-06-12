<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Exports\DATA_1461900173;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Rakbuku;

class NurmanController extends Controller
{
    //
    public function index()
    {
        $buku = DB::table('rak_buku')
                ->join('buku','rak_buku.id_buku', '=', 'buku.id')
                ->join('jenis_buku', 'rak_buku.id_jenis_buku', '=', 'jenis_buku.id')
                ->select('rak_buku.id','buku.judul','buku.tahun_terbit','jenis_buku.jenis')
                ->get();
                return view('index0173', ['rak_buku'=>$buku]);
    }
    public function export() 
    {
        return Excel::download(new DATA_1461900173, 'DATA_1461900173.xlsx');
    }
    public function tambah()
    {
        return view('tambah0173');
    }
    public function edit($id)
    {
        $buku = DB::table('buku')->where('id',$id)->get();
        return view('edit0173',['buku'=>$buku]);
    }
    public function update(Request $request)
    {
        DB::table('buku')->where('id',$request->id)->update([
        'judul' => $request->judul,
        'tahun_terbit' => $request->tahun_terbit
        ]);
            return redirect('/index');
    }
    public function store (Request $request) 
    {
        DB::table('buku')->insert([
        'id' => $request->id,
        'judul' => $request->judul,
        'tahun_terbit' => $request->tahun_terbit,]);
        return redirect('/index');
    }
    public function hapus($id)
    {
        DB::table('buku')->where('id',$id)->delete();
        return redirect('/index');
    }
}
