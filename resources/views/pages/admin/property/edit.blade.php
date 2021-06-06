@extends('layouts.admin.app')

@section('content')    
    <div class="col-12">
        <h2 class="mb-2 page-title">Form Halaman Edit Data : <strong>{{ $data->nama_properti }}</strong></h2>
        <hr>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif     
        <br>
        <div class="card shadow mb-4">
            <div class="card-header">
                <strong class="card-title text-danger"></strong>
            </div>
            <div class="card-body">
                <form action="{{ route('properti-dijual.update', $data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Nama Property</label>
                                <input type="text" id="nama_properti" class="form-control" name="nama_properti" value="{{ $data->nama_properti }}" required>
                            </div>
                        </div>   
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Ukuran</label>
                                <small class="text-warning"> *contoh: 8cm x 14cm</small>
                                <input type="text" id="simpleinput" class="form-control" name="ukuran" value="{{ $data->ukuran }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Harga DP</label>                            
                                <input type="text" id="harga_dp" class="form-control" name="harga_dp" onkeypress="return Angkasaja(event)" value="{{ $data->harga_dp }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Harga Cash</label>                            
                                <input type="text" id="harga_cash" class="form-control" name="harga_cash" onkeypress="return Angkasaja(event)" value="{{ $data->harga_cash }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Harga Per-Meter</label>                            
                                <input type="text" id="harga_permeter" class="form-control" name="harga_permeter" onkeypress="return Angkasaja(event)" value="{{ $data->harga_permeter }}" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Kata Thumbnail</label>
                                 <small class="text-warning"> *Maksimal 215 karakter</small>
                                <textarea name="kata_thumb" id="kata_thumb" class="form-control" required>{{ $data->kata_thumb }}</textarea>                                                                                 
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Tampilan Foto</label> 
                                <br>
                                @if ($data->foto)
                                    <img 
                                        src="{{ Storage::url($data->foto) }}" 
                                        alt="" 
                                        srcset=""
                                        class="photo-announcement"
                                        style="max-height: 600px">   
                                @else
                                    ---                              
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Foto Property</label> 
                                <small class="text-warning"> *diisi bila ingin merubah foto</small>
                                <input type="file" class="form-control" name="foto">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Deskripsi</label> 
                                <small class="text-warning"></small>
                                <textarea name="deskripsi" id="deskripsi" class="form-control" required>{{ $data->deskripsi }}</textarea>                                                                                 
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Alamat</label>                            
                                <input type="text" id="lokasi" class="form-control" name="lokasi" required value="{{ $data->lokasi }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Kota/Kabupaten</label>                            
                                <select name="kabkot" id="kabkot" class="form-control" required>
                                    <option {{ ($data->kabkot == '1') ? 'selected' : '' }} value="1">Bandar Lampung</option>
                                    <option {{ ($data->kabkot == '2') ? 'selected' : '' }} value="2">Lampung Selatan</option>
                                    <option {{ ($data->kabkot == '3') ? 'selected' : '' }} value="3">Pesawaran</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Syarat</label> 
                                <small class="text-warning"></small>
                                <textarea name="syarat" id="syarat" class="form-control" required>{{ $data->syarat }}</textarea>                                                                                 
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Dekat</label> 
                                <small class="text-warning"></small>
                                <textarea name="dekat" id="dekat" class="form-control" required>{{ $data->dekat }}</textarea>                                                                                 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Jenis</label>                            
                                <select name="status1" id="status1" class="form-control" required>
                                    <option {{ ($data->status1 == '1') ? 'selected' : '' }} value="1">Tanah</option>
                                    <option {{ ($data->status1 == '2') ? 'selected' : '' }} value="2">Bangunan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Status</label>                            
                                <select name="status2" id="status2" class="form-control" required>
                                    <option {{ ($data->status2 == '1') ? 'selected' : '' }} value="1">Dijual</option>
                                    <option {{ ($data->status2 == '2') ? 'selected' : '' }} value="2">Disewakan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <button class="btn btn-primary btn-lg" type="submit">UBAH DATA</button>
                            </div>
                        </div>
                    </div>
                </form>                
            </div>
        </div>
    </div>   
@endsection