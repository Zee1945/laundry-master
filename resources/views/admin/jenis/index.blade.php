@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tugas Laundry</h1>
        <button type="button" class="btn btn-sm btn-primary shadow-sm" data-toggle="modal"
            data-target="#exampleModal1"><i class="fas fa-plus fa-sm text-white-50"></i>Tambah Tugas Laundry</button>
    </div>

    <!-- modal insert -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Tugas Laundry</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('task-store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Nama</label>
                            <input type="text" class="form-control" name="name" placeholder="ex. Cuci Kering"
                                value="{{old('name')}}" id="">
                        </div>


                        <div class="form-group">
                            <label for="berat">Harga Satuan</label>
                            <input type="text" class="form-control" name="berat" placeholder="Ex. 10000"
                                value="{{old('berat')}}" id="">
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
    <!-- end modal insert -->

    <!-- modal update -->

    <!-- end modal update -->

    <!-- Content Row -->
    <div class="row">


        <div class="card-body">
            <div class="table-responsive table-laundry">
                <table class="table table-border" width="100%" cellspacing="0">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Harga</th>

                        <th>Aksi</th>


                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                        <tr>

                            <td>{{$no++}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->harga_satuan}} / kg</td>

                            <td>

                                <a href="{{route('jenis-edit',$item->id)}}" class="btn btn-info"><i
                                        class="fas fa-pencil-alt"></i></a>


                                <form action="" method="POST" class="d-inline">

                                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                </form>

                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">Data Kosong</td>
                        </tr>

                        @endforelse

                    </tbody>

                </table>
            </div>
        </div>





    </div>




</div>
<!-- /.container-fluid -->
@endsection
