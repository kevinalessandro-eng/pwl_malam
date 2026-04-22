<html>
    
    <form class="form" action="{{ action([App\Http\Controllers\MataKuliahController::class, 'update'], [$matakuliah->id]) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <table>
            <div class="form-group">
            <label>Jurusan ID :</label>
            <input type="text" name="jurusan_id" value="{{$matakuliah->jurusan_id}}" size="40">
            <br>
            </div>

            <div class="form-group">
            <label>Kode Mata Kuliah :</label>
            <input type="text" name="kode_mk" value="{{$matakuliah->kode_mk}}" size="40">
            <br>
            </div>

            <div class="form-group">
            <label>Nama Mata Kuliah :</label>
            <input type="text" name="nama_mk" value="{{$matakuliah->nama_mk}}" size="40">
            <br>
            </div>

            <div class="form-group">
            <label>SKS :</label>
            <input type="text" name="sks" value="{{$matakuliah->sks}}" size="40">
            <br>
            </div>

            <div class="form-group">
            <label>Dosen ID :</label>
            <input type="text" name="dosen_id" value="{{$matakuliah->dosen_id}}" size="40">
            <br>
            </div>

            <button type="submit" class="button">Add</button>
            <button type="reset" class="button">Clear</button>
        </table>
    </form>
</html>