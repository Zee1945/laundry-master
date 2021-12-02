@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Edit Paket Laundry dengan kode : <span
                class="badge badge-dark">{{$item->kode}}</span> </h1>

    </div>

    <!-- Content Row -->



    {{-- <div class="card-body">
   
</div> --}}

    @if ($errors->any())

    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)

            <li>{{$error}}</li>

            @endforeach
        </ul>
    </div>

    @endif

    <div class="card shadow">
        <div class="card-body">
            <form action="{{route('task-update',$item->id)}}" method="POST">
                @method('PUT')
                @csrf
                <fieldset disabled="disabled">
                    <div class="form-group">

                        <label for="title">Nama</label>
                        <input type="text" class="form-control" name="name" id="disabledTextInput"
                            placeholder="Isi Nama..." value="{{$item->name}}" id="">

                    </div>
                    <div class="form-group">
                        <label for="Jenis Laundry">Jenis Laundry</label>
                        <input type="text" class="form-control" name="jenis" placeholder=""
                            value="{{$item->jeniss->name}}">
                        <!-- <select name="jenis" class="form-control dropdown-toggle">
                    <option value="">---Pilih---</option>
                    <option value="1">
                        Cuci Kering
                    </option>
                    <option value="2">
                        Setrika
                    </option>
                    <option value="3">
                        Cuci Kering + Setrika
                    </option>
                </select> -->
                    </div>

                    <div class="form-group">
                        <label for="berat">Berat</label>
                        <input type="text" class="form-control" name="berat" placeholder="Isi berat pakaian..."
                            value="{{$item->berat}} kg" id="">
                    </div>

                    <div class="form-group">
                        <label for="berat">Total Bayar</label>
                        <input type="text" class="form-control" name="harga_total" placeholder="Isi berat pakaian..."
                            value="{{$item->harga_total}}" id="">
                    </div>
                </fieldset>

                <?php 
                $status_bayar = $item->status_bayar;
                if ($status_bayar == 1) {
                    $status_bayar = "Belum Lunas";
                } elseif ($status_bayar == 2) {
                    $status_bayar = "Lunas";
                }
                $status_progres = $item->status_progres;
                if ($status_progres == 1) {
                    $status_progres = "Belum Selesai";
                } elseif ($status_progres == 2) {
                    $status_progres = "Selesai";
                } elseif ($status_progres == 3) {
                    $status_progres = "Sudah Diambil";
                } ?>
                <div class="form-group">
                    <label for="title">Progress</label>
                    <select class="form-control dropdown-toggle" name="progres">
                        <option value="{{$item->status_progres}}">{{$item->status_progres = $status_progres}} - (Saat
                            ini)</option>
                        <option value="1">
                            Belum Selesai
                        </option>
                        <option value="2">
                            Selesai
                        </option>
                        <option value="3">
                            Sudah Diambil
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Status Pembayaran</label>
                    <select class="form-control dropdown-toggle" name="bayar">
                        <option value="{{$item->status_bayar}}">{{$item->status_bayar = $status_bayar}} - (Saat ini)
                        </option>
                        <option value="1">
                            Belum Lunas
                        </option>
                        <option value="2">
                            Lunas
                        </option>

                    </select>
                </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
        </form>
    </div>
</div>










</div>
<!-- /.container-fluid -->
@endsection
