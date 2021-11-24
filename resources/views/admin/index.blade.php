@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Paket Travel</h1>
        <a href="" class="btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i>Tambah Paket
            Travel </a>
    </div>

    <!-- Content Row -->
    <div class="row">


        <div class="card-body">
            <div class="table-responsive table-laundry">
                <table class="table table-border" width="100%" cellspacing="0">
                    <thead>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Location</th>
                        <th>Type</th>
                        <th>Departure Date</th>
                        <th>Type</th>
                        <th>Action</th>

                    </thead>
                    <tbody>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                            <td>
                                <a href="" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>

                                <form action="" method="POST" class="d-inline">

                                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                </form>

                            </td>
                        </tr>

                    </tbody>

                </table>
            </div>
        </div>





    </div>




</div>
<!-- /.container-fluid -->
@endsection
