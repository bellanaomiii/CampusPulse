<?php

namespace App\Http\Controllers;

use App\Models\acara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class acaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //menampilkan semua data
    {
        $data = acara::orderBy('category', 'asc')->get();
        // Cetak data untuk memastikan data sudah diambil dari database
        return view('AdminDashboard.acara')->with('data', $data);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() // menampilkan form untuk menambahkan data baru
    {
        return view('AdminDashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // memasukkan data baru ke database
    {
        Session::flash('category', $request->category);
        
        $request->validate([
            'category'=>'required'
        ],[
            'category.required'=>'Category wajib diisi'
        ]);
        $data = [
            'category'=>$request->category
        ];
        acara::create($data);
        Session::flash('success', 'Category Berhasil Ditambahkan!');
        return redirect()->to('acara');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //menampilkan detail data
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) //menampilkan form untuk proses edit
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
    public function update(Request $request, $id) //update data
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) //penghapusan data
    {
        //
    }
}
