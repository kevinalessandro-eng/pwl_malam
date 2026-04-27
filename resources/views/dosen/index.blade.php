<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <style>
        html, body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
        }
        
        .navbar {
            padding: 20px; 
        }
    </style>
</head>

<body>
    <nav class="navbar justify-content-end navbar-expand-lg bg-dark p-3 fs-4">
        <ul class="nav nav-underline">
            <li class="nav-item">
                <a class="nav-link link-light active" aria-current="page" href="{{ action([App\Http\Controllers\MahasiswaController::class, 'index']) }}">Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-light" href="{{ action([App\Http\Controllers\DosenController::class, 'index']) }}">Dosen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-light" href="{{ action([App\Http\Controllers\JurusanController::class, 'index']) }}">Jurusan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-light" href="{{ action([App\Http\Controllers\MataKuliahController::class, 'index']) }}">Mata Kuliah</a>
            </li>
        </ul>
    </nav>

    <h1 class="text-center p-3">Table Dosen</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <a href="{{ action([App\Http\Controllers\DosenController::class, 'create']) }}">
    <input type="button" class="btn btn-primary btn-lg" value="Create">
    </a>

    <br>
    <br>

    <table class="table table-dark table-hover" class="table table-hover" >
        <thead>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>NIP</th>
            <th>NIDN</th>
            <th>Pendidikan Terakhir</th>
            <th>Jurusan</th>
            <th>Tempat/Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Tanggal Pembuatan</th>
            <th></th>
        </thead>

        <tbody>
            @foreach ($dosen as $d)
            <tr>
                <td>{{$d->id}}</td> 
                <td>{{$d->fullname}}</td>
                <td>{{$d->NIP}}</td>
                <td>{{$d->NIDN}}</td>
                <td>{{$d->pendidikan_terakhir}}</td>
                <td>{{$d->jurusan_id}}</td>
                <td>{{$d->tempat_lahir}}, {{$d->tanggal_lahir}}</td>
                <td>{{$d->alamat}}</td>
                <td>{{$d->created_at}}</td>
                <td>
                    <a href="{{ action([App\Http\Controllers\DosenController::class, 'edit'], [$d->id]) }}">
                    <input type="button" class="btn btn-primary btn-lg" value="Edit">
                    </a>
                    <form class="form" action="{{ action([App\Http\Controllers\DosenController::class, 'destroy'], [$d->id]) }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" class="btn btn-secondary btn-lg" value="Delete">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

<footer class="bg-dark text-white pt-5 pb-4 mt-auto">
    <div class="container text-center text-md-start">
        <div class="row text-center text-md-start">
      
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-info">ITBSS</h5>
                <p>Sistem Informasi Akademik untuk pengelolaan data Mahasiswa, Dosen, Jurusan, dan Mata Kuliah.</p>
            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-info">Menu</h5>
                <p><a href="{{ action([App\Http\Controllers\MahasiswaController::class, 'index']) }}" class="text-white" style="text-decoration: none;">Mahasiswa</a></p>
                <p><a href="{{ action([App\Http\Controllers\DosenController::class, 'index']) }}" class="text-white" style="text-decoration: none;">Dosen</a></p>
                <p><a href="{{ action([App\Http\Controllers\JurusanController::class, 'index']) }}" class="text-white" style="text-decoration: none;">Jurusan</a></p>
                <p><a href="{{ action([App\Http\Controllers\MataKuliahController::class, 'index']) }}" class="text-white" style="text-decoration: none;">Mata Kuliah</a></p>
            </div>

            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-info">Kontak</h5>
                <p><i class="fas fa-home mr-3"></i> Pontianak, Indonesia</p>
                <p><i class="fas fa-envelope mr-3"></i> admin@itbss.ac.id</p>
            </div>
        </div>

        <hr class="mb-4">

        <div class="row align-items-center">
            <div class="col-md-7 col-lg-8">
            <p>© 2026 Copyright: <strong>Sistem Akademik</strong></p>
        </div>
        </div>
    </div>
</footer>

</html>