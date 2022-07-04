<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Hello !</div>
                    <div class="card-body">
                        <p>Login Success ....</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

</x-app-layout>
