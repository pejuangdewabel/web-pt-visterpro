@extends('layouts.admin.app')

@section('content')
    <div class="col-12 col-lg-10 col-xl-8">
        <h2 class="h3 mb-4 page-title">Detail {{ $data->nama_properti }}</h2>
        <div class="my-4">
            <div class="row mt-2 align-items-center">
                <div class="col-md-3 text-center mb-2">
                    <div class="container text-center">
                        <img src="{{ Storage::url($data->foto) }}" alt="..." class="photo-announcement" style="max-height: 300px">
                    </div>
                </div>
                <div class="col">
                    
                </div>
            </div>
            <hr class="my-4">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="firstname">Ukuran</label>
                    <input type="text" class="form-control" value="{{ $data->ukuran }}" readonly>
                </div>
                <div class="form-group col-md-4">
                    <label for="lastname">Harga DP</label>
                    <input type="text" id="lastname" class="form-control" value="Rp. {{ number_format($data->harga_dp) }}" readonly>
                </div>
                <div class="form-group col-md-4">
                    <label for="lastname">Harga Cash</label>
                    <input type="text" id="lastname" class="form-control" value="Rp. {{ number_format($data->harga_cash) }}" readonly>
                </div>
                <div class="form-group col-md-4">
                    <label for="lastname">Harga Permeter</label>
                    <input type="text" id="lastname" class="form-control" value="Rp. {{ number_format($data->harga_permeter) }}" readonly>
                </div>
                @php
                    if($data->status1 == '1'){
                        $s = 'Tanah';
                    }elseif($data->status1 == '2'){
                        $s = 'Bangunan';
                    }
                @endphp
                <div class="form-group col-md-4">
                    <label for="lastname">Jenis Property</label>
                    <input type="text" id="lastname" class="form-control" value="{{ $s }}" readonly>
                </div>
                @php
                    if($data->status2 == '1'){
                        $ss = 'Dijual';
                    }elseif($data->status2 == '2'){
                        $ss = 'Disewakan';
                    }
                @endphp
                <div class="form-group col-md-4">
                    <label for="lastname">Status Property</label>
                    <input type="text" id="lastname" class="form-control" value="{{ $ss }}" readonly>
                </div>
                <div class="form-group col-md-12">
                    <label for="lastname">Kalimat Thumnail</label>                    
                    <textarea name="kata_thumb" id="kata_thumb" class="form-control" readonly>{!! $data->kata_thumb !!}</textarea>
                </div>
                <div class="form-group col-md-12">
                    <label for="lastname">Deskripsi</label>                    
                    <textarea name="deskripsi" id="deskripsi" class="form-control" readonly>{!! $data->deskripsi !!}</textarea>
                </div>
                <div class="form-group col-md-12">
                    <label for="lastname">Lokasi</label>                    
                    <input type="text" id="lastname" class="form-control" value="{{ $data->lokasi }}" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="lastname">Kota / kabupaten</label>     
                    @php
                        if($data->kabkot == '1'){
                            $b = 'Bandar Lampung';
                        }elseif ($data->kabkot == '2') {
                           $b = 'Lampung Selatang';
                        }elseif ($data->kabkot == '3') {
                            $b = 'Pesawaran';
                        }
                    @endphp            
                    <input type="text" id="lastname" class="form-control" value="{{ $b }}" readonly>                    
                </div>
                <div class="form-group col-md-12">
                    <label for="lastname">Syarat</label>                    
                    <textarea name="syarat" id="syarat" class="form-control" readonly>{!! $data->syarat !!}</textarea>
                </div>
                <div class="form-group col-md-12">
                    <label for="lastname">Dekat</label>                    
                    <textarea name="dekat" id="dekat" class="form-control" readonly>{!! $data->dekat !!}</textarea>
                </div>
                <a href="{{ route('properti-dijual.index') }}" class="btn btn-primary">KEMBALI</a>
            </div>
        </div>
    </div>
@endsection