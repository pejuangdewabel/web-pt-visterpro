@extends('layouts.admin.app')

@section('content')
            <div class="col-12">
              <h1 class="h3 page-title">Selamat Datang <strong>{{ Auth::guard('admin')->user()->name }}</strong></h1>
              <h5>Di Panel Dashboard Admin PT GRAHA VISTER MANDIRI</h5>
            </div> <!-- .col-12 -->
            <div class="col-md-12 mt-3">
                <div class="row">
                    <div class="col-md-6 col-xl-4 mb-4">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-3 text-center">
                                        <span class="circle circle-sm bg-primary">
                                            <i class="fe fe-16 fe-home text-white mb-0"></i>
                                        </span>
                                    </div>
                                    <div class="col pr-0">
                                        <p class="small text-primary mb-0"><strong>Jumlah Properti Dijual</strong></p>
                                        <span class="h3 mb-0 text-success">{{ $jual }} Unit</span>                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 mb-4">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-3 text-center">
                                        <span class="circle circle-sm bg-primary">
                                            <i class="fe fe-16 fe-home text-white mb-0"></i>
                                        </span>
                                    </div>
                                    <div class="col pr-0">
                                        <p class="small text-primary mb-0"><strong>Jumlah Properti Disewakan</strong></p>
                                        <span class="h3 mb-0 text-success">{{ $sewa }} Unit</span>                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection