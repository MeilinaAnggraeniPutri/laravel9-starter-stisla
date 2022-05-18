<?php

namespace App\Http\Controllers;
use App\Models\Lms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LmsController extends Controller
{
 /**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
 public function index()
 {
 //fungsi eloquent menampilkan data menggunakan pagination
 $Lms = $Lms = DB::table('Lms')->get(); // Mengambil semua isi tabel
 $paginate = Lms::orderBy('nama_mapel', 'desc')->paginate(3);
 return view('Lms.index', compact('paginate'))
 ->with('i', (request()->input('page', 1) - 1) * 5);
 }
 public function create()
 {
     $lms = Lms::all(); //mendapatkan data dari tabel kelas
     return view('lms.create', ['lms'=> $lms]);
 }

 /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function show($nama_mapel)
    {
        //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
        $lms=Lms::where('nama_mapel', $nama_mapel)->first();
        return view('lms.detail', compact('lms'));
    }

    public function edit($nama_mapel)
    {
        $lms = Lms::where('nama_mapel', $nama_mapel)->first();
        return view('lms.edit', compact('lms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nama_mapel)
    {
        //melakukan validasi
        $request->validate([
            'nama_mapel' => 'required',
            'nama_guru' => 'required',
        ]);

        $lms = Lms::where('nama_mapel', $nama_mapel)->first();
        $lms->nama_mapel = $request->get('nama_mapel');
        $lms->nama_guru = $request->get('nama_guru');
        $lms->save();

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('lms.index')
        ->with('success', 'lms Berhasil Diupdate');
    }
 public function store(Request $request)
 {
     //melakukan validasi data
     $request->validate([
         'nama_mapel' => 'required',
         'nama_guru' => 'required',
     ]);

     $lms = new Lms;
     $lms->nama_mapel = $request->get('nama_mapel');
     $lms->nama_guru = $request->get('nama_guru');

     $lms->save();

     //jika berhasi; ditambahkan, akan kembali ke halaman utama
     return redirect()->route('lms.index')
     ->with('success', 'Lms Berhasil Ditambahkan');
 }
};
