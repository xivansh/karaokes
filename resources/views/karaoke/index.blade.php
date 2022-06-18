@extends('layout.admin')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6" style="text-align: right; font-family: serif">
                        <h4 class="mt-0">PILIH KELAS KARAOKE  
                        </h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>

                  @can('Karaoke - Membuat')
                    <div class="text-right">
                        <a href="{{ route("karaokes.create") }}"
                            class="btn btn-outline-success btn-sm"><i class="fas fa-plus"></i>TAMBAH KELAS KAMAR</a>
                    </div>                      
                  @endcan
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            @forelse($karaokes as $karaoke)
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-body">
                        <div class="card" style="width: 21rem; text-align: center">
                            <img src="{{ Storage::disk('public')->url($karaoke->image) }}" class="card-img-top" alt="...">
                            <h5 class="card-title"><strong>{{ $karaoke->name }}</strong></h5>
                            <p class="card-text">{{ $karaoke->desc }}</p>
                            <p>@money($karaoke->price) / Perjam</p>
                            <p>{{ $karaoke->status == 1 ? 'OPEN' : 'NOT OPEN' }}</p>
                            <a href="{{ route('karaokes.checkout.create', $karaoke->id) }}" class="btn btn-primary">Pesan Sekarang !</a>
                        </div>
                    </div>  
                </div>
            </div>
            @empty
            @endforelse

       
        </div>




    </div>
@endsection
