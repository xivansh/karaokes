@extends('layout.admin')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h4 class="m-0">DETAIL SEWA ROOM</h4>
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
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <table class="table table-borderless mt-2">
                                <tbody>
                                    <tr>
                                        <td>Nama :</td>
                                        <th>{{ $check_out->name }}</th>
                                    </tr>
                                    <tr>
                                        <td>Umur :</td>
                                        <th>{{ $check_out->age }}</th>
                                    </tr>
                                    <tr>
                                        <td>No. Telp :</td>
                                        <th>0{{ $check_out->phone }}</th>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Booking :</td>
                                        <th>{{ $check_out->booking_date }}</th>
                                    </tr>
                                    <tr>
                                        <td>Lama Karaoke :</td>
                                        <th>{{ $check_out->hours }} Jam</th>
                                    </tr>
                                    <tr>
                                        <td>Room :</td>
                                        <th>{{ $check_out->karaoke->name }}</th>
                                    </tr>
                                    <tr>
                                        <td>Harga Room :</td>
                                        <th>@money($check_out->karaoke->price) X {{ $check_out->hours }} Jam</th>
                                    </tr>
                                    <tr>
                                        <td>Total Bayar :</td>
                                        <th><ins>@money($check_out->karaoke->price * $check_out->hours)</ins></th>
                                    </tr>
                                    {{-- @money($check_out->karaoke->price) X {{ $check_out->hours }} Jam = --}}
                                    <tr>
                                        <td>Pembayaran :</td>
                                        <th>{{ $check_out->payment }} - Success</th>
                                    </tr>
                                    <tr>
                                        <td colspan="2">KODE/QR PEMESANAN : </td>
                                        <th>
                                            <div class="visible-print text-center">
                                                {!! QrCode::style('round')->size(100)->generate(Request::url()) !!}
                                                <p>Screenshoot Halaman & QR ini. Wajib ! </p>
                                            </div>
                                        </th>
                                    </tr>


                                    {{-- <div class="form-group">
                                <label for="exampleInputEmail1">Nama Pemesan</label>
                                <br>
                                <em>{{ $check_out->name }}</em>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Umur</label>
                                <br>
                                <em>{{ $check_out->age }}</em>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">No. Telp</label>
                                <br>
                                <em>0{{ $check_out->phone }}</em>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tanggal Booking</label>
                                <br>
                                <em>{{ $check_out->booking_date }}</em>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Lama Karaoke</label>
                                <br>
                                <em>{{ $check_out->hours }} Jam</em>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Room</label>
                                <br>
                                <em>{{ $check_out->karaoke->name }}</em>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Total Bayar</label>
                                <br>
                                <em>@money($check_out->karaoke->price * $check_out->hours )</em>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Pembayaran</label>
                                <br>
                                <em>{{ $check_out->payment }}</em>
                            </div> --}}

                                    <div class="form-group text-right">
                                        <a href="{{ route('karaokes.index') }}" class="btn btn-danger">Back</a>
                                    </div>

                        </div>
                    @endsection
