<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Admin::all();
        return view('pages.admin.pengguna.index',[
            'data'  => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $data['foto']  = $request->file('foto')->store('assets/pengguna', 'public');

        Admin::create($data);

        return redirect()->route('pengguna.index')->with('message-success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Admin::findOrFail($id);
        return view('pages.admin.pengguna.edit',[
            'data' => $data
        ]);
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
        $data = $request->all();
        if ($request->file('foto')) {
            $data['foto']  = $request->file('foto')->store('assets/pengguna', 'public');
        }

        if ($request->password) {
            $data['password']  = bcrypt($request->password);
        } else {
            unset($data['password']);
        }

        $item = Admin::findOrFail($id);
        $item->update($data);

        return redirect()->route('pengguna.index')->with('message-update', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Admin::findOrFail($id); 
        $item->delete();
        return redirect()->route('pengguna.index')->with('message-delete', 'Data Berhasil Dihapus');
    }
}
