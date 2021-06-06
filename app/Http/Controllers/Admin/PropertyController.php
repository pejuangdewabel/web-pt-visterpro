<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Property;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Property::latest()->get();

        return view('pages.admin.property.index', [
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
        return view('pages.admin.property.create');
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
            'min' => ':attribute harus diisi minimal :min karakter ya cuy!!!',
            'max' => ':attribute harus diisi maksimal :max karakter ya cuy!!!',
            'mimes:jpeg,jpg,png' => 'File Harus JPG Ya !!',
            'unique' => 'Nama Property Tidak Boleh Sama'
        ];

        $this->validate($request, [
            'nama_properti' => 'required|string|unique:property,nama_properti',
            'ukuran' => 'required|string',
            'harga_dp' => 'required|integer',
            'harga_cash' => 'required|integer',
            'harga_permeter' => 'required|integer',
            'kata_thumb' => 'required|max:215',
            'foto' => 'required|mimes:jpeg,jpg,png',
            'deskripsi' => 'required|string',
            'lokasi' => 'required|string',
            'kabkot' => 'required|string',
            'syarat' => 'required|string',
            'dekat'  => 'required|string',
            'status1' => 'required|string',
            'status2' => 'required|string'
        ], $messages);


        $data['slug']   = Str::slug($request->nama_properti);
        $data['foto']  = $request->file('foto')->store('assets/property', 'public');
        Property::create($data);

        return redirect()->route('properti-dijual.index')->with('message-success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Property::findOrFail($id);
        return view('pages.admin.property.detail', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Property::findOrFail($id);

        return view('pages.admin.property.edit', [
            'data'      => $data
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

        $messages = [
            'required' => ':attribute wajib diisi cuy!!!',
            'min' => ':attribute harus diisi minimal :min karakter ya cuy!!!',
            'max' => ':attribute harus diisi maksimal :max karakter ya cuy!!!',
            'mimes:jpeg,jpg,png' => 'File Harus JPG',
        ];

        $this->validate($request, [
            'nama_properti' => 'required|string',
            'ukuran' => 'required|string',
            'harga_dp' => 'required|integer',
            'harga_cash' => 'required|integer',
            'harga_permeter' => 'required|integer',
            'kata_thumb' => 'required|max:215',
            'foto' => 'mimes:jpeg,jpg,png',
            'deskripsi' => 'required|string',
            'lokasi' => 'required|string',
            'kabkot' => 'required|string',
            'syarat' => 'required|string',
            'dekat'  => 'required|string',
            'status1' => 'required|string',
            'status2' => 'required|string'
        ], $messages);

        if ($request->file('foto')) {
            $data['foto']  = $request->file('foto')->store('assets/property', 'public');
        }

        $data['slug']   = Str::slug($request->nama_properti);

        $item = Property::findOrFail($id);
        $item->update($data);

        return redirect()->route('properti-dijual.index')->with('message-update', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Property::findOrFail($id);

        $item->delete();

        return redirect()->route('properti-dijual.index')->with('message-delete', 'Data Berhasil Dihapus');
    }

    public function changeStatus($id)
    {
        $item = DB::table('property')->where('id', $id)->get();

        foreach ($item as $i) {
            if ($i->statusSoldOut == "READY") {
                $status = "SOLD OUT";
            } elseif ($i->statusSoldOut == "SOLD OUT") {
                $status = "READY";
            }
        }

        $item = DB::table('property')->where('id', $id)->update(['statusSoldOut' => $status]);
        return redirect()->route('properti-dijual.index')->with('message-update', 'Status Ketersedian Berhasil Berubah');
    }
}
