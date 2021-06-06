@extends('layouts.admin.app')

@section('content')
    <div class="col-12">
        <h2 class="mb-2 page-title">Data Property</h2>
        <hr>
        <a href="{{ route('properti-dijual.create') }}" class="btn btn-primary"><i class="fe fe-plus-circle fe-16"></i> Tambah Data</a>
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
                                        <th><strong>Nama Property</strong></th>
                                        <th><strong>Jenis</strong></th>
                                        <th><strong>Foto</strong></th>
                                        <th><strong>Lokasi</strong></th>
                                        <th><strong>Kota/Kabupaten</strong></th>
                                        <th><strong>Status</strong></th>
                                        <th><strong>Status Ketersediaan</strong></th>
                                        <th><strong>Aksi</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $d)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $d->nama_properti }}</td>
                                            <td>
                                                @if ($d->status1 == 1)
                                                    Tanah
                                                @elseif($d->status1 == 2)
                                                    Bangunan
                                                @endif
                                            </td>
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
                                            <td>{{ $d->lokasi }}</td>
                                            <td>
                                                @if ($d->kabkot == '1')
                                                    Bandar Lampung
                                                @elseif($d->kabkot == '2')
                                                    Lampung Selatan
                                                @else
                                                    Pesawaran
                                                @endif
                                            </td>
                                            <td>
                                                @if ($d->status2 == '1')
                                                    Dijual
                                                @elseif($d->status2 == '2')
                                                    Disewakan
                                                @endif
                                            </td>
                                            <td>
                                                @if ($d->statusSoldOut == "READY")
                                                    <a href="{{ route('changeStatus', $d->id) }}" class="btn btn-primary btn-sm text-white mt-3">Ubah Sold Out</a>
                                                @elseif($d->statusSoldOut == "SOLD OUT")
                                                    <a href="{{ route('changeStatus', $d->id) }}" class="btn btn-danger btn-sm text-white mt-3">Ubah Ready</a>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('properti-dijual.show', $d->id) }}" class="btn btn-success btn-sm text-dark mt-3">Detail</a>
                                                <a href="{{ route('properti-dijual.edit', $d->id) }}" class="btn btn-warning btn-sm text-dark mt-3">Ubah</a>                                                                                           
                                                <form action="{{ route('properti-dijual.destroy', $d->id) }}" method="POST">
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
                                            <th>---</th>
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