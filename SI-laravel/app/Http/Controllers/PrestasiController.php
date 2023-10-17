<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestasi;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prestasi = Prestasi::all();
        return view('admin.prestasi', compact(['prestasi']) , [
            "title" => 'Manajemen Prestasi'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function admin_add_prestasi()
    {
        return view('admin.add_prestasi');
    }
    public function admin_create_prestasi(Request $request)
    {
       
        $input=$request->all();
        Prestasi::create($input);
        return redirect('prestasi')->with('flash_message', 'Data Ditambah');
    }
 
    public function show($id)
    {
        $prestasi = Prestasi::find($id);
        return view('admin.show', compact(['prestasi']));
    }
    public function admin_edit_prestasi($id)
    {
        $kejuaraan = Prestasi::find($id);
        return view('admin.edit_prestasi', compact(['kejuaraan']) , [
            "title" => 'Manajemen Prestasi'
        ]);
    }

    public function admin_update_prestasi(Request $request, $id)
    {
        $prestasi = Prestasi::find($id);

        $request->validate([
            'nama' => 'required',
            'nisn' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
            'prestasi' => 'required',
            'tingkat' => 'required',
            'date' => 'required',
        ]);

        $cek = [
                'nama' => $request->name,
                'nisn' => $request->nisn,
                'kelas' => $request->kelas,
                'alamat' => $request['alamat'],
                'prestasi' => $request['prestasi'],
               'tingkat' => $request['tingkat'],
                'tanggal' => $request['date'],
            ];


        if($prestasi->update($cek)){
            $prestasi->save();
        }

        return redirect()->route('prestasi')->with('sukses','Data Berhasil Diedit');
    }
}
