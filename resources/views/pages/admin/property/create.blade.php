@extends('layouts.admin.app')

@section('content')    
    <div class="col-12">
        <h2 class="mb-2 page-title">Form Halaman Tambah Data</h2>
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
                <strong class="card-title text-danger">*Harap Mengisi Data Dengan Benar</strong>
            </div>
            <div class="card-body">
                <form action="{{ route('properti-dijual.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Nama Property</label>
                                <input type="text" id="nama_properti" class="form-control" name="nama_properti" value="{{ old('nama_properti') }}" required>
                            </div>
                        </div>   
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Ukuran</label>
                                <small class="text-warning"> *contoh: 8cm x 14cm</small>
                                <input type="text" id="simpleinput" class="form-control" name="ukuran" value="{{ old('ukuran') }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Harga DP</label>                            
                                <input type="text" id="harga_dp" class="form-control" name="harga_dp" onkeypress="return Angkasaja(event)" value="{{ old('harga_dp') }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Harga Cash</label>                                  
                                <small class="text-warning">*Diisi 0 bila Harga Cash banyak</small>                        
                                <input type="text" id="harga_cash" class="form-control" name="harga_cash" onkeypress="return Angkasaja(event)" value="{{ old('harga_cash') }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Harga Per-Meter</label>                            
                                <input type="text" id="harga_permeter" class="form-control" name="harga_permeter" onkeypress="return Angkasaja(event)" value="{{ old('harga_permeter') }}" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Kata Thumbnail</label>
                                 <small class="text-warning"> *Maksimal 215 karakter</small>
                                <textarea name="kata_thumb" id="kata_thumb" class="form-control" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Foto Property</label> 
                                <small class="text-warning"> *wajib .jpg</small>
                                <input type="file" class="form-control" name="foto" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Deskripsi</label> 
                                <small class="text-warning"></small>
                                <textarea name="deskripsi" id="deskripsi" class="form-control" required></textarea>                                                                                 
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Alamat</label>                            
                                <input type="text" id="lokasi" class="form-control" name="lokasi" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Kota/Kabupaten</label>                            
                                <select name="kabkot" id="kabkot" class="form-control" required>
                                    <option value="1">Bandar Lampung</option>
                                    <option value="2">Lampung Selatan</option>
                                    <option value="3">Pesawaran</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Syarat</label> 
                                <small class="text-warning"></small>
                                <textarea name="syarat" id="syarat" class="form-control" required></textarea>                                                                                 
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Dekat</label> 
                                <small class="text-warning"></small>
                                <textarea name="dekat" id="dekat" class="form-control" required></textarea>                                                                                 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Jenis</label>                            
                                <select name="status1" id="status1" class="form-control" required>
                                    <option value="1">Tanah</option>
                                    <option value="2">Bangunan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Status</label>                            
                                <select name="status2" id="status2" class="form-control" required>
                                    <option value="1">Dijual</option>
                                    <option value="2">Disewakan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <button class="btn btn-primary btn-lg" type="submit">SIMPAN DATA</button>
                            </div>
                        </div>
                    </div>
                </form>                
            </div>
        </div>
    </div>   
@endsection