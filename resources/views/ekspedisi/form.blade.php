@extends('layout.admin')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-1">
                    <div class="col-sm-6">
                        {{-- <h4 class="m-0">{{ $ekspedisi->exists ? 'Ubah' : 'Tambah' }}</h4> --}}
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">TAMBAH DATA</h3>
                        </div>

                        @if ($ekspedisi->exists)
                            <form action="{{ route('ekspedisis.update', $ekspedisi->id) }}" method="POST">
                                @method('PATCH')
                                @csrf
                            @else
                                <form action="{{ route('ekspedisis.store') }}" method="POST">
                                    @csrf
                        @endif

                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Pengirim</label>
                                <input type="type" class="form-control" name="name" value="{{ $ekspedisi->name ?? '' }}"
                                    placeholder="Nama">
                            </div>

                            <div class="form-group">
                                <label>Alamat Tujuan</label>
                                <input type="type" class="form-control" name="address"
                                    value="{{ $ekspedisi->address ?? '' }}" placeholder="Alamat Lengkap">
                            </div>

                            <div class="form-group">
                                <label>No Telpon Penerima</label>
                                <input type="type" class="form-control" name="phone"
                                    value="{{ $ekspedisi->phone ?? '' }}" placeholder="No Telpon">
                            </div>

                            <div class="form-group">
                                <label>Jenis Barang</label>
                                <input type="type" class="form-control" name="item_type"
                                    value="{{ $ekspedisi->item_type ?? '' }}" placeholder="Jenis Barang">
                            </div>

                            <div class="form-group">
                                <label>Berat Barang</label>
                                <input type="number" class="form-control" name="weight"
                                    value="{{ $ekspedisi->weight ?? '' }}" placeholder="Berat Barang">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">SUBMIT</button>
                                <a></a>
                                <a href="{{ route('ekspedisis.index') }}" class="btn btn-danger">BACK</a>
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
