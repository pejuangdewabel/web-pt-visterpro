@extends('layouts.admin.app')

@section('content')
    <div class="col-12">
        <h2 class="mb-2 page-title">Pengaturan Halaman Tentang PT Graha Vister Mandiri</h2>
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
         <div class="col-md-12">
                @if(session()->has('message-success'))
                    <div class="alert alert-success">
                        {{ session()->get('message-success') }}
                    </div>
                @endif
                @if(session()->has('message-update'))
                    <div class="alert alert-warning">
                        {{ session()->get('message-update') }}
                    </div>
                @endif
                @if(session()->has('message-delete'))
                    <div class="alert alert-danger">
                        {{ session()->get('message-delete') }}
                    </div>
                @endif
            </div>
        <br>
        <div class="card shadow mb-4">
            <div class="card-header">
                <strong class="card-title text-danger"></strong>
            </div>
            <div class="card-body">
                <form action="{{ route('about.update', $data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
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
                                        style="max-height: 200px">   
                                @else
                                    ---                              
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Foto</label> 
                                <small class="text-warning"> *diisi bila ingin merubah foto</small>
                                <input type="file" class="form-control" name="foto">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Deskripsi</label> 
                                <small class="text-warning"></small>
                                <textarea name="deskripsi" id="deskripsi" class="form-control" required rows="30">{{ $data->deskripsi }}</textarea>                                                                                 
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