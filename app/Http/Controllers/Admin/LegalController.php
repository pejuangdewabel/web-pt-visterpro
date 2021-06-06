<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Legal;
use Illuminate\Http\Request;

class LegalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Legal::all();
        return view('pages.admin.legal.index', [
            'data' => $data
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

        $messages = [
            'required' => ':attribute wajib diisi cuy!!!',
            'mimes:jpeg,jpg,png' => 'File Harus JPG Ya !!'
        ];

        $this->validate($request, [
            'title' => 'required|string',
            'image' => 'required|mimes:jpeg,jpg,png',
            'description' => 'required',
        ], $messages);

        $data['image']  = $request->file('image')->store('assets/legalitas', 'public');

        Legal::create($data);

        return redirect()->route('legal.index')->with('message-success', 'Data Berhasil Disimpan');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Legal::findOrFail($id);

        $item->delete();

        return redirect()->route('legal.index')->with('message-delete', 'Data Berhasil Dihapus');
    }
}
