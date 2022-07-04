<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/
4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container text-center mt-4">
        <h1>Nilai Mahasiswa</h1>
        <div class="container text-center mt-3 pt-3 bg-white">
            <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
                {{ $nama }}
            </h1>

        </div>
        <div>


            @if (($nilai >= 0) & ($nilai < 50))
                <div class="alert alert-danger d-inline-block">
                    Maaf, Anda tidak lulus
                </div>
            @elseif(($nilai >= 50) & ($nilai <= 100))
                <div class="alert alert-warning d-inline-block">
                    Selamat, Anda lulus
                </div>
            @else
                <div class="alert alert-secondary d-inline-block">
                    Maaf, Anda telah di D O
                </div>
            @endif

            {{-- PEULANGAN --}}

            <br>
            @if (count($nilai) > 0)
                @foreach ($nilai as $val)
                    @if ($val >= 0 and $val < 50)
                        <div class="alert alert-danger d-inline-block">

                            {{ $val }}
                        </div>
                    @elseif ($val >= 50 and $val <= 100)
                        <div class="alert alert-success d-inline-block">
                            {{ $val }}
                        </div>
                    @else
                        <div class="alert alert-warning d-inline-block">
                            Format salah !
                        </div>
                    @endif
                @endforeach
            @else
                <div class="alert alert-info d-inline-block">
                    Tidak ada data bos
                </div>
            @endif
        </div>


        <div class="container text-center mt-3 pt-3 bg-white">
            <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nama }}</h1>
            <br>
            @foreach ($nilai as $val)
                @if ($val < 50)
                    @break
                @endif
                <div class="alert alert-success d-inline-block">
                    {{ $val }}
                </div>
            @endforeach
        </div>

        @php
          var_dump($nilai);  
        @endphp
        {{-- <div>
        Copyright © <?php echo date('Y'); ?> Duniailkom
    </div> --}}
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/
                                                                        popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/
                                                                        bootstrap.min.js"></script>
</body>

</html>
