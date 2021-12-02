@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Nomor Resi anda : {{$resi->kode}}</h4>
                </div>

                <div class="card-body">
                    <div class="input-group">
                        <div class="form-outline">
                            <div class="form-group w-100 mb-3">
                                <?php 
                                $status_bayar = $resi->status_bayar;
                                if ($status_bayar == 1) {
                                    $status_bayar = "Belum Lunas";
                                } elseif ($status_bayar == 2) {
                                    $status_bayar = "Lunas";
                                }
                                $status_progres = $resi->status_progres;
                                if ($status_progres == 1) {
                                    $status_progres = "Belum Selesai";
                                } elseif ($status_progres == 2) {
                                    $status_progres = "Selesai";
                                } elseif ($status_progres == 3) {
                                    $status_progres = "Sudah Diambil";
                                } ?>

                                <h4>Pemilik : {{$resi->name}}</h4>
                                <h4>Jenis Laundry : {{$resi->jeniss->name}}</h4>
                                <h4>Berat : {{$resi->berat}} Kg</h4>
                                <h4>Harga Total : Rp. {{$resi->harga_total}},00-</h4>
                                <h4>Status Laundry : {{$resi->status_progres = $status_progres}}</h4>
                                <h4>Status Pembayaran : {{$resi->status_bayar =$status_bayar}}</h4>
                                <h4>Dibuat pada : {{$resi->created_at}}</h4>

                                <h4>Petugas : {{$resi->users->name}}</h4>

                                <a href="{{url('/')}}">Kembali ke halaman Utama</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
