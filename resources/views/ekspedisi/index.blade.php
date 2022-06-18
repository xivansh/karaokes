@extends('layout.admin')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                </div>
            </div>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <form action="{{ route('ekspedisis.index') }}">
                                <div class="row d-flex justify-content-between ">
                                    <div class="col-3">
                                        <div class="input-group input-group-sm">
                                            <input type="text" name="filter[name]" class="form-control float-right"
                                                placeholder="Nama Pengirim" value="{{ request()->filter['name'] ?? '' }}">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-right">
                                        <a href="{{ route('ekspedisis.create') }}"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-plus"></i> TAMBAH
                                            DATA</a>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="card-body">
                            <table class="table mt-2">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Pengirim</th>
                                        <th scope="col">Jenis Barang</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($ekspedisis as $ekspedisi)
                                        <tr>
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>

                                            <td>
                                                {{ $ekspedisi->name }}
                                            </td>

                                            <td>
                                                {{ $ekspedisi->item_type }}
                                            </td>


                                            <td>
                                                <a href="{{ route('ekspedisis.show', $ekspedisi->id) }}"
                                                    class="btn btn-primary btn-sm">DETAIL</a>
                                                <a href="{{ route('ekspedisis.edit', $ekspedisi->id) }}"
                                                    class="btn btn-warning btn-sm">EDIT</a>
                                                 <a href="#" class="btn btn-danger btn-sm delete"
                                                    data-id="{{ $ekspedisi->id }}">DELETE</button>
                                                    </form>
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
        @if (Session::has('Successful'))
            toastr.success("{{ Session::get('Successful') }}")
        @endif
    </script>

    <script>
        $('.delete').click(function() {

            var userid = $(this).attr('data-id');

            swal({
                    title: "Yakin?",
                    text: "Kamu akan menghapus id : " + userid + " ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/deletes/" + userid + ""
                        swal("Sukses Terhapus !", {
                            icon: "success",
                        });
                    } else {
                        swal("Data Tidak Jadi Dihapus");
                    }
                });
        });
    </script>
@endpush
