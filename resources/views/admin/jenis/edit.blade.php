@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Edit Harga Laundry </h1>

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
            <form action="{{route('jenis-update',$item->id)}}" method="POST">
                @method('PUT')
                @csrf

                <div class="form-group">

                    <label for="title">Nama</label>
                    <input type="text" class="form-control" name="name" id="disabledTextInput" placeholder="Isi Nama..."
                        value="{{$item->name}}" id="">

                </div>




                <div class="form-group">
                    <label for="berat">Harga Satuan</label>
                    <input type="text" class="form-control" name="harga_satuan" placeholder="Isi berat pakaian..."
                        value="{{$item->harga_satuan}}" id="">
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
