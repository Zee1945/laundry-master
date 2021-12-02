@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Tambah Paket Travel</h1>

    </div>

    <!-- Content Row -->





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
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Nama</label>
                    <input type="text" class="form-control" name="name" placeholder="Isi Nama..."
                        value="{{old('name')}}" id="">
                </div>
                <div class="form-group">
                    <label for="Jenis Cucian">Jenis Cucian</label>
                    <input type="text" class="form-control" name="jenis" placeholder="Isi Jenis Cucian..."
                        value="{{old('jenis')}}" id="">
                </div>
                <div class="form-group">
                    <label for="featured_event">Berat</label>
                    <input type="text" class="form-control" name="featured_event" placeholder="Isi berat pakaian..."
                        value="{{old('featured_event')}}" id="">
                </div>

                <button type="submit" class="btn btn-primary btn-block"> Simpan</button>



            </form>
        </div>
    </div>










</div>
<!-- /.container-fluid -->
@endsection
