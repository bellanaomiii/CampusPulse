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
        $data = acara::orderBy('Category', 'asc')->get();
        $categoriesCount = acara::count();
        return view('AdminDashboard.acara', [
            "title" => "Acara",
            "categoriesCount" => $categoriesCount
        ])->with('data', $data);
    }
    
    public function utama()
    {
        $categoriesCount = acara::count();
        return view('AdminDashboard.utama', [
            'title' => 'Main Page',
            "categoriesCount" => $categoriesCount
        ]);
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
        Session::flash('Category', $request->Category);
        
        $request->validate([
            'Category'=>'required'
        ],[
            'Category.required'=>'Category wajib diisi'
        ]);
        $data = [
            'Category'=>$request->Category
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
        $data = acara::where('Category', $id)->first();
        return view('AdminDashboard.edit')->with('data', $data);
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
        $request->validate([
            'Category'=>'required'
        ],[
            'Category.required'=>'Category wajib diisi'
        ]);
        $data = [
            'Category'=>$request->Category
        ];
        acara::where('Category',$id)->update($data);
        return redirect()->to('acara')->with('success', 'Berhasil Update Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) //penghapusan data
    {
        acara::where('Category', $id)->delete();
        return redirect()->to('acara')->with('success','Berhasil melakukan delete');
    }
}
