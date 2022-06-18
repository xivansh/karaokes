@extends('layout.admin')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-1">
               



            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="content">
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">ISI DATA PEMESANAN</h3>
                    </div>

                    {{-- @if ($karaoke->exists)
                        <form action="{{ route('karaokes.update', $karaoke->id) }}" method="POST">
                            @method('PATCH')
                            @csrf
                        @else
                            <form action="{{ route('karaokes.store') }}" method="POST">
                                @csrf
                    @endif --}}

                    <form action="{{ route('karaokes.checkout.store', $karaoke->id) }}" method="POST">
                        @csrf

                    <div class="card-body">

                        <div class="form-group">
                            <label>NAMA KELAS</label>
                            <input type="type" class="form-control" name="karaoke_id"
                                value="{{ $karaoke->name }}" style="background-color: #474d54; color: #dddddd;"
                                disabled>
                        </div>

                        <div class="form-group">
                            <label>NAMA LENGKAP</label>
                            <input type="type" class="form-control" name="name"
                                placeholder="HARUS DI ISI">
                        </div>

                        <div class="form-group">
                            <label>UMUR</label>
                            <select class="form-control" name="age">
                                <option value="0" selected disabled>PILIH UMUR</option>
                                    <option value="18">18 Tahun</option>
                                    <option value="19">19 Tahun</option>
                                    <option value="20">20 Tahun</option>
                                    <option value="21">21 Tahun</option>
                                    <option value="22">22 Tahun</option>
                                    <option value="23">23 Tahun</option>
                                    <option value="24">24 Tahun</option>
                                    <option value="25">25 Tahun</option>
                                    <option value="26">26 Tahun</option>
                                    <option value="27">27 Tahun</option>
                                    <option value="28">28 Tahun</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>No. Telpon</label>
                            <input type="number" class="form-control" name="phone"
                                placeholder="08">
                        </div>

                        <div class="form-group">
                            <label>Pilih Tanggal Booking</label>
                            <input type="datetime-local" class="form-control" name="booking_date"
                                placeholder="08">
                        </div>

                        <div class="form-group">
                            <label>LAMA KARAOKE</label>
                            <select class="form-control" name="hours">
                                <option value="0" selected disabled>PILIH JAM</option>
                                    <option value="1">1 Jam</option>
                                    <option value="2">2 Jam</option>
                                    <option value="3">3 Jam</option>
                                    <option value="4">4 Jam</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>PEMBAYARAN</label>
                            <select class="form-control" name="payment">
                                <option value="0" selected disabled>PILIH PEMBAYARAN</option>
                                    <option value="BCA">BCA</option>
                                    <option value="BRI">BRI</option>
                                    <option value="BNI">KEB HANA</option>
                                    <option value="CIMB NIAGA">CIMB NIAGA</option>
                            </select>
                        </div>

        
                       

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm">PESAN</button>
                            <a></a>
                            <a href="{{ route('karaokes.index') }}" class="btn btn-danger btn-sm">KEMBALI</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>


@endsection

@push('scripts')
@endpush