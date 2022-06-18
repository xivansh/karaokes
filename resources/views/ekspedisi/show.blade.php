@extends('layout.admin')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h4 class="m-0">SHOW</h4>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <div class="content" style="text-align: left">
            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Pengirim</label>
                                <br>
                                <em>{{ $ekspedisi->name }}</em>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Alamat Tujuan</label>
                                <br>
                                <em>{{ $ekspedisi->address }}</em>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">No Telpon Penerima</label>
                                <br>
                                <em>{{ $ekspedisi->phone }}</em>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Jenis Barang</label>
                                <br>
                                <em>{{ $ekspedisi->item_type }}</em>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Berat Barang</label>
                                <br>
                                <em>{{ $ekspedisi->weight }}gr</em>
                            </div>

                            <div class="form-group text-right">
                                <a href="{{ route('ekspedisis.index') }}" class="btn btn-danger">Back</a>
                            </div>

                        </div>
                    @endsection
