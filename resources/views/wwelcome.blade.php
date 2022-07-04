@extends('layout.admin')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h4 class="mt-0"><em>Welcome {{ Auth::user()->name }}</em>
                        </h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content" style="text-align: center;">
            <div class="container-fluid">
                {{-- <img src="ekpe.png" alt="ekspedisi" width="500"> --}}
                <h3>PROJECT UTS DAN UAS, SEDERHANA</h3>
            </div>
        </section>
    </div>


    </div>
@endsection
