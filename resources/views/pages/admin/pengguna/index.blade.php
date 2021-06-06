@extends('layouts.admin.app')

@section('content')
    <div class="col-12">
        <h2 class="mb-2 page-title">Data Pengguna</h2>
        <hr>        

        <button type="button" class="btn mb-2 btn-primary" data-toggle="modal" data-target="#varyModal" data-whatever="@mdo"><i class="fe fe-plus-circle fe-16"></i> Tambah Data</button>

        <div class="modal fade" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="varyModalLabel">Form Tambah Pengguna</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('pengguna.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nama :</label>
                                <input type="text" class="form-control" name="name" placeholder="Input Nama" required>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Email :</label>
                                <input type="text" class="form-control" name="email" placeholder="Input Email" required>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Level :</label>
                                <select name="level" id="level" class="form-control" required>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Foto :</label>
                                <input type="file" class="form-control" name="foto" required>
                            </div>
                             <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Password :</label>
                                <input type="text" class="form-control" name="password" required>
                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn mb-2 btn-secondary" data-dismiss="modal">BATAL</button>
                                <button type="submit" class="btn mb-2 btn-primary">SIMPAN</button>
                            </div>
                        </form>
                    </div>                    
                </div>
            </div>
        </div>
        <div class="row my-4">
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
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered table-sm">
                                <thead class="text-center">
                                    <tr>
                                        <th><strong>No</strong></th>
                                        <th><strong>Nama Pengguna</strong></th>
                                        <th><strong>Email</strong></th>
                                        <th><strong>Level</strong></th>
                                        <th><strong>Foto</strong></th>
                                        <th><strong>Aksi</strong></th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @forelse ($data as $d)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $d->name }}</td>                                            
                                            <td>{{ $d->email }}</td>
                                            <td>{{ $d->level }}</td>
                                            <td>
                                                @if ($d->foto)
                                                <img 
                                                    src="{{ Storage::url($d->foto) }}" 
                                                    alt="" 
                                                    srcset=""
                                                    class="photo-announcement"
                                                    style="max-height: 40px">   
                                                @else
                                                    ---                              
                                                @endif
                                            </td>
                                            <td>                                                
                                                <a href="{{ route('pengguna.edit', $d->id) }}" class="btn btn-warning btn-sm text-dark mt-3">Ubah</a>                                           
                                                <form action="{{ route('pengguna.destroy', $d->id) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm text-white mt-3">
                                                        Hapus
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td>---</td>
                                            <td>---</td>
                                            <td>---</td>
                                            <td>---</td>
                                            <td>---</td>
                                            <td>---</td>
                                            <td>---</td>
                                            <td>---</td>
                                        </tr>
                                    @endforelse                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection