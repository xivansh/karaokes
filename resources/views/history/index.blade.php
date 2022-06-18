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
                            {{-- <form action="{{ route('ekspedisis.index') }}"> --}}
                            <div class="row d-flex justify-content-between ">
                                <div class="col-3">
                                    {{-- <div class="input-group input-group-sm">
                                            <input type="text" name="filter[name]" class="form-control float-right"
                                                placeholder="Nama Pengirim" value="{{ request()->filter['name'] ?? '' }}">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div> --}}


                                </div>

                                </form>
                            </div>
                            <div class="card-body">
                                <table class="table mt-2">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Room</th>
                                            <th scope="col">Harga Room / Jam</th>
                                            <th scope="col">Lama Karaoke</th>
                                            <th scope="col">Total Harga</th>
                                            {{-- <th scope="col">Action</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($check_out as $value)
                                            <tr>
                                                <td>
                                                    {{ $loop->iteration }}
                                                </td>

                                                <td>
                                                    {{ $value->name }}
                                                </td>

                                                <td>
                                                    {{ $value->karaoke->name }}
                                                </td>
                                                <td>
                                                    @money($value->karaoke->price)
                                                </td>
                                                <td>
                                                    {{ $value->hours }} Jam
                                                </td>
                                                <td>
                                                    @money($value->karaoke->price * $value->hours)
                                                </td>

                                                {{-- <td>
                                                <a href="{{ route('karaokes.checkout.show', [$check_out->id, $karaoke->id]) }}"
                                                    class="btn btn-secondary btn-sm">DETAIL</a>
                                            </td> --}}
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
