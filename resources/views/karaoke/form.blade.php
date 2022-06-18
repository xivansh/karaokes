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
                <div class="col-7">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Menambah Data Karaoke</h3>
                        </div>

                        {{-- @if ($karaoke->exists)
                        <form action="{{ route('karaokes.update', $karaoke->id) }}" method="POST">
                            @method('PATCH')
                            @csrf
                        @else
                            <form action="{{ route('karaokes.store') }}" method="POST">
                                @csrf
                    @endif --}}

                        <form action="{{ route('karaokes.store', $karaoke->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body">

                                <div class="form-group">
                                    <label>Banner Kamar</label>
                                    <input type="file" class="form-control" name="image">
                                </div>

                                <div class="form-group">
                                    <label>Kelas Kamar</label>
                                    <input type="type" class="form-control" name="name" placeholder="Nama Kelas">
                                </div>

                                <div class="form-group">
                                    <label>Deskripsi Kamar</label>
                                    <textarea class="form-control" name="desc" rows="3" placeholder="Tambah Deskripsi"></textarea>                                </div>

                                <label>Harga</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp. </span>
                                    </div>
                                    <input type="text" class="form-control" name="price">
                                </div>
                                <br>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="status" value="active"
                                        @checked(old('active', $karaoke->status ?? '1'))>
                                    <label class="form-check-label" for="checkbox">Open</label>
                                </div>
                                
                                <br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-sm">SIMPAN</button>
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
