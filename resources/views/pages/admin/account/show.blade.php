@extends('layouts.admin.app')

@section('content')    
    <div class="col-md-3 text-center mb-5">
        <div class="avatar avatar-xl">
            <img src="{{ Storage::url($data->foto) }}" alt="..." class="avatar-img rounded-circle">
        </div>
    </div>
    <div class="col-12">
        <h2 class="mb-2 page-title">Form Halaman Edit Data : <strong>{{ $data->name }}</strong></h2>
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
                <form action="{{ route('pengguna.update', $data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Nama</label>
                                <input type="text" id="name" class="form-control" name="name" value="{{ $data->name }}" required>
                            </div>
                        </div>   
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Email</label>                                
                                <input type="email" id="email" class="form-control" name="email" value="{{ $data->email }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Level</label>                            
                                <select name="level" id="level" class="form-control" required>
                                    <option {{ $data->level == 'admin' ? 'selected' : '' }} value="admin">Admin</option>
                                    <option {{ $data->level == 'user' ? 'selected' : '' }} value="user">User</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Foto</label>      
                                <small for="">*Diisi bila ingin merubah</small>                      
                                <input type="file" id="foto" class="form-control" name="foto">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Password</label>    
                                <small for="">*Diisi bila ingin merubah</small>                                              
                                <input type="text" id="password" class="form-control" name="password">
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