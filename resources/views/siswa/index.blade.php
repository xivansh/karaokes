<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Data Mahasiswa</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <h4 class="mr-auto">Tabel Mahasiswa</h4>
                <div class="py-4 d-flex justify-content-end align-items-center">
                    <a href="{{ route('siswas.create') }}" class="btn btn-primary">
                        Tambah Mahasiswa
                    </a>
                </div>


                @if (session()->has('pesan'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('pesan') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                {{-- <a href="{{ route('siswas.create') }}" class="btn btn-info">TAMBAH DATA MAHASISWA</a> --}}
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Jurusan</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mahasiswas as $mahasiswa)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $mahasiswa->nim }}</a></td>
                                <td><a href="{{ route('siswas.show', ['mahasiswa' => $mahasiswa]) }}">{{ $mahasiswa->nama }}
                                </td>
                                <td>{{ $mahasiswa->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-laki' }}</td>
                                <td>{{ $mahasiswa->jurusan }}</td>
                                <td>{{ $mahasiswa->alamat == '' ? 'N/A' : $mahasiswa->alamat }}</td>
                                <td><a href="{{ route('siswas.edit', ['mahasiswa' => $mahasiswa]) }}"
                                        class="btn btn-warning btn-sm">EDIT</a></td>
                                <td><a href="{{ route('siswas.destroy', ['mahasiswa' => $mahasiswa]) }}"
                                        class="btn btn-danger btn-sm">HAPUS</a></td>
                            </tr>
                        @empty
                            <td colspan="6" class="text-center">Tidak ada data...</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
