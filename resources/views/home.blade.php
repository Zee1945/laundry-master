@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>List Harga Laundry</h4>
                </div>

                <div class="card-body">

                    <div class="table-responsive table-laundry">
                        <table class="table table-border" width="100%" cellspacing="0">
                            <thead>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Harga</th>




                            </thead>
                            <tbody>
                                @forelse ($items as $item)
                                <tr>

                                    <td>{{$no++}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->harga_satuan}} / kg</td>
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
    </div>
</div>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Tulis Nomor Resi Laundry</h4>
                </div>

                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{route('search')}}" method="get">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <div class="form-outline">
                                <div class="form-group w-100 mb-3">
                                    <input type="text" name="search" class="form-control w-75 d-inline" id="search"
                                        value="{{ old('search') }}" placeholder="Masukkan resi">
                                    <button type="submit" class="btn btn-primary mb-1"><i
                                            class="fas fa-search"></i></button>
                                </div>
                            </div>
                    </form>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
