@extends('layouts.admin.app')

@section('content')
<div class="col-12">
    <h2 class="mb-2 page-title">Legalitas</h2>
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
    <hr>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        <i class="fe fe-plus-circle fe-16"></i> Tambah Data
    </button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah Legalitas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('legal.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Judul</label>
                            <input type="text" name="title" class="form-control" required>                            
                        </div>                        
                        <div class="form-group">
                            <label for="">Gambar</label>
                            <input type="file" name="image" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <textarea name="description" id="description" class="form-control" required></textarea>                                       
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>                
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
                        <table class="table datatables table-hover table-bordered" id="dataTable-1">
                            <thead class="">
                                <tr>
                                    <th><strong>No</strong></th>
                                    <th><strong>Judul</strong></th>
                                    <th><strong>Gambar</strong></th>
                                    <th><strong>Aksi</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $b)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $b->title }}</td>
                                        <td>
                                            <img 
                                                    src="{{ Storage::url($b->image) }}" 
                                                    alt="" 
                                                    srcset=""
                                                    class="photo-announcement"
                                                    style="max-height: 40px">
                                        </td>
                                        <td>
                                            <form action="{{ route('legal.destroy', $b->id) }}" method="POST" enctype="multipart/form-data">
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