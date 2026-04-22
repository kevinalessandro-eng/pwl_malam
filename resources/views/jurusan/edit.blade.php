<html>
    
    <form class="form" action="{{ action([App\Http\Controllers\JurusanController::class, 'update'], [$jurusan->id]) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <table>
            <div class="form-group">
            <label>Nama Jurusan :</label>
            <input type="text" name="nama_jurusan" value="{{$jurusan->nama_jurusan}}" size="40">
            <br>
            </div>

            <div class="form-group">
            <label>Kode Jurusan :</label>
            <input type="text" name="kode_jurusan" value="{{$jurusan->kode_jurusan}}" size="40">
            <br>
            </div>

            <button type="submit" class="button">Add</button>
            <button type="reset" class="button">Clear</button>
        </table>
    </form>
</html>