<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">Ubah Data Mahasiswa</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
    
    <form class="form" class="mb-3" action="{{ action([App\Http\Controllers\MahasiswaController::class, 'update'], [$mahasiswa->id]) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <table>
            <div class="form-group">
            <label>Nama Lengkap :</label>
            <input type="text" name="fullname" value="{{$mahasiswa->fullname}}" size="40">
            <br>
            </div>

            <div class="form-group">
            <label>Nomor Induk Mahasiswa :</label>
            <input type="text" name="NIM" value="{{$mahasiswa->NIM}}" size="40">
            <br>
            </div>

            <div class="form-group">
            <label>Nomor Induk Siswa Nasional :</label>
            <input type="text" name="NIDN" value="{{$mahasiswa->NIDN}}" size="40">
            <br>
            </div>

            <div class="form-group">
            <label>Tempat Lahir :</label>
            <input type="text" name="tempat_lahir" value="{{$mahasiswa->tempat_lahir}}" size="40">
            <br>
            </div>

            <div class="form-group">
            <label>Tanggal Lahir :</label>
            <input type="text" name="tanggal_lahir" value="{{$mahasiswa->tanggal_lahir}}" size="40">
            <br>
            </div>

            <div class="form-group">
            <label>Alamat :</label>
            <textarea type="text" name="alamat" size="40">{{$mahasiswa->alamat}}</textarea>
            <br>
            </div>

            <button type="submit" class="btn btn-primary btn-lg" class="button">Add</button>
            <button type="reset" class="btn btn-secondary btn-lg" class="button">Clear</button>
        </table>
    </form>
</html>